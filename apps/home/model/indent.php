<?php
namespace apps\home\model;
use core\lib\model;
class indent extends model{
  public $table = 'indent';

  /**
   * 写入数据表
   */
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  /**
   * 读取相关订单
   */
  public function getRows($uid){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                (to_uid = '$uid' OR from_uid = '$uid')
        ORDER BY
                creation_time DESC
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 更新数据
   */
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

}

