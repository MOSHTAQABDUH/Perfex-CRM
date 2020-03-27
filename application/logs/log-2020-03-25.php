<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-25 04:07:24 --> Severity: error --> Exception: PDOException: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
 in D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=loca...', 'root', '', Array)
#1 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://root:@...')
#3 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 D:\xampp\htdocs\crm\application\core\MY_Controller.php(78): ActiveRecord\Model::first()
#11 D:\xampp\htdocs\crm\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 D:\xampp\htdocs\crm\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 D:\xampp\htdocs\crm\index.php(310): require_once('D:\\xampp\\htdocs...')
#14 {main} D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2020-03-25 04:07:25 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-03-25 05:33:08 --> Could not find the language line "application_"
ERROR - 2020-03-25 05:42:36 --> Could not find the language line "application_"
ERROR - 2020-03-25 05:57:08 --> Could not find the language line "application_"
ERROR - 2020-03-25 05:58:57 --> Could not find the language line "application_"
ERROR - 2020-03-25 05:59:20 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:12:17 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:12:30 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:12:40 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:13:47 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:13:55 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:15:20 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:17:19 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:19:58 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:20:57 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:21:16 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:22:48 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:23:14 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:27:15 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:30:09 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:30:27 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:48:41 --> Could not find the language line "application_"
ERROR - 2020-03-25 06:50:11 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:08:18 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:08:24 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 13:08:26 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 13:08:33 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:08:38 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 13:08:39 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 13:41:18 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:44:45 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:45:05 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:48:26 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:56:54 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:57:46 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:58:23 --> Could not find the language line "application_"
ERROR - 2020-03-25 13:59:30 --> Could not find the language line "application_"
ERROR - 2020-03-25 14:10:25 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 14:10:26 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 14:19:34 --> Could not find the language line "application_"
ERROR - 2020-03-25 14:27:19 --> Could not find the language line "application_"
ERROR - 2020-03-25 14:29:32 --> Could not find the language line "application_"
ERROR - 2020-03-25 14:31:43 --> Could not find the language line "application_"
ERROR - 2020-03-25 15:47:04 --> Could not find the language line "application_"
ERROR - 2020-03-25 15:49:19 --> Could not find the language line "application_"
ERROR - 2020-03-25 15:49:42 --> Could not find the language line "application_"
ERROR - 2020-03-25 16:07:40 --> Could not find the language line "application_"
ERROR - 2020-03-25 16:11:42 --> Could not find the language line "application_"
ERROR - 2020-03-25 16:13:11 --> Could not find the language line "application_"
ERROR - 2020-03-25 16:32:52 --> Could not find the language line "application_"
ERROR - 2020-03-25 16:34:13 --> Could not find the language line "application_"
ERROR - 2020-03-25 16:34:35 --> Could not find the language line "application_"
ERROR - 2020-03-25 16:58:07 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 16:58:08 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 17:03:04 --> Could not find the language line "application_"
ERROR - 2020-03-25 17:53:57 --> Could not find the language line "application_"
ERROR - 2020-03-25 17:56:32 --> Could not find the language line "application_"
ERROR - 2020-03-25 18:22:15 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 18:22:16 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 18:28:57 --> Could not find the language line "application_"
ERROR - 2020-03-25 18:29:02 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 18:29:03 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 18:29:30 --> Could not find the language line "application_"
ERROR - 2020-03-25 18:29:37 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 18:29:38 --> Severity: error --> Exception: Couldn't find User with ID=js D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php 1596
ERROR - 2020-03-25 18:30:53 --> Could not find the language line "application_"
ERROR - 2020-03-25 18:57:33 --> Could not find the language line "application_"
