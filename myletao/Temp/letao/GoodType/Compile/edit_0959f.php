<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>添加属性</title>
    <script type='text/javascript' src='http://localhost/MyShop/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/MyShop/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/MyShop/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/MyShop/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/MyShop/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/MyShop';
		WEB = 'http://localhost/MyShop/index.php';
		URL = 'http://localhost/MyShop/index.php/GoodType/GoodAttr/attr_edit/acid/9/gid/1';
		HDPHP = 'http://localhost/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/MyShop/hdphp/hdphp/Extend';
		APP = 'http://localhost/MyShop/index.php/GoodType';
		CONTROL = 'http://localhost/MyShop/index.php/GoodType/GoodAttr';
		METH = 'http://localhost/MyShop/index.php/GoodType/GoodAttr/attr_edit';
		GROUP = 'http://localhost/MyShop/./myletao';
		TPL = 'http://localhost/MyShop/./myletao/letao/GoodType/Tpl';
		CONTROLTPL = 'http://localhost/MyShop/./myletao/letao/GoodType/Tpl/GoodAttr';
		STATIC = 'http://localhost/MyShop/Static';
		PUBLIC = 'http://localhost/MyShop/./myletao/letao/GoodType/Tpl/Public';
		HTTPREFERER = 'http://localhost/MyShop/index.php/GoodType/GoodAttr/index/gid/1';
</script>
    <script type="text/javascript" src="http://localhost/MyShop/./myletao/letao/GoodType/Tpl/GoodAttr/js/js.js"></script>
</head>
<style>
    .h{
        display: none;
    }
</style>
<body>
    <div class="menu_list"> 
        <ul>
            <li><a href="<?php echo U('index');?>"> 属性列表 </a></li>
            <li><a href="javascript:;" class="action"> 编辑属性 </a></li> 
        </ul> 
    </div>
    <form action="<?php echo U('attr_edit');?>" method='post' class='hd-form' >
        <input type="hidden" name='gid' value='<?php echo $gid;?>'/>
        <input type="hidden" name='acid' value='<?php echo $data['acid'];?>'/>
        <input type="hidden" name='avid' value='<?php echo $attr[0]['avid'];?>'/>
        <input type="hidden" name='show_type' value='<?php echo $data['show_type'];?>'/>
    	<div class='title-header'>编辑属性</div>
    	<table class="table1">
    		<tr>
    			<th class='w100'>属性名称</th>
    			<td>
    				<input type="text" name='attr_name' class='w200' value="<?php echo $data['attr_name'];?>"/>
    			</td>
    		</tr>
         <?php if($data['is_spec'] == '0'){?>
            <!--文本框默认值-->
            <tr id='input'>
                <th>默认值</th>
                <td>
                    <!-- <input type="text" name="attr_value" class="w200" value="<?php echo $attr[0]['attrvalue'];?>"/> -->
                     <input type="text" name="attr_value[<?php echo $value[0]['avid'];?>]" value="<?php echo $attr[0]['attrvalue'];?>" class="w200"/>
                </td>
            </tr>
        <?php  }else{ ?>
            <!--单选|复选|下拉列表-->
            <tr id='select'>
                <th>属性值</th>
                <td>                   
                   <ul>
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
 
                     <li>
                       <input type="text" name="attr_value[id_<?php echo $a['avid'];?>]" class="w200" value="<?php echo $a['attrvalue'];?>"/>
                       <?php if($hd['list']['a']['first']){?>
                          <button class='hd-cancel' type="button" onclick='add_field()'>添加</button>
                       <?php  }else{ ?>
                          <button class="hd-cancel" onclick="remove_field(this)" type="button">移除 </button>
                       <?php }?>
                     </li>
                   <?php $hd["list"]["a"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                   </ul>
                </td>
            </tr>
        <?php }?>
    	</table>
			<div class='position-bottom'>
				<input type="submit" value="确定" class="hd-success"/>
        <input type="reset" value="重置" class="hd-success"/>
			</div>
    </form>
</body>
<script type="text/javascript">
   function add_field(){
    var html='<li>\
               <input type="text" name="attr_value[]" class="w200"/>\
               <button type="button" class="hd-cancel" onclick="remove_field(this)">移除\
               </button>';
  $("tr#select td ul").append(html);
}
   function remove_field(obj){
       $(obj).parent().remove();
}   
</script>
</html>























