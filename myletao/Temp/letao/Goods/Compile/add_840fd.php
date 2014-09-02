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
		URL = 'http://127.0.0.1/MyShop/index.php/Goods/Goods/add?cid=1&cid=2';
		HDPHP = 'http://127.0.0.1/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/MyShop/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/MyShop/index.php/Goods';
		CONTROL = 'http://127.0.0.1/MyShop/index.php/Goods/Goods';
		METH = 'http://127.0.0.1/MyShop/index.php/Goods/Goods/add';
		GROUP = 'http://127.0.0.1/MyShop/./myletao';
		TPL = 'http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl';
		CONTROLTPL = 'http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods';
		STATIC = 'http://127.0.0.1/MyShop/Static';
		PUBLIC = 'http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Public';
		HTTPREFERER = 'http://127.0.0.1/MyShop/index.php/Goods/Goods/select_cat';
</script>
	<script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods/js/js.js"></script>
	<link type="text/css" rel="stylesheet" href="http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods/css/css.css"/>
	<script type="text/javascript" src="http://127.0.0.1/MyShop/./myletao/letao/Goods/Tpl/Goods/js/validate.js"></script>
</head>
<script>
//添加商品规格
function add_spec(){
  var html = $('.kkk').clone()
  var h ="<tr>\
          <td>\
          <input type='text' name='st_stock[]' class='stock'/>\
          </td>\
		  <td>\
		  <input type='text' name='st_price[]' class='price'/>\
		  </td>\
		  <td>\
		  <input type='text' name='good_num[]' class='goodnum'/>\
		  </td>\
		  <td>\
		  <input type='button' value='取消' id='attr_add' class='btn1' onclick='del_spec(this)'>\
		  </td>\
		  </tr>";
  $(".jjj").after(h).siblings('tr').eq(1).prepend(html);
  $('.kkk').parent().next().find('.kkk').removeClass('kkk');
}
function del_spec(obj){
  $(obj).parents('tr').eq(0).remove();
}
</script>
<body>
	<div class='wrap'>
	  <div class="menu_list"> 
		<ul>
		  <li><a href="<?php echo U('index');?>"> 商品列表 </a></li>
		  <li><a href="javascript:;" class='action'> 添加商品 </a></li> 
		</ul> 
	  </div>
	<form action="<?php echo U('add');?>" method='post' enctype='multipart/form-data'>
	  <div class="tab">
		 <ul class="tab_menu">
		    <li lab="base"><a> 基本设置 </a></li>
		    <li lab="ext"><a> 扩展配置 </a> </li>
		    <li lab="pic"><a> 内容页展示图片 </a></li>
		    <li lab="brand"><a> 品牌 </a> </li>
		  </ul>
		
		<div class="tab_content">
			<div id="base">
			   <table class="table1 hd-form">
				   <tr>
					 <th class='w100'>栏目</th>
					 <td>
						<?php echo $cname;?>
						<input type="hidden" name='cid' value='<?php echo $cid;?>' />
					 </td>
				   </tr> 
					<tr>
						<th>商品名称</th>
						<td>
						  <input type="text"  name='gname' class='w200'/>
						</td>
					</tr>
					<tr>
						<th>属性</th>
						<td>
							<label><input type="radio" name='flag' value="1" /> 推荐</label>
							<label><input type="radio" name='flag' value="2" /> 置顶</label>
						</td>
					</tr>
					<tr>
						<th>商品图片</th>
						<td>
							<!-- <link rel="stylesheet" type="text/css" href="http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Uploadify/uploadify.css" />
            <script type="text/javascript" src="http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Uploadify/jquery.uploadify.min.js"></script>
            <script type="text/javascript">
            var HDPHP_CONTROL         = "http://127.0.0.1/MyShop/index.php/Goods/Goods";
            var UPLOADIFY_URL    = "http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Uploadify/";
            var HDPHP_UPLOAD_THUMB    ="200,200,500,500";
HDPHP_UPLOAD_TOTAL = 0</script>
            <script type="text/javascript" src="http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Uploadify/hd_uploadify.js"></script>
<script type="text/javascript">
    $(function() {
        hd_uploadify_options.removeTimeout  =0;
        hd_uploadify_options.fileSizeLimit  ="2MB";
        hd_uploadify_options.fileTypeExts   ="*.gif;*.jpg;*.png;*.jpeg";
        hd_uploadify_options.queueID        ="hd_uploadify_img_queue";
        hd_uploadify_options.showalt        =true;
        hd_uploadify_options.uploadLimit    =6;
        hd_uploadify_options.input_type    ="input";
        hd_uploadify_options.elem_id    ="";
        hd_uploadify_options.success_msg    ="正在上传...";//上传成功提示文字
        hd_uploadify_options.formData       ={water : "0", someOtherKey:1,hd_sid:"b2dopvh5bqbai09gbs61fuf8v1",upload_dir:"",hdphp_upload_thumb:"200,200,500,500"};
        hd_uploadify_options.thumb_width          =200;
        hd_uploadify_options.thumb_height          =150;
        hd_uploadify_options.uploadsSuccessNums = 0;
        $("#hd_uploadify_img").uploadify(hd_uploadify_options);
        });
</script>
<input type="file" name="up" id="hd_uploadify_img"/>
<div class="hd_uploadify_img_msg num_upload_msg">
<input type="checkbox" id="add_upload_water" uploadify_id="hd_uploadify_img" /><strong style="color:#03565E">是否添加水印</strong><span></span>单文件最大<strong>2MB，允许上传类型*.gif;*.jpg;*.png;*.jpeg</strong>
</div>

<div id="hd_uploadify_img_queue"></div>
<div class="hd_uploadify_img_files uploadify_upload_files" input_file_id ="hd_uploadify_img">
    <ul></ul>
    <div style="clear:both;"></div>
</div> -->
							<input type="file" name="pic"/>
						</td>
					</tr>
					<tr>
						<th>价格</th>
						<td>
							<input type="text"  name='price' class='w200'/>
						</td>
					</tr>
					<tr>
						<th>库存</th>
						<td>
							<input type="text"  name='stock' class='w200'/>
						</td>
					</tr>
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
					<?php echo $spec;?>	
			    </div>
		      </div>
		      
		      <div id="ext">
				<table class="table1 hd-form"> 
					<tr>
						<th class='w100'> 关键字 </th>
						<td>
							<input type="text" name='keywords' class='w300'/>
						</td>
					</tr>
					<tr>
						<th> 栏目描述 </th>
						<td>
								<textarea name="description" class='w400 h100'></textarea>
						</td>
					</tr>
					</tr>
					<tr>
						<th> 服务 </th>
						<td>
								<textarea name="service" class='w400 h100'></textarea>
						</td>
					</tr>
					<tr>
						<th> 点击数 </th>
						<td>
								<input type="text" name='click' value='200'/>
						</td>
					</tr>
					<tr>
						<th> 上架时间 </th>
						<td>
							<input type="text" name='addtime' id='addtime' class='w200' value="<?php echo date('Y/m/d H:i:s');?>"/>
							<script>
                               $('#addtime').calendar({format: 'yyyy/MM/dd HH:mm:ss'}); 
                            </script>
						</td>
					</tr>
					<tr>
						<th>详细介绍</th>
						<td>
							<script type="text/javascript" charset="utf-8" src="http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Ueditor/ueditor.config.js"></script><script type="text/javascript" charset="utf-8" src="http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Ueditor/ueditor.all.min.js"></script><script type="text/javascript">UEDITOR_HOME_URL="http://127.0.0.1/MyShop/hdphp/hdphp/Extend/Org/Ueditor/"</script><script id="hd_body" name="body" type="text/plain"></script>
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
	
						  <label>
						  	<li style="float: left;">
							  <img src="http://127.0.0.1/MyShop/<?php echo $b['logo'];?>" class='h50'/><br/>
							   <input type="radio" name='brand_bid' value='<?php echo $b['bid'];?>'/> <?php echo $b['bname'];?>
						    </li>
						 </label>	
					<?php $hd["list"]["b"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
				 </ul>
		      </div>
	    </div>  
		 <div>
			<input type="submit" value='确定' class='hd-success'/>
		 </div>	
	
     </form>
  </div>
</body>
</html>
