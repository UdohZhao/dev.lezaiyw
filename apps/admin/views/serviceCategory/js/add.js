$(function(){

  // 验证添加服务类别表单
  $("#serviceCategoryForm").validate({
      focusInvalid: true,
      rules: {
        cname: {
          required: true
        },
        sort: {
          required: true,
          digits: true
        }
      },
      messages: {
        cname: {
          required: "<span style='color:red;'>服务类别名称不能为空 :(</span>"
        },
        sort: {
          required: "<span style='color:red;'>排序不能为空 :(</span>",
          digits: "<span style='color:red;'>必须输入整数 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function( res ){
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
  });

});