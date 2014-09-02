<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>属性列表</title>
    <script type='text/javascript' src='http://localhost/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/MyShop';
		WEB = 'http://localhost/MyShop/index.php';
		URL = 'http://localhost/MyShop/index.php/GoodType/GoodAttr/index/gid/1';
		HDPHP = 'http://localhost/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/MyShop/hdphp/hdphp/Extend';
		APP = 'http://localhost/MyShop/index.php/GoodType';
		CONTROL = 'http://localhost/MyShop/index.php/GoodType/GoodAttr';
		METH = 'http://localhost/MyShop/index.php/GoodType/GoodAttr/index';
		GROUP = 'http://localhost/MyShop/./myletao';
		TPL = 'http://localhost/MyShop/./myletao/letao/GoodType/Tpl';
		CONTROLTPL = 'http://localhost/MyShop/./myletao/letao/GoodType/Tpl/GoodAttr';
		STATIC = 'http://localhost/MyShop/Static';
		PUBLIC = 'http://localhost/MyShop/./myletao/letao/GoodType/Tpl/Public';
		HTTPREFERER = 'http://localhost/MyShop/index.php/GoodType/Index/index';
</script>
</head>
<script type="text/javascript" src="http://localhost/MyShop/./myletao/letao/GoodType/Tpl/GoodAttr/js/del.js"></script>
<body>
    <div class="menu_list"> 
        <ul>
            <li><a href="javascript:;" class="action"> 属性列表 </a></li>
            <li><a href="<?php echo U('attr_add',array('gid'=>$gid));?>"> 添加属性 </a></li> 
        </ul> 
    </div>
    <table class='table2'>
        <thead>
            <tr>
                <td class='w50'>acid</td>
                <td>属性名称</td>
                <td class='w100'>显示类型</td>
                <td class='w100'>是否规格</td>
                <td class='w150'>操作</td>
            </tr>
        </thead>
        <tbody>
            <?php $hd["list"]["a"]["total"]=0;if(isset($attr) && !empty($attr)):$_id_a=0;$_index_a=0;$lasta=min(1000,count($attr));
$hd["list"]["a"]["first"]=true;
$hd["list"]["a"]["last"]=false;
$_total_a=ceil($lasta/1);$hd["list"]["a"]["total"]=$_total_a;
$_data_a = array_slice($attr,0,$lasta);
if(count($_data_a)==0):echo "";
else:
foreach($_data_a as $key=>$a):
if(($_id_a)%1==0):$_id_a++;else:$_id_a++;continue;endif;
$hd["list"]["a"]["index"]=++$_index_a;
if($_index_a>=$_total_a):$hd["list"]["a"]["last"]=true;endif;?>

                <tr>
                    <td><?php echo $a['acid'];?></td>
                    <td><?php echo $a['attr_name'];?></td>
                    <td><?php echo $a['type'];?></td>
                    <?php if($a['is_spec'] == 1){?>
                       <td>是</td>
                    <?php  }else{ ?>
                       <td>否</td>
                    <?php }?>
                    <td>
                        【<a href="<?php echo U('attr_edit', array('acid'=>$a['acid'],'gid'=>$gid));?>">编辑</a>】 |
                        <!-- 【<a href="<?php echo U('attr_del', array('acid'=>$a['acid'],'gid'=>$gid));?>">删除</a>】  -->
                        【<a style="cursor:pointer" onclick = "attr_del(<?php echo $a['acid'];?>)" >删除</a>】 
                    </td>
                </tr>
            <?php $hd["list"]["a"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
        </tbody>
    </table>
</body>
</html>