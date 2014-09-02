<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后台首页</title>
	<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Admin/Index/index';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Admin';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Admin/Index';
		METH = 'http://127.0.0.1/MyShop/index.php/Admin/Index/index';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Admin/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Admin/Tpl/Index';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Admin/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Login/Login/login';
</script>
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1/MyShop/./myletao/letao/Admin/Tpl/Index/Css/admin.css"/>
    <script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Admin/Tpl/Index/Js/admin.js"></script>
<!-- 默认打开目标 -->
<base target="iframe"/>
</head>
<body>
<!-- 头部 -->
	<div id="top_box">
		<div id="top">
			<p id="top_font">Istrive管理管理后台</p>
			<ul id="menu2" class="menu">
				<li>
					<a href="<?php echo U('Index/welcome');?>">前台首页</a>
				</li>
				<li><a href="<?php echo U('Category/Category/Index');?>">查看栏目</a></li> 
				<li><a href="<?php echo U('Member/Member/index');?>">用户列表</a></li>
				<li><a href="<?php echo U('Config/Config/index');?>">网站配置</a></li>			
			</ul>
		</div>
		<div class="top_bar">
			<p class="adm">
					<span>超级</span>
				管理员：
				<span class="adm_pic">&nbsp&nbsp&nbsp&nbsp</span>
				<span class="adm_people"><?php echo $_SESSION['aname'];?></span>
			</p>
			<p class="now_time">
				登陆时间：<?php echo date('Y-m-d',$time);?>
				您的当前位置是:<span style="font-weight:bolder">首页</span>
			</p>
			<p class="out">
				<span class="out_bg">&nbsp&nbsp&nbsp&nbsp</span>&nbsp
				<a href="<?php echo U('Login/Login/out');?>" target="_self">退出</a>
			</p>
		</div>
	</div>
<!-- 左侧菜单 -->
		<div id="left_box">
			<p class="use">常用菜单</p>
			
			<div class="menu_box">
				<h2>商品类型</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('GoodType/Index/index');?>"  class="pos">商品类型</a>
				        </li>
				    </ul>
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Category/Category/Index');?>" class="pos">栏目管理</a>
				        </li> 
				    </ul>
				</div>
			</div>
			 <!-- 商品管理 -->
			 <div class="menu_box">
				<h2>商品管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Goods/Goods/index');?>" class="pos">商品列表</a>
				        </li> 
				    </ul>
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Goods/Goods/select_cat');?>" class="pos">添加商品</a>
				        </li> 
				    </ul>
				</div>
			</div>			
			 <!-- 用户管理 -->
			 <div class="menu_box">
				<h2>会员管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Member/Member/index');?>" class="pos">用户列表</a>
				        </li> 
				    </ul>
			<!-- 		<ul class="con">
				        <li class="nav_u">
				        	<a href="javascript:"; class="pos">用户订单</a>
				        </li> 
				    </ul> -->
				</div>
			</div>		
			
			 <div class="menu_box">
				<h2>品牌管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Brand/Brand/index');?>"  class="pos">品牌管理</a>
				        </li>
				    </ul>
				</div>
			</div>
			<div class="menu_box">
				<h2>系统管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Index/welcome');?>"  class="pos">系统信息</a>
				        </li>
				    </ul>
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Config/Config/index');?>"  class="pos">网站设置</a>
				        </li>
				    </ul>
				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Link/Index/index');?>"  class="pos">友情链接</a>
				        </li>
				    </ul>
				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Config/Config/change_pass');?>"  class="pos">密码修改</a>
				        </li>
				    </ul>
				</div>
			</div>

			
		</div>
		<!-- 右侧 -->
		<div id="right">
			<iframe  frameboder="0" border="" 	scrolling="yes" name="iframe" src="http://127.0.0.1/MyShop/index.php/Admin/Index/welcome"></iframe>
		</div>
	<!-- 底部 -->
	<div id="foot_box">
		<div class="foot">
			<p>@Copyright © 2013-2013 zxb.com All Rights Reserved. 京ICP备0000000号</p>
		</div>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Admin/Tpl/Public/js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('.adm_pic, #left_box .pos, .span_server, .span_people', 'background');
    </script>
<![endif]-->
</body>
</html>
