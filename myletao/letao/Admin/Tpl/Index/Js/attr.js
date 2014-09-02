$(function (){
	$("form").validate({
		//验证规则
		attr:{
			rule:{
				required:true,
				ajax:CONTROL+"/check_add"
			},
			error:{
				required:"属性名不能为空",
				ajax:"属性名已存在"
			},
			message:"请输入属性名"
		}
	})
})