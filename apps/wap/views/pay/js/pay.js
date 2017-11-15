

// 选中的充值金额
function rechargeMoney(money,active){
  console.log(money,active);
  for (var i = 0; i <= 6; i++) {
    if (i == active) {
      $("#active"+i).addClass("active");
    } else {
      $("#active"+i).removeClass("active");
    }
  }
  // 赋值给input
  $("input[name='money']").attr("value",money);
}

// 去支付
function gotoPay(){
  // 获取用户充值金额
  var money = $("input[name='money']").val();
  // 获取支付渠道
  var type = $("input[name='type']:checked").val();
  var url;
  if (type == 0) {
    window.location.href = "/alipay/index/m/"+money;
  } else {
    swal("提示","微信支付稍后开通 :(","error");
    // url = "/wxpay/index";
    // // Ajax
    // $.ajax({
    //   type: "POST",
    //   url: url,
    //   data: {
    //     money: money
    //   },
    //   dataType: "JSON",
    //   success: function (res) {
    //     console.log(res);
    //   },
    //   error: function (e) {
    //     console.log(e);
    //   }
    // });
  }
}
