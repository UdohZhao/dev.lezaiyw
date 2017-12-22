<?php
namespace apps\wap\ctrl;
use core\lib\conf;
use apps\home\model\indent;
use apps\home\model\indentRoyalties;
use apps\home\model\service;
class indentCtrl extends baseCtrl{
  public $db;
  public $irdb;
  public $sdb;
  public $id;
  // 构造方法
  public function _auto()
  {
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/wap");
      die;
    }
    $this->assign('active','indent');
    $this->db = new indent();
    $this->irdb = new indentRoyalties();
    $this->sdb = new service();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  /**
   * WAP端首页
   */
  public function index(){
    // 读取当前用户最新订单
    $data = $this->db->getRows($this->u['id']);
    // assign
    $this->assign('data',$data);
    // display
    $this->display('indent','index.html');
    die;
  }

}