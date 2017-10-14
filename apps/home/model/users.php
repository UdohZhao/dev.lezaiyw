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

  /**
   * 读取istatus状态
   */
  public function getIstatus($id){
    return $this->get($this->table,'istatus',['id'=>$id]);
  }

  /**
   * 读取提成总额
   */
  public function getRoyalties($id){
    return $this->get($this->table,'royalties',['id'=>$id]);
  }

  /**
   * 读取魅力值记录
   */
  public function getCharmRows(){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                istatus = '1'
        ORDER BY
                charm DESC
        LIMIT
                0 , 9
    ";
    return $this->query($sql)->fetchAll(2);
  }

  /**
   * 读取贡献榜记录
   */
  public function getContributionRows(){
    // sql
    $sql = "
        SELECT
                *
        FROM
                `$this->table`
        WHERE
                1 = 1
        AND
                istatus = '0'
        AND
                contribution != '0'
        ORDER BY
                contribution DESC
        LIMIT
                0 , 9
    ";
    return $this->query($sql)->fetchAll(2);
  }

}

