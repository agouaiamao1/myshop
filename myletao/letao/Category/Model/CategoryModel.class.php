<?php
//栏目模型控制器
class CategoryModel extends Model{
	public $table = 'Category';
	//添加栏目
	public function add_category(){
		if($this->create()){
			$cid = $this->add();
			//向中间表添加数据（多对多品牌栏目表）
			if(!empty($_POST['bid'])){
				foreach ($_POST['bid'] as $bid) {
			       $data = array('bid'=>$bid,'cid'=>$cid);
			       $this->table('category_brand')->add($data);
				}
			}
		}
		return true;
	}
	//编辑栏目
	public function edit_category(){
		$cid=Q('cid');
		if($this->create()){
			if($this->save()){	
				$this->table('category_brand')->del("cid=$cid");//删除栏目原有品牌
				//中间表brand_category
				if(!empty($_POST['bid'])){
					foreach($_POST['bid'] as $bid){
						$data=array('bid'=>$bid,'cid'=>$cid);
						$this->table('category_brand')->add($data);
					}
				}
				return true;
			}
		}
	}

   //获取树状数据  更新缓存
	public function update_cache(){
		$data = Data::tree($this->all(),'cname');
		return F('category',$data);
	}
	//魔术方法
	public function __after_insert($data){
		$this->update_cache();
	}
	public function __after_update($data){
		$this->update_cache();
	}
	public function __after_delete($data){
		$this->update_cache();
	}
}