$(function(){

})

// 下单
function indent(uid){
  if (uid == undefined) {
    swal("提示","请您先登录 :(","error");
  } else {
    $('#iModal').modal({
      backdrop: 'static',
      keyboard: false,
      show: true
    })
  }
}