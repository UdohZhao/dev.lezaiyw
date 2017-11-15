$(function() {
  FastClick.attach(document.body);
});
     //性别
     $("#sex").select({
        title:"请选择性别",
        items:[
        {
          title:"男",
          value:1
        },
        {
          title:"女",
          value:2
        }
        ]
     })
  //   选取城市
  $("#home-city").cityPicker({
    title: "选择城市",
    showDistrict: false,
    onChange: function (picker, values, displayValues) {
      console.log(values, displayValues);
    }
     });

    //隐藏遮罩层
   $(".close-popup").click(function(){
    $("#full").hide();
   })
<<<<<<< HEAD

  // service
=======
   
       
  // 验证个人信息表单
  $("#usersForm").validate({
      focusInvalid: true,
      rules: {
        age: {
          required: true
        },
        city: {
          required: true
        },
        i_signature: {
          required: true
        },
        stature: {
          required: true,
          digits: true
        },
        weight: {
          required: true,
          digits: true
        },
        interests: {
          required: true
        }
      },
      messages: {
        age: {
          required: "<span style='color:red;'>年龄不能为空 :(</span>"
        },
        city: {
          required: "<span style='color:red;'>城市不能为空 :(</span>"
        },
        i_signature: {
          required: "<span style='color:red;'>个性签名不能为空 :(</span>"
        },
        stature: {
          required: "<span style='color:red;'>身高不能为空 :(</span>",
          digits: "<span style='color:red;'>必须输入整数 :(</span>"
        },
        weight: {
          required: "<span style='color:red;'>体重不能为空 :(</span>",
          digits: "<span style='color:red;'>必须输入整数 :(</span>"
        },
        interests: {
          required: "<span style='color:red;'>兴趣爱好不能为空 :(</span>"
        }
      },
 
  });

  // 申请陪玩服务
function gotoService(u,ui){
  // 检测基本信息是否完善
  if (u != 1 || ui != 1) {
    swal("提示", "请完善基本资料后申请陪玩服务 :(", "error");
  } else {
    window.location.href = "/wap/ucenter/applyPw";
  }
}






  // service 
>>>>>>> 35462f5ed437f84b83f03f37942d48fef54f7f86

$(function(){

  // 初始化UEditor
  //var ue = UE.getEditor('container');

  // 验证服务表单
  $("#serviceForm").validate({
      focusInvalid: true,
      rules: {
        price: {
          required: true,
          number: true
        },
        i_label: {
          required: true
        }
      },
      messages: {
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
        var describe = ue.getContent();
        if (cover_path == '') {
          alert("提示","请上传服务封面图片 :(","error");
        } else if (describe == '' || describe == false) {
          alert("提示","请描述服务 :(","error");
        } else {
          $(form).ajaxSubmit({
              dataType:"json",
              success:function(res){
                console.log(res);
                // res
                if (res.code == 0) {
                  alert("提交成功", res.msg, "success");
                  setTimeout("window.location.reload();",2000);
                } else {
                  alert("提交失败", res.msg, "error");
                }
              },
              error:function(e){
                console.log(e);
                alert("未知错误 :(", "请刷新页面后重试!", "error");
              }
          });
        }
      }
  });

})



//图片上传预览    IE是用了滤镜。
function previewImage(file)
{
  var MAXWIDTH  = 90;
  var MAXHEIGHT = 90;
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



