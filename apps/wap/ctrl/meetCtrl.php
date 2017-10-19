<?php
namespace apps\wap\ctrl;
use core\lib\conf;
class meetCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

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
}