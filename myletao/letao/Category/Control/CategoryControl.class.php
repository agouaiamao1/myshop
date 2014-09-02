<?php
//栏目控制器
class CategoryControl extends CommonControl{
	//模型
	private $_db;
	//缓存栏目
	private $_category;
	public function __init(){
		$this->_db = K('Category');
		$this->_category = F('category');
	}
	//显示栏目列表
    function index(){
     $this->category = $this->_category;
     $this->display();
    }
    //添加商品栏目
    public function add(){
    	if(IS_POST){
			if($this->_db->add_category()){
				$this->success('添加成功！','index');
			}else{
				$this->error('添加失败！','index');
			}
    	}else{
    		$this->brand = $this->_db->table('brand')->all();
    		$this->data = F('goods_type');
    		//顶级栏目id
    		$pid = Q('pid',0,'intval');
    		$this->p_cname=$pid?$this->_db->where("cid=$pid")->getField('cname'):'顶级栏目';
			$this->pid=$pid;
			$this->display();
    	}
    }
    //编辑栏目
	public function edit(){
		if(IS_POST){
			// p($_POST);exit();
			if($this->_db->edit_category()){
				$this->success('编辑栏目成功！','index');
			}else{
				$this->error('编辑栏目失败！','index');				
			}
		}else{
			$cid = Q('cid');
			$field = $this->_db->find($cid);
			$brand = $this->_db->table('brand')->all();
			//当前栏目使用的品牌
			foreach($brand as $id=>$b){
					$brand[$id]['selected']=$this->_db->table('category_brand')->where("cid=$cid and bid={$b['bid']}")->find()?1:0;
			}
			//商品类型
			$field['goods_type'] = $this->_db->table('goods_type')->where("gid={$field['gid']}")->getField('gtname');
			foreach($this->_category as $n=>$c){
				$disabled='';
				//判断是否属于某个子类
				if(Data::isChild($this->_category,$c['cid'],$cid)){
					$disabled=' disabled="disabled"';
				}
				$this->_category[$n]['selected']=$field['pid']==$c['cid']?' selected="selected"':"";
				$this->_category[$n]['disabled']=$disabled;
			}
			//分配品牌数据
			$this->brand=$brand;
			// 分配栏目信息
			$this->field=$field;
			$this->category=$this->_category;
			$this->display();
		}
	}
    //ajax请求更改缓存
    public function update_cache(){
	   if($this->_db->update_cache()){
		   $this->ajax(array('state'=>1,'message'=>"缓存更新成功！"));
		}else{
		   $this->ajax(array('state'=>0,'message'=>"更新失败，请检查目录写权限"));
		}
	}

}
?>