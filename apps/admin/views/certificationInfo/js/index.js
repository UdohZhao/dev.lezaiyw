$(function(){

});

// 查看审核资料
function lookInfo(){
  // 追加点击事件
  $("#auditData").click();
}

// flag
function flag(id,status,uid,phone){
  console.log(id,status,uid,phone);
  // 动态赋值
  $("input[name='id']").val(id);
  $("input[name='status']").val(status);
  $("input[name='uid']").val(uid);
  $("input[name='phone']").val(phone);
  // Modal
  $('#flagModal').modal({
    backdrop: 'static',
    keyboard: false,
    show: true
  })
}

// okFlag
function okFlag(){
  // 获取说明
  var id = $("input[name='id']").val();
  var status = $("input[name='status']").val();
  var uid = $("input[name='uid']").val();
  var phone = $("input[name='phone']").val();
  var remark = $("input[name='remark']").val();
  console.log(id,status,remark);
  if (remark == '' || remark == false) {
    swal("提示","说明不能为空 :(","error");
  } else {
    // Ajax
    $.ajax({
      type: "POST",
      url: "/admin/certificationInfo/okFlag/id/"+id+"/status/"+status,
      data: {
        uid: uid,
        phone: phone,
        remark: remark
      },
      dataType: "JSON",
      success:function(res){
        console.log(res);
        if (res.code == 0) {
          swal("提示",res.msg,"success");
          setTimeout("window.location.reload();",2000);
        } else {
          swal("提示",res.msg,"error");
        }
      },
      error:function(e){
        console.log(e);
      }
    });
  }
}


