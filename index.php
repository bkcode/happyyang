<?php

/**
 * 系统调试
 */
define('APP_DEBUG',true);

/**
 * 应用目录
 */
define('APP_PATH','./Application/');

/**
 * 缓存目录
 */
define('RUNTIME_PATH','./Runtime/');

/**
 * 公开目录
 */
define('PUBLIC_PATH','./public/');

/**
 * 核心入口
 */

require './System/SystemPHP.php';