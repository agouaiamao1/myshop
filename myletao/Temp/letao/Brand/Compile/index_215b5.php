<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>品牌管理</title>
	<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/myshop';
		WEB = 'http://127.0.0.1/myshop/index.php';
		URL = 'http://127.0.0.1/myshop/index.php/Brand/Brand/index';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/myshop/index.php/Brand';
		CONTROL = 'http://127.0.0.1/myshop/index.php/Brand/Brand';
		METH = 'http://127.0.0.1/myshop/index.php/Brand/Brand/index';
		GROUP = 'http://127.0.0.1/myshop/./myletao';
		TPL = 'http://127.0.0.1/myshop/./myletao/letao/Brand/Tpl';
		CONTROLTPL = 'http://127.0.0.1/myshop/./myletao/letao/Brand/Tpl/Brand';
		STATIC = 'http://127.0.0.1/myshop/Static';
		PUBLIC = 'http://127.0.0.1/myshop/./myletao/letao/Brand/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/myshop/index.php/Admin/Index/index';
</script>
</head>
<body>
	<div class='wrap'>
		<div class="menu_list"> <ul>
		<li><a href="<?php echo U('index');?>" class="action"> 品牌列表 </a></li>
		<li><a href="<?php echo U('add');?>"> 添加品牌 </a></li> 
		</ul> 
	</div>
	<table class='table2'>
		<thead>
		<tr>
			<td>bid</td>
			<td>品牌名称</td>
			<td>logo</td>
			<td class='w150'>操作</td>
		</tr>
		</thead>
		<?php $hd["list"]["b"]["total"]=0;if(isset($brand) && !empty($brand)):$_id_b=0;$_index_b=0;$lastb=min(1000,count($brand));
$hd["list"]["b"]["first"]=true;
$hd["list"]["b"]["last"]=false;
$_total_b=ceil($lastb/1);$hd["list"]["b"]["total"]=$_total_b;
$_data_b = array_slice($brand,0,$lastb);
if(count($_data_b)==0):echo "";
else:
foreach($_data_b as $key=>$b):
if(($_id_b)%1==0):$_id_b++;else:$_id_b++;continue;endif;
$hd["list"]["b"]["index"]=++$_index_b;
if($_index_b>=$_total_b):$hd["list"]["b"]["last"]=true;endif;?>

			<tr>
			<td><?php echo $b['bid'];?></td>
			<td><?php echo $b['bname'];?></td>
			<td>
				<img src='http://127.0.0.1/myshop/<?php echo $b['logo'];?>' class='h30'/>
			</td>
			<td>
				【<a href="<?php echo U('edit',array('bid'=>$b['bid']));?>">修改</a>】 |
				【<a href="">删除</a>】
			</td>
		</tr>
		<?php $hd["list"]["b"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
	</table>
</div>
</body>
</html>















