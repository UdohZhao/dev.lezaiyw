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
      // 读取单位名称
      if ($data['sData'])
      {
        foreach ($data['sData'] AS $k => $v)
        {
          $data['sData'][$k]['units'] = $this->scdb->getunitsRow($v['scid']);
          // 服务单位？0>时，1>局，2>首，3>次
          switch ($data['sData'][$k]['units']) {
            case '0':
              $data['sData'][$k]['units'] = '时';
              break;
            case '1':
              $data['sData'][$k]['units'] = '局';
              break;
            case '2':
              $data['sData'][$k]['units'] = '首';
              break;
            case '3':
              $data['sData'][$k]['units'] = '次';
              break;
            default:
              $data['sData'][$k]['units'] = '时';
              break;
          }
        }
      }
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