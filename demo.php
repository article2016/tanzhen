<?php
include_once('qadmin.php');

$adm = new Qadmin();
$adm->conf_driver = 'mysql';       // ����, Ĭ��Ϊmysql
$adm->conf_dbhost = '127.0.0.1';   // ����ip���ߵ�ַ,�˿��� xxx:3306
$adm->conf_dbname = 'mysqldb';     // ���ݿ����.
$adm->conf_dbuser = 'root';        // �û���
$adm->conf_dbpass = 'root';    // ����
$adm->conf_dblock= true;            // �Ƿ��������?
$adm->conf_dbmode= 'pdo';         // ���ӷ�ʽ

$adm->conf_urlquery= 'a=b&c=d';    // ������url���� 
$adm->conf_sidebar_close = true;     // �ر������
$adm->conf_lang = 'ja';            // ָ����������
$adm->conf_css  = 'csspath';       // ����һ���ⲿcss    
$adm->conf_js   = 'jspath';        // ����һ���ⲿjs   

$adm->conf_callback_func = 'myfunc';// ָ��һ���ص�����
$adm->conf_debug = true;             // ��������ģʽ
//$adm->conf_tmpdir = 'c:\\';      // ָ��һ������·��

$adm->conf_lang_user['sidebar'] = 'leftclose'; // �ر���������

$adm->run();

// ����ʾ��.