<?php
namespace apps\home\ctrl;
use apps\home\model\users;
class rechargeCtrl extends baseCtrl{
  public $udb;
  // 构造方法
  public function _auto(){
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/");
      die;
    }
    $this->assign('active','recharge');
    $this->udb = new users();
  }

  // 充值页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // 读取当前用户信息
      $data = $this->udb->getRow($this->u['id']);
      // assign
      $this->assign('data',$data);
      // display
      $this->display('recharge','index.html');
      die;
    }
  }

}