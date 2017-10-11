$(function(){

});

// 申请提现
function applyWithdraw(type,royalties){
  console.log(type,parseInt(royalties));
  if (type == 0) {
    swal("提示","提现需要进行实名认证，即将跳转到实名认证页面 :(","error");
    setTimeout("window.location.href = '/certificationInfo/add'",3000);
  } else if (parseInt(royalties) < 100) {
    swal("提示","提现金额不小于¥100 :(","error");
  } else {
    swal({
      title: "确认申请提现吗？",
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
          type: "GET",
          url: "/cashValue/add",
          dataType: "JSON",
          success: function(res){
            console.log(res);
            if (res.code == 0) {
              swal("成功",res.msg,"success");
              setTimeout("window.location.reload();",2000);
            } else {
              swal("错误",res.msg,"error");
            }
          },
          error: function(e){
            console.log(e);
          }
        });
      } else {
        swal("取消了", "不受影响的操作 :)", "error");
      }
    });
  }
}

