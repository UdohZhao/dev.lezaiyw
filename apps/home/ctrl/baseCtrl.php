<?php
namespace apps\home\ctrl;
use core\lib\conf;
class baseCtrl extends \core\icunji{
  public $u;
  // 构造方法
  public function _initialize(){
    //控制器初始化
    if(method_exists($this,'_auto'))
        $this->_auto();
    // 加载路径
    $this->assign('src','/apps/home/views');
    // 站点名称
    $this->assign('websiteName',conf::get('WEBSITE_NAME','admin'));
    // userinfo
    if (isset($_SESSION['homeUserinfo'])) {
      $this->u = $_SESSION['homeUserinfo'];
    } else {
      $this->u = false;
    }
    $this->assign('u',$this->u);
  }

}