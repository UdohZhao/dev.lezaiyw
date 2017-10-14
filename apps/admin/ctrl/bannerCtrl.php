<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use vendor\page\Page;
use apps\admin\model\banner;
class bannerCtrl extends baseCtrl{
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
    $this->db = new banner();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  /**
   * 添加banner
   */
  public function add(){
    // Get
    if (IS_GET === true) {
      // id
      if ($this->id) {
        $data = $this->db->getRow($this->id);
        // assign
        $this->assign('data',$data);
      }
      // display
      $this->display('banner','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      if (isset($_FILES['path'])) {
        // 文件上传
        $res = upFiles('path');
        if ($res['code'] == 1) {
          echo J(R(2,$res['msg'],false));
          die;
        }
        $path = $res['data'];
      } else {
        $path = isset($_POST['path']) ? $_POST['path'] : '';
      }
      // data
      $data = $this->getData($path);
      // id
      if ($this->id) {
        // 更新数据
        $res = $this->db->save($this->id,$data);
      } else {
        // 写入数据表
        $res = $this->db->add($data);
      }
      if ($res) {
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
  private function getData($path){
    $data['path'] = $path;
    $data['sort'] = isset($_POST['sort']) ? intval($_POST['sort']) : 0;
    $data['status'] = isset($_POST['status']) ? intval($_POST['status']) : 0;
    return $data;
  }

  /**
   * banner列表页面
   */
  public function index(){
    // 读取banner记录
    $data = $this->db->getAll();
    // assign
    $this->assign('data',$data);
    // display
    $this->display('banner','index.html');
    die;
  }

  /**
   * 删除banner
   */
  public function delBanner(){
    // Ajax
    if (IS_AJAX === true) {
      $path = isset($_POST['path']) ? $_POST['path'] : '';
      @unlink(ICUNJI.$path);
      $res = $this->db->save($this->id,array('path'=>''));
      if ($res) {
        echo J(R(0,'受影响的操作 :)',true));
        die;
      } else {
        echo J(R(1,'请尝试刷新页面后重试 :(',false));
        die;
      }
    }
  }

  /**
   * 删除
   */
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      $path = isset($_POST['path']) ? $_POST['path'] : '';
      @unlink(ICUNJI.$path);
      $res = $this->db->del($this->id);
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