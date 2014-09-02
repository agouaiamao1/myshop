<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>商品列表</title>
	<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/myshop';
		WEB = 'http://127.0.0.1/myshop/index.php';
		URL = 'http://127.0.0.1/myshop/index.php/Goods/Goods/index';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/myshop/index.php/Goods';
		CONTROL = 'http://127.0.0.1/myshop/index.php/Goods/Goods';
		METH = 'http://127.0.0.1/myshop/index.php/Goods/Goods/index';
		GROUP = 'http://127.0.0.1/myshop/./myletao';
		TPL = 'http://127.0.0.1/myshop/./myletao/letao/Goods/Tpl';
		CONTROLTPL = 'http://127.0.0.1/myshop/./myletao/letao/Goods/Tpl/Goods';
		STATIC = 'http://127.0.0.1/myshop/Static';
		PUBLIC = 'http://127.0.0.1/myshop/./myletao/letao/Goods/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/myshop/index.php/Admin/Index/index';
</script>
</head>
<body>
	<div class='wrap'>
		<div class="menu_list"> 
		  <ul>
		    <li><a href="<?php echo U('index');?>" class="action"> 商品列表 </a></li>
		    <li><a href="<?php echo U('select_cat');?>"> 添加商品 </a></li> 
		  </ul> 
	    </div>
	<table class='table2'>
		<thead>
			<tr>
				<td class='w50'>gid</td>
				<td>商品名称</td>
				<td class='w100'>商品图片</td>
				<td class='w150'>操作</td>
			</tr>
			</thead>
			<?php $hd["list"]["g"]["total"]=0;if(isset($goods) && !empty($goods)):$_id_g=0;$_index_g=0;$lastg=min(1000,count($goods));
$hd["list"]["g"]["first"]=true;
$hd["list"]["g"]["last"]=false;
$_total_g=ceil($lastg/1);$hd["list"]["g"]["total"]=$_total_g;
$_data_g = array_slice($goods,0,$lastg);
if(count($_data_g)==0):echo "";
else:
foreach($_data_g as $key=>$g):
if(($_id_g)%1==0):$_id_g++;else:$_id_g++;continue;endif;
$hd["list"]["g"]["index"]=++$_index_g;
if($_index_g>=$_total_g):$hd["list"]["g"]["last"]=true;endif;?>

				<tr>
					<td><?php echo $g['gid'];?></td>
					<td><?php echo $g['gname'];?></td>
					<td>
						<img src="http://127.0.0.1/myshop/<?php echo $g['index_pic'];?>" style="height:80px;width:117px"/>
					</td>
					<td>
						【<a href="<?php echo U(edit,array('cid'=>$g['cid'],'gid'=>$g['gid']));?>">修改</a>】|
						【<a onclick="return confirm('此操作不可恢复！');" href="<?php echo U(del,array('cid'=>$g['cid'],'gid'=>$g['gid']));?>">删除</a>】
					</td>
				</tr>
			<?php $hd["list"]["g"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
	</table>
 <div class="page1">
    <?php echo $page;?>
</div>
</div>

</body>
</html>