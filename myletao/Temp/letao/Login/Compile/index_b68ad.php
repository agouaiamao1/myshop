<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统登录</title>
</head>
<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Login/Login/index';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Login';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Login/Login';
		METH = 'http://127.0.0.1/MyShop/index.php/Login/Login/index';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Login/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Login/Tpl/Login';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Login/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/admin';
</script>
<script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Login/Tpl/Login/js/login.js"></script>
<link type="text/css"  href="http://127.0.0.1/MyShop/./myletao/letao/Login/Tpl/Login/css/demo.css" rel="stylesheet"media="all" />
<body>
<div class="header">
  <h1 class="headerLogo"><img src="http://127.0.0.1/MyShop/./myletao/letao/Login/Tpl/Login/images/abin.png"></h1>
	<div class="headerNav">
	</div>
</div>
<div class="banner">

<div class="login-aside">
  <div id="o-box-up"></div>
  <div id="o-box-down"  style="table-layout:fixed;">
    <!-- 错误信息提示 -->
   <span class="error-box" id="hd_code" style="color:#f60;font-size:14px"></span>  
  

  <form name="htlogin" class="registerform" method="post" action="<?php echo U('Login/login');?>">
   
   <div class="fm-item">
	    <label for="logonId" class="form-label">用户名：</label>
	    <input type="text" name="user" maxlength="100" id="username" class="i-text"> 
     <!-- 表单填写提示 -->   
      <div class="ui-form-explain"></div>
   </div>
  
   <div class="fm-item">
	    <label for="logonId" class="form-label">登陆密码：</label>
	    <input type="password" name="pwd" maxlength="100" id="password" class="i-text"> 
     <!-- 表单填写提示 -->
      <div class="ui-form-explain"></div>
   </div>
  
   <div class="fm-item pos-r">
	   <label for="logonId" class="form-label">验证码</label>
	   <input type="text" name='yzm' maxlength="100" id="yzm" class="i-text yzm">
     <!-- 表单填写提示 -->
     <div class="ui-form-explain"><img src="<?php echo U('Login/code');?>" class="yzm-img" /></div>
   </div>
  
   <div class="fm-item">
	   <label for="logonId" class="form-label"></label>
	   <input type="submit" id="send-btn" class="btn-login" value=""> 
   </div>
  
  </form>
  
  </div>

</div>
	<div class="bd">
		<ul>
			<li style="background:url(http://127.0.0.1/MyShop/./myletao/letao/Login/Tpl/Login/images/login_bg.jpg) #CCE1F3 center 0 no-repeat;"></li>
		</ul>
	</div>

	<div class="hd"><ul></ul></div>
</div>
<div class="banner-shadow"></div>
<div class="footer"> <p></p></div>
</body>
</html>
