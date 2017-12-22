<?php
namespace apps\wap\ctrl;
use core\lib\conf;
use apps\home\model\serviceCategory;
use apps\home\model\service;
use apps\home\model\users;
use apps\home\model\usersInfo;
use apps\home\model\indentComment;
class meetCtrl extends baseCtrl
{
  public $scdb;
  public $sdb;
  public $udb;
  public $uidb;
  public $icdb;
  public $scid;
  public $sid;
  public $uid;
  // 构造方法
  public function _auto()
  {
    $this->scdb = new serviceCategory();
    $this->sdb = new service();
    $this->udb = new users();
    $this->uidb = new usersInfo();
    $this->icdb = new indentComment();
    $this->scid = isset($_GET['scid']) ? intval($_GET['scid']) : 1;
    $this->sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
    $this->uid = isset($_GET['uid']) ? intval($_GET['uid']) : 0;
    $this->assign('scid',$this->scid);
    $this->assign('sid',$this->sid);
    $this->assign('uid',$this->uid);
  }

  /**
   * WAP端首页
   */
  public function index()
  {
    // Get
    if (IS_GET === true)
    {
      // 读取用户个人信息
      $data['users'] = $this->udb->getcRow($this->uid);
      $data['users']['i_label'] = unserialize($data['users']['i_label']);
      if (is_array($data['users']['i_label']))
      {
        $data['users']['i_label'] = implode('，', $data['users']['i_label']);
      }
      $data['usersInfo'] = $this->uidb->getRow($this->uid);
      $data['usersInfo']['charm_part'] = unserialize($data['usersInfo']['charm_part']);
      if (is_array($data['usersInfo']['charm_part']))
      {
        $data['usersInfo']['charm_part'] = implode('，', unserialize($data['usersInfo']['charm_part']));
      }
      // 读取当前用户关联的服务
      $data['sData'] = $this->sdb->getDrows($this->uid,2,1);
      foreach ($data['sData'] AS $k => $v) {
        // 读取服务类别名称
        $data['sData'][$k]['scData'] = $this->scdb->getRow($v['scid']);
      }
      // 读取当前服务详细信息
      $data['onsData'] = $this->sdb->getsidRow($this->sid);
      // 读取当前服务单位
      $units = $this->scdb->getUnits($this->scid);
      // 服务单位？0>时，1>局，2>首，3>次
      switch ($units) {
        case '0':
          $units = '时';
          break;
        case '1':
          $units = '局';
          break;
        case '2':
          $units = '首';
          break;
        case '3':
          $units = '次';
          break;
        default:
          $units = '时';
          break;
      }
      // 服务单位
      $data['units'] = $units;
      // 读取当前服务评论
      $data['onsData']['comment'] = $this->icdb->getRows($this->sid);
      // 读取当前服务类别名称
      $data['onscCname'] = $this->scdb->getCnameRow($this->scid);
      // currentDate 当前日期
      $data['currentDate'] = date('Y-m-d');
      // assign
      $this->assign('data',$data);
      // display
      $this->display('meet','index.html');
      die;
    }

  }

  public function order()
  {

    // display
    $this->display('meet','order.html');

  }
  public function payment(){

      // display
      $this->display('meet','payment.html');

  }
}