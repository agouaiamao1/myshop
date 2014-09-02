    window.onload=function(){
      var sha=document.getElementsByClassName("adv_show");var sha1=document.getElementsByClassName("adv_show1");
      var sha2=document.getElementsByClassName("adv_show2");var sha3=document.getElementsByClassName("adv_show3");
      shadow(sha);  shadow(sha1);  shadow(sha2);  shadow(sha3);
    function shadow(sha){
      for (var i = 0; i < sha.length; i++) {
        sha[i].index=i;
        sha[i].onmouseover=function(){
        for (var j = 0; j < sha.length; j++) {
          animate(sha[j],{opacity:0.8},100,Tween.Quad.easeIn);
        };
        animate(sha[this.index],{opacity:1},100,Tween.Quad.easeIn);
      };
        sha[i].onmouseout=function(){
      for (var j = 0; j < sha.length; j++) {
          animate(sha[j],{opacity:1},100,Tween.Quad.easeIn);
        };
      }
    }
  }
}