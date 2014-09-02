<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>友情链接</title>
    <script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Link/Index/index';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Link';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Link/Index';
		METH = 'http://127.0.0.1/MyShop/index.php/Link/Index/index';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Link/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Link/Tpl/Index';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Link/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Admin/Index/index';
</script>
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1/MyShop/./myletao/letao/Link/Tpl/Index/css/css.css"/>
</head>
<body>
<div class='warp'>
    <div class="menu_list">
        <ul>
            <li><a href="<?php echo U('links/Index/index');?>" class="action">链接列表</a></li>
            <li><a href="<?php echo U('add');?>" >添加友情链接</a></li>
        </ul>
    </div>
    <table class="table2">
        <thead>
        <tr>
            <td class="w60">id</td>
            <td class="w100">网站名</td>
            <td class="w100">网址</td>
            <td class="w150">logo</td>
            <td class="w100">是否添加</td>
            <td class="w100">处理</td>
        </tr>
        </thead>
        <?php $hd["list"]["l"]["total"]=0;if(isset($data) && !empty($data)):$_id_l=0;$_index_l=0;$lastl=min(1000,count($data));
$hd["list"]["l"]["first"]=true;
$hd["list"]["l"]["last"]=false;
$_total_l=ceil($lastl/1);$hd["list"]["l"]["total"]=$_total_l;
$_data_l = array_slice($data,0,$lastl);
if(count($_data_l)==0):echo "";
else:
foreach($_data_l as $key=>$l):
if(($_id_l)%1==0):$_id_l++;else:$_id_l++;continue;endif;
$hd["list"]["l"]["index"]=++$_index_l;
if($_index_l>=$_total_l):$hd["list"]["l"]["last"]=true;endif;?>

        <tr>
            <td><?php echo $l['id'];?></td>
            <td><?php echo $l['webname'];?></td>
            <td><?php echo $l['url'];?></td>
            <td><?php echo $l['logo'];?></td>
            <td><?php if($l['status'] == 1){?>是<?php  }else{ ?>否<?php }?></td>
            <td>
                <a href="<?php echo U('del',array('id'=>$l['id']));?>" onclick='return confirm("确定删除吗？")'>删除</a> |
                <a href="<?php echo U('edit',array('id'=>$l['id']));?>">编辑</a> 
            </td>
        </tr>
          <?php $hd["list"]["l"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
    </table>
</div>
<div class="page1">
 <?php echo $page;?>
</div>
</body>
</html>