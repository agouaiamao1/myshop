$(function (){

//消息中心 我的乐淘 浏览记录
    $("#lt_top .lttop .letaomenu .lt_top_box").mouseenter(function (){
		$(this).find(".down").addClass("hover").siblings('.mytao1').stop().css({display:"block"});
	})
	$("#lt_top .lttop .letaomenu .lt_top_box").mouseleave(function (){
		$(this).find(".down").removeClass("hover").siblings('.mytao1').stop().css({display:"none"});
	})

 //导航部分的js代码
   $(".first a.f").hover(function (){
      $(this).addClass("hover");
   },function (){
     $(this).removeClass("hover");
   })

 


 var a = $("#lt_nav .ltnav .ceshi");
for (var i = 0; i < a.length; i++) {
  var obj = a.eq(i);
  obj.mouseenter(function(){
    $(this).find('.sub').addClass("subhover");
    $(this).find(".letao_cmf").stop().fadeTo(100,1).css({display:"block"});
  })
 obj.mouseleave(function(){
    $(this).find('.sub').removeClass("subhover");
    $(this).find(".letao_cmf").stop().fadeTo(50,0).css({display:"none"});
  })
};




$("#lt_car").hover(function (){
    $("#lt_nav #lt_car .lt_shopcar").stop().fadeTo(400,1).css({display:"block"});
},function (){
   $("#lt_nav #lt_car .lt_shopcar").stop().fadeTo(400,0).css({display:"none"});
})
})