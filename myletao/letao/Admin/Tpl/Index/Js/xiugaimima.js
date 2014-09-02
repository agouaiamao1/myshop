$(function(){
	//修改密码验证表单
   $("form").validate({
     passwd: {  
     	rule: {  
     	// user: "3,10",  
     	required: true  
       },  
        error: {
        // user: " 密码不能小于 3 个字符 ",
        required: " 密码不能为空 "
       }
       // message: " 密码长度 6 到 20 位 ",
       // success: " 密码格式输入正确 "
     },
     passwded: {
        rule: {
           confirm: "passwd"
         },
        error: {
           confirm: " 两次密码不一致 "
       }
     }
  })
})