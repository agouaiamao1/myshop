<?php
//公用控制器
class CommonControl extends Control{
	//如果没有登录
	public function __init(){

       if(!isset($_SESSION['aname'])){
       	// go("Login/index");
       	   echo "<script>
                    top.location.href='".U('Login/Login/index')."';
                 </script>";
            exit;
       }
	}
    //Ajax异步返回
  protected function _ajax($state,$message){
    $this->ajax(array('state'=>$state,'message'=>$message));
  }

} 

?>