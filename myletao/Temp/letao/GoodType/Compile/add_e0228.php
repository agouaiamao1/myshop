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
		URL = 'http://localhost/MyShop/index.php/GoodType/GoodAttr/attr_add/gid/1';
		HDPHP = 'http://localhost/MyShop/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/MyShop/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/MyShop/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/MyShop/hdphp/hdphp/Extend';
		APP = 'http://localhost/MyShop/index.php/GoodType';
		CONTROL = 'http://localhost/MyShop/index.php/GoodType/GoodAttr';
		METH = 'http://localhost/MyShop/index.php/GoodType/GoodAttr/attr_add';
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
            <li><a href="javascript:;" class="action"> 添加属性 </a></li> 
        </ul> 
    </div>
    <form action="<?php echo U('attr_add');?>" method='post' class='hd-form' >
        <input type="hidden" name='gid' value='<?php echo $gid;?>'/>
    	<div class='title-header'>添加属性</div>
    	<table class="table1">
    		<tr>
    			<th class='w100'>属性名称</th>
    			<td>
    				<input type="text" name='attr_name' class='w200'/>
    			</td>
    		</tr>
            <tr>
                <th class='w100'>显示方式</th>
                <td>
                    <select name="show_type" onchange="select_show_type(this)">
                        <option value="1">文本框</option>
                        <option value="2">单选框</option>
                        <option value="3">复选框</option>
                        <option value="4">下拉列表框</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th class='w100'>是否规格</th>
                <td>
                   <label for="aa"><input id="aa" checked="true" type="radio" value="0" name="is_spec"/>  否  </label>
                   <label for="bb"><input id="bb" type="radio" value="1" name="is_spec"/>  是</label>
                </td>
            </tr>
            <!--文本框默认值-->
            <tr id='input'>
                <th>默认值</th>
                <td>
                    <input type="text" name="attr_value" class="w200"/>
                </td>
            </tr>
            <!--单选|复选|下拉列表-->
            <tr class="h" id='select'>
                <th>属性值</th>
                <td>
                   <ul>
                     <li>
                       <input type="text" name="attr_value[]" class="w200" disabled="disabled"/>
                       <button class='hd-cancel' type="button" onclick='add_field()'>添加</button>
                     </li>
                   </ul>
                </td>
            </tr>
    	</table>
			<div class='position-bottom'>
				<input type="submit" value="确定" class="hd-success"/>
                <input type="reset" value="重置" class="hd-success"/>
			</div>
    </form>
</body>
<script type="text/javascript">
   function select_show_type(obj){
    switch(parseInt($(obj).val())){
        case 1:
            //文本框
            $("tr#input").removeClass('h');
            $("tr#select").addClass('h');
            $("tr#select").find('input').attr('disabled','disabled')
            $("tr#input").find('input').removeAttr('disabled');
        break;
        default:
            $("tr#input").addClass('h');
            $("tr#select").removeClass('h');
            $("tr#input").find('input').attr('disabled','disabled')
            $("tr#select").find('input').removeAttr('disabled');
    }
} 
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























