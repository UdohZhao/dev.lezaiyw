<?php
namespace apps\home\model;
use core\lib\model;
class banner extends model{
  public $table = 'banner';

  /**
   * 读取全部数据
   */
  public function getAll(){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                status = '0'
        ORDER BY
                sort ASC
    ";
    return $this->query($sql)->fetchAll(2);
  }

}

