<?php

//记录开始运行时间
$GLOBALS['_beginTime'] = microtime(TRUE);
//记录内存初始使用
define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));
if(MEMORY_LIMIT_ON) $GLOBALS['_startUseMems']=memory_get_usage();

//后缀名
define('EXT','.class.php');

//绝对路径
define('AP_PATH',dirname($_SERVER['SCRIPT_FILENAME']).'/');

//核心系统目录
define('SYSTEM_PATH',AP_PATH.'System/');
define('COMMON_PATH',SYSTEM_PATH.'Common/');
define('CONF_PATH',SYSTEM_PATH.'Conf/');
define('LIB_PATH',SYSTEM_PATH.'Libray/');
define('CHACHE_PATH',RUNTIME_PAHT.'Chache/');
define('LOG_PATH',RUNTIME_PATH.'Logs/');
define('Temp_PATH',RUNTIME_PATH.'Temp/');
define('SPHP_PATH',SYSTEM_PATH.'Sphp/');


