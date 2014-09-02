<?php
//商品类型处理Model
class GoodsTypeModel extends Model{
	//默认处理表
	public $table='goods_type';
	//自动验证
	public $validate=array(
	//对商品类型名验证
		array('gtname','nonull','商品类型名不能为空',2,3)
	);
	// 添加商品类型
	public function add_goodsType(){
		if($this->create()){
			return $this->add();
		}
	}
   //删除栏目分类
   public function deltype($cid){
		return $this->where(array('gid'=>$cid))->del();
	}
	//更新缓存
	public function update_cache(){
		return F('goods_type',$this->all(),CACHE_PATH);
	}
	public function __after_update($data){
		$this->update_cache();
	}
	public function __after_insert($data){
		$this->update_cache();
	}
	public function __after_delete($data){
		$this->update_cache();
	}
}
















