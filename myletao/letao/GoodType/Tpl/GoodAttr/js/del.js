function attr_del(acid){
	$.ajax({
	url:CONTROL+"?m=attr_del&acid="+acid,
	success:function (data){
		if(data==1){
			$.dialog({
				message:"删除成功!",
				type:"success",
				close_handler:function(){
					location.href = location.href;
				}
			})
		}

	}
  })
}