<?php
namespace apps\home\model;
use core\lib\model;
class userAuths extends model{
  public $table = 'user_auths';

  /**
   * 读取单条记录
   */
  public function getRow($condition){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1

        {$condition}
    ";
    return $this->query($sql)->fetch(2);
  }

  /**
   * 写入数据表
   */
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

}

