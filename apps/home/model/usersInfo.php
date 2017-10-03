<?php
namespace apps\home\model;
use core\lib\model;
class usersInfo extends model{
  public $table = 'users_info';

  /**
   * 读取用户详细信息表是否有记录
   */
  public function getCrow($uid){
    return $this->count($this->table,['uid'=>$uid]);
  }

  /**
   * 写入数据表
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
   * 更新数据
   */
  public function save($uid,$data){
    $res = $this->update($this->table,$data,['uid'=>$uid]);
    return $res->rowCount();
  }

}

