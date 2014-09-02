<?php
//商品属性模型控制器
class GoodAttrModel extends Model{
//默认操作表
	public $table='attr_class';
//添加属性
	public function add_attr_value(){
		if($this->create()){
			//向属性表（hd_g_attr）添加记录
			if($aid = $this->add()){
				//向属性值表（hd_g_attr_value)添加记录
				switch($_POST['show_type']){
					//显示类型为文本的属性
					case 1:
						$data=array(
							'class_acid'=>$aid,
							'attrvalue'=>$_POST['attr_value']
						);
					 return $this->table('attr_value')->add($data);
					//文本框
					break;
					default:
					//单选、复选、下拉列表
					foreach($_POST['attr_value'] as $a){
						if(empty($a))continue;
						$data=array(
							'class_acid'=>$aid,
							'attrvalue'=>$a
						);
					  $this->table('attr_value')->add($data);
					}
					return true;
					break;
				}
			}
		}
	}
//编辑属性
	public function attr_edit(){
      $acid = Q('acid');
		if($this->create()){
			if($this->save()){
				//删除属性表原有数据
			 $this->table('attr_value')->del("class_acid=$acid");
			switch ($_POST['show_type']) {
				case '1':
			      $attrvalue =$_POST['attr_value'];
				  $data=array(
						'avid'=>key($attrvalue),
						'attrvalue'=>current($attrvalue),
						'class_acid'=>$acid
						);
				  $this->table('attr_value')->add($data);
					break;
				
				default:
					foreach ($_POST['attr_value'] as $id => $v) {
					  if(empty($v)) continue;//过滤掉空值
                        if(is_numeric($id)){
                        	$data=array(
                               'attrvalue'=>$v,
                               'class_acid'=>$_POST['acid']
                        	);
                        }else{
                        	$_tmp = explode('_',$id);
                        	$avid = array_pop($_tmp);
                        	$data = array(
                              'class_acid'=>$acid,
                              'avid'=>$avid,
                              'attrvalue'=>$v
                        	);
                        }
                        $this->table('attr_value')->add($data);
					}
					break;
			}
			return true;
			}
		}
	}
}