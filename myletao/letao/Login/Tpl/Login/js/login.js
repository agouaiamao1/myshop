$(function(){



//加载页面时候自动获得焦点
	$('#username').focus();
//点击验证码刷新
	var src = $('.yzm-img').attr('src');
	$('.yzm-img').click(function() {
		$(this).attr('src', src +　'&' + Math.random());
	});
	
})


