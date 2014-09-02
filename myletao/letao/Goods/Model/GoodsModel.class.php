<?php
class GoodsModel extends Model{
	//操作表
	public $table= 'goods';
	//自动处理
	public $auto=array(
	    array('addtime','strtotime','function',1,3)
	);
	/**
	*添加商品
	*/
	public function add_goods(){
		// p($_POST);exit();
       if($this->create()){
			 $upload= new Upload('upload/pic/'.date("Y/m/d"));
			 $file=$upload->upload('pic'); 
			 // p($file);exit();
             $this->data['pic'] = $file[0]['path'];
             $pic = pathinfo($file[0]['path']);
             $this->data['list_pic'] = $pic['dirname'].'/'.$pic['filename']."_list.".$pic['extension'];
             $this->data['index_pic'] = $pic['dirname'].'/'.$pic['filename']."_index.".$pic['extension'];
             $img = new Image();
             //生成列表页和首页显示图片 
             $img->thumb($file[0]['path'],$pic['filename']."_index.".$pic['extension'],60,40);
             $img->thumb($file[0]['path'],$pic['filename']."_list.".$pic['extension'],40,27);

       	  if($gid = $this->add()){
       	  	$this->update_stock($gid,$this->get_stock(),Q('post.cid',NULL,'trim,intval'));  //修改商品库存		
       	  	
       	  	$this->update_good_attr($gid,Q('post.cid',NULL,'trim,intval'));	//修改商品属性
       	  			
			$this->update_goods_content_pic($gid);   //商品内容页图片处理
       	  }
       }
       return true;
	}
	/**
	*编辑商品
	*/
	public function edit_goods(){
		 // $gid = 1;
		 // p($this->get_stock()); 
		 // // $this->update_good_attr($gid,Q('cid'));
		 // exit();
		if($this->create()){
//编辑时，如果上传新图时，删除旧的图片
			if(isset($_POST['gid'])){
				$gid = Q('gid');
				if(!empty($_FILES['goods_pic']['name'])){
					$goods = M('goods')->where("gid=$gid")->find();
					is_file($goods['index_pic']) and unlink($goods['index_pic']);
					is_file($goods['list_pic']) and unlink($goods['list_pic']);
					is_file($goods['pic']) and unlink($goods['pic']);
			 $upload= new Upload('upload/pic/'.date("Y/m/d"));
			 $file=$upload->upload('pic'); 
             $picc = $file[0]['path'];
             $pic = pathinfo($file[0]['path']);
             $list_pic= $pic['dirname'].'/'.$pic['filename']."_list.".$pic['extension'];
             $index_pic= $pic['dirname'].'/'.$pic['filename']."_index.".$pic['extension'];
             $data = array(
             	'pic' =>$picc,
             	'list_pic' =>$list_pic,
             	'index_pic' =>$index_pic,
             	'gid' =>$gid, 
             );
             $img = new Image();
             //生成列表页和首页显示图片 
             $img->thumb($file[0]['path'],$pic['filename']."_index.".$pic['extension'],60,40);
             $img->thumb($file[0]['path'],$pic['filename']."_list.".$pic['extension'],40,27);
             M('goods')->save($data);
             	}
			}
		    if($this->save()){
					$gid= Q('gid');
					//修改商品属性:)
					$this->update_good_attr($gid,Q('cid'));
					
					//修改商品库存
					$this->update_stock($gid,$this->get_stock(),Q('post.cid',NULL,'trim,intval'));

					//商品内容页图片处理:)
					$this->update_goods_content_pic($gid);
					return true;
				}
		}
	}
	/**
	*商品内容页图片处理
	*/
	private function update_goods_content_pic($goods_gid){
			$upload= new Upload('upload/goodpic/'.date("Y/m/d"));
			$files= $upload->upload('good_pic');
			// p($files);exit();
			if(!$files)return;
			$db= M("goods_pic");
			$img = new Image();
			foreach($files as $f){
				$_name= $f['filename'];
				//裁切中图
				$medium=$img->thumb($f['path'],$_name.'_350x350.'.$f['ext'],175,117);
				$small=$img->thumb($f['path'],$_name.'_50x50.'.$f['ext'],40,27);
				$data=array();
				$data['goods_gid']=$goods_gid;//商品id
				$data['big']=$f['path'];//上传目录
				$data['medium']=$medium;
				$data['small']=$small;
				$db->add($data);
			}
			return true;
	}

