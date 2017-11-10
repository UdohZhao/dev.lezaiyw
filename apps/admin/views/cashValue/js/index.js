$(function(){

});

// flag
function flag(id,status){
  console.log(id,status);
  swal({
    title: "确认此操作吗？",
    text: ":)",
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
        url: "/admin/cashValue/flag/id/"+id+"/status/"+status,
        dataType: "JSON",
        success: function (res) {
          console.log(res);
          if (res.code == 0) {
            swal("提交成功", res.msg, "success");
            setTimeout("window.location.reload();",2000);
          } else {
            swal("提交失败", res.msg, "error");
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