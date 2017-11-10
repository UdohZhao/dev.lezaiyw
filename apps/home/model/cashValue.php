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

  /**
   * 读取相关记录数
   */
  public function getRows($uid,$type){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                uid = '$uid'
        AND
                type = '$type'
        ORDER BY
                ctime DESC
    ";
    return $this->query($sql)->fetchAll(2);
  }


}

