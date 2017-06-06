<?php
include_once('qadmin.php');

$adm = new Qadmin();
$adm->conf_dbuser = 'root';        // 用户名
$adm->conf_dbpass = 'root';    // 密码

$adm->run(); 

// 最小运行.