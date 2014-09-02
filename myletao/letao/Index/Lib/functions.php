<?php
/**
 * 商品列表页，搜索属性的url
 * @return [type] [description]
 */
function get_seach_url($index,$av_id,$attr_value){
	$param =explode('-',Q('s'));
	$class='';
	if($param[$index]==$av_id){
		$class=' class="active1"';
	}
	$param[$index]=$av_id;
	$s='s='.implode('-', $param);
	$href= U('category',$s);
	return "<a href='$href' $class>$attr_value</a>";
}