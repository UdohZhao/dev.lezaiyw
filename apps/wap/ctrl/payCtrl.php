<?php
namespace apps\wap\ctrl;
use core\lib\conf;
class payCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/wap");
      die;
    }
    $this->assign('active','pay');
  }

  /**
   * WAP端首页
   */
  public function pay(){
    // Get
    if (IS_GET === true) {
      // 读取当前用户信息
      $data = $this->udb->getcRow($this->u['id']);
      // assign
      $this->assign('data',$data);
      // display
      $this->display('pay','pay.html');
      die;
    }

  }
}