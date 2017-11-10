$(function(){

});

// 编辑
function edit(id){
  window.location.href = "/admin/banner/add/id/"+id;
}

// 删除
function del(id,path){
  console.log(id,path);
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
        method: "POST",
        url: "/admin/banner/del/id/"+id,
        data: {
          path: path
        },
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
    } else {
      swal("取消了", "不受影响的操作 :)", "error");
    }
  });
}
