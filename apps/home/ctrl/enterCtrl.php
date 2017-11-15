<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\users;
use apps\home\model\usersInfo;
use apps\home\model\serviceCategory;
use apps\home\model\service;
class enterCtrl extends baseCtrl{
  public $udb;
  public $uidb;
  public $scdb;
  public $sdb;
  public $scid;
  public $sid;
  // 构造方法
  public function _auto()
  {
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo']))
    {
      header("Location:/");
      die;
    }
    $this->assign('active','enter');
    $this->udb = new users();
    $this->uidb = new usersInfo();
    $this->scdb = new serviceCategory();
    $this->sdb = new service();
    $this->scid = isset($_GET['scid']) ? intval($_GET['scid']) : 1;
    $this->sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
    $this->assign('scid',$this->scid);
  }

  // 申请入驻协议页面
  public function add(){
    // Get
    if (IS_GET === true) {
      // 读取当前用户信息
      $data['users'] = $this->udb->getRow($this->u['id']);
      if ($data['users']) {
        $data['u'] = 1;
      } else {
        $data['u'] = 0;
      }
      // 读取当前用户详细信息
      $data['users_info'] = $this->uidb->getRow($this->u['id']);
      if ($data['users_info']) {
        $data['ui'] = 1;
      } else {
        $data['ui'] = 0;
      }
      // assign
      $this->assign('data',$data);
      $this->assign('i_label',conf::get('I_LABEL','home'));
      $this->assign('occupation',conf::get('OCCUPATION','home'));
      $this->assign('charm_part',conf::get('CHARM_PART','home'));
      // display
      $this->display('enter','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // 获取个性标签&魅力部位选中个数
      $i_label = isset($_POST['i_label']) ? count($_POST['i_label']) : 0;
      $charm_part = isset($_POST['charm_part']) ? count($_POST['charm_part']) : 0;
      if ($i_label == 0 || $i_label > 2) {
        echo J(R(2,'请至少选中1项个性标签或者选中的个性标签超过2项 :(',false));
        die;
      }
      if ($charm_part == 0 || $charm_part > 3) {
        echo J(R(3,'请至少选中1项魅力部位或者选中的魅力部位超过3项 :(',false));
        die;
      }
      // 视频上传
      if (isset($_FILES['video_path'])) {
        $res = upFiles('video_path');
        if ($res == 1) {
          echo J(R(4,$res['msg'],false));
          die;
        }
        $video_path = $res['data'];
      } else {
        $video_path = isset($_POST['video_path_text']) ? $_POST['video_path_text'] : '';
      }
      // data
      $data = $this->getData($video_path);
      // 更新users
      $res = $this->udb->save($this->u['id'],$data['users']);
      if ($res) {
        // 读取用户详细信息表是否有记录
        $res = $this->uidb->getCrow($this->u['id']);
        if ($res) {
          // 更新users_info
          $this->uidb->save($this->u['id'],$data['users_info']);
        } else {
          // 写入users_info
          $this->uidb->add($data['users_info']);
        }
        ###
        echo J(R(0,"受影响的操作 :)",true));
        die;
      } else {
        echo J(R(1,"请尝试刷新页面后重试 :(",false));
        die;
      }
    }
  }

  /**
   * 初始化数据
   */
  private function getData($video_path){
    // data
    $data['users']['birthday'] = isset($_POST['birthday']) ? strtotime($_POST['birthday']) : time();
    $data['users']['sex'] = isset($_POST['sex']) ? $_POST['sex'] : 0;
    $data['users']['age'] = isset($_POST['age']) ? htmlspecialchars($_POST['age']) : 0;
    $data['users']['city'] = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '';
    $data['users']['i_label'] = isset($_POST['i_label']) ? serialize($_POST['i_label']) : '';
    $data['users']['i_signature'] = isset($_POST['i_signature']) ? htmlspecialchars($_POST['i_signature']) : '';
    $data['users']['ctime'] = time();
    $data['users_info']['uid'] = $this->u['id'];
    $data['users_info']['stature'] = isset($_POST['stature']) ? htmlspecialchars($_POST['stature']) : '';
    $data['users_info']['weight'] = isset($_POST['weight']) ? htmlspecialchars($_POST['weight']) : '';
    $data['users_info']['occupation'] = isset($_POST['occupation']) ? $_POST['occupation'] : '';
    $data['users_info']['interests'] = isset($_POST['interests']) ? htmlspecialchars($_POST['interests']) : '';
    $data['users_info']['charm_part'] = isset($_POST['charm_part']) ? serialize($_POST['charm_part']) : '';
    $data['users_info']['video_path'] = $video_path;
    return $data;
  }

  /**
   * 申请陪玩服务页面
   */
  public function service(){
    // Get
    if (IS_GET === true) {
      // 线上游戏
      $data['online'] = $this->scdb->getRows(0);
      // 线上娱乐
      $data['onlineRecreation'] = $this->scdb->getRows(1);
      // 线下娱乐
      $data['offlineRecreation'] = $this->scdb->getRows(2);
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
      // 读取当前服务类别是否已经绑定
      $data['sData'] = $this->sdb->getRow($this->scid);
      // assign
      $this->assign('data',$data);
      // display
      $this->display('enter','service.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // 封面图片
      if (isset($_FILES['cover_path'])) {
        $cover_path = upFiles('cover_path');
        if ($cover_path['code'] == 1) {
          echo J(R(2,$cover_path['msg'],true));
          die;
        }
        $cover_path = $cover_path['data'];
      } else if ($this->sid) {
        $cover_path = isset($_POST['cover_path']) ? $_POST['cover_path'] : '';
      } else {
        $cover_path = '';
      }
      // 音频
      if (isset($_FILES['voice'])) {
        $voice = upFiles('voice');
        if ($voice['code'] == 1) {
          echo J(R(3,$voice['msg'],true));
          die;
        }
        $voice = $voice['data'];
      } else if ($this->sid) {
        $voice = isset($_POST['voice']) ? $_POST['voice'] : '';
      } else {
        $voice = '';
      }
      // data
      $data = $this->getSdata($cover_path,$voice);
      // sid
      if ($this->sid) {
        // 更新数据表
        $res = $this->sdb->save($this->sid,$data);
      } else {
        // 写入数据表
        $res = $this->sdb->add($data);
      }
      if ($res) {
        // 真人认证
        $istatus = $this->udb->getIstatus($this->u['id']);
        if ($istatus != 1) {
          $this->udb->save($this->u['id'],array('istatus'=>1));
        }
        echo J(R(0,'受影响的操作 :)',true));
        die;
      } else {
        echo J(R(1,'请尝试刷新页面后重试 :(',false));
        die;
      }
    }
  }

  /**
   * 初始化服务数据
   */
  public function getSdata($cover_path,$voice){
    // data
    $data['uid'] = $this->u['id'];
    $data['scid'] = $this->scid;
    $data['cover_path'] = $cover_path;
    $data['describe'] = isset($_POST['describe']) ? $_POST['describe'] : '';
    $data['voice'] = $voice;
    $data['price'] = isset($_POST['price']) ? $_POST['price'] : 0;
    $data['or_quantity'] = 0;
    $data['i_label'] = isset($_POST['i_label']) ? $_POST['i_label'] : '';
    $data['type'] = 2;
    $data['status'] = 1;
    $data['ctime'] = time();
    $data['hot_status'] = 0;
    return $data;
  }

  /**
   * 删除文件
   */
  public function delFiles(){
    // Ajax
    if (IS_AJAX === true) {
      $type = isset($_POST['type']) ? $_POST['type'] : 0;
      $filePath = isset($_POST['filePath']) ? $_POST['filePath'] : '';
      if (unlink(ICUNJI.$filePath)) {
        // 更新服务数据表文件路径为空，type>1 封面图片 ，type>2 音频
        if ($type == 1) {
          $data['cover_path'] = '';
        } else {
          $data['voice'] = '';
        }
        $this->sdb->save($this->sid,$data);
        echo J(R(0,'文件删除成功 :)',true));
        die;
      } else {
        echo J(R(1,'文件删除失败 :(',false));
        die;
      }
    }
  }

}