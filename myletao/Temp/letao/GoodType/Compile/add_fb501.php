<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>添加商品类型</title>
    <script type='text/javascript' src='http://localhost/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/MyShop';
		WEB = 'http://localhost/MyShop/index.php';
		URL = 'http://localhost/MyShop/index.php/GoodType/Index/add1';
		HDPHP = 'http://localhost/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/MyShop/hdphp/hdphp/Extend';
		APP = 'http://localhost/MyShop/index.php/GoodType';
		CONTROL = 'http://localhost/MyShop/index.php/GoodType/Index';
		METH = 'http://localhost/MyShop/index.php/GoodType/Index/add1';
		GROUP = 'http://localhost/MyShop/./myletao';
		TPL = 'http://localhost/MyShop/./myletao/letao/GoodType/Tpl';
		CONTROLTPL = 'http://localhost/MyShop/./myletao/letao/GoodType/Tpl/Index';
		STATIC = 'http://localhost/MyShop/Static';
		PUBLIC = 'http://localhost/MyShop/./myletao/letao/GoodType/Tpl/Public';
		HTTPREFERER = 'http://localhost/MyShop/index.php/GoodType/Index/index';
</script>
    <script type="text/javascript" src="http://localhost/MyShop/./myletao/letao/GoodType/Tpl/Index/js/add.js"></script>
</head>
<body>
    <div class="menu_list"> 
        <ul>
            <li><a href="<?php echo U('index');?>" > 商品类型 </a></li>
            <li><a href="javascript:;" class="action"> 添加类型 </a></li> 
            <li><a href="javascript:"> 更新栏目缓存 </a></li>
        </ul> 
    </div>
    <form method='post' class='hd-form' onsubmit="return hd_submit(this,'<?php echo U('add');?>">
    	<div class='title-header'>
		   添加商品类型
    	</div>
    	<table class="table1">
    		<tr>
    			<th class='w100'>商品类型名称</th>
    			<td>
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