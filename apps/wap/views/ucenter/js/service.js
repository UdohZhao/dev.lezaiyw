$(function(){

  // 验证服务表单
  $("#serviceForm").validate({
      focusInvalid: true,
      rules: {
        describe: {
          required: true
        },
        price: {
          required: true,
          number: true
        },
        i_label: {
          required: true
        }
      },
      messages: {
        describe: {
          required: "<span style='color:red;'>服务描述不能为空 :(</span>"
        },
        price: {
          required: "<span style='color:red;'>价格不能为空 :(</span>",
          number: "<span style='color:red;'>必须输入合法的数字（整数，小数） :(</span>"
        },
        i_label: {
          required: "<span style='color:red;'>个性标签不能为空 :(</span>"
        }
      },
      submitHandler: function(form){
        // 获取选中的封面图片，服务描述
        var cover_path = $("#previewImg").val();
        var describe = $("#describe").val();
        if (cover_path == '') {
          swal("提示","请上传服务封面图片 :(","error");
        } else if (describe == '' || describe == false) {
          swal("提示","请描述服务 :(","error");
        } else {
          $(form).ajaxSubmit({
              dataType:"json",
              success:function(res){
                console.log(res);
                // res
                if (res.code == 0) {
                  swal("提交成功", res.msg, "success");
                  setTimeout("window.location.reload();",2000);
                } else {
                  swal("提交失败", res.msg, "error");
                }
              },
              error:function(e){
                console.log(e);
                swal("未知错误 :(", "请刷新页面后重试!", "error");
              }
          });
        }
      }
  });

})


// 删除文件
function delFiles(sid,type,filePath){
  console.log(sid,type,filePath);
  swal({
    title: "确认要删除吗?",
    text: "删除后将不可恢复!",
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
        url: "/enter/delFiles/sid/"+sid,
        data: {
          type: type,
          filePath: filePath
        },
        dataType: "JSON",
        success: function (res) {
          console.log(res);
          if (res.code == 0) {
            swal("提示",res.msg,"success");
            setTimeout("window.location.reload();",2000);
          } else {
            swal("提示", res.msg, "error");
          }
        },
        error: function (e) {
          console.log(e);
        }
      });
    } else {
      swal("取消了", "不受影响的操作 :)", "error");
    }
  });
}



//图片上传预览    IE是用了滤镜。
function previewImage(file)
{
  var MAXWIDTH  = 150;
  var MAXHEIGHT = 150;
  var div = document.getElementById('preview');
  if (file.files && file.files[0])
  {
      div.innerHTML ='<img id=imghead onclick=$("#previewImg").click()>';
      var img = document.getElementById('imghead');
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





