<?php
namespace apps\home\model;
use core\lib\model;
class users extends model{
  public $table = 'users';

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
  public function getRow($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  /**
   * @param  [int] 用户主键id
   * @param  [array] 更新数组
   * @return [int] 返回受影响的行数
   */
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  /**
   * 读取昵称是否存在
   */
  public function getNickname($nickname){
    return $this->get($this->table,'id',['nickname'=>$nickname]);
  }

  /**
   * 读取约玩币
   */
  public function getBalance($id){
    return $this->get($this->table,'balance',['id'=>$id]);
  }

}

