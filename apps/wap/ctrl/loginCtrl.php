<?php
namespace apps\wap\ctrl;
use core\lib\conf;
use apps\wap\model\userAuths;
use apps\wap\model\users;
class loginCtrl extends baseCtrl{
  public $type;
  public $uadb;
  public $udb;
  // 构造方法
  public function _auto(){
    $this->type = isset($_GET['type']) ? intval($_GET['type']) : 0;
    $this->uadb = new userAuths();
    $this->udb = new users();
  }

  /**
   * 用户登录方法
   */
  public function add(){
    // Ajax
    if (IS_AJAX === true) {
      // 获取手机号，动态密码
      $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
      $codeMsg = isset($_POST['codeMsg']) ? htmlspecialchars($_POST['codeMsg']) : '';
      $sessionCode = isset($_SESSION['codeMsg']) ? $_SESSION['codeMsg'] : '';
      if (!isMobile($phone)) {
        echo J(R(1,'请输入正确的手机号码 :(',false));
        die;
      }
      if ($codeMsg != $sessionCode) {
        echo J(R(2,'动态密码错误 :(',false));
        die;
      }
      unset($_SESSION['codeMsg']);
      unset($codeMsg);
      unset($sessionCode);
      // 读取是否授权
      $condition = " AND identifier = '$phone' AND login_type = '$this->type'";
      $res = $this->uadb->getRow($condition);
      // false 新增用户
      if ($res === false) {
        // uData
        $uData = $this->getUdata();
        $uid = $this->udb->add($uData);
        if ($uid) {
          // 写入用户授权表
          $uaData['uid'] = $uid;
          $uaData['login_type'] = $this->type;
          $uaData['identifier'] = $phone;
          $uaData['ctime'] = time();
          $this->uadb->add($uaData);
        } else {
          echo J(R(3,'登录失败 :(',false));
          die;
        }
      } else {
        $uid = $res['uid'];
      }
      // 读取当前登录用户信息
      $data = $this->udb->getRow($uid);
      // 用户信息存入session
      $_SESSION['homeUserinfo'] = $data;
      echo J(R(0,'受影响的操作 :)',true));
      die;
    }
  }

  /**
   * 初始化数据
   */
  private function getUdata(){
    $data = array();
    $data['nickname'] = generateString();
    $data['avatar'] = '/apps/home/views/layouts/img/default_avatar.png';
    $data['sex'] = 0;
    $data['birthday'] = time();
    $data['age'] = 0;
    $data['phone'] = '';
    $data['qq'] = '';
    $data['city'] = '';
    $data['i_label'] = '';
    $data['i_signature'] = '';
    $data['balance'] = 0;
    $data['royalties'] = 0;
    $data['contribution'] = 0;
    $data['charm'] = 0;
    $data['ctime'] = time();
    $data['type'] = 0;
    $data['status'] = 0;
    $data['istatus'] = 0;
    return $data;
  }

  /**
   * 发送短信
   */
  public function sendMsg(){
    // Ajax
    if (IS_AJAX === true) {
      // 获取手机号
      $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
      if (!isMobile($phone)) {
        echo J(R(1,'请输入正确的手机号码 :(',false));
        die;
      }
      // curl请求发送
      $codeMsg = generateCode(6);
      $res = ypSendMsg($phone,'您的验证码是'.$codeMsg);
      if (!is_array($res)) {
        echo J(R(2,$res,false));
        die;
      } else {
        $_SESSION['codeMsg'] = $codeMsg;
        echo J(R(0,'动态密码短信发送成功 :)',$codeMsg));
        die;
      }
    }
  }

  /**
 * 更新状态
 */
  public function updateStatus(){
    // Ajax
    if (IS_AJAX === true) {
      $status = isset($_POST['status']) ? $_POST['status'] : 0;
      if ($this->udb->save($this->u['id'],['status'=>$status])) {
        $_SESSION['homeUserinfo']['status'] = $status;
        echo J(R(0,'受影响的操作 :)',true));
        die;
      } else {
        echo J(R(1,'请尝试刷新页面后重试 :(',false));
        die;
      }
    }
  }

  /**
   * 退出
   */
  public function logout(){
    // Get
    if (IS_GET === true) {
      session_destroy();
      header('Location:/wap/index/index');
      die;
    }
  }

}