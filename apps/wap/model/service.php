<?php
namespace apps\wap\model;
use core\lib\model;
class service extends model
{
  public $table = 'service';

  /**
   * 读取首页热门服务
   */
  public function gethotRows($hot_status)
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
              hot_status = '$hot_status'
      AND
              type = '2'
      AND
              status = '1'
      ORDER BY
              ctime DESC
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
  * 读取相关记录
  */
  public function getCorrelation($scid,$type,$status)
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
              scid = '$scid'
      AND
              type = '$type'
      AND
              status = '$status'
      ORDER BY
              id DESC
    ";
    return $this->query($sql)->fetchAll(2);
  }

}