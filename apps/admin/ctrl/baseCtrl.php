<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\users;
class baseCtrl extends \core\icunji{
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
    // 实例化用户Model
    $this->udb = new users();
    // 模版赋值
    if (isset($_SESSION['userinfo'])) {
      $this->assign('userinfo',$_SESSION['userinfo']);
    } else {
      header('Location:/admin/login/index');
      die;
    }


  }

}