<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>修改品牌---<?php echo $field['bname'];?></title>
	<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Brand/Brand/edit/bid/1';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Brand';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Brand/Brand';
		METH = 'http://127.0.0.1/MyShop/index.php/Brand/Brand/edit';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Brand/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Brand/Tpl/Brand';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Brand/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Brand/Brand/index';
</script>
</head>
<body>
	<div class='wrap'>
		<div class="menu_list"> <ul>
		<li><a href="<?php echo U('index');?>"> 品牌列表 </a></li>
		<li><a href="<?php echo U('add');?>"  class="action"> 添加品牌 </a></li> 
		</ul> 
	</div>
	<div class='title-header'>添加品牌</div>
	<form method='post' enctype='multipart/form-data'>
		<input type="hidden" name='bid' value='<?php echo $field['bid'];?>' />
	<table class='table1 hd-form'>
		<tr>
		<th>品牌名称</th>
		<td>
			<input type="text" name='bname' value='<?php echo $field['bname'];?>' class='w300'/>
		</td>
		</tr>
		<tr>
		<th>LOGO</th>
		<td>
			<input type="file" name='logo'/>
			<img src="http://127.0.0.1/MyShop/<?php echo $field['logo'];?>" class='h30' alt="<?php echo $field['bname'];?>" />
		</td>
		</tr>
	</table>
	<div class='position-bottom'>
			<input type="submit" value='确定' class='hd-success'/>
		</div>
	</form>
</div>
</body>
</html>