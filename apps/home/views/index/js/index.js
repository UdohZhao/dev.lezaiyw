$(function(){
  // 初始化轮播图
  $('.carousel').carousel({
    interval: 2000
  })
});

// 切换排行榜
function noticeChange(k,kk){
  console.log(k,kk);
  // jQuery
  $("#"+k).removeClass("off-notice").addClass("on-notice");
  $("#"+kk).removeClass("on-notice").addClass("off-notice");
}