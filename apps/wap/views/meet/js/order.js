
$(function() {
    FastClick.attach(document.body);
    });
  //时间选择

  $("#time").picker({
        title: "请选择时间",
        cols: [
          {
            textAlign: 'center',
            values: ['19号', '20号','21号']
          },
          {
            textAlign: 'center',
            values: ['00.00-01.00', '01.00-02.00', '02.00-03.00', '03.00-04.00',
             '04.00-05.00', '05.00-06.00', '06.00-07.00','07.00-08.00','08.00-09.00',
             '09.00-10.00','10.00-11.00','01.00-12.00','12.00-13.00','13.00-14.00',
             '14.00-15.00','15.00-16.00','16.00-17.00','17.00-18.00','18.00-19.00',
             '19.00-20.00','20.00-21.00','21.00-22.00','22.00-23.00','23.00-24.00',]
          }
        ]
      });


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