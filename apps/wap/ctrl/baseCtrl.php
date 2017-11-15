<?php
namespace apps\wap\ctrl;
use core\lib\conf;
use apps\wap\model\users;
class baseCtrl extends \core\icunji{
  public $u;
  public $udb;
  // 构造方法
  public function _initialize(){
    //控制器初始化
    if(method_exists($this,'_auto'))
        $this->_auto();
    // 加载路径
    $this->assign('src','/apps/admin/views');
    // 站点名称
    $this->assign('websiteName',conf::get('WEBSITE_NAME','admin'));
    $this->udb = new users();
    // userinfo
    if (isset($_SESSION['homeUserinfo'])) {
      // 读取当前登录用户信息
      $this->u = $this->udb->getcRow($_SESSION['homeUserinfo']['id']);
    } else {
      $this->u = false;
    }
    $this->assign('u',$this->u);
  }

}