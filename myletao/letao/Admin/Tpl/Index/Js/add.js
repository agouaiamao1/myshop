$(function (){
	$("form").validate({
		//验证规则
		cname:{
			rule:{
				required:true,
				ajax:CONTROL+"/check_add"
			},
			error:{
				required:"分类不能为空",
				ajax:"分类已存在"
			},
			message:"请输入分类名"
		}
	})
})