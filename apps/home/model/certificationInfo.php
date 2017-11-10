<?php
namespace apps\home\model;
use core\lib\model;
class certificationInfo extends model{
  public $table = 'certification_info';

  /**
   *  写入数据
   */
  public function add($data){
    $this->insert($this->table,$data);
    return $this->id();
  }

  /**
   * 读取单条记录
   */
  public function getRow($uid){
    return $this->get($this->table,'*',['uid'=>$uid]);
  }

  /**
   * 删除数据
   */
  public function del($id){
    $res = $this->delete($this->table,['id'=>$id]);
    return $res->rowCount();
  }

}

