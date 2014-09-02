<?php
//显示后台首页
class IndexControl extends CommonControl{
	//显示后台主页面
    function index(){
    	$this->assign('time',time());
        $this->display();
    }
   //显示后台欢迎页面
    function welcome(){
        $this->admin = M("admin")->findall();
        $this->assign('server',$_SERVER);
        $this->display();
    }
}
?>