<?php
namespace apps\home\model;
use core\lib\model;
class indentComment extends model{
  public $table = 'indent_comment';

  /**
   * 写入数据表
   */
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  /**
   * 读取相关评论
   */
  public function getRows($sid){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                sid = '$sid'
        ORDER BY
                ctime DESC
    ";
    return $this->query($sql)->fetchAll(2);
  }

}

