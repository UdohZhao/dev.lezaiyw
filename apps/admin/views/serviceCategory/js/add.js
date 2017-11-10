$(function(){

  // 验证添加服务类别表单
  $("#serviceCategoryForm").validate({
      focusInvalid: true,
      rules: {
        cname: {
          required: true
        },
        sort: {
          required: true,
          digits: true
        }
      },
      messages: {
        cname: {
          required: "<span style='color:red;'>服务类别名称不能为空 :(</span>"
        },
        sort: {
          required: "<span style='color:red;'>排序不能为空 :(</span>",
          digits: "<span style='color:red;'>必须输入整数 :(</span>"
        }
      },
      submitHandler: function(form){
        // 获取banner临时路径
        var icon_path = $("input[name='icon_path']").val();
        if (icon_path == '')
        {
          swal("提示","请上传图标 :(","error");
        }
        else
        {
          $(form).ajaxSubmit({
              dataType:"json",
              success:function( res ){
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

});


// 删除图标
function delIcon(id,icon_path)
{
  console.log(id,icon_path);
  swal({
    title: "确认删除吗？",
    text: "删除后将不可恢复 :(",
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
        url: "/admin/serviceCategory/delIcon/id/"+id,
        data: {
          icon_path: icon_path
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
      //swal("Deleted!", "Your imaginary file has been deleted.", "success");
    } else {
      swal("取消了", "不受影响的操作 :)", "error");
    }
  });
}


//图片上传预览    IE是用了滤镜。
function previewImage(file,k,kk,kkk)
{
  console.log(k,kk,kkk);
  var MAXWIDTH  = 50;
  var MAXHEIGHT = 50;
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

