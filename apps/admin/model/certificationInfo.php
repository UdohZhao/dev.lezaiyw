<?php
namespace apps\admin\model;
use core\lib\model;
class certificationInfo extends model{
  public $table = 'certification_info';

  /**
   * 读取相关数据
   */
  public function getRows($status){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
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