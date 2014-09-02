<?php
//登陆页面控制器

class LoginControl extends AuthControl{

    function login(){
    if(IS_POST){	
    	// p(Q('post.'));
      $user = Q('post.loginuser','NULL','trim');
      $pwd = Q('post.loginpwd','NULL','md5');
      $all = M('user')->where(array('username'=>$user))->find();
      
      if(empty($all)){
        $this->error("该用户不存在!!");
      }
      if($pwd!=$all['password']){
        $this->error("用户名或密码错误!!");
      }
      if($all["lock"]==0){
        $this->error("用户被锁定！请联系管理员！");exit();
      }
      session("name",$user);
      session("uid",$all['uid']);
      $this->success("登陆成功！！跳转中。。。。。","Index/index");

    } else{
       $this->display("login.html");
    }
  }
//用户退出

  public function out(){
    unset($_SESSION);
    session_destroy();
    $this->success("退出成功");
  }
//ajax请求用户名是否已存在
    public function register(){


      if(IS_POST){
       $user = Q('post.user',NULL,'trim');
       $fen = M("user");
       $res_= $fen->where(array('username'=>$user))->all();
      
      if ($res_) {
         $arr['success'] = 0;

       }else {
          $arr['success'] = 1;
        }
         echo json_encode($arr);
         exit;//需要关掉debug
      }else{
        $this->display("register.html");
      }
    }
   
 //用户注册
   public function reg(){
   	if(IS_POST){
    $data = array();

    $data['username'] = Q('post.username',NULL,'trim,htmlspecialchars');
    $data['password'] = Q('post.pwd',NULL,'trim,md5');
    $data['regtime'] = time();
     if(M('user')->add($data)){
      $this->success("chenggong");
    }
  }
}


}
?>