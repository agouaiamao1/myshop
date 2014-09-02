$(function () {
  $("form").validate({
    gname: {
       rule: {
       required: true
    },
     error: {
       required: " 用户名不能为空 "
    },
    message: "添加商品名"
   },
   keywords: {
       rule: {
       required: true
    },
     error: {
       required: "关键字不能为空 "
    },
    message: "请添加关键字"
   },
   description: {
       rule: {
       required: true
    },
     error: {
       required: "商品描述不能为空 "
    },
    message: "请添加商品描述"
   },
  service:{
       rule: {
       required: true
    },
     error: {
       required: "商品服务不能为空"
    },
    message: "请添加商品服务"
   },
  })
})