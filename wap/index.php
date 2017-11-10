<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 定义常量
define('ICUNJI', realpath('../'));
define('CORE', ICUNJI.'/core');
define('APP', ICUNJI.'/apps/wap');
define('MODULE', 'apps\wap');
define('DEBUG', true); # 开启DEBUG
include ICUNJI.'/vendor/autoload.php';
if (DEBUG) {
  $whoops = new \Whoops\Run;
  $errorTitle = '框架运行出错了~~';
  $option = new \Whoops\Handler\PrettyPageHandler();
  $option->setPageTitle($errorTitle);
  $whoops->pushHandler($option);
  $whoops->register();
  ini_set('display_errors', 'On');
}else{
  ini_set('display_errors', 'Off');
}

// 引入函数库
include CORE.'/common/function.php';
// 引入框架核心类
include CORE.'/icunji.php';
// 类自动加载
spl_autoload_register('\core\icunji::load');
// 跑起来
\core\icunji::run();

