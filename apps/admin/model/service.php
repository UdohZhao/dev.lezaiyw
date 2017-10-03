<?php
namespace apps\admin\model;
use core\lib\model;
class service extends model{
  public $table = 'service';

  /**
   * 读取相关记录
   */
  public function getCcorrelation($scid){
    return $this->count($this->table,['scid'=>$scid]);
  }

  /**
   * 读取相关记录数
   */
  public function getCrows($scid,$type,$search,$limit){
    // sql
    $sql = "
      SELECT
              *
      FROM
              `$this->table`
      WHERE
              1 = 1
      AND
              scid = '$scid'
      AND
              type = '$type'

      {$search}

      ORDER BY
              id DESC

      {$limit}

    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 更新数据
   */
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  /**
   * 获取总记录数
   */
  public function totalRows($scid,$type){
    return $this->count($this->table,['scid'=>$scid,'type'=>$type]);
  }

}