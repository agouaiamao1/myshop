<?php
// 商品品牌控制器
class BrandControl extends CommonControl{
	//模型
	private $_db;
	public function __init(){
      $this->_db = K('Brand');
	}
	//显示品牌列表
	public function index(){
	  $this->brand = $this->_db->all();
      $this->display();
	}
	//添加品牌
	public function add(){
		if(IS_POST){
            if($this->_db->add_brand()){
            	$this->success('添加成功','index');
            }else{
            	$this->error('出错了:(');
            }
		}else{
			$this->display();
		}
	}

   //编辑页面
	public function edit(){
		if(IS_POST){
			if($this->_db->edit_brand()){
				$this->success('修改成功','index');
			}else{
				echo $this->_db->error;
			}
		}else{
			$this->field=  $this->_db->find(Q('bid'));
			$this->display();

		}
	}
}