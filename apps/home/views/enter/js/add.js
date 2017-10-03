$(function(){

  // 初始化阅读条款
  $('#clauseModal').modal({
    backdrop: 'static',
    keyboard: false,
    show: true
  });

  // 初始化日期时间插件
  $(".form_datetime").datetimepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    language: 'zh-CN',
    minView: 'month'
  });

  // 验证个人信息表单
  $("#usersForm").validate({
      focusInvalid: true,
      rules: {
        age: {
          required: true
        },
        city: {
          required: true
        },
        i_signature: {
          required: true
        },
        stature: {
          required: true,
          digits: true
        },
        weight: {
          required: true,
          digits: true
        },
        interests: {
          required: true
        }
      },
      messages: {
        age: {
          required: "<span style='color:red;'>年龄不能为空 :(</span>"
        },
        city: {
          required: "<span style='color:red;'>城市不能为空 :(</span>"
        },
        i_signature: {
          required: "<span style='color:red;'>个性签名不能为空 :(</span>"
        },
        stature: {
          required: "<span style='color:red;'>身高不能为空 :(</span>",
          digits: "<span style='color:red;'>必须输入整数 :(</span>"
        },
        weight: {
          required: "<span style='color:red;'>体重不能为空 :(</span>",
          digits: "<span style='color:red;'>必须输入整数 :(</span>"
        },
        interests: {
          required: "<span style='color:red;'>兴趣爱好不能为空 :(</span>"
        }
      },
      submitHandler: function(form){
        // 获取选中的视频
        var video_path = $("#video_path").val();
        var video_path_text = $("#video_path_text").val();
        if (video_path == '' && video_path_text == '') {
          swal("提交失败", "请上传10秒左右个人自拍视频MP4格式 :(", "error");
        } else {
          $(form).ajaxSubmit({
              dataType:"json",
              success:function(res){
                console.log(res);
                // res
                if (res.code == 0) {
                  swal("提交成功", res.msg, "success");
                  setTimeout("window.location.reload();",2000);
                } else {
                  swal("提交失败", res.msg, "error");
                }
              },
              error:function(e){
                console.log(e);
                swal("未知错误 :(", "请刷新页面后重试!", "error");
              }
          });
        }
      }
  });

});

// 同意
function consent(){
  $('#clauseModal').modal('hide');
}

// 申请陪玩服务
function gotoService(u,ui){
  // 检测基本信息是否完善
  if (u != 1 || ui != 1) {
    swal("提示", "请完善基本资料后申请陪玩服务 :(", "error");
  } else {
    window.location.href = "/enter/service";
  }
}