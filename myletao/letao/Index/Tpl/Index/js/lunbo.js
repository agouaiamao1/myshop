	$(function (){
         var a=0;
         var timer=setInterval(move,4000);
          $("#lt_slide .im_slide,#lt_slide .jiantou").hover(
          	function (){
          	   clearInterval(timer);
               $("#lt_slide .jiantou .left,#lt_slide .jiantou .right").css({display:"block"});
            },
            function (){
              timer = setInterval(move,4000);
              $("#lt_slide .jiantou .left,#lt_slide .jiantou .right").css({display:"none"})
          })
           var s=a;
         $(".left,.right").click(function (){
         	clearInterval(timer);
         	s++;
            if(s==2){
            	s=0
            }
            $(".img").eq(s).siblings().stop().animate({opacity:0},1000).css({display:"none"}); 
            $(".img").eq(s).stop().animate({opacity:1},1000).css({display:"block"}); 
         })

        function move(){
            a++;
            if(a==2){
            	a=0
            }
            $(".img").eq(a).siblings().stop().animate({opacity:0},1000).css({display:"none"}); 
             $(".img").eq(a).stop().animate({opacity:1},1000).css({display:"block"});
         }
         return false;
	})