<?php
namespace apps\admin\model;
use core\lib\model;
class banner extends model{
  public $table = 'banner';

  /**
   * 写入数据表
   */
  public function add($data){
    $res = $this->insert($this->table,$data);
    return $res->rowCount();
  }

  /**
   * 读取全部记录
   */
  public function getAll(){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        ORDER BY
                sort ASC
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 读取单条记录
   */
  public function getRow($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  /**
   * 更新数据
   */
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  /**
   * 删除数据
   */
  public function del($id){
    $res = $this->delete($this->table,['id'=>$id]);
    return $res->rowCount();
  }

}