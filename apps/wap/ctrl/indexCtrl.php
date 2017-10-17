<?php
namespace apps\wap\ctrl;
use core\lib\conf;
class indexCtrl extends baseCtrl{
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
      $this->display('index','index.html');
      die;
    }
    
  }
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('meet','index.html');
      die;
    }
    
  }
}