

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
    // 个性标签
    $("#selfdom_tag").select({
      title: "个性标签(任意选2项)",
      multi: true,
      min:1,
      max:2,
      items: [
        {
          title: "特殊才艺",
          value: 1
        },
        {
          title: "颜值担当",
          value: 2
        },
        {
          title: "逗比休闲",
          value: 3
        },
        {
          title: "声音甜美",
          value: 4
        },
        {
          title: "乖巧粘人",
          value: 5
        },
        {
          title: "情感知心",
          value: 6
        },
        {
          title: "爽朗直率",
          value: 7
        },
        {
          title: "激情四射",
          value: 8
        }
      ]
            });
    //魅力部位
    $("#hobby").select({
        title: "魅力部位(不超过3项)",
        multi: true,
        min:1,
        max:3,
        items: [
          {
            title: "眼睛",
            value: 1
          },
          {
            title: "鼻子",
            value: 2
          },
          {
            title: "耳朵",
            value: 3
          },
          {
            title: "嘴唇",
            value: 4
          },
          {
            title: "胸部",
            value: 5
          },
          {
            title: "腰部",
            value: 6
          },
          {
            title: "腿",
            value: 7
          },
          {
            title: "臀部",
            value: 8
          },
          {
            title: "手",
            value: 9
          },
          {
            title: "其他",
            value: 10
          }
        ]
    });
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
       
  // service 

$(function(){

  // 初始化UEditor
  var ue = UE.getEditor('container');

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