	/*
	*更新库存
	*/
	private function update_stock($gid,$da,$cid){

		$db = M('stock');
		$data = array(
           'gid'=>$gid
		); 
		//删除商品库存
		$db->where("gid=$gid")->del();
		M('stock_attr')->where("gid=$gid")->del();
		$del_spec = M('goods_attr')->where("gid={$gid}")->all();
		if($del_spec){
		foreach ($del_spec as $k => $va) {
            $v = $va['avid'];
			$acid = M('attr_value')->where("avid={$v}")->getField('class_acid');
			$pec = M('attr_class')->where("acid={$acid}")->getField('is_spec');
			if($pec){
			$gaid = M('goods_attr')->where("avid={$v}")->getField('gaid');
			M('goods_attr')->del("gaid=$gaid");	
			}
		}
	}
		$data=array();
		$data['gid'] = $gid;
		foreach ($da as $k => $v) {
			$data['st_price'] = $v['st_price'];
			$data['st_stock'] = $v['st_stock'];
			$data['good_num'] = $v['good_num'];
			//编辑商品时，如果有库存id，为修改的库存添加库存id
			if(isset($v['stid'])){
				$data['stid']=$v['stid'];
			}
			$stid = $db->replace($data);
			
			
			foreach ($v['st_attr'] as $va) {
				$data['avid']= $va;
				$data["stid"]=$stid;
				$data['cid'] = $cid;
				$data['gid'] = $gid;
				$db->table('stock_attr')->add($data);
			
				$attr_value = M('attr_value')->where("avid={$va}")->getField('attrvalue');
				$data=array(
						'cid'=>$cid,//栏目cid
						'gid'=>$gid,//商品gid
						'avid'=>$va,//属性值id
						'attr_value'=>$attr_value,//属性值
					);
					M('goods_attr')->add($data);
			}

		
		}
		return true;
	}

	 //tianjia商品属性$gid [商品id]$cid [栏目id]

	private function update_good_attr($gid,$cid){
		  if(empty($_POST['attr']))return;
		  $attr=$_POST['attr'];
		  //商品属性关联表
		  $db = M('goods_attr'); 
		  //删除原有数据》》》》
		  $db->del("gid=$gid");
		  foreach ($attr as $name => $value) {
		    $data = array(
              'gid'=>$gid,
              'cid'=>$cid  
		    );
		   // -name:属性id-显示类型   	value:属性值id-属性值
		   // ---name:属性值id-显示类型 	value:属性值
		   $info = explode('_', $name);
		   switch ($info[1]) {
		   	case 1:
		   		$data['avid'] =$info[0];
		   		$data['attr_value']=$value;
		   		$db->add($data);
		   		break;
		   	
		   	default:
		  		$d=explode('_',$value);
		  		$data['avid']=$d[0];
		  		$data['attr_value']=$d[1];
		  		$db->add($data);		   		
		   		break;
		   }
		}    
	}

//获取库存数据
	private function get_stock(){
		$data = array();
		$c = array_chunk(Q('post.st_attr'),2);
		foreach ($c as $k => $v) {
			$data[$k]["st_attr"] = $v;
		}
		$e = Q('post.st_stock');
		foreach ($e as $k => $v) {
			$data[$k]["st_stock"] = $v;
		}
		$d= Q('post.st_price');
		foreach ($d as $k => $va) {
			$data[$k]["st_price"] = $va;
        }
		$f= Q('post.good_num');
		foreach ($f as $k => $v) {
			$data[$k]["good_num"] = $v;
		}
		if($g = Q('post.goods_stock')){
		foreach ($g as $k => $v) {
			$data[$k]["stid"] = $v;
		  }
		}
		$allattr = array();
		foreach ($data as $k => $v) {
       	 if(!empty($v['st_stock']) && !empty($v['st_price']) && !empty($v['good_num']) && !empty($v['st_attr'][0]) && !empty($v['st_attr'][1])){
           $allattr[]=$v;
       	 }			
		}	
		return $allattr;  
	}
}