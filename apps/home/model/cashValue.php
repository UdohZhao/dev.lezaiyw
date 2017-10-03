<?php
namespace apps\home\model;
use core\lib\model;
class cashValue extends model{
  public $table = 'cash_value';

  /**
   * 写入数据表
   */
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  /**
   * count订单
   */
  public function getCrow($out_trade_no){
    return $this->count($this->table,['inumber'=>$out_trade_no]);
  }


}

