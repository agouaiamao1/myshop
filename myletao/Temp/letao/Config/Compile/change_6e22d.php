<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>修改密码</title>
    <script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Config/Config/change_pass';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Config';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Config/Config';
		METH = 'http://127.0.0.1/MyShop/index.php/Config/Config/change_pass';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Config/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Config/Tpl/Config';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Config/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Admin/Index/index';
</script>
    <script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Config/Tpl/Config/js/js.js"></script>
</head>
<body>
<div class="wrap hd-form">
    <h2>修改密码</h2>
    <form action="<?php echo U('change_pass');?>" method="post" onsubmit="return false;" class="form-inline hd-form">
        <table class="table1">
            <tr>
                <th class="w100">管理员名称</th>
                <td>
                    <?php echo $user['admin'];?>
                    <input type="hidden" name = 'aid' value="<?php echo $user['aid'];?>"/>
                </td>
            </tr>
            <tr>
                <th class="w100">旧密码</th>
                <td>
                    <input type="password" name="old_password" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">新密码</th>
                <td>
                    <input type="password" name="password" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">重复新密码</th>
                <td>
                    <input type="password" name="c_password" class="w200"/>
                </td>
            </tr>
        </table>
        <div class="btn_wrap">
            <input type="submit" class="btn1" value="确定"/>
            <input type="reset" class="btn1" value="重置"/>
        </div>
    </form>
</div>
</body>
</html>