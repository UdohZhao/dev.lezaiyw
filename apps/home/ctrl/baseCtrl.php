<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\users;
class baseCtrl extends \core\icunji{
  public $u;
  public $udb;
  // 构造方法
  public function _initialize(){
    //控制器初始化
    if(method_exists($this,'_auto'))
        $this->_auto();
    // 手机端访问跳转
    if (isHttpsMobile())
    {
      header("Location:/wap");
      die;
    }
    // 加载路径
    $this->assign('src','/apps/home/views');
    // 站点名称
    $this->assign('websiteName',conf::get('WEBSITE_NAME','admin'));
    $this->udb = new users();
    // userinfo
    if (isset($_SESSION['homeUserinfo'])) {
      // 读取当前登录用户信息
      $this->u = $this->udb->getRow($_SESSION['homeUserinfo']['id']);
    } else {
      $this->u = false;
    }
    $this->assign('u',$this->u);
  }

}