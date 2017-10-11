<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\certificationInfo;
class certificationInfoCtrl extends baseCtrl{
  public $db;
  public $status;
  public $id;
  // 构造方法
  public function _auto(){
    $this->db = new certificationInfo();
    $this->status = isset($_GET['status']) ? intval($_GET['status']) : 0;
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $this->assign('status',$this->status);
  }

  /**
   * 审核实名认证页面
   */
  public function index(){
    // 读取审核数据
    $data = $this->db->getRows($this->status);
    if ($data) {
      // 读取相关用户信息
      foreach ($data AS $k => $v) {
        $data[$k]['uData'] = $this->udb->getRow($v['uid']);
      }
    }
    // assign
    $this->assign('data',$data);
    // display
    $this->display('certificationInfo','index.html');
    die;
  }

  /**
   * okFlag
   */
  public function okFlag(){
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      $res = $this->db->save($this->id,$data);
      if ($res) {
        // status 2 表示通过
        if ($data['status'] == 2) {
          $uid = isset($_POST['uid']) ? intval($_POST['uid']) : 0;
          $this->udb->save($uid,array('type'=>1));
          $pass = '通过';
        } else if ($data['status'] == 1) {
          $pass = '未通过';
        }
        // 尊敬的#name#，您本次申请的实名认证审核#pass#！
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        ypSendMsg($phone,"尊敬的用户，您本次申请的实名认证审核".$pass."！");
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
  private function getData(){
    $data['remark'] = isset($_POST['remark']) ? htmlspecialchars($_POST['remark']) : '';
    $data['status'] = $this->status;
    return $data;
  }

}