<?php
namespace apps\wap\ctrl;
use core\lib\conf;
use apps\wap\model\service;
class meetCtrl extends baseCtrl{
  public $sid;
  public $sdb;
  // 构造方法
  public function _auto()
  {
    $this->sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
    $this->sdb = new service();
  }

  /**
   * WAP端首页
   */
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('meet','index.html');
      die;
    }

  }
   public function order(){

      // display
      $this->display('meet','order.html');

  }
  public function payment(){

      // display
      $this->display('meet','payment.html');

  }
}