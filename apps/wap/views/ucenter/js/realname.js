$(function() {
    FastClick.attach(document.body);
    });

// 申请实名认证
function apply(){
  // 获取临时路径
  var front_path = $("#previewImg0").val();
  var back_path = $("#previewImg1").val();
  var hand_path = $("#previewImg2").val();
  if (front_path == '' || back_path == '' || hand_path == '') {
    swal("提示","请先上传必要的身份证照片 :(","error");
  } else {
    // Ajax提交form表单
    $("#idcardForm").ajaxSubmit({
      dataType: "JSON",
      success: function(res){
        console.log(res);
        if (res.code == 0) {
          swal("申请成功",res.msg,"success");
          setTimeout("window.location.reload();",2000);
        } else {
          swal("申请失败",res.msg,"error");
        }
      },
      error: function(e){
        console.log(e);
      }
    });
  }
}

// 全部删除
function delApply(id,front_path,back_path,hand_path){
  console.log(id,front_path,back_path,hand_path);
  // Ajax
  swal({
    title: "确认此操作吗？",
    text: ":(",
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
        url: "/certificationInfo/del/id/"+id,
        data: {
          front_path: front_path,
          back_path: back_path,
          hand_path: hand_path
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

//图片上传预览    IE是用了滤镜。
function previewImage(file,k,kk,kkk){
  console.log(k,kk,kkk);
  var MAXWIDTH  = 400;
  var MAXHEIGHT = 250;
  var div = document.getElementById(k);
  if (file.files && file.files[0])
  {
      div.innerHTML ='<img id='+kk+' onclick=$("#'+kkk+'").click()>';
      var img = document.getElementById(kk);
      img.onload = function(){
        var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
        img.width  =  rect.width;
        img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
        img.style.marginTop = rect.top+'px';
      }
      var reader = new FileReader();
      reader.onload = function(evt){img.src = evt.target.result;}
      reader.readAsDataURL(file.files[0]);
  }
  else //兼容IE
  {
    var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
    file.select();
    var src = document.selection.createRange().text;
    div.innerHTML = '<img id=imghead>';
    var img = document.getElementById('imghead');
    img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
    status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
    div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
  }
}
function clacImgZoomParam( maxWidth, maxHeight, width, height ){
    var param = {top:0, left:0, width:width, height:height};
    if( width>maxWidth || height>maxHeight ){
        rateWidth = width / maxWidth;
        rateHeight = height / maxHeight;

        if( rateWidth > rateHeight ){
            param.width =  maxWidth;
            param.height = Math.round(height / rateWidth);
        }else{
            param.width = Math.round(width / rateHeight);
            param.height = maxHeight;
        }
    }
    param.left = Math.round((maxWidth - param.width) / 2);
    param.top = Math.round((maxHeight - param.height) / 2);
    return param;
}


