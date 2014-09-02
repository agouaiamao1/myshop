<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>添加商品</title>
    <script type='text/javascript' src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/MyShop';
		WEB = 'http://127.0.0.1/MyShop/index.php';
		URL = 'http://127.0.0.1/MyShop/index.php/Goods/Goods/edit/cid/2/gid/1';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Goods';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Goods/Goods';
		METH = 'http://127.0.0.1/MyShop/index.php/Goods/Goods/edit';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Goods/Goods/index';
</script>
    <script>
        //商品gid
        var gid= <?php echo $_GET['gid'];?>;
//添加商品规格
function add_spec(){
    var _tr=$("#spec table tr:eq(1)").clone();
    $('input[type="hidden"]',_tr).remove();
    $('input',_tr).val('');
    var _a = "<a href='javascript:;' class='btn1' onclick='del_spec(this);'>取消</a>";
    _tr.find('td').last().html(_a);
    $("#spec table").append(_tr);
}
//删除商品规格
function del_spec(obj){
  $(obj).parents('tr').eq(0).remove();
}
</script>
    <script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods/js/js.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods/js/edit_goods.js"></script>
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods/css/css.css"/>

</head>
<body>
    <form method='post' enctype='multipart/form-data'>
        <input type="hidden" name='gid' value='<?php echo $field['gid'];?>'/>
    <div class='wrap'>
        <div class="menu_list"> <ul>
           <li><a href="<?php echo U('index');?>"> 商品列表 </a></li>
        </ul> 
    </div>
        <div class="tab">
        <ul class="tab_menu">
        <li lab="base"><a> 基本设置 </a></li>
        <li lab="ext"><a> 扩展配置 </a> </li><li>
        <li lab="pic"><a> 内容页展示图片 </a> </li><li>
        <li lab="brand"><a> 品牌 </a> </li><li>
        </li> 
        </ul>
        <div class="tab_content">
            <div id="base">
                <table class="table1 hd-form">
                <tr>
                    <th class='w100'>栏目</th>
                    <td>
                        <select name="cid">
                            <?php $hd["list"]["c"]["total"]=0;if(isset($category) && !empty($category)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($category));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($category,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

                                <option value="<?php echo $c['cid'];?>"<?php echo $c['disabled'];?>><?php echo $c['_name'];?></option>
                            <?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                        </select>
                    </td>
                </tr> 
                    <tr>
                        <th>商品名称</th>
                        <td>
                        <input type="text"  name='gname' class='w200' value='<?php echo $field['gname'];?>'/>
                        </td>
                    </tr>
                    <tr>
                        <th>属性</th>
                        <td>
                            <label><input type="radio" name='flag' value="1" <?php if($field['flag'] == 推荐){?>checked='checked'<?php }?>/> 推荐</label>
                            <label><input type="radio" name='flag' value="2" <?php if($field['flag'] == 置顶){?>checked='checked'<?php }?>/> 置顶</label>
                        </td>
                    </tr>
                    <tr>
                        <th>商品图片</th>
                        <td>
                            <input type="file" name='pic' />
                            <img src="http://127.0.0.1/MyShop/<?php echo $field['list_pic'];?>" class='h80' />
                        </td>
                    </tr>
                    
                        <tr>
                            <th>价格</th>
                            <td>
                                <input type="text"  name='price' class='w200' value="<?php echo $field['price'];?>"/>
                            </td>
                        </tr>
                    <?php //if(empty($spec)):?>
                        <tr>
                            <th>库存</th>
                            <td>
                                <input type="text"  name='stock' class='w200' value="<?php echo $field['stock'];?>"/>
                            </td>
                        </tr>
                    <?php //endif;?>
            </table>
            <div id='attr' class='hd-form'>
                <h3>属性</h3>
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

                <dl>
                <?php echo $a['html'];?>
                </dl>
            <?php $hd["list"]["a"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
            </div>
            <div id='spec' class='hd-form'>
                <h3>规格</h3>
                <dl>
                    <dt>规格</dt>
                    <dd>
                        <?php echo $spec;?>
                    </dd>
                </dl>
                    
            </div>
        </div>
        <div id="ext">
                <table class="table1 hd-form"> 
                    <tr>
                        <th class='w100'> 关键字 </th>
                        <td>
                            <input type="text" name='keywords' class='w300' value='<?php echo $field['keywords'];?>'/>
                        </td>
                    </tr>
                    <tr>
                        <th> 栏目描述 </th>
                        <td>
                                <textarea name="description" class='w400 h100'><?php echo $field['description'];?></textarea>
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <th> 服务 </th>
                        <td>
                                <textarea name="service" class='w400 h100'><?php echo $field['service'];?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th> 点击数 </th>
                        <td>
                                <input type="text" name='click' value='200' value='<?php echo $field['click'];?>'/>
                        </td>
                    </tr>
                    <tr>
                        <th> 上架时间 </th>
                        <td>
                            <input type="text" name='addtime' id='addtime' class='w200' value='<?php echo date('Y-m-d H:i:s',$field['addtime']);?>'/>
                            <script>
                                  $('#addtime').calendar({format: 'yyyy/MM/dd HH:mm:ss'}); 
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <th>详细介绍</th>
                        <td>
                            <script type="text/javascript" charset="utf-8" src="http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Ueditor/ueditor.config.js"></script><script type="text/javascript" charset="utf-8" src="http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Ueditor/ueditor.all.min.js"></script><script type="text/javascript">UEDITOR_HOME_URL="http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Ueditor/"</script><script id="hd_body" name="body" type="text/plain"><?php echo $field['body'];?></script>
        <script type='text/javascript'>
        $(function(){
                var ue = UE.getEditor('hd_body',{
                imageUrl:'http://127.0.0.1/MyShop/index.php/Goods/Goods&m=ueditor_upload&water=0&uploadsize=2000000&maximagewidth=false&maximageheight=false'//处理上传脚本
                ,zIndex : 0
                ,autoClearinitialContent:false
                ,initialFrameWidth:"100%" //宽度1000
                ,initialFrameHeight:"300" //宽度1000
                ,autoHeightEnabled:false //是否自动长高,默认true
                ,autoFloatEnabled:false //是否保持toolbar的位置不动,默认true
                ,maximumWords:2000 //允许的最大字符数
                ,readonly : false //编辑器初始化结束后,编辑区域是否是只读的，默认是false
                ,wordCount:true //是否开启字数统计
                ,imagePath:''//图片修正地址
                , toolbars:[
            ['fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe','insertcode', 'pagebreak', 'template', 'background', '|',
                'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
                'print', 'preview', 'searchreplace', 'drafts']
            ]//工具按钮
                , initialStyle:'p{line-height:1em; font-size: 14px; }'
            });
        })
        </script>
                        </td>
                    </tr>
            </table>
        </div>
        <div id="pic">
                <div class='pic-list'>
                    <ul>
                        <?php $hd["list"]["p"]["total"]=0;if(isset($pic) && !empty($pic)):$_id_p=0;$_index_p=0;$lastp=min(1000,count($pic));
$hd["list"]["p"]["first"]=true;
$hd["list"]["p"]["last"]=false;
$_total_p=ceil($lastp/1);$hd["list"]["p"]["total"]=$_total_p;
$_data_p = array_slice($pic,0,$lastp);
if(count($_data_p)==0):echo "";
else:
foreach($_data_p as $key=>$p):
if(($_id_p)%1==0):$_id_p++;else:$_id_p++;continue;endif;
$hd["list"]["p"]["index"]=++$_index_p;
if($_index_p>=$_total_p):$hd["list"]["p"]["last"]=true;endif;?>

                            <li>
                                <img src="http://127.0.0.1/MyShop/<?php echo $p['medium'];?>" class='w150 h80'/>
                                <span onclick='del_pic(this,<?php echo $p['pic_id'];?>)'>X</span>
                            </li>
                        <?php $hd["list"]["p"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                    </ul>
                </div>
                <div class='set-pic'>
                <table class='table1' id='c_pic'>
                    <tr>
                        <th class='w100'>
                            <a href="javascript:add_pic();">[+]</a>
                        </th>
                        <td>
                            <input type="file" name='good_pic[]'/>
                        </td>
                    </tr>
                    
                </table>
                </div>
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
                            <img src="http://127.0.0.1/MyShop/<?php echo $b['logo'];?>" class='h50'/><br/>
                            <input type="radio" name='brand_bid' value='<?php echo $b['bid'];?>' <?php if($field['brand_bid'] == $b['bid']){?>checked='checked'<?php }?>/> <?php echo $b['bname'];?>
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
        
    </div>
        <div class='position-bot12tom'>
            <input type="submit" value='确定' class='hd-success'/>
        </div>
    </form>
</body>
</html>












