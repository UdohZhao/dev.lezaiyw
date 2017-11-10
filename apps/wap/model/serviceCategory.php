<?php
namespace apps\wap\model;
use core\lib\model;
class serviceCategory extends model{
  public $table = 'service_category';

  /**
   * 读取相关记录
   */
  public function getcRows($status)
  {
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 =1
        AND
                status = '$status'
        ORDER BY
                sort ASC
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 读取相关单位
   */
  public function getunitsRow($id)
  {
    return $this->get($this->table,'units',['id'=>$id]);
  }

}