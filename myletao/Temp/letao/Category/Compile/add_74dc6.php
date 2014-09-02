<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加栏目</title>
	<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Category/Category/add/pid/6';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Category';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Category/Category';
		METH = 'http://127.0.0.1/MyShop/index.php/Category/Category/add';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Category/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Category/Tpl/Category';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Category/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Category/Category/Index';
</script>
	<script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Category/Tpl/Category/js/js.js"></script>
	<link type="text/css" rel="stylesheet" href="http://127.0.0.1/MyShop/./myletao/letao/Category/Tpl/Category/css/css.css"/>
</head>
<body>
	
	<div class='wrap'>
		<form method='post'>
		<div class="tab">
		<ul class="tab_menu">
		<li lab="base"><a> 基本设置 </a></li>
		<li lab="ext" class="action"><a> 其他 </a> </li><li>
		<li lab="brand"><a> 品牌 </a> </li><li>
		</li> 
		</ul>
		<div class="tab_content">
			<div id="base">
				<table class="table1 hd-form"> 
					<tr>
						<th>商品类型</th>
						<td>
							<select name="gid">
								<?php $hd["list"]["t"]["total"]=0;if(isset($data) && !empty($data)):$_id_t=0;$_index_t=0;$lastt=min(1000,count($data));
$hd["list"]["t"]["first"]=true;
$hd["list"]["t"]["last"]=false;
$_total_t=ceil($lastt/1);$hd["list"]["t"]["total"]=$_total_t;
$_data_t = array_slice($data,0,$lastt);
if(count($_data_t)==0):echo "";
else:
foreach($_data_t as $key=>$t):
if(($_id_t)%1==0):$_id_t++;else:$_id_t++;continue;endif;
$hd["list"]["t"]["index"]=++$_index_t;
if($_index_t>=$_total_t):$hd["list"]["t"]["last"]=true;endif;?>

									<option value="<?php echo $t['gid'];?>"><?php echo $t['gtname'];?></option>
								<?php $hd["list"]["t"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
							</select>
						</td>
					</tr>
					<tr>
						<th>上级栏目</th>
						<td>
							<?php echo $p_cname;?>
							<input type='hidden' name='pid' value='<?php echo $pid;?>'/>
						</td>
					</tr>
					<tr>
						<th class='w100'>栏目名称</th>
						<td><input type="text" name='cname' class='w300'/></td>
					</tr>
					<tr>
						<th class='w100'>栏目类型</th>
						<td>
							<label>
							<input type="radio" name='cat_type' value="1" checked='checked'/> 普通栏目 
						</label>
						<label>
								<input type="radio" name='cat_type' value="2" /> 封面栏目 </label>
						</td>
					</tr>
					
					<tr>
						<th class='w100'>单位</th>
						<td>
							<input type="text" name='unit' class='w300' value='个'/>
						</td>
					</tr>
					<tr>
						<th class='w100'>价格区间</th>
						<td>
							<input type="text" name='price_range' class='w300' value='5'/>
						</td>
					</tr>
			</table>
		</div>
		<div id="ext">
				<table class="table1 hd-form"> 
					<tr>
						<th> 关键字 </th>
						<td>
							<input type="text" name='keywords' class='w300'/>
						</td>
					</tr>
					<tr>
						<th> 栏目描述 </th>
						<td>
								<textarea name="description" class='w400 h100'></textarea>
						</td>
					</tr>
			</table>
		</div>
		<div id="brand">
				<ul>
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

						<li>
							<label>
							<img src="http://127.0.0.1/MyShop/<?php echo $b['logo'];?>" class='h30'/><br/>
							<input type="checkbox" name='bid[]' value='<?php echo $b['bid'];?>'/> <?php echo $b['bname'];?>
						</label>
						</li>
					<?php $hd["list"]["b"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
				</ul>
		</div>
	</div>
		<div class='position-bottom'>
			<input type="submit" value='确定' class='hd-success'/>
		</div>
	</form>
	</div>



</body>
</html>












