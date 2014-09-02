


$(function (){
// $("#good_list p span a").click(function (){
//     var aa = true;
//   if(aa){
//      $(this).parent().parent().css({display:"none"}).parent().css({height:"auto"});
//      var s = ($(this).text());
//      $("#good_header em").append("<a href='##'>"+s+"</a>");
//      aa = false;
//   }
// })


//我的地址的js
  $("#add_new_address").click(function (){
  	var form = $("#AddressPopUp");
    dialog(form);
  })
  $("#d_close").click(function (){
  	 $("#AddressPopUp").fadeOut();
  })

  function dialog (obj) {
	obj.css( {
		left : ( $( window ).width() - obj.width() ) / 2,
		top : $( document ).scrollTop() + ( $( window ).height() - obj.height() ) / 2
	} ).fadeIn();
   }

  $("a[modifyhref=yes]").click(function (){
      $(this).css({display:"none"}).next().css({display:"inline"})
      $(".chgclass").css({display:'none'}).next('span').css({display:'inline'})
      $("tr[name=chg]").css({display:'block'})
  })
  $("a[add=2611062]").click(function (){
      $(this).css({display:"none"}).prev().css({display:"inline"})
      
      $(".chgclass").css({display:'block'}).next('span').css({display:'none'})
      $("tr[name=chg]").css({display:'none'})
  })

})