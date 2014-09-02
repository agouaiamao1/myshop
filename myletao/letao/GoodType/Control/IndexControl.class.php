<?php
//商品类型控制器
class IndexControl extends CommonControl{
	protected $_db;
	public $_goods_type;
	public $_gid;
	public function __init(){
	  $this->_db = K("GoodsType");
    $this->_goods_type=F('goods_type');//商品类型缓存
	}
	//显示商品类型
    function index(){
       // $this->_db->update_cache();
       $this->type = $this->_goods_type;
       $this->display();
    }
    //添加商品类型
    public function add(){
    	if(IS_POST){
    		//添加商品类型
    		if($this->_db->add_goodsType()){
    			$this->success("类型添加成功！:)","index");
    		}else{
    			$this->error("类型添加失败!:(");
    		}
    	}else{
    		$this->display("add.html");
    	}
    }
    //修改商品类型
   public function type_edit(){
       if(IS_POST){
        $data = Q('post.');
   	    if($this->_db->save($data))
         $this->success('商品类型修改成功','index');  
       }else{
        $this->_gid = Q('get.gid');
	      $this->old_type = $this->_db->where(array('gid'=>$this->_gid))->findall();
       	$this->display("edit.html");
       }
    }
    
    //删除商品类型
   public function type_del(){
    // p($_GET);exit();
    $cid = Q('get.gid');
    // if($this->_db->checkSon($cid)){
    //   $this->error('请先删除子分类');
    // }
    if($this->_db->deltype($cid)){
      $this->success('删除成功','index');
    }else{
      $this->error('删除失败!');
    }
  }
    //验证商品类型是否存在
    public function check_typename(){
        $gtname=Q('gtname',null,'trim');
        $state = $this->_db->where("gtname='$gtname'")->find()?0:1;
        $this->ajax($state);
    }
   //更新栏目缓存
    public function update_cache(){
        $this->_db->update_cache();
        $this->ajax(array('state'=>1,'message'=>"缓存更新成功！"));
    }
  }
?>