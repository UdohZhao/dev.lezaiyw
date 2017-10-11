<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\certificationInfo;
class certificationInfoCtrl extends baseCtrl{
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/");
      die;
    }
    $this->db = new certificationInfo();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  /**
   * 添加实名认证页面
   */
  public function add(){
    // Get
    if (IS_GET === true) {
      // 读取当前用户是否提交了申请
      $data = $this->db->getRow($this->u['id']);
      // assign
      $this->assign('data',$data);
      // display
      $this->display('certificationInfo','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // 文件上传
      $front_path = upFiles('front_path');
      if ($front_path['code'] == 1) {
        echo J(R(2,$front_path['msg'],false));
        die;
      }
      $back_path = upFiles('back_path');
      if ($back_path['code'] == 1) {
        echo J(R(3,$back_path['msg'],false));
        die;
      }
      $hand_path = upFiles('hand_path');
      if ($hand_path['code'] == 1) {
        echo J(R(4,$hand_path['msg'],false));
        die;
      }
      // data
      $data = $this->getData($front_path['data'],$back_path['data'],$hand_path['data']);
      // 写入数据表
      $res = $this->db->add($data);
      if ($res) {
        // 尊敬的#name#，有用户申请了实名认证待审核，请您及时处理！
        ypSendMsg(conf::get('ADMIN_PHONE','home'),'尊敬的'.conf::get('ADMIN_NAME','home').'，有用户申请了实名认证待审核，请您及时处理！');
        echo J(R(0,'受影响的操作 :)',true));
        die;
      } else {
        echo J(R(1,'请尝试刷新页面后重试 :(',false));
        die;
      }
    }
  }

  /**
   * 初始化数据
   */
  private function getData($front_path,$back_path,$hand_path){
    $data['uid'] = $this->u['id'];
    $data['front_path'] = $front_path;
    $data['back_path'] = $back_path;
    $data['hand_path'] = $hand_path;
    $data['ctime'] = time();
    $data['remark'] = '管理员正在审核中 ～';
    $data['status'] = 0;
    return $data;
  }

  /**
   * 删除
   */
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      $front_path = isset($_POST['front_path']) ? $_POST['front_path'] : '';
      $back_path = isset($_POST['back_path']) ? $_POST['back_path'] : '';
      $hand_path = isset($_POST['hand_path']) ? $_POST['hand_path'] : '';
      @unlink(ICUNJI.$front_path);
      @unlink(ICUNJI.$back_path);
      @unlink(ICUNJI.$hand_path);
      $res = $this->db->del($this->id);
      if ($res) {
        echo J(R(0,'受影响的操作 :)',true));
        die;
      } else {
        echo J(R(1,'请尝试刷新页面后重试 :(',false));
        die;
      }
    }
  }


}