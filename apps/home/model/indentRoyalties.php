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

}

