<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/myshop';
		WEB = 'http://127.0.0.1/myshop/index.php';
		URL = 'http://127.0.0.1/myshop/index.php/Member/Member/index';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/myshop/index.php/Member';
		CONTROL = 'http://127.0.0.1/myshop/index.php/Member/Member';
		METH = 'http://127.0.0.1/myshop/index.php/Member/Member/index';
		GROUP = 'http://127.0.0.1/myshop/./myletao';
		TPL = 'http://127.0.0.1/myshop/./myletao/letao/Member/Tpl';
		CONTROLTPL = 'http://127.0.0.1/myshop/./myletao/letao/Member/Tpl/Member';
		STATIC = 'http://127.0.0.1/myshop/Static';
		PUBLIC = 'http://127.0.0.1/myshop/./myletao/letao/Member/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/myshop/index.php/Admin/Index/index';
</script>
	<link type="text/css" rel="stylesheet" href="http://127.0.0.1/myshop/./myletao/letao/Member/Tpl/Member/css/css.css"/>
</head>

<body>
	<table class="table">
		<tr>
			<td class="th" colspan="20">用户列表</td>
		</tr>
		<tr class="tableTop">
			<td class="tdLittle1">ID</td>
			<td>用户名</td>
			<td>注册时间</td>
			<td>帐号状态</td>
			<td>操作</td>
		</tr>
		<?php $hd["list"]["n"]["total"]=0;if(isset($user) && !empty($user)):$_id_n=0;$_index_n=0;$lastn=min(1000,count($user));
$hd["list"]["n"]["first"]=true;
$hd["list"]["n"]["last"]=false;
$_total_n=ceil($lastn/1);$hd["list"]["n"]["total"]=$_total_n;
$_data_n = array_slice($user,0,$lastn);
if(count($_data_n)==0):echo "";
else:
foreach($_data_n as $key=>$n):
if(($_id_n)%1==0):$_id_n++;else:$_id_n++;continue;endif;
$hd["list"]["n"]["index"]=++$_index_n;
if($_index_n>=$_total_n):$hd["list"]["n"]["last"]=true;endif;?>

			<tr>
				<td><?php echo $n['uid'];?></td>
				<td><?php echo $n['username'];?></td>
				<td><?php echo date('Y-m-d',$n['regtime']);?></td>
				
			   <?php if($n['lock'] == 1){?>	
				<td>正常</td>
			   <?php  }else{ ?>
				<td>锁定</td>
			    <?php }?>
			    <td>
				<?php if($n['lock'] == 1){?>
					<a href="<?php echo U('Member/lock',array('uid'=>$n['uid']));?>">锁定</a>
				<?php  }else{ ?>
					<a href="<?php echo U('Member/unlock',array('uid'=>$n['uid'])) ;?>">解锁</a>
				<?php }?>
				</td>
			
			</tr>
		<?php $hd["list"]["n"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
	</table>

</body>
</html>