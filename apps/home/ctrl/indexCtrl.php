<?php
namespace apps\home\ctrl;
use apps\home\model\service;
use apps\home\model\serviceCategory;
use apps\home\model\banner;
class indexCtrl extends baseCtrl{
  public $sdb;
  public $scdb;
  public $bdb;
  // 构造方法
  public function _auto(){
    $this->assign('active','index');
    $this->sdb = new service();
    $this->scdb = new serviceCategory();
    $this->bdb = new banner();
  }

  // 默认首页
  public function index(){
    // Get
    if (IS_GET === true) {
      // 读取首页banner
      $data['bannerData'] = $this->bdb->getAll();
      // 读取热门榜服务
      $data['hlData'] = $this->sdb->getHotlist(1,'LIMIT 0 , 4');
      // 读取热门推荐服务
      $data['hrData'] = $this->sdb->getHotlist(2,'LIMIT 0 , 12');
      if ($data['hrData']) {
        foreach ($data['hrData'] AS $k => $v) {
          // 读取用户记录
          $data['hrData'][$k]['uData'] = $this->udb->getRow($v['uid']);
          $data['hrData'][$k]['uData']['i_label'] = unserialize($data['hrData'][$k]['uData']['i_label']);
          // 读取当前服务单位
          $data['hrData'][$k]['units'] = $this->scdb->getUnits($v['scid']);
          // 服务单位？0>时，1>局，2>首，3>次
          switch ($data['hrData'][$k]['units']) {
            case '0':
              $data['hrData'][$k]['units'] = '时';
              break;
            case '1':
              $data['hrData'][$k]['units'] = '局';
              break;
            case '2':
              $data['hrData'][$k]['units'] = '首';
              break;
            case '3':
              $data['hrData'][$k]['units'] = '次';
              break;
            default:
              $data['hrData'][$k]['units'] = '时';
              break;
          }
        }
      }
      // 读取热度榜
      $data['charmData'] = $this->udb->getCharmRows();
      // 读取贡献榜
      $data['contributionData'] = $this->udb->getContributionRows();
      // assign
      $this->assign('data',$data);
      // display
      $this->display('index','index.html');
      die;
    }
    
  }

}