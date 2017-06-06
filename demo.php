<?php
include_once('qadmin.php');

$adm = new Qadmin();
$adm->conf_driver = 'mysql';       // 驱动, 默认为mysql
$adm->conf_dbhost = '127.0.0.1';   // 主机ip或者地址,端口如 xxx:3306
$adm->conf_dbname = 'mysqldb';     // 数据库库名.
$adm->conf_dbuser = 'root';        // 用户名
$adm->conf_dbpass = 'root';    // 密码
$adm->conf_dblock= true;            // 是否锁库访问?
$adm->conf_dbmode= 'pdo';         // 连接方式

$adm->conf_urlquery= 'a=b&c=d';    // 保留的url参数 
$adm->conf_sidebar_close = true;     // 关闭左边栏
$adm->conf_lang = 'ja';            // 指定访问语言
$adm->conf_css  = 'csspath';       // 加载一个外部css    
$adm->conf_js   = 'jspath';        // 加载一个外部js   

$adm->conf_callback_func = 'myfunc';// 指定一个回调函数
$adm->conf_debug = true;             // 开启调试模式
//$adm->conf_tmpdir = 'c:\\';      // 指定一个缓存路径

$adm->conf_lang_user['sidebar'] = 'leftclose'; // 关闭左侧的描述

$adm->run();

// 完整示例.