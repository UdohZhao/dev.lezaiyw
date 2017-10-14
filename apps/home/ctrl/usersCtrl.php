<?php
namespace apps\home\ctrl;
use apps\home\model\users;
class usersCtrl extends baseCtrl{
  public $db;
  // 构造方法
  public function _auto(){
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/");
      die;
    }
    $this->db = new users();
  }

  /**
   * 完善个人资料页面
   */
  public function add(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('users','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // 验证手机号码
      if (!isMobile($data['phone'])){
        echo J(R(2,'请输入合法的手机号码 :(',false));
        die;
      }
      // 防止昵称重复
      $id = $this->db->getNickname($data['nickname']);
      if ($id && $id != $this->u['id']) {
        echo J(R(3,'当前昵称已经存在 :(',false));
        die;
      }
      $res = $this->db->save($this->u['id'],$data);
      if ($res) {
        $_SESSION['homeUserinfo']['nickname'] = $data['nickname'];
        $_SESSION['homeUserinfo']['qq'] = $data['qq'];
        $_SESSION['homeUserinfo']['phone'] = $data['phone'];
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
    $data = array();
    $data['nickname'] = isset($_POST['nickname']) ? htmlspecialchars($_POST['nickname']) : '';
    $data['qq'] = isset($_POST['qq']) ? $_POST['qq'] : '';
    $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
    return $data;
  }

  /**
   * 上传头像
   */
  public function upAvatar(){
    // Ajax
    if (IS_AJAX === true) {
      $res = upFiles('avatar');
      if ($res['code'] == 0) {
        $this->u['avatar'] = $res['data'];
        // 更新用户头像
        $this->db->save($this->u['id'],['avatar'=>$res['data']]);
      }
      echo J($res);
      die;
    }
  }



}