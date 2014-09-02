$(function (){
	$("form").validation({
		//验证规则
		webname:{
			rule: {
				required: true
			},
			error: {
				required: "网站名不能为空 ! !"
			}
		},
	url:{
			rule: {
				required: true
			},
			error: {
				required: "url地址不能为空 ! !"
			}
		}
	})
})