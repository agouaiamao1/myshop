$(function () {
    $("form").validate({
        //验证规则
        old_password: {
            rule: {
                required: true,
                ajax: CONTROL + "&m=check_password"
            },
            error: {
                required: "旧密码不能为空",
                ajax: "密码输入错误"
            }
        },
        password: {
            rule: {
                required: true,
                regexp: /^\w{6,}$/
            },
            error: {
                required: "密码不能为空",
                regexp: "密码不能小于6位"
            }
        },
        c_password: {
            rule: {
                required: true,
                confirm: "password"
            },
            error: {
                required: "确认密码不能为空",
                confirm: "两次密码不一致"
            }
        }
    })

    $("form").submit(function () {
        if ($(this).is_validate()) {
            var post = $(this).serialize();
            $.ajax({
                type: "POST",
                url: CONTROL + "&m=change_pass",
                cache: false,
                data: post,
                success: function (stat) {
                    if (stat == 1) {
                        $.dialog({
                            message: "修改成功!",
                            type: "success",
                            close_handler: function () {
                                // top.location.href = URL;
                               window.history.go(-1);
                            }
                        });
                    } else {
                        $.dialog({
                            message: "修改失败",
                            type: "error"
                        });
                    }
                }
            })
        }
    })


})
            // $.dialog({
            //     message:"删除成功!",
            //     type:"success",
            //     close_handler:function(){
            //         location.href = location.href;
            //     }
            // })