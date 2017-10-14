<?php
namespace apps\wap\ctrl;
use core\lib\conf;
class ucenterCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  /**
   * 我的首页
   */
  public function index(){
      // display
      $this->display('ucenter','index.html');
      die;
  }
  public function ucenter(){
      // display
      $this->display('ucenter','ucenter.html');
      die; 
  }
  public function pay(){
      // display
      $this->display('ucenter','pay.html');
      die; 
  }
  public function application(){
      // display
      $this->display('ucenter','application.html');
      die; 
  }
}