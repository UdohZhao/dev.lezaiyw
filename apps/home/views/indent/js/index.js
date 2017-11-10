$(function(){

  // 验证评价表单
  $("#estimateForm").validate({
      focusInvalid: true,
      rules: {
        content: {
          required: true
        }
      },
      messages: {
        content: {
          required: "<span style='color:red;'>评价内容不能为空 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function( res ){
              console.log(res);
              // res
              if (res.code == 0) {
                swal("评价成功", res.msg, "success");
                setTimeout("window.location.reload();",2000);
              } else {
                swal("评价失败", res.msg, "error");
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

// 取消订单
function cancel(id,from_uid,total_price){
  swal({
    title: "确认要取消订单吗？",
    text: "请自行与下单用户沟通！",
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
        type: "POST",
        url: "/indent/flag/id/"+id,
        data: {
          typeFlag: 1,
          status: 1,
          from_uid: from_uid,
          total_price: total_price
        },
        dataType: "JSON",
        success: function(res){
          console.log(res);
          if (res.code == 0) {
            swal("提示",res.msg,"success");
            setTimeout("window.location.reload();",2000);
          } else {
            swal("提示",res.msg,"error");
          }
        },
        error: function(e){
          console.log(e);
        }
      });
      //swal("Deleted!", "Your imaginary file has been deleted.", "success");
    } else {
      swal("取消了", "不受影响的操作 :)", "error");
    }
  });
}

// 确认接单
function confirm(id,from_phone,inumber,sid){
  swal({
    title: "确认接单吗？",
    text: "请确保与下单用户沟通过！",
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
        type: "POST",
        url: "/indent/flag/id/"+id,
        data: {
          typeFlag: 2,
          type: 1,
          from_phone: from_phone,
          inumber: inumber,
          sid: sid
        },
        dataType: "JSON",
        success: function(res){
          console.log(res);
          if (res.code == 0) {
            swal("提示",res.msg,"success");
            setTimeout("window.location.reload();",2000);
          } else {
            swal("提示",res.msg,"error");
          }
        },
        error: function(e){
          console.log(e);
        }
      });
      //swal("Deleted!", "Your imaginary file has been deleted.", "success");
    } else {
      swal("取消了", "不受影响的操作 :)", "error");
    }
  });
}

// 开始服务
function start(id){
  swal({
    title: "确认开始服务吗？",
    text: "请确保与下单用户沟通过！",
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
        type: "POST",
        url: "/indent/flag/id/"+id,
        data: {
          typeFlag: 3,
          type: 2
        },
        dataType: "JSON",
        success: function(res){
          console.log(res);
          if (res.code == 0) {
            swal("提示",res.msg,"success");
            setTimeout("window.location.reload();",2000);
          } else {
            swal("提示",res.msg,"error");
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

// 完成服务
function end(id,to_uid,total_price){
  swal({
    title: "确认完成服务吗？",
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
        type: "POST",
        url: "/indent/flag/id/"+id,
        data: {
          typeFlag: 4,
          type: 3,
          to_uid: to_uid,
          total_price: total_price
        },
        dataType: "JSON",
        success: function(res){
          console.log(res);
          if (res.code == 0) {
            swal("提示",res.msg,"success");
            setTimeout("window.location.reload();",2000);
          } else {
            swal("提示",res.msg,"error");
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

// 立即评价
function estimate(id,sid){
  // 动态赋值form表单action
  $("#estimateForm").attr("action","/indentComment/add/iid/"+id+"/sid/"+sid);
  $('#estimateModal').modal({
    backdrop: 'static',
    keyboard: false,
    show: true
  });
}