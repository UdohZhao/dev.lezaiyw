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

  public function application(){
      // display
      $this->display('ucenter','application.html');
      die;
  }

  public function applypw(){
      // display
      $this->display('ucenter','applypw.html');
      die;
  }
  public function service(){
      // display
      $this->display('ucenter','service.html');
      die;
  }
  public function realname(){
      // display
      $this->display('ucenter','realname.html');
      die;
  }
  public function record(){
      // display
      $this->display('ucenter','record.html');
      die;
  }
}