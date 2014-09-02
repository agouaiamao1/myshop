<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>商品类型管理</title>
    <script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/myshop';
		WEB = 'http://127.0.0.1/myshop/index.php';
		URL = 'http://127.0.0.1/myshop/index.php/GoodType/Index/index';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/myshop/index.php/GoodType';
		CONTROL = 'http://127.0.0.1/myshop/index.php/GoodType/Index';
		METH = 'http://127.0.0.1/myshop/index.php/GoodType/Index/index';
		GROUP = 'http://127.0.0.1/myshop/./myletao';
		TPL = 'http://127.0.0.1/myshop/./myletao/letao/GoodType/Tpl';
		CONTROLTPL = 'http://127.0.0.1/myshop/./myletao/letao/GoodType/Tpl/Index';
		STATIC = 'http://127.0.0.1/myshop/Static';
		PUBLIC = 'http://127.0.0.1/myshop/./myletao/letao/GoodType/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/myshop/index.php/Admin/Index/index';
</script>
</head>
<body>
    <div class="menu_list"> 
        <ul>
            <li><a href="javascript:;" class="action"> 商品类型 </a></li>
            <li><a href="<?php echo U('add');?>"> 添加类型 </a></li> 
            <li><a href="javascript:hd_ajax('<?php echo U(update_cache);?>')"> 更新栏目缓存 </a></li>
        </ul> 
    </div>
    <table class='table2'>
        <thead>
            <tr>
                <td class='w50'>gid</td>
                <td>商品类型名称</td>
                <td class='w180'>操作</td>
            </tr>
        </thead>
        <tbody>
            <?php $hd["list"]["t"]["total"]=0;if(isset($type) && !empty($type)):$_id_t=0;$_index_t=0;$lastt=min(1000,count($type));
$hd["list"]["t"]["first"]=true;
$hd["list"]["t"]["last"]=false;
$_total_t=ceil($lastt/1);$hd["list"]["t"]["total"]=$_total_t;
$_data_t = array_slice($type,0,$lastt);
if(count($_data_t)==0):echo "";
else:
foreach($_data_t as $key=>$t):
if(($_id_t)%1==0):$_id_t++;else:$_id_t++;continue;endif;
$hd["list"]["t"]["index"]=++$_index_t;
if($_index_t>=$_total_t):$hd["list"]["t"]["last"]=true;endif;?>

                <tr>
                    <td><?php echo $t['gid'];?></td>
                    <td><?php echo $t['gtname'];?></td>
                    <td>
                        【<a href="<?php echo U('type_edit', array('gid'=>$t['gid']));?>">编辑</a>】 |
                        【<a href="<?php echo U('GoodAttr/index', array('gid'=>$t['gid']));?>">属性</a>】 |
                    <!--[<a href="<?php echo U('type_edit', array('gid'=>$t['gid']));?>">规格</a>] | -->
                        【<a href="<?php echo U('type_del', array('gid'=>$t['gid']));?>" onclick="return confirm('此操作不可恢复！谨慎操作');">删除</a>】 |
                    </td>
                </tr>
            <?php $hd["list"]["t"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
        </tbody>
    </table>
</body>
</html>