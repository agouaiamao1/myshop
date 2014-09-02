<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>选择商品栏目</title>
	<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Goods/Goods/select_cat';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Goods';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Goods/Goods';
		METH = 'http://127.0.0.1/MyShop/index.php/Goods/Goods/select_cat';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Admin/Index/index';
</script>
	<script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods/js/js.js"></script>
</head>
<style>
	select#ads{
	   display:none;
	}
</style>
<body>
	<div class='wrap'>
		<form action="<?php echo U(add);?>">
	<div class='title-header'>选商品栏目</div>
	<table class='table1 hd-form' >
		<tr>
	<th class='w100'>商品栏目</th>
	<td>
		<select name="cid" size="10">
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

			<option value="<?php echo $c['cid'];?>"><?php echo $c['cname'];?></option>
		<?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
	    </select>
	    <select id="ads" name="cid" size='10' class="hidden"></select>
	</td>
	</tr>
	</table>
	<div class='position-bottom'>
		<input type="submit" value="确定" class='hd-success' />
	</div>
</form>
</div>
</body>
</html>











