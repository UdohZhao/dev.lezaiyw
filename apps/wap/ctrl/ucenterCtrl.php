<?php
namespace apps\wap\ctrl;
use core\lib\conf;
use apps\home\model\certificationInfo;
class ucenterCtrl extends baseCtrl{

  // 构造方法
  public function _auto()
  {
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/wap");
      die;
    }
    $this->db = new certificationInfo();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  /**
   * 我的首页
   */
  public function index(){
      // display
      $this->display('ucenter','index.html');
      die;
  }

  /**
   * 个人资料
   */
  public function ucenter()
  {
      // display
      $this->display('ucenter','ucenter.html');
      die;
  }

  /**
   * 申请入驻
   */
  public function application(){
      // display
      $this->display('ucenter','application.html');
      die;
  }

  public function applypw(){
      // display
      $this->display('ucenter','applypw.html');
      die;
  }
  public function service(){
      // display
      $this->display('ucenter','service.html');
      die;
  }


  /**
   * 实名认证
   */
  public function realname()
  {
    // Get
    if (IS_GET === true)
    {
      // 读取当前用户是否提交了申请
      $data = $this->db->getRow($this->u['id']);
      // assign
      $this->assign('data',$data);
      // display
      $this->display('ucenter','realname.html');
      die;
    }
  }


  public function record(){
      // display
      $this->display('ucenter','record.html');
      die;
  }
}