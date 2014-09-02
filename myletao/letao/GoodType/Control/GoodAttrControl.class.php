<?php
//属性控制器
class GoodAttrControl extends CommonControl{
   
   private $_db;
   //商品类型id
   private $_acid;
   //构造函数
   public function __init(){
   	 $this->_acid = Q('get.gid');
   	 $this->_db = K("GoodAttr");
   	 $this->gid = $this->_acid;
   }
   //显示属性名列表
   public function index(){
   	 // $this->attr = $this->_db->all();
    $attr = $this->_db->all();
     $aa = array(
       '1'=>'文本框',
       '2'=>'单选框',
       '3'=>'复选框',
       '4'=>'下拉菜单'
      );
    foreach ($attr as $k=>$v) {
      $num = $v['show_type'];
      $attr[$k]['type'] = $aa[$num];
    }
    $this->attr= $attr;
    $this->display();
   }
   //添加属性值
   public function attr_add(){
    if(IS_POST){
      if($this->_db->add_attr_value()){
        $this->success('添加成功!','Index/index');
      }
    }else{
    	$this->display('add.html');
    }
   }
   
   //编辑属性类型
   public function attr_edit(){
    if(IS_POST){
      // p($_POST);exit();
      if($this->_db->attr_edit()){
          $this->success('修改成功!','index');
        }
    }else{
      $acid = Q('get.acid',NULL,'trim');
      $this->data =$this->_db->find($acid);
      $this->attr = $this->_db->table('attr_value')->where(array('class_acid'=>$acid))->all();
      $this->display('edit.html');
    }
   }

 
 //删除数据
   public function attr_del(){
    $acid = Q('get.acid');
    $data = $this->_db->table('attr_value')->where(array('class_acid'=>$acid))->find('avid');
    if($data){
      echo 1;
    }
    exit();
   }
}