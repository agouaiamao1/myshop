<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		URL = 'http://127.0.0.1/MyShop/index.php/Link/Index/edit/id/12';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Link';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Link/Index';
		METH = 'http://127.0.0.1/MyShop/index.php/Link/Index/edit';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Link/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Link/Tpl/Index';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Link/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Link/Index/index';
</script>
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1/MyShop/./myletao/letao/Link/Tpl/Index/css/css.css"/>
    <script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Link/Tpl/Index/JS/js.js"></script>
</head>
<body>
<div class="warp">
    <form action="http://127.0.0.1/MyShop/index.php/Link/Index/edit" method="post" class="hd-form" enctype="multipart/form-data">
       <input type="hidden" name="id" value="<?php echo $field['id'];?>"/>
        <div class="tab">
            <ul class="tab_menu">
                <li></li>
                <li></li>
            </ul>
            <div class="tab_content">
                <div id="base">
                    <table class="table1">
                       <tr>
                         <td class='w100'>网站名称</td>
                          <td>
                             <input type='text' name='webname' class='w200' value='<?php echo $field['webname'];?>'/>
                          </td>
                        </tr>
                        
                        <tr>
                          <td class='w100'>网址</td>
                          <td>
                             <input type='text' name='url' class='w200' value='<?php echo $field['url'];?>'/>
                          </td>
                        </tr>
                        <tr>
                          <td class='w100'>logo</td>
                          <td>
                              <input type="file" name="logo"/>
                        <input type="hidden" name="old_thumb" value="<?php echo $field['logo'];?>"/>
                        <img src="http://127.0.0.1/MyShop/<?php echo $field['logo'];?>" width="50" height="50"/>
                          </td>
                        </tr>
                        <tr>
                          <td class='w100'>状态</td>
                          <td>
                            <?php if($field['status'] == 1){?>
                             <input type="radio" value="1" name="status" checked="checked"/> 添加
                             <input type="radio" value="0" name="status"/> 未添加
                             <?php  }else{ ?>
                            <input type="radio" value="1" name="status"/> 添加
                             <input type="radio" value="0" name="status"/> 未添加
                         <?php }?>
                          </td>
                        </tr>                        

                    </table>
                </div>
            </div>
            <input type="submit" class="hd-success" value="确定"/>
        </div>
    </form>
</div>
</body>
</html>