<?php
/*
*友情链接管理
**/
class IndexControl extends CommonControl{
	private $_db;
	private $_category;
   public function __construct(){
    $this->_db = K("Link");	   

   }
   public function index(){
        $count = $this->_db->count();
        $page = new Page($count, 6);
        $data = $this->_db->limit($page->limit())->all();
        $this->assign(array('page' => $page->show(3), 'data' => $data));
        $this->display();
   }
  
   public function add(){
   	
    	if(IS_POST){
    		$this->_db->add_link();
    		$this->success('链接添加成功','index');
    	}else{
    		$this->cate= $this->_category;
    		$this->display();
    	}
}
    public function edit(){
    	if(IS_POST){
    		// p($_POST);exit();
    		$this->_db->edit_link();
    		$this->success("链接发表成功",'index');
    	}else{
            if ($id = Q('get.id', NULL, 'intval')) {
                $this->category = $this->_category;
                $this->field = $this->_db->find($id);
                $this->display();    		
    	   }
        }
    }

    public function del(){
    	$id = Q('get.id');
    	$this->_db->del_link($id);
    	$this->success('删除链接成功!','index');
    }    


}
?>