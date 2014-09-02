$(function (){
	$('select[name=cid]').change(function(){
		var cid = $(this).val();
		if($(this).index()<2){
			$.post(CONTROL+'/get_cat', {cid : cid} , function(data){
				if(data){
					var option = '';
					$.each(data, function(i, k){
						option += '<option value="' + k.cid + '">' + k.cname + '</option>';		
					});	
					$('#ads').show().html(option).removeClass('hidden');
				}
			}, 'json');
		}
	})


// $.each( [0,1,2], function(i, n){
//   alert( "Item #" + i + ": " + n );
// });

})
//添加内容页图片
function add_pic(){
	var html='<tr>\
<th>\
<a href="javascript:;" onclick="remove_pic(this)">[-]</a>\
</th>\
<td>\
<input type="file" name="good_pic[]">\
</td>\
</tr>';
$("table#c_pic").append(html);
}
function remove_pic(obj){
	$(obj).parents('tr').eq(0).remove();
}
