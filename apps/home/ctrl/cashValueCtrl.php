<?php
namespace apps\home\ctrl;
use apps\home\model\cashValue;
use apps\home\model\indentRoyalties;
class cashValueCtrl extends baseCtrl{
  public $db;
  public $irdb;
  public $type;
  // 构造方法
  public function _auto(){
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/");
      die;
    }
    $this->db = new cashValue();
    $this->irdb = new indentRoyalties();
    $this->type = isset($_GET['type']) ? intval($_GET['type']) : 0;
    $this->assign('type',$this->type);
  }

  /**
   * 添加提现记录
   */
  public function add(){
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // 写入数据表
      $res = $this->db->add($data);
      if ($res) {
        // 更新用户提成总额为0
        $this->udb->save($this->u['id'],array('royalties'=>0));
        // 更新订单为已提现
        $this->irdb->save($this->u['id'],array('status'=>1));
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
    $data['uid'] = $this->u['id'];
    $data['inumber'] = createIn($this->u['id']);
    $data['money'] = $this->u['royalties'];
    $data['ctime'] = time();
    $data['type'] = 1;
    $data['status'] = 0;
    return $data;
  }

  /**
   * 提成列表页面
   */
  public function index(){
    // 读取当前用户提成记录
    $data = $this->db->getRows($this->u['id'],$this->type);
    // assign
    $this->assign('data',$data);
    // display
    $this->display("cashValue","index.html");
    die;
  }


}