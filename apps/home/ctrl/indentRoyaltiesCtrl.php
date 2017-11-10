<?php
namespace apps\home\ctrl;
use apps\home\model\indentRoyalties;
use apps\home\model\indent;
class indentRoyaltiesCtrl extends baseCtrl{
  public $db;
  public $idb;
  public $status;
  // 构造方法
  public function _auto(){
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/");
      die;
    }
    $this->db = new indentRoyalties();
    $this->idb = new indent();
    $this->status = isset($_GET['status']) ? intval($_GET['status']) : 0;
    $this->assign('status',$this->status);
  }

  /**
   * 收益记录页面
   */
  public function index(){
    // 读取收益订单
    $data = $this->db->getRows($this->u['id'],$this->status);
    if ($data) {
      foreach ($data AS $k => $v) {
        // 读取相关订单
        $data[$k]['iData'] = $this->idb->getRow($v['iid']);
      }
    }
    // assign
    $this->assign('data',$data);
    // display
    $this->display('indentRoyalties','index.html');
    die;
  }

}