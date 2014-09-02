<?php
class GoodsControl extends CommonControl{
		private $_db;
		//栏目缓存
		private $_category;
		public function __init(){
			$this->_db= K("Goods");
			$this->_category = F("category");
		}
		//显示商品列表
        public function index(){
			$count = $this->_db->count();
			$page= new Page($count,2);
			$this->page= $page->show();
			$this->goods =$this->_db->limit($page->limit())->all();
            $this->display();
        }

		//选择栏目分类
		public function select_cat(){
			$this->category = $this->_db->table('category')->where(array('pid'=>0))->all();
			$this->display();
		}
		//删除商品
		public function del(){
			p($_GET);exit();
		}
		//编辑商品
		public function edit(){
			if(IS_POST){
					if($this->_db->edit_goods()){
						$this->success("修改商品成功",'index');
					}
			}else{
				$gid= Q('gid');
				$field= $this->_db->find($gid);
				$this->field=$field;
				//分配栏目
				$this->assign_edit_category();
				//获得当前栏目属性
				$this->assign_goods_attr();
				//处理商品规格
				$this->assign_goods_spec();
				//分配商品品牌
				$this->assign_brand();
				//分配商品内容页图片
				$this->pic = M('goods_pic')->where("goods_gid=$gid")->field('pic_id,medium')->all();
				$this->display();
			}
		}
		/**
		 * 编辑商品时分配栏目
		 */
		private function assign_edit_category(){
			$cid= Q('cid');
			//当前栏目的类型id
			$gid=$this->_category[$cid]['gid'];
			$category =array();
			foreach($this->_category as $c){
				if($c['gid']==$gid){
					$c['disabled']=$c['cat_type']==2?' disabled="disabled" ':'';
					$category[]=$c;
				}
			}
			$this->category=$category;
		}
		//添加商品
		public function add(){
			if(IS_POST){
              if($this->_db->add_goods()){
				$this->success('添加商品成功','index');
			   }else{
			   	$this->error('添加失败');
			   }
			}else{
			 $cid = Q('get.cid',NULL,'trim,intval');
			 // p($cid);exit();
			 $this->cid = $cid;
			 $this->cname = $this->_db->table('category')->where("cid=$cid")->getField('cname');
			 // p($category);exit();
			 $this->assign_brand();
			 $this->assign_goods_attr();
			 //处理商品规格
			 $this->assign_goods_spec();
			 $this->display();
		}
	}
     //分配商品规格
	    public function assign_goods_spec(){
	    	$cid = Q('get.cid',NULL,'trim,intval');
	    	$db = M('category');
	    	//商品类型
	    	$gid = $db->where("cid=$cid")->getField('gid');
	    	//获得规格
	    	$attr_type = $db->table('attr_class')->where("gid=$gid and is_spec=1")->all();
	    	if(!$attr_type)return;
	    	//获得属性值
	    	foreach ($attr_type as $n => $t) {
	    		$t['attr'] = $db->table('attr_value')->where("class_acid={$t['acid']}")->all();
	    		$attr_type[$n] = $t;
	    	}
	    	//设置视图中的HTML
	    	$html="<table class='table1 hd-form'><tr>";
	    	//添加表格头部
	    	foreach ($attr_type as $a) {
	    		$html.="<td>{$a['attr_name']}</td>";
	    	}
	    	$html.="<td>库存</td><td>价格</td><td>货号</td><td></td>";
	    	$html.="</tr><tr class='jjj'>";
	    	foreach ($attr_type as $n => $t) {
				$html.="<td class='kkk'><select name='st_attr[]'>";
				foreach($t['attr'] as $spec){
				     $html.="
				     <option av_id='{$spec['avid']}' value='{$spec['avid']}'>{$spec['attrvalue']}</option>
				     ";
				}
				$html.="</select></td>";
	    	}
			$html.="
			<td><input type='text' name='st_stock[]' class='stock'/></td>
			<td><input type='text' name='st_price[]' class='price'/></td>
			<td><input type='text' name='good_num[]' class='goodnum'/></td>
			<td><input type='button' value='添加' id='attr_add' class='btn1' onclick='add_spec()'></td>";
			$html.="</tr></table>";
			$this->spec=$html;
	    }
	 
//分配品牌
	   public function assign_brand(){
	   	//通过栏目获取父类id
	   	  $cid=Q('cid');
	   	  $cid = $this->_db->table('category')->where("cid=$cid")->getField('pid');
	   	   // p($cid);exit();
		  $pre =C("DB_PREFIX");
		  $sql ="SELECT * FROM {$pre}category_brand AS bc JOIN 
		  {$pre}brand AS b ON bc.bid=b.bid WHERE cid={$cid}";
		  $brand = $this->_db->query($sql);
		  $this->brand=$brand;
	   }

//分配商品属性
	   private function assign_goods_attr(){
          $db = M('category');
          $cid = Q('cid');
          //获取他的商品栏目属性
          $gid = $db->where("cid=$cid")->getField('gid');
          $attr_type=$db->table('attr_class')->where("gid=$gid and is_spec=0")->all();
          if(!$attr_type)return ;
          foreach ($attr_type as $k => $v) {
          	//组合属性值和属性
          	$v['attr'] = M('attr_value')->where("class_acid = {$v['acid']}")->all();
          	$attr_type[$k] = $v;
          }
          // p($attr_type);exit();
           //设置视图中属性html
          foreach ($attr_type as $n => $t) {
          	$show = $t['show_type'];//获取属性的显示类型
          	$html='';
          	$html.="<dt>{$t['attr_name']}</dt>";
          	$html.="<dd>";
				//文本框
				if($t['show_type']==1){
					    $value=$t['attr'][0]['attrvalue'];
					    $aviid = $t['attr'][0]['avid'];
					    //组合数据  属性id_显示类型
					    $name = 'attr['.$t['acid'].'_'.$show.']';
						$html.="<label><input type='text' av_id='{$aviid}' name='$name' value='$value' class='w200'/></label>";
				}else{
						//设置属性值
						if($show==4){
                            $name = 'attr['.$t['acid'].'_'.$show.']';
							$html.="<select name='$name'>";
						}
						foreach($t['attr'] as $i=>$v){
							$av_id = $v['avid'];
							switch($show){
								case 2:
								//单选框name:属性id-显示类型    value:属性值id-属性值
								 $name = 'attr['.$t['acid'].'_'.$show.']';
								 $value = $v['avid'].'_'.$v['attrvalue']; 
								 $html.="<label>
									<input type='radio' av_id='{$av_id}' name='$name' value='$value'/> {$v['attrvalue']}
									</label>";
							    break;
							    case 3:
							   //复选框
								  $name='attr['.$t['acid'].'_'.$show.']';
					  		      $value=$v['avid'].'_'.$v['attrvalue'];
								  $html.="<label>
									<input type='checkbox' av_id='{$av_id}' name='$name' value='$value' /> {$v['attrvalue']}
									</label>";
								break;
							   case 4:
							   //下拉列表框

							     $value = $v['avid'].'_'.$v['attrvalue'];			//表单value 属性值id——属性值					  
								 $html.="<option av_id='{$av_id}' value='$value'> {$v['attrvalue']}</option>";
							}
						}
					   if($t['show_type']==4){
							$html.="</select>";
						}
				}
				$html.="</dd>";
				$attr_type[$n]['html']=$html;

          }
          $this->attr=$attr_type;
	   }

//ajax请求子分类
	public function get_cat(){
		if(!IS_AJAX) $this->error('页面不存在');
		   $cid = Q('post.cid', NULL,'intval');
		   $cate = $this->_db->table('category')->where(array('pid'=>$cid))->select();
		   if($cate){
			 echo json_encode($cate);
		   } else {
			 echo 0;
		   }
		  exit();
	   }

//ajax修改商品时，获当前商品的所有属性信息（不包括规格属性)
	public function get_goods_attr(){
			//商品id
			$gid = Q('gid',null,'intval');
			$db=M();
			$sql = "SELECT av.avid,ga.attr_value,a.show_type FROM mt_goods_attr as ga JOIN mt_attr_value AS av 
			 ON ga.avid=av.avid JOIN mt_attr_class AS a ON av.class_acid=a.acid 
			 WHERE a.is_spec=0";
			 $attr =$db->query($sql);
			 echo json_encode($attr);
			 exit();
		}

//ajax修改商品时，获当前商品的所有库存信息（库存是由商品规格构成)

	public function get_goods_stock(){
			//商品id
			$gid = Q('gid',null,'intval');
			$db =M();
			$sql ="SELECT * FROM mt_stock AS g 
			WHERE gid=$gid ORDER BY g.stid ASC";
			$stock=$db->query($sql);
			foreach($stock as $n=>$s){
				$attr= $db->table('stock_attr')->where("stid={$s['stid']}")->field('avid')->all();
				$_tmp=array();
				foreach($attr as $a){
					$_tmp[]=$a['avid'];
				}
				$stock[$n]['attr']=$_tmp;
			}
			 echo json_encode($stock);
			 exit();
		}
//编辑商品时删除内容页图片
	public function del_pic(){
		if($pic_id =Q("pic_id")){
			$field = M('goods_pic')->find($pic_id);
			is_file($field['big']) and unlink($field['big']);
			is_file($field['medium']) and unlink($field['medium']);
			is_file($field['small']) and unlink($field['small']);
			if(M("goods_pic")->del($pic_id))
				$this->_ajax(1,'删除成功');
			}
		}

}