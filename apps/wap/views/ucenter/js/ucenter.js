

$(function(){

  // 验证登录表单
  $("#loginForm").validate({
      focusInvalid: true,
      rules: {
        phone: {
          required: true
        },
        codeMsg: {
          required: true
        }
      },
      messages: {
        phone: {
          required: "<span style='color:red;'>手机号码不能为空 :(</span>"
        },
        codeMsg: {
          required: "<span style='color:red;'>动态密码不能为空 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function(res){
              console.log(res);
              // res
              if (res.code == 1) {
                swal("登录失败", res.msg, "error");
              } else if (res.code == 2) {
                swal("登录失败", res.msg, "error");
              } else if (res.code == 3) {
                swal("登录失败", res.msg, "error");
              } else {
                window.location.reload();
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

// 登录弹窗事件
function login(){
  $('#loginModal').modal({
    backdrop: 'static',
    keyboard: false,
    show: true
  });
}

// 获取动态密码
 var clock = '';
 var nums = 60;
 var btn;
 function sendCode(thisBtn){
   btn = thisBtn;
   btn.disabled = true; //将按钮置为不可点击
   btn.value = nums+'秒后可重新获取';
   clock = setInterval(doLoop, 1000); //一秒执行一次

   // 获取手机号码
   var phone = $("input[name='phone']").val();
   if (phone == '' || phone == false) {
     swal("获取失败", "请输入正确的手机号码 :(", "error");
   } else {
     // Ajax 请求短信接口
     $.ajax({
      method: "POST",
      url: "/login/sendMsg",
      data: {
        phone: phone
      },
      dataType: "JSON",
      success: function(res){
        console.log(res);
        if (res.code == 1) {
          swal("获取失败", res.msg, "error");
        } else if (res.code == 2) {
          swal("获取失败", res.msg, "error");
        } else if (res.code == 0) {
          swal("获取成功", res.msg, "success");
        }
      },
      error: function(e){
        console.log(e);
      }
     });
   }
 }
 function doLoop(){
   nums--;
   if(nums > 0){
    btn.value = nums+'秒后可重新获取';
   }else{
    clearInterval(clock); //清除js定时器
    btn.disabled = false;
    btn.value = '点击发送验证码';
    nums = 10; //重置时间
   }
 }

 // 在线，离线，冻结
function onLine(status){
  console.log(status);
  var title;
  var text;
  if (status == 1) {
    title = "确认把状态设置为在线吗？";
    text = "在线后可正常接单 :)";
  } else if (status == 2) {
    title = "提示";
    text = "您当前已经被冻结，请联系客服！";
  } else if (status == 0) {
    title = "确认把状态设置为离线吗？";
    text = "离线后无法接单 :(";
  }
  // swal
  swal({
    title: title,
    text: text,
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "确定",
    cancelButtonText: "取消",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      // status 0>离线，1>在线，2>冻结
      if (status == 2) {
        window.location.open("http://wpa.qq.com/msgrd?v=3&uin=800814441&site=qq&menu=yes");
      } else {
        // Ajax
        $.ajax({
          method: "POST",
          url: "/login/updateStatus",
          data: {
            status: status
          },
          dataType: "JSON",
          success: function(res){
            console.log(res);
            if (res.code == 1) {
              swal("提交失败", res.msg, "error");
            } else {
              swal("提交成功", res.msg, "success");
              setTimeout("window.location.reload();",2000);
            }
          },
          error: function(e){
            console.log(e);
          }
        });
      }
    } else {
      swal("取消了", "不受影响的操作 :)", "error");
    }
  });
}