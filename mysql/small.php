<?php
include_once('qadmin.php');

$adm = new Qadmin();
$adm->conf_dbuser = 'root';        // �û���
$adm->conf_dbpass = 'root';    // ����

$adm->run(); 

// ��С����.