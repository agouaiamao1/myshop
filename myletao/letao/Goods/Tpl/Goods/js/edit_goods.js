$(function(){
	//获得当前编辑商品的属性
	get_goods_attr();
	//获得当前编辑商品的库存
	get_goods_stock();
})
/**
 * 修改商品时，获得当前商品的属性信息
 */
function get_goods_attr(){
	$.post(CONTROL+'&m=get_goods_attr',{gid:gid},function(data){
			$(data).each(function(i){
				var attr=data[i];
				switch(parseInt(attr['show_type'])){
					case 1:
						//文本框
						$('input[av_id='+attr['avid']+']').val(attr['attr_value']);
						break;
					case 2:
						//单选框
						$('input[av_id='+attr['avid']+']').attr('checked',true);
						break;
					case 3:
						//浮选框
						$('input[av_id='+attr['avid']+']').attr('checked',true);
						break;
					case 4:
						//下拉框
						$('option[av_id='+attr['avid']+']').attr('selected','selected');
						break;
				}
			})
	},'json');
}
//获得当前商品的库存
function get_goods_stock(){
	$.post(CONTROL+'&m=get_goods_stock',{gid:gid},function(data){
			$(data).each(function(i){
				var _tr = $('div#spec table tr:eq(1)').clone();
				//库存信息
				var stock = data[i];
				$("input[name*='stock']",_tr).val(stock.st_stock);
				$("input[name*='price']",_tr).val(stock.st_price);
				$("input[name*='good_num']",_tr).val(stock.good_num);
				$('div#spec table tbody').append(_tr);
				//改变规格选中状态
				for(var i=0;i<stock.attr.length;i++){
					$('option[av_id='+stock.attr[i]+']',_tr).attr('selected',true);
				}
				//库存id表单
				var _input = '<input type="hidden" name="goods_stock[]" value="'+stock['stid']+'"/>';
				$('td:eq(0)',_tr).append(_input);
			})	
		$('div#spec table tr:eq(1)').remove()
	},'json');
}

//编辑商品时删除内容页图片
function del_pic(obj,pic_id){
	var obj = $(obj);
	$.post(CONTROL+'&m=del_pic',{pic_id:pic_id},function(data){
			if(data.state==1){
				obj.parent().remove();
			}
	},'json');
}
