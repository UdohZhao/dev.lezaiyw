<?php
namespace apps\wap\ctrl;
use core\lib\conf;
use apps\home\model\certificationInfo;
use apps\home\model\usersInfo;
use apps\home\model\serviceCategory;
use apps\home\model\service;
class ucenterCtrl extends baseCtrl{
  public $db;
  public $uidb;
  public $scdb;
  public $sdb;
  public $scid;
  public $sid;
  // 构造方法
  public function _auto()
  {
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/wap");
      die;
    }
    $this->db = new certificationInfo();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $this->uidb = new usersInfo();
    $this->scdb = new serviceCategory();
    $this->sdb = new service();
    $this->scid = isset($_GET['scid']) ? intval($_GET['scid']) : 1;
    $this->sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
    $this->assign('scid',$this->scid);
  }

  /**
   * 我的首页
   */
  public function index(){
      // display
      $this->display('ucenter','index.html');
      die;
  }

  /**
   * 个人资料
   */
  public function ucenter()
  {
    // Get
    if (IS_GET === true)
    {
      // 读取当前用户信息
      $data['users'] = $this->udb->getcRow($this->u['id']);
      if ($data['users']) {
        $data['u'] = 1;
      } else {
        $data['u'] = 0;
      }
      // 读取当前用户详细信息
      $data['users_info'] = $this->uidb->getRow($this->u['id']);
      if ($data['users_info'])
      {
        $data['ui'] = 1;
      }
      else
      {
        $data['ui'] = 0;
      }
      see($data);
      die;
      // assign
      $this->assign('data',$data);
      $this->assign('i_label',conf::get('I_LABEL','home'));
      $this->assign('occupation',conf::get('OCCUPATION','home'));
      $this->assign('charm_part',conf::get('CHARM_PART','home'));
      // display
      $this->display('ucenter','ucenter.html');
      die;
    }
  }

  /**
   * 申请入驻
   */
  public function application()
  {
    // Get
    if (IS_GET === true)
    {
      // 读取当前用户信息
      $data['users'] = $this->udb->getcRow($this->u['id']);
      if ($data['users']) {
        $data['u'] = 1;
      } else {
        $data['u'] = 0;
      }
      // 读取当前用户详细信息
      $data['users_info'] = $this->uidb->getRow($this->u['id']);
      if ($data['users_info'])
      {
        $data['ui'] = 1;
      }
      else
      {
        $data['ui'] = 0;
      }
      $i_label = conf::get('I_LABEL','home');
      $occupation = conf::get('OCCUPATION','home');
      $charm_part = conf::get('CHARM_PART','home');
      // 组装数据
      foreach ($i_label AS $k => $v)
      {
        $data['i_label'][$k]['title'] = $v;
        $data['i_label'][$k]['value'] = $v;
      }
      $data['i_label'] = json_encode($data['i_label'],JSON_UNESCAPED_UNICODE);
      foreach ($occupation AS $k => $v)
      {
        $data['occupation'][$k]['title'] = $v;
        $data['occupation'][$k]['value'] = $v;
      }
      $data['occupation'] = json_encode($data['occupation'],JSON_UNESCAPED_UNICODE);
      foreach ($charm_part AS $k => $v)
      {
        $data['charm_part'][$k]['title'] = $v;
        $data['charm_part'][$k]['value'] = $v;
      }
      $data['charm_part'] = json_encode($data['charm_part'],JSON_UNESCAPED_UNICODE);
      // assign
      $this->assign('data',$data);
      // display
      $this->display('ucenter','application.html');
      die;
    }
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


  /**
   * 实名认证
   */
  public function realname()
  {
    // Get
    if (IS_GET === true)
    {
      // 读取当前用户是否提交了申请
      $data = $this->db->getRow($this->u['id']);
      // assign
      $this->assign('data',$data);
      // display
      $this->display('ucenter','realname.html');
      die;
    }
  }


  public function record(){
      // display
      $this->display('ucenter','record.html');
      die;
  }
}