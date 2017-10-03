<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use vendor\page\Page;
use apps\admin\model\adminUser;
class adminUserCtrl extends baseCtrl{
  public $db;
  public $id;
  // 构造方法
  public function _auto(){
    $this->db = new adminUser();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  /**
   * 添加后台用户页面
   */
  public function add(){
    // Get
    if (IS_GET === true) {
      // display
      $this->display('adminUser','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // 防止重复添加
      if ($this->db->getId($data['username'])) {
        echo J(R(1,'请勿重复添加 :(',false));
        die;
      }
      if ($this->db->add($data)) {
        echo J(R(0,'受影响的操作 :)',true));
        die;
      }
    }
  }

  /**
   * 初始化数据
   */
  private function getData(){
    $data = array();
    $data['username'] = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
    $data['password'] = isset($_POST['password']) ? enPassword(htmlspecialchars($_POST['password'])) : '';
    $data['type'] = isset($_POST['type']) ? $_POST['type'] : '';
    $data['status'] = 0;
    $data['ctime'] = time();
    return $data;
  }

  /**
   * 后台用户列表页面
   */
  public function index(){
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    // 总记录数
    $totalRows = $this->db->totalRows();
    // 数据分页
    $page = new Page($totalRows,conf::get('LIMIT','admin'));
    // 读取全部数据
    $data = $this->db->getAll($search,$page->limit);
    // assign
    $this->assign('data',$data);
    $this->assign('page',$page->showpage());
    // display
    $this->display('adminUser','index.html');
    die;
  }

  /**
   * 删除
   */
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      if ($this->db->del($this->id)) {
        echo J(R(0,'受影响的操作 :)',true));
        die;
      } else {
        echo J(R(1,'请尝试刷新页面后重试 :(',false));
        die;
      }
    }
  }

  /**
   * 冻结 & 解冻
   */
  public function flag(){
    // Ajax
    if (IS_AJAX === true) {
      // 获取status
      $status = isset($_POST['status']) ? $_POST['status'] : 0;
      if ($this->db->save($this->id,array('status'=>$status))) {
        echo J(R(0,'受影响的操作 :)',true));
        die;
      } else {
        echo J(R(1,'请尝试刷新页面后重试 :(',false));
        die;
      }
    }
  }

}