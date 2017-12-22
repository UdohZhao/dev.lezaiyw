<?php
namespace apps\wap\model;
use core\lib\model;
class users extends model
{
  public $table = 'users';

  /**
   * 读取相关用户信息
   */
  public function getcRow($id)
  {
    return $this->get($this->table,'*',['id'=>$id]);
  }

}