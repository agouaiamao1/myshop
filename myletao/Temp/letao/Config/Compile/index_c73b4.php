<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>网站配置</title>
    <script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Config/Config/index';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Config';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Config/Config';
		METH = 'http://127.0.0.1/MyShop/index.php/Config/Config/index';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Config/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Config/Tpl/Config';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Config/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Admin/Index/index';
</script>
    <script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Config/Tpl/Config/js/js1.js"></script>
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1/MyShop/./myletao/letao/Config/Tpl/Config/css/css.css"/>
</head>
<body>
<form action="<?php echo U(index);?>" method="post" class="form-inline hd-form">
    <div class="wrap">
    <div class="menu_list"> 
        <ul>
         <li><a href="<?php echo U('index');?>" class="action"> 站点配置 </a></li>
         <li><a href="javascript:hd_ajax('<?php echo U(update_config);?>');"> 更新配置缓存 </a> </li>
        </ul> 
     </div>
        <div class="tab">
            <ul class="tab_menu">
                <li lab="web"><a href="#">站点配置</a></li>
            </ul>
            <div class="tab_content">
                <div id="web">
                    <table class="table1">
                        <?php $hd["list"]["c"]["total"]=0;if(isset($config['web']) && !empty($config['web'])):$_id_c=0;$_index_c=0;$lastc=min(1000,count($config['web']));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($config['web'],0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

                            <?php echo $c['html'];?>
                        <?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class='position-bottom'>
        <input type="submit" value="确定" class='hd-success' />
    </div>
</form>
</body>
</html>