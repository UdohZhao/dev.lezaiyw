<?php
namespace apps\wap\ctrl;
use core\lib\conf;
class baseCtrl extends \core\icunji{
  // 构造方法
  public function _initialize(){
    //控制器初始化
    if(method_exists($this,'_auto'))
        $this->_auto();
    // 加载路径
    $this->assign('src','/apps/admin/views');
    // 站点名称
    $this->assign('websiteName',conf::get('WEBSITE_NAME','admin'));
  }

}