<?php
//加载主核心文件
include_once '../lib/core/core.php';

//加载配置文件
include_once '../lib/config/config.php';



$GLOBALS['m']     = isset( $_GET['m'] ) ? $_GET['m'] : DEFAULT_MODULE;
$GLOBALS['c']     = isset( $_GET['c'] ) ? $_GET['c'] : DEFAULT_ACTION;
$GLOBALS['a']     = isset( $_GET['a'] ) ? $_GET['a'] : DEFAULT_FUNC;


//加载自动加载类文件
include_once '../lib/core/autoLoad.php';

$class = new $GLOBALS['c'];
$class->$GLOBALS['a']();

?>