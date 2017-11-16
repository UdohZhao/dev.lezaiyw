<?php
namespace apps\home\model;
use core\lib\model;
class serviceCategory extends model{
  public $table = 'service_category';


  /**
   * 读取相关记录
   */
  public function getcRows($status)
  {
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 =1
        AND
                status = '$status'
        ORDER BY
                sort ASC
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 读取服务分类数据
   */
  public function getRows($type){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                status = '0'
        AND
                type = '$type'
        ORDER BY
                sort ASC
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 读取服务单位
   */
  public function getUnits($id){
    return $this->get($this->table,'units',['id'=>$id]);
  }

  /**
   * 读取单条记录
   */
  public function getRow($id){
    return $this->get($this->table,'*',['id'=>$id]);
  }

  /**
   * 读取服务类别名称
   */
  public function getCnameRow($id){
    return $this->get($this->table,'cname',['id'=>$id]);
  }


}

