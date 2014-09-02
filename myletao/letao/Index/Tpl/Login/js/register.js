var validate = {
	username:false,
	pwd   : false,
	pwded : false,
	loginuser : false,
	loginpwd  : false
}
var msg = '';


//验证表单
$(function (){

  var register = $('form[name=register]');
  register.submit(function (){
  	//乐淘协议的js部分
  	if($("#protocol").attr("checked")!="checked"){
        alert("请接受《乐淘协议》后，完成注册");
        return false;
  	}
  	var ok = validate.pwd && validate.pwded && validate.username;
    if(ok){
    	return true;
    }
    //点击提交按钮依次出发拾取焦点
    $('input[name=username]').trigger('blur');
    $('input[name=pwd]').trigger('blur');
    $('input[name=pwded]').trigger('blur');
    return false;
  })


//验证用户名
$("input[name=username]").blur(function (){
	var username = $.trim($(this).val());
	var span = $(this).next();
		//不能为空
	if(username == ''){
		msg = '用户名不能为空！';
		span.html(msg).removeClass('reg_right').addClass('reg_error');
		validate.username = false;
		return;
	}
 //正则判断
    if(!/^\w{6,32}$/g.test(username)){
	    msg = '用户名的长度应在6-32位之间';
		span.html(msg).removeClass('reg_right').addClass('reg_error');
		validate.username = false;
		return;
    }
  //异步验证用户名是否存在<没有完成>、、ok tyzt
	$.ajax({
		type:"post",
		url :APP+"/Login/register",
	    dataType:"json",
		data:{"user":username},
		success:function(json){
			if(json.success==1){
			  msg = '';
		      span.html(msg).removeClass('reg_error').addClass('reg_right');
		      validate.username = true;
			}else{
             msg = '用户名已存在！';
		     span.html(msg).removeClass('reg_right').addClass('reg_error');
		     validate.username = false;				
			}
		}
	})	
})
//验证密码
	$('input[name=pwd]').blur(function(){
		var pwd = $(this).val();
		var span = $(this).next();
		//不能为空
		if(pwd == ''){
			msg = '密码不能为空';
			span.html(msg).removeClass('reg_right').addClass('reg_error');
			validate.pwd = false;
			return;
		}
		//正则判断
		if(!/^\w{3,25}$/g.test(pwd)){
			msg = '密码的长度应在3-25位之间';
			span.html(msg).removeClass('reg_right').addClass('reg_error');
			validate.pwd = false;
			return;
		}

		msg = '';
		validate.pwd = true;
		span.html(msg).removeClass('reg_right').addClass('reg_right');

	})

//确认密码
	$('input[name=pwded]').blur(function(){
		var pwded = $(this).val();
		var span = $(this).next();
		//确认密码不能为空
		if(pwded == ''){
			msg = '请确认密码';
			span.html(msg).removeClass('reg_right').addClass('reg_error');
			validate.pwded = false;
			return;
		}
		//两次密码是否相同
		if(pwded != $('input[name=pwd]').val()){
			msg = '两次密码不一致！';
			span.html(msg).removeClass('reg_right').addClass('reg_error');
			validate.pwded = false;
			return;
		}
		msg = '';
		span.html(msg).removeClass('reg_error').addClass('reg_right');
		validate.pwded = true;


	});


//>>>>>>>>>>>>>>>>>>>>>一下是用户登录验证>>>>>>>>>>>>>>>>>>>>>>>
     var login = $('form[name=login]');
     login.submit(function (){
     	var lok = validate.loginuser && validate.loginpwd;
     	if(lok){
     		return true;
     	}
        $('input[name=loginuser]').trigger('blur');
        $('input[name=loginpwd]').trigger('blur');
        return false;
     })

     $("input[name=loginuser]").blur(function (){
     	var loginuser = $(this).val();
     	var span = $(this).next();
     	if(loginuser == ""){
     		msg='用户名不能为空！';
     		span.html(msg).removeClass('reg_right').addClass('reg_error');
     		validate.loginuser = false;
     		return;
     	}
     	if(!/^\w{6,32}$/g.test(loginuser)){
  		  msg = '用户名的长度应在6-32位之间';
		   span.html(msg).removeClass('reg_right').addClass('reg_error');
		  validate.loginuser = false;
		   return;
     	}
 		msg = '';
		validate.loginuser = true;
		span.html(msg).removeClass('reg_error').addClass('reg_right');    	
     })
//验证密码
	$('input[name=loginpwd]').blur(function(){
		var pwd = $(this).val();
		var span = $(this).next();
		//为空的情况
		if(pwd == ''){
			span.html('请输入密码').removeClass('reg_right').addClass('reg_error');
			validate.loginpwd = false;
			return;
		}
     	if(!/^\w{3,25}$/g.test(pwd)){
  		  msg = '密码的长度应在3-25位之间';
		   span.html(msg).removeClass('reg_right').addClass('reg_error');
		   validate.loginpwd = false;
		   return;
     	}
 		msg = '';
		validate.loginpwd = true;
		span.html(msg).removeClass('reg_error').addClass('reg_right');  
	})
})
