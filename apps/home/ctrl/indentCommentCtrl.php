<?php
namespace apps\home\ctrl;
use apps\home\model\indentComment;
use apps\home\model\indent;
class indentCommentCtrl extends baseCtrl{
  public $db;
  public $idb;
  public $iid;
  // 构造方法
  public function _auto(){
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/");
      die;
    }
    $this->db = new indentComment();
    $this->idb = new indent();
    $this->iid = isset($_GET['iid']) ? intval($_GET['iid']) : 0;
  }

  /**
   * 添加评论
   */
  public function add(){
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      $res = $this->db->add($data);
      if ($res) {
        // 更新订单为已经评价
        $this->idb->save($this->iid,array('status'=>3));
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
    $data['sid'] = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
    $data['avatar'] = $this->u['avatar'];
    $data['nickname'] = $this->u['nickname'];
    $data['content'] = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '好评';
    $data['ctime'] = time();
    $data['status'] = isset($_POST['status']) ? intval($_POST['status']) : 0;
    return $data;
  }


}