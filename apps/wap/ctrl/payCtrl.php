<?php
namespace apps\wap\ctrl;
use core\lib\conf;
class payCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  /**
   * WAP端首页
   */
  public function pay(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('pay','pay.html');
      die;
    }

  }
}