$(function(){

    // 初始化数量加减插件
    alignmentFns.initialize();
    // 初始化日期时间
    $('#datetimepickerDade').datetimepicker({
        format: 'yyyy-mm-dd',
        minView: 'month',
        maxView: 'month',
        language: 'zh-CN',
        autoclose: true,
        startDate: new Date()
    });
    $('#datetimepickerTime').datetimepicker({
        format: 'hh:ii',
        language: 'zh-CN',
        autoclose: true,
        pickDate: false,
        pickTime: true,
        startView: 'hour',
        maxView: 'hour',
        startDate: new Date(),
        endDate: new Date(new Date(new Date().toLocaleDateString()).getTime()+24*60*60*1000-1)
    });

    // 动态追加数量选择点击事件
    $("#undefinedl").bind("click",numSelect);
    $("#undefinedr").bind("click",numSelect);

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

// 数量选择
function numSelect(){
  // 获取服务开始时间，数量，单价
  var startTime = $("input[name='startTime']").val();
  var num = $("input[name='num']").val();
  var price = $(".unit-price").text();
  if (startTime == '') {
    $("input[name='num']").val(1);
    alert("提示","请先选择服务开始时间 :(","error");
  } else {
      // 动态赋值
      $("#numSpan").text(num);
      // 计算总价
      var totalPrice = num * price;
      $(".service-price-indent").text(totalPrice.toFixed(2));
  }
}

// 立即支付
function iPay(to_uid,from_uid,sid,ibid,from_phone,to_phone,unit_price,units,balance,onscCname){
  // 获取陪陪主键id，下单用户主键id，服务主键id，网咖表主键id，下单用户电话号码，陪陪用户电话号码，单价，下单数量，展示信息（1小时？1局），预约开始时间，预约结束时间，总价
  var num = $("input[name='num']").val();
  var startDate = $("input[name='startDate']").val();
  var startTime = $("input[name='startTime']").val();
  // 动态赋值
  $("#numSpan").text(num);
  // 计算总价
  var totalPrice = num * unit_price;
  totalPrice.toFixed(2);
  if (startTime == '') {
    swal("提示","请先选择服务开始时间 :(","error");
  } else if (from_phone == '') {
    swal("提示","您还没有设置手机号码，请先完善 :(","error");
  } else if (balance < totalPrice) {
    swal({
      title: "提示",
      text: "您当前约玩币不足，去否前往充值页面？",
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
        $('.sweet-alert').remove();
        $('.sweet-overlay').remove();
        window.open("/recharge/index");
      } else {
        $('.sweet-alert').remove();
        $('.sweet-overlay').remove();
      }
    });
  } else {
      console.log(to_uid,from_uid,sid,ibid,from_phone,to_phone,unit_price,num,num+units,balance,startDate,startTime,totalPrice,onscCname);
      // Ajax
      $.ajax({
        type: "POST",
        url: "/indent/add",
        data: {
            to_uid: to_uid,
            from_uid: from_uid,
            sid: sid,
            ibid: ibid,
            unit_price: unit_price,
            from_num: num,
            showinfo: num+units,
            from_phone: from_phone,
            to_phone: to_phone,
            maa_start_time: startDate + ' ' + startTime,
            onsc_cname: onscCname
        },
        dataType: "JSON",
        success: function(res){
          console.log(res);
          if (res.code == 0) {
            $('#iModal').modal('hide');
            swal("通知成功",res.msg,"success");
            setTimeout("window.location.reload();",2000);
          } else {
            swal("通知失败",res.msg,"error");
          }
        },
        error: function(e){
          console.log(e);
        }
      });
  }


}