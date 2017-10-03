<?php
namespace apps\home\ctrl;
use apps\home\model\demo;
class ocenterCtrl extends baseCtrl{

  // 构造方法
  public function _auto(){
    if ($this->u === false) {
      header('Location:/');
      die;
    }
  }

  /**
   * 个人中心
   */
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('ocenter','index.html');
      die;
    }
  }


}