<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use apps\admin\model\adminUser;
use Gregwar\Captcha\CaptchaBuilder;
class loginCtrl extends \core\icunji{
  public $db;
  // 构造方法
  public function _initialize(){
    $this->db = new adminUser();
    // 站点名称
    $this->assign('websiteName',conf::get('WEBSITE_NAME','admin'));
    if (isset($_SESSION['userinfo'])) {
      header('Location:/admin/index/index');
      die;
    }
    // cookie里的username
    if (isset($_COOKIE['username'])) {
      $this->assign('username',$_COOKIE['username']);
    }
  }

  // 登录页面
  public function index(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('login','index.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      if (isset($_POST['remember']) && $_POST['remember'] == 1) {
         setcookie('username',$data['username'],time()+3600);
      } else {
         setcookie('username',$data['username'],time()-3600);
      }
      // 核对用户名和密码
      $res = $this->db->getInfo($data['username'],$data['password']);
      if ($res === false) {
        echo J(R(1,'用户名或者密码错误 :(',false));
        die;
      } else if ($res['status'] == 1) {
        echo J(R(2,'该用户已被冻结，请联系网站管理员 :(',false));
        die;
      } else {
        // 用户信息存入session
        $_SESSION['userinfo'] = $res;
        echo J(R(0,'受影响的操作 :)',true));
        die;
      }
    }
  }

  // 初始化数据
  private function getData(){
    $data = array();
    $data['username'] = htmlspecialchars($_POST['username']);
    $data['password'] = enPassword(htmlspecialchars($_POST['password']));
    return $data;
  }

  // 验证码图片
  public function verifyImg(){
    // Get
    if (IS_GET === true) {
     $captcha = new CaptchaBuilder();
     $captcha->build()->output();
     $_SESSION['verifyCode'] = $captcha->getPhrase();
    }
  }

  // 核对验证码
  public function checkCode(){
    // Ajax
    if (IS_AJAX === true) {
      // 获取用户输入的验证码
      $code = $_POST['code'];
      if ($code == $_SESSION['verifyCode']) {
        unset($_SESSION['verifyCode']);
        echo 'true';
        die;
      } else {
        echo 'false';
      }
    }
  }

}