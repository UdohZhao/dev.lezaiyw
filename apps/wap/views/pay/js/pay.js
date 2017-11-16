

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
    window.location.href = "/alipay/index/m/"+money+"/wap/1";
  } else {
    // // Ajax
    $.ajax({
      type: "GET",
      url: "/alipay/wxPay/m/"+money+"/wap/1",
      dataType: "JSON",
      success: function (res) {
        console.log(res);
        if (typeof WeixinJSBridge == "undefined"){
           if( document.addEventListener ){
               document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
           }else if (document.attachEvent){
               document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
               document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
           }
        }else{
           onBridgeReady(res);
        }
      },
      error: function (e) {
        console.log(e);
      }
    });
  }
}

// 唤起微信支付
function onBridgeReady(jsApiParameters){
   WeixinJSBridge.invoke(
       'getBrandWCPayRequest',
       jsApiParameters,
       function(res){
           if(res.err_msg == "get_brand_wcpay_request:ok" ) {
            swal("提示","充值成功 :)","success");
            setTimeout("window.location.reload();",3000);
           } else {
            swal("提示","您取消了支付 :(","error");
           }
       }
   );
}
