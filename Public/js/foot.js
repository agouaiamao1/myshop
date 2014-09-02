
//页面尾部的js部分
$(function (){
  $("#ltfooter p span a").mouseover(function (){
   $(this).addClass('onchos').siblings('a').removeClass('onchos');
   var aa=$(this).index();
   $("#ltfooter .lt_fcontent div").eq(aa).fadeIn(300).siblings('div').css({display:"none"});
  })
//轮播下面的js

    var first = $(".ad_box p a");
    var fimg = $(".ad_box a img");
    var second = $(".goods_box p a");
    var simg = $(".goods_box a img");
    img_lunbo(first,fimg);
    img_lunbo(second,simg);
  


  function img_lunbo(aaa,img){
        var c=0;
        var timer2=setInterval(move2,4000);
           aaa.mouseover(function (){
            clearInterval(timer2);
            c=$(this).index();
            aaa.eq(c).addClass("imgfocus").siblings("a").removeClass("imgfocus");
             img.eq(c).stop().fadeTo(700,1).siblings().stop().fadeOut(400,0).css({display:"none"});
           })   
          aaa.mouseout(function (){
            timer2=setInterval(move2,4000);
           })    
          function move2(){
             c++;
             if(c==5){
              c=0
             } 
            aaa.eq(c).addClass("imgfocus").siblings("a").removeClass("imgfocus");
            img.eq(c).stop().fadeTo(700,1).siblings().stop().fadeOut(400,0).css({display:"none"});
           return null;
          }  
          return null;      
      }

   // 帮助中心的js


   $("#p_helpleft h2").mouseover(function (){
    $(this).addClass('hover').siblings('h2').removeClass('hover');
   })


})











