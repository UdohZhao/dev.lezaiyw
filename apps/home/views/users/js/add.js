$(function(){

  // 验证个人信息表单
  $("#usersForm").validate({
      focusInvalid: true,
      rules: {
        nickname: {
          required: true
        },
        qq: {
          required: true,
          digits: true
        },
        phone: {
          required: true,
          digits: true
        }
      },
      messages: {
        nickname: {
          required: "<span style='color:red;'>昵称不能为空 :(</span>"
        },
        qq: {
          required: "<span style='color:red;'>QQ号码不能为空 :(</span>",
          digits: "<span style='color:red;'>必须输入整数 :(</span>"
        },
        phone: {
          required: "<span style='color:red;'>手机号码不能为空 :(</span>",
          digits: "<span style='color:red;'>必须输入整数 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function(res){
              console.log(res);
              // res
              if (res.code == 1) {
                swal("提交失败", res.msg, "error");
              } else if (res.code == 2) {
                swal("提交失败", res.msg, "error");
              } else if (res.code == 3) {
                swal("提交失败", res.msg, "error");
              } else {
                swal("提交成功", res.msg, "success");
                setTimeout("window.location.reload();",2000);
              }
            },
            error:function(e){
              console.log(e);
              swal("未知错误 :(", "请刷新页面后重试!", "error");
            }
        });
      }
  });

});

// 上传头像
function avatarChange(){
  // 获取本地图片位置
  var avatar = $("#avatar").val();
  if (avatar) {
    var formData = new FormData($("#avatarForm")[0]);
    $.ajax({
        url: "/users/upAvatar",
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (res) {
          console.log(res);
          if (res.code == 1) {
            swal("更新失败", res.msg, "error");
          } else {
            $("#avatarImg").attr("src",res.data);
          }
        },
        error: function (e) {
          console.log(e);
        }
    });
  }
}







