<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\cashValue;
class cashValueCtrl extends baseCtrl{
  public $db;
  public $status;
  public $id;
  // 构造方法
  public function _auto(){
    $this->db = new cashValue();
    $this->status = isset($_GET['status']) ? intval($_GET['status']) : 0;
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $this->assign('status',$this->status);
  }

  /**
   * 提现列表页面
   */
  public function index(){
    // 读取用户提现记录
    $data = $this->db->getRows(1,$this->status);
    if ($data) {
      // 读取用户相关信息
      foreach ($data AS $k => $v) {
        $data[$k]['uData'] = $this->udb->getRow($v['uid']);
      }
    }
    // assign
    $this->assign('data',$data);
    // display
    $this->display("cashValue","index.html");
    die;
  }

  /**
   * flag
   */
  public function flag(){
    // Ajax
    if (IS_AJAX === true) {
      $res = $this->db->save($this->id,array('status'=>$this->status));
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