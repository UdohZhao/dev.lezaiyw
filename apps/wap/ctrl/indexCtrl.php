<?php
namespace apps\wap\ctrl;
use core\lib\conf;
use apps\wap\model\banner;
use apps\wap\model\serviceCategory;
use apps\wap\model\service;
class indexCtrl extends baseCtrl{
  public $bdb;
  public $scdb;
  public $sdb;
  // 构造方法
  public function _auto(){
    $this->bdb = new banner();
    $this->scdb = new serviceCategory();
    $this->sdb = new service();
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
      // 读取服务类别
      $data['scData'] = $this->scdb->getcRows(0);
      // 读取热门推荐服务
      $data['sData'] = $this->sdb->gethotRows(2);
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