<?php
namespace apps\admin\model;
use core\lib\model;
class cashValue extends model{
  public $table = 'cash_value';

  /**
   * 读取相关记录
   */
  public function getRows($type,$status){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                type = '$type'
        AND
                status = '$status'
        ORDER BY
                ctime DESC
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