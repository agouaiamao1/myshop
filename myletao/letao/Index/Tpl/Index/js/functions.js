$(function (){
	 // �Ŵ������js
    $(".lm").mouseover(function (){
       $(".box ul").stop().animate({left:"0px"},"slow");
    })
    $(".rm").mouseover(function (){
       $(".box ul").stop().animate({left:"-155px"},"slow");
    })
    $(".box ul li").mouseover(function (){
        $(this).css({border:"1px solid rgb(254, 90, 131)"});
    })
    $(".box ul li").mouseout(function (){
        $(this).css({border:"1px solid rgb(204, 204, 204)"});
    })




    // �Ŵ���ߵ�js
    var len = $("dl#shoe_size_list dd").length;
    for(var i = 0; i<len;i++){
    	var obj =$("dl#shoe_size_list dd").eq(i);
    	obj.mouseover(function (){
    		var a = $(this).index();
    		var a1 = $(this).text();
    		var a2 = $(this).attr('shoe_len');
    		$("#ltshoesizeinfo").css({
    			left: a * 22 + "px",
    		}).show().find(".sdsd i").text(a1);
    		$("#ltshoesizeinfo").find(".dsds i").text(a2);
    	})
    	obj.mouseout(function (){
    		var a = $(this).index();
    		$("#ltshoesizeinfo").css({
    			left: a * 30 + "px",
    		}).hide();
    	})
    }

    // �������۷������ֵ�js����

    $("#shoetab ul li").each(function (){
    	var a = $(this).index();
    	$("#shoetab ul li").click(function (){
    		$(this).eq(a).addClass('lttabchos').siblings("li").removeClass("lttabchos")
    		// $("#shoetab")
    	})

    })

    var start_h = $("#shoetab").offset().top;
    $(window).bind("scroll",function (){
    	var scroll_t = $(window).scrollTop();
    	if(scroll_t>start_h){
    		$("#shoetab").css({
    			top:0,
    			position:"fixed",
    			width: 790+"px",
          zIndex: 9999
    		})
    	}else{
    		$("#shoetab").css({
    			top:555+"px",
    			position:"static"
    		})    		
    	}
    })
// ���ʱ��ص�ԭʼλ��
     $("#shoetab ul li").click(function (){
    		var scroll_t = $(window).scrollTop();
// ���������ĸ߶�С��555ʱ�򲻻��
    		if(scroll_t<555){
    		return;
    		}else{
    		$(window).scrollTop(555);	
    		}
    	})


  $("#leel1").click(function (){$("div.1").css({display:"block"})})
  $("#leel2").click(function (){
    $("#usercommentcontain,#custommessage").css({display:"block"}) 
    $("#shoeimages,#usercommentcontain,#angel").css({
      display:"none"
    }) 
 })
  $("#leel3").click(function (){
    $("#othercolorprod,#finallybuy").css({
      display:"block"
    })  
    $("#shoeimages,#usercommentcontain,#angel,#custommessage").css({
      display:"none"
    })   
  })
  $("#leel4").click(function (){$("#custommessage").css({display:"block"}).siblings('.1').css({display:"none"}) })
  $("#leel5").click(function (){
    $("#angel").css({
      display:"block"
    }).siblings('.1').css({
      display:"none"
    })
  })







})

//ͨ��������ȡ����
/*
  classname     ָ���ҵ�����
  [obj]         ָ��һ�����ҷ�Χ       
*/
function getClass (classname,obj) {
     var obj=obj||document;
	 var arr=[];
	 if(obj.getElementsByClassName){
	    return obj.getElementsByClassName(classname)
	 }else{
	   var alls=obj.getElementsByTagName("*");
	   for (var i=0; i<alls.length; i++) {
	     if(checkclass(alls[i].className,classname)){
		  arr.push(alls[i])
		 }
	   }
	   return arr;
	 }
   }


