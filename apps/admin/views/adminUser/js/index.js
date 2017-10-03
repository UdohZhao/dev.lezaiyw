$(function(){

});

// 删除
function del(id){
  console.log(id);
  swal({
    title: "确认删除吗？",
    text: "删除后将不可恢复 :(",
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
      // Ajax
      $.ajax({
        method: "GET",
        url: "/admin/adminUser/del/id/"+id,
        dataType: "JSON",
        success: function (s) {
          console.log(s);
          if (s.code == 1) {
            swal("提交失败", s.msg, "error");
          } else {
            swal("提交成功", s.msg, "success");
            setTimeout("window.location.reload();",2000);
          }
        },
        error: function (e) {
          console.log(e);
          swal("未知错误", "请尝试刷新页面后重试 :(", "error");
        }
      });
      //swal("Deleted!", "Your imaginary file has been deleted.", "success");
    } else {
      swal("取消了", "不受影响的操作 :)", "error");
    }
  });
}

// 冻结 & 解冻
function flag(id,status){
  console.log(id,status);
  swal({
    title: "确认执行该操作吗？",
    text: "",
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
      // Ajax
      $.ajax({
        method: "POST",
        url: "/admin/adminUser/flag/id/"+id,
        data: {
          status: status
        },
        dataType: "JSON",
        success: function (s) {
          console.log(s);
          if (s.code == 1) {
            swal("提交失败", s.msg, "error");
          } else {
            swal("提交成功", s.msg, "success");
            setTimeout("window.location.reload();",2000);
          }
        },
        error: function (e) {
          console.log(e);
          swal("未知错误", "请尝试刷新页面后重试 :(", "error");
        }
      });
      //swal("Deleted!", "Your imaginary file has been deleted.", "success");
    } else {
      swal("取消了", "不受影响的操作 :)", "error");
    }
  });
}