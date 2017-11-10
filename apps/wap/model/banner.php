<?php
namespace apps\wap\model;
use core\lib\model;
class banner extends model{
  public $table = 'banner';

  /**
   * 读取记录
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
                1 = 1
        AND
                status = '$status'
        ORDER BY
                sort ASC
    ";
    return $this->query($sql)->fetchAll(2);
  }

}