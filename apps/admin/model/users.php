<?php
namespace apps\admin\model;
use core\lib\model;
class users extends model{
  public $table = 'users';

  /**
   * 读取单条记录
   */
  public function getRow($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  /**
   * 读取id
   */
  public function getId($nickname){
    return $this->get($this->table,'id',['nickname'=>$nickname]);
  }


}