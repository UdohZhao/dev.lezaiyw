<?php
namespace apps\home\model;
use core\lib\model;
class service extends model{
  public $table = 'service';

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
  public function getRow($scid){
    return $this->get($this->table,'*',['scid'=>$scid]);
  }

  /**
   * 更新数据
   */
  public function save($id,$data){
    $res = $this->update($this->table,$data,['id'=>$id]);
    return $res->rowCount();
  }

  /**
  * 读取相关记录
  */
  public function getCorrelation($scid,$type,$status){
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
      AND
              status = '$status'
      ORDER BY
              id DESC
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 读取uid相关服务
   */
  public function getDrows($uid,$type,$status){
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
              type = '$type'
      AND
              status = '$status'
      ORDER BY
              id DESC
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 读取sid单条记录
   */
  public function getsidRow($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  /**
   * 读取单条记录接单数
   */
  public function getOrquantity($id){
    return $this->get($this->table,'or_quantity',['id'=>$id]);
  }

  /**
   * 读取热门榜服务
   */
  public function getHotlist($hot_status,$limit){
    // sql
    $sql = "
      SELECT
              *
      FROM
              `$this->table`
      WHERE
              1 = 1
      AND
              hot_status = '$hot_status'
      AND
              type = '2'
      AND
              status = '1'
      ORDER BY
              ctime DESC
      {$limit}
    ";
    return $this->query($sql)->fetchAll(2);
  }

}

