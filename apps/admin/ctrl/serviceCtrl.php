<?php
namespace apps\admin\ctrl;
use core\lib\conf;
use vendor\page\Page;
use apps\admin\model\serviceCategory;
use apps\admin\model\service;
use apps\admin\model\users;
class serviceCtrl extends baseCtrl{
  public $scid;
  public $scdb;
  public $db;
  public $udb;
  public $type;
  public $id;
  // 构造方法
  public function _auto(){
    $this->scid = isset($_GET['scid']) ? intval($_GET['scid']) : 0;
    $this->type = isset($_GET['type']) ? intval($_GET['type']) : 0;
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $this->assign('scid',$this->scid);
    $this->assign('type',$this->type);
    $this->scdb = new serviceCategory();
    $this->db = new service();
    $this->udb = new users();
  }

  // 服务类别页面
  public function index(){
    // search
    $search = isset($_POST['search']) ? htmlspecialchars($_POST['search']) : '';
    if ($search) {
      $search = $this->udb->getId($search);
      if ($search) {
        $search = " AND uid = '$search'";
      }
    }
    // 读取服务类别名称
    $cname = $this->scdb->getCname($this->scid);
    // 总记录数
    $totalRows = $this->db->totalRows($this->scid,$this->type);
    // 数据分页
    $page = new Page($totalRows,conf::get('LIMIT','admin'));
    // 读取当前服务类别下相关服务
    $data = $this->db->getCrows($this->scid,$this->type,$search,$page->limit);
    foreach ($data AS $k => $v) {
      // 读取相关用户昵称
      $data[$k]['uData'] = $this->udb->getRow($v['uid']);
    }
    // assign
    $this->assign('cname',$cname);
    $this->assign('data',$data);
    $this->assign('page',$page->showpage());
    ###
    $this->display('service','index.html');
    die;
  }

  /**
   * 上架 & 下架
   */
  public function flag(){
    // Ajax
    if (IS_AJAX === true) {
      $type = isset($_POST['type']) ? intval($_POST['type']) : 0;
      // type小于2为上架&下架
      if ($type < 2) {
        $data['status'] = $type;
      } else if ($type == 2) {
        // 送你上热门榜
        $data['hot_status'] = 1;
      } else if ($type == 3) {
        $data['hot_status'] = 2;
      }
      $data['ctime'] = time();
      $res = $this->db->save($this->id,$data);
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