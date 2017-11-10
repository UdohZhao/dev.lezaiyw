<?php
namespace apps\home\ctrl;
use core\lib\conf;
use apps\home\model\indent;
use apps\home\model\indentRoyalties;
use apps\home\model\service;
class indentCtrl extends baseCtrl{
  public $db;
  public $irdb;
  public $sdb;
  public $id;
  // 构造方法
  public function _auto(){
    // 没有登录不让访问
    if (!isset($_SESSION['homeUserinfo'])) {
      header("Location:/");
      die;
    }
    $this->db = new indent();
    $this->irdb = new indentRoyalties();
    $this->sdb = new service();
    $this->id = isset($_GET['id']) ? intval($_GET['id']) : 0;
  }

  // 添加订单
  public function add(){
    // Ajax
    if (IS_AJAX === true) {
      // data
      $data = $this->getData();
      // 写入订单表
      $res = $this->db->add($data);
      if ($res) {
        // 更新用户约玩币
        $balance = bcsub($this->u['balance'], $data['total_price'], 0);
        $this->udb->save($this->u['id'],array('balance'=>$balance));
        // 尊敬的#name#，您有一个工单号为：#order_number#的待处理工单，请您及时处理！
        $res = ypSendMsg($data['to_phone'],'尊敬的用户，您有一个工单号为：'.$data['inumber'].'的待处理工单，请您及时处理！');
        if (!is_array($res)) {
          echo J(R(2,$res,false));
          die;
        }
        echo J(R(0,'受影响的操作 :)',true));
        die;
      } else {
        echo J(R(1,'请尝试刷新页面后重试 :(',false));
        die;
      }
    }
  }

  // 初始化数据
  private function getData(){
    $data['to_uid'] = isset($_POST['to_uid']) ? $_POST['to_uid'] : 0;
    $data['from_uid'] = isset($_POST['from_uid']) ? $_POST['from_uid'] : 0;
    $data['sid'] = isset($_POST['sid']) ? $_POST['sid'] : 0;
    $data['ibid'] = isset($_POST['ibid']) ? $_POST['ibid'] : 0;
    $data['onsc_cname'] = isset($_POST['onsc_cname']) ? $_POST['onsc_cname'] : '';
    $data['inumber'] = createIn($this->u['id']);
    $data['from_num'] = isset($_POST['from_num']) ? $_POST['from_num'] : 0;
    $data['unit_price'] = isset($_POST['unit_price']) ? $_POST['unit_price'] : 0;
    $data['total_price'] = bcmul($data['unit_price'], $data['from_num'], 2);
    $data['showinfo'] = isset($_POST['showinfo']) ? $_POST['showinfo'] : '';
    $data['from_phone'] = isset($_POST['from_phone']) ? $_POST['from_phone'] : '';
    $data['to_phone'] = isset($_POST['to_phone']) ? $_POST['to_phone'] : '';
    $data['creation_time'] = time();
    $data['maa_start_time'] = isset($_POST['maa_start_time']) ? strtotime($_POST['maa_start_time']) : 0;
    $data['accept_time'] = 0;
    $data['start_time'] = 0;
    $data['end_time'] = 0;
    $data['type'] = 0;
    $data['status'] = 0;
    return $data;
  }

  /**
   * 订单管理页面
   */
  public function index(){
    // 读取当前用户最新订单
    $data = $this->db->getRows($this->u['id']);
    // assign
    $this->assign('data',$data);
    // display
    $this->display('indent','index.html');
    die;
  }

  /**
   *  公共操作
   */
  public function flag(){
    // Ajax
    if (IS_AJAX === true) {
      // typeFlag 1 取消订单
      $typeFlag = isset($_POST['typeFlag']) ? intval($_POST['typeFlag']) : 1;
      if ($typeFlag == 1) {
        $status = isset($_POST['status']) ? intval($_POST['status']) : 1;
        $from_uid = isset($_POST['from_uid']) ? intval($_POST['from_uid']) : 0;
        $total_price = isset($_POST['total_price']) ? intval($_POST['total_price']) : 0;
        $res = $this->db->save($this->id,array('status'=>$status));
        if ($res) {
          // 获取用户约玩币
          $balance = $this->udb->getBalance($from_uid);
          $balance = bcadd($balance, $total_price, 0);
          $this->udb->save($from_uid,array('balance'=>$balance));
        }
      } else if ($typeFlag == 2) {
        $type = isset($_POST['type']) ? intval($_POST['type']) : 1;
        $from_phone = isset($_POST['from_phone']) ? intval($_POST['from_phone']) : 0;
        $inumber = isset($_POST['inumber']) ? intval($_POST['inumber']) : 0;
        $res = $this->db->save($this->id,array('type'=>$type,'accept_time'=>time()));
        if ($res) {
          // 尊敬的#name#，您申请的工单号为：#order_number#已经接单，请您及时处理！
          $res = ypSendMsg($from_phone,'尊敬的用户，您申请的工单号为：'.$inumber.'已经接单，请您及时处理！');
          if (!is_array($res)) {
            echo J(R(2,$res,false));
            die;
          }
        }
        $sid = isset($_POST['sid']) ? intval($_POST['sid']) : 0;
        // 读取当前服务接单数
        $or_quantity = $this->sdb->getOrquantity($sid);
        $or_quantity = bcadd($or_quantity, 1, 0);
        // 更新接单数
        $this->sdb->save($sid,array('or_quantity'=>$or_quantity));
      } else if ($typeFlag == 3) {
        $type = isset($_POST['type']) ? intval($_POST['type']) : 2;
        $res = $this->db->save($this->id,array('type'=>$type,'start_time'=>time()));
      } else if ($typeFlag == 4) {
        $type = isset($_POST['type']) ? intval($_POST['type']) : 3;
        $res = $this->db->save($this->id,array('type'=>$type,'end_time'=>time()));
        if ($res) {
          $to_uid = isset($_POST['to_uid']) ? intval($_POST['to_uid']) : 0;
          $total_price = isset($_POST['total_price']) ? intval($_POST['total_price']) : 0;
          $iprice = isset($_POST['total_price']) ? intval($_POST['total_price']) : 0;
          // 获取用户提成总额
          $royalties = $this->udb->getRoyalties($to_uid);
          // 获取提成百分比，魅力倍数
          $royalties_percent = bcdiv(conf::get('ROYALTIES_PERCENT','home'), 100, 1);
          $total_price = bcmul($total_price, $royalties_percent, 2);
          $charm = bcmul(conf::get('CHARM_MULRIPLE','home'), $total_price, 0);
          $royalties = bcadd($royalties, $total_price, 2);
          $this->udb->save($to_uid,array('royalties'=>$royalties,'charm'=>$charm));
          // 写入订单提成表
          $irData['uid'] = $to_uid;
          $irData['iid'] = $this->id;
          $irData['iprice'] = $iprice;
          $irData['user_rprice'] = $total_price;
          $irData['platform_rprice'] = bcsub($iprice, $total_price, 2);
          $irData['ctime'] = time();
          $irData['type'] = 0;
          $irData['status'] = 0;
          $this->irdb->add($irData);
        }
      }
      ###
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