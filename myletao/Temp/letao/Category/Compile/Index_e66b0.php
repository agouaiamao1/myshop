<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>栏目管理</title>
	<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/myshop';
		WEB = 'http://127.0.0.1/myshop/index.php';
		URL = 'http://127.0.0.1/myshop/index.php/Category/Category/Index';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/myshop/index.php/Category';
		CONTROL = 'http://127.0.0.1/myshop/index.php/Category/Category';
		METH = 'http://127.0.0.1/myshop/index.php/Category/Category/Index';
		GROUP = 'http://127.0.0.1/myshop/./myletao';
		TPL = 'http://127.0.0.1/myshop/./myletao/letao/Category/Tpl';
		CONTROLTPL = 'http://127.0.0.1/myshop/./myletao/letao/Category/Tpl/Category';
		STATIC = 'http://127.0.0.1/myshop/Static';
		PUBLIC = 'http://127.0.0.1/myshop/./myletao/letao/Category/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/myshop/index.php/Admin/Index/index';
</script>
</head>
<body>
	<div class='wrap'>
		<div class="menu_list"> <ul>
		<li><a href="<?php echo U('index');?>" class="action"> 栏目列表 </a></li>
		<li><a href="<?php echo U('add');?>"> 添加顶级栏目 </a></li> 
		<li><a href="javascript:hd_ajax('<?php echo U(update_cache);?>');"> 更新栏目缓存 </a>	</li>
		</ul> 
	</div>
	<table class='table2'>
		<thead>
			<tr>
				<td class='w50'>cid</td>
				<td>栏目名称</td>
				<td class='w200'>操作</td>
			</tr>
			</thead>
			<?php $hd["list"]["c"]["total"]=0;if(isset($category) && !empty($category)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($category));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($category,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

				<tr>
					<td><?php echo $c['cid'];?></td>
					<td><?php echo $c['_name'];?></td>
					<td>
						【<a href="<?php echo U(add,array('pid'=>$c['cid']));?>">添加子栏目</a>】 |
						【<a href="<?php echo U(edit,array('cid'=>$c['cid']));?>">修改</a>】 |
						【<a href="">删除</a>】
					</td>
				</tr>
			<?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
		
	</table>
</div>
</body>
</html>