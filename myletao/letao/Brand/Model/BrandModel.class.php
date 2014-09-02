<?php
//品牌模型控制器
class BrandModel extends Model{
	//默认操作表
	public $table='brand';
	//添加品牌
	public function add_brand(){
		if($this->create()){
			$upload= new Upload('upload/brand');
			$file=$upload->upload();
			// p($file);exit();
			if(!empty($file)){
				$this->data['logo']=$file[0]['path'];
			}
			return $this->add();
		}
	}

	//修改品牌
	public function edit_brand(){
		$bid=Q('bid');
		if($bid && $this->create()){
			$upload= new Upload('upload/brand');
			$file=$upload->upload();
			if(!empty($file)){
				//删除旧的LOGO文件
				$logo = $this->where('bid='.$bid)->getField('logo');
				is_file($logo) and unlink($logo);
				$this->data['logo']=$file[0]['path'];
			}
			return $this->save();
		}
	}
}