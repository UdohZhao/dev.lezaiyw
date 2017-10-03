$(function(){

  // 验证登录表单
  $("#loginForm").validate({
      focusInvalid: true,
      rules: {
        username: {
          required: true
        },
        password: {
          required: true,
          minlength: 6
        },
        code: {
          required: true,
          remote: {
              url: "/admin/login/checkCode",     //后台处理程序
              type: "post",               //数据发送方式
              dataType: "json",           //接受数据格式
              data: {                     //要传递的数据
                  code: function() {
                      return $("#code").val();
                  }
              },
              error: function(e){
                console.log(e);
              }
          }
        }
      },
      messages: {
        username: {
          required: "<span style='color:red;'>用户名不能为空 :(</span>"
        },
        password: {
          required: "<span style='color:red;'>密码不能为空 :(</span>",
          minlength: "<span style='color:red;'>密码长度不能小于6个字符 :(</span>"
        },
        code: {
          required: "<span style='color:red;'>验证码不能为空 :(</span>",
          remote: "<span style='color:red;'>验证码错误 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function( res ){
              console.log(res);
              // res
              if (res.code == 1) {
                swal("登录失败", res.msg, "error");
              } else if (res.code == 2) {
                swal("登录失败", res.msg, "error");
              } else {
                window.location.href = '/admin/index/index';
              }
            },
            error:function(e){
              console.log(e);
              swal("未知错误 :(", "请刷新页面后重试!", "error");
            }
        });
      }
  });

})