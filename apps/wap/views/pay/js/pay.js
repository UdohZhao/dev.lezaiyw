

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

