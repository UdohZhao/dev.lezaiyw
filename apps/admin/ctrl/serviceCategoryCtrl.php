<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use vendor\page\Page;
use apps\admin\model\serviceCategory;
use apps\admin\model\service;
class serviceCategoryCtrl extends baseCtrl{
  public $db;
  public $sdb;
  public $type;
  public $id;
  // 构造方法
  public function _auto(){
    $this->db = new serviceCategory();
    $this->sdb = new service();
    $this->type = isset($_GET['type']) ? intval($_GET['type']) : 0;
    $this->assign('type',$this->type);
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  /**
   * 添加服务类别页面
   */
  public function add(){
    // Get
    if (IS_GET === true) {
      // id
      if ($this->id) {
        // 读取单条记录
        $data = $this->db->getRow($this->id);
        // assign
        $this->assign('data',$data);
      }
      // display
      $this->display('serviceCategory','add.html');
      die;
    }
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // 防止重复添加
      $id = $this->db->getCcname($data['cname'],$data['type']);
      if ($id && $id != $this->id) {
        echo J(R(2,'请勿重复添加 :(',false));
        die;
      }
      // id
      if ($this->id) {
        // 更新数据表
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
  private function getData(){
    // data
    $data['cname'] = isset($_POST['cname']) ? htmlspecialchars($_POST['cname']) : '';
    $data['units'] = isset($_POST['units']) ? $_POST['units'] : 0;
    $data['sort'] = isset($_POST['sort']) ? $_POST['sort'] : 0;
    $data['type'] = isset($_POST['type']) ? $_POST['type'] : 0;
    $data['status'] = isset($_POST['status']) ? $_POST['status'] : 0;
    return $data;
  }

  /**
   * 服务类别列表页面
   */
  public function index(){
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    // 总记录数
    $totalRows = $this->db->totalRows($this->type);
    // 数据分页
    $page = new Page($totalRows,conf::get('LIMIT','admin'));
    // data
    $data = $this->db->getCorrelation($this->type,$search,$page->limit);
    // assign
    $this->assign('data',$data);
    $this->assign('page',$page->showpage());
    // display
    $this->display('serviceCategory','index.html');
    die;
  }

  /**
   * 删除
   */
  public function del(){
    // Ajax
    if (IS_AJAX === true) {
      // 读取关联
      if ($this->sdb->getCcorrelation($this->id)) {
        echo J(R(2,'请先删除下级 :(',false));
        die;
      }
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