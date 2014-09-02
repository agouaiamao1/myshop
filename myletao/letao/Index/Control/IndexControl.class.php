<?php
//测试控制器类
class IndexControl extends AuthControl{

    public function index(){
      $this->display();
    }
    public function cate_spec(){

    }
    //商品列表
    public function category(){
    	$cid = Q("cid");
    	//重定义url  cid/3=>s/3-0-0-0.html
    	if(Q('cid')){
    		$this->format_url();
    	}
    	//分配商品属性(商品检索)
    	$this->assign_attr();
   		//分配当前页商品列表
		$this->assign_goods();
    	$this->display('goodlist.html');
    }
//分配当前页商品列表
    public function assign_goods(){
    	$param =explode('-', Q('s'));
    	$cid = array_shift($param);
    	$cid = intval($cid);

    	$avid = array();
    	foreach ($param as $id) {
    		if($id>0){
    			$avid[] = $id;
    		}
    	}
    	$count = intval(count($avid));
    	//没有选择属性时获取所有商品
    	$db = M('goods');
    	$page = new Page($db->count(),20);
    	$this->page = $page->show();
    	if (empty($avid)) {
		//获得商品
           $sql ="SELECT s.stid,g.gname,s.st_price,g.pic,g.price,g.keywords FROM mt_goods AS g
           JOIN mt_stock AS s ON g.gid=s.gid WHERE g.cid=$cid GROUP BY g.gid
           LIMIT ".$page->limit(true);
			$goods=$db->query($sql);
		    $this->goods=$goods;
    	}else{
		//获得商品
    		$where = '';
    		foreach ($avid as $k => $v) {
    			if(intval($k)+1 == $count){
    			$where .= ' g.avid='.$v;	
    			}else{
    			$where .= ' g.avid='.$v.' and';
    		   }
    		}
    		// var_dump($where);exit();
           $sql ="SELECT o.stid,s.gname,o.st_price,s.pic,s.price,s.keywords FROM mt_goods_attr AS g
           JOIN mt_goods AS s ON g.gid=s.gid JOIN mt_stock AS o ON o.gid=s.gid WHERE $where GROUP BY s.gid
           LIMIT ".$page->limit(true);
			$goods=$db->query($sql);
		    $this->goods=$goods;
    	}

    }
//非配商品属性WHERE g.cid={$cid} GROUP BY g.gid LIMIT ".$page->limit(true);
    public function assign_attr(){
       $param = explode('-', Q('s'));
       //获得栏目cid
       $cid = array_shift($param);//获得栏目cid
       $tid = $this->_category[$cid]['gid'];  //获得商品类型
       $db =M();
       //获得商品类型的所有属性名字
       $sql = "SELECT * FROM mt_attr_class AS a
		WHERE gid=$tid ORDER BY a.acid ASC";
		$attr = $db->query($sql);
		//查找属性的所有值
		foreach ($attr as $n => $a) {
	     $sql ="SELECT av.avid,av.attrvalue FROM mt_attr_value AS av
			JOIN mt_goods_attr AS ga ON av.avid=ga.avid
			WHERE class_acid={$a['acid']} GROUP BY av.avid" ;
			$attr_value=$db->query($sql);
			$attr[$n]['attr_value']=$attr_value;
		}
		$this->attr=$attr;
    }
//点击栏目
// 根据cid获得所有栏目的属性数量(什么时候不获得)
    private function format_url(){
      $cid = Q('cid');
      //栏目所属商品类型
      $tid = $this->_category[$cid]['gid'];
      $db=M('attr_class');
      //获得商品类型的属性数量
      $count = $db->count();
      $param="s={$cid}-";
      for($i=0;$i<$count;$i++){
      	$param.='0-';
      }
      $param = substr($param,0,-1);
	  $url = U('category',$param);
	  go($url); 
    }
}
?>