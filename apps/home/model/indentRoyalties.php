<?php
namespace apps\home\model;
use core\lib\model;
class indentRoyalties extends model{
  public $table = 'indent_royalties';

  /**
   * 写入数据表
   */
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  /**
   * 读取相关记录
   */
  public function getRows($uid,$status){
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
                status = '$status'
        ORDER BY
                ctime DESC
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 更新数据
   */
  public function save($uid,$data){
    $res = $this->update($this->table,$data,['uid'=>$uid]);
    return $res->rowCount();
  }

}

