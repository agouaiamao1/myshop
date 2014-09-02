<?php
class LoginControl extends Control{
	
  //显示登录界面
	public function index(){
	   $this->display();
	}
    
  // 获取验证码
  public function code(){
		$code = new code();
		$code->show();
	}
  
  //获取登录信息
  public function login(){
    if(!IS_POST) $this->error('页面不存在');
    
    if($data = Q('post.')){
      $username = $data['user'];
        $code = strtoupper($data['yzm']);
       if($code != $_SESSION['code']){
        $this->error('验证码错误！');
    }
      
      $db = M("admin");
      $user = $db->where(array("admin"=>$username))->field('password,aid')->find();
      $passwd = Q('post.pwd',NULL,"md5");
     if($passwd != $user['password']) {
      $this->error('用户名或者密码错误！');
    }
    $dt = array(
      'logintime' => time(),
      'loginip'   => ip::getClientIp(),
      ); 
      $db->where(array('admin'=>$username))->save($dt);
    // 记录session值
    session('aname', $username);
    session('aid', $user['aid']);

    $this->success('登录成功！正在为您跳转.....', 'Admin/Index/index');
    }else{
       $this->error("发生错误了:(");
    }
  }


   //退出
  public function out(){
    session_unset();
    session_destroy();
    $this->success('退出成功！','Login/index');
  }

}