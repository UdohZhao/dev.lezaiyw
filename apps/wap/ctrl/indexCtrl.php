<?php
namespace apps\wap\ctrl;
use core\lib\conf;
use apps\wap\model\banner;
class indexCtrl extends baseCtrl{
  public $bdb;
  // 构造方法
  public function _auto(){
    $this->bdb = new banner();
  }

  /**
   * WAP端首页
   */
  public function index()
  {
    // Get
    if (IS_GET === true)
    {
      // 读取banner
      $data['bData'] = $this->bdb->getcRows(0);
      // assign
      $this->assign('data',$data);
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
  public function item(){
      // display
      $this->display('index','item.html');
      die;
  }
}