<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>添加商品类型</title>
    <script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/GoodType/Index/type_edit/gid/1';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/GoodType';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/GoodType/Index';
		METH = 'http://127.0.0.1/MyShop/index.php/GoodType/Index/type_edit';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/GoodType/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/GoodType/Tpl/Index';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/GoodType/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/GoodType/Index/index';
</script>
    <script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/GoodType/Tpl/Index/js/add.js"></script>
</head>
<body>
    <form method='post' class='hd-form' action="<?php echo U('type_edit');?>">
    	<div class='title-header'>
		编辑商品类型
    	</div>
    	<table class="table1">
            <tr>
                <th class='w100'>原来商品类型</th>
                <td>
                <?php echo $old_type[0]['gtname'];?>
                </td>
            </tr>
    		<tr>
    			<th class='w100'>新商品类型名称</th>
    			<td>
                   <input type="hidden" name="gid" value="<?php echo $old_type[0]['gid'];?>"/>
    			   <input type="text" name='gtname' class='w200'/>
    			</td>
    		</tr>
            <tr>
                <th class='w100'></th>
                <td>
                    <input type="submit" value="确定" class="hd-success"/>
                    <input type="reset" value="重置" class="hd-success"/>
                </td>
            </tr>
    	</table>
    </form>
</body>
</html>