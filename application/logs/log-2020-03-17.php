<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-17 03:50:36 --> Severity: error --> Exception: PDOException: SQLSTATE[HY000] [1045] Access denied for user 'office'@'localhost' (using password: YES) in D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=loca...', 'office', '12b428l8w447sCS...', Array)
#1 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://office...')
#3 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 D:\xampp\htdocs\crm\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 D:\xampp\htdocs\crm\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 D:\xampp\htdocs\crm\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 D:\xampp\htdocs\crm\index.php(310): require_once('D:\\xampp\\htdocs...')
#14 {main} D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2020-03-17 03:50:57 --> Severity: error --> Exception: PDOException: SQLSTATE[HY000] [1045] Access denied for user 'office'@'localhost' (using password: NO) in D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=loca...', 'office', '', Array)
#1 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://office...')
#3 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 D:\xampp\htdocs\crm\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 D:\xampp\htdocs\crm\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 D:\xampp\htdocs\crm\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 D:\xampp\htdocs\crm\index.php(310): require_once('D:\\xampp\\htdocs...')
#14 {main} D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2020-03-17 03:50:58 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-03-17 03:51:00 --> Severity: error --> Exception: PDOException: SQLSTATE[HY000] [1045] Access denied for user 'office'@'localhost' (using password: NO) in D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php:267
Stack trace:
#0 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(267): PDO->__construct('mysql:host=loca...', 'office', '', Array)
#1 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php(101): ActiveRecord\Connection->__construct(Object(stdClass))
#2 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\ConnectionManager.php(33): ActiveRecord\Connection::instance('mysqli://office...')
#3 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(103): ActiveRecord\ConnectionManager::get_connection('default')
#4 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(80): ActiveRecord\Table->reestablish_connection(false)
#5 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Table.php(61): ActiveRecord\Table->__construct('Setting')
#6 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(744): ActiveRecord\Table::load('Setting')
#7 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1567): ActiveRecord\Model::table()
#8 [internal function]: ActiveRecord\Model::find('first')
#9 D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Model.php(1453): call_user_func_array('static::find', Array)
#10 D:\xampp\htdocs\crm\application\core\MY_Controller.php(43): ActiveRecord\Model::first()
#11 D:\xampp\htdocs\crm\application\controllers\Dashboard.php(9): My_Controller->__construct()
#12 D:\xampp\htdocs\crm\system\core\CodeIgniter.php(518): Dashboard->__construct()
#13 D:\xampp\htdocs\crm\index.php(310): require_once('D:\\xampp\\htdocs...')
#14 {main} D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:28 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:28 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:28 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:28 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:28 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:28 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:29 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:29 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:29 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:29 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:29 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:29 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:29 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:53:57 --> 404 Page Not Found: Install/index
ERROR - 2020-03-17 03:54:05 --> 404 Page Not Found: Install/install.php
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:39 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:40 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:54:40 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:19 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:19 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:19 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:19 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:58:20 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:31 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:32 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 03:59:34 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:00:07 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:01:25 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:09 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 04:02:12 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:21 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:16:22 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:30:03 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 07:30:03 --> 404 Page Not Found: Assets/blueline
ERROR - 2020-03-17 21:50:27 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 21:50:34 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 21:50:47 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 21:50:56 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 21:50:58 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 21:53:33 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 21:53:41 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 21:57:14 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 21:57:18 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 22:02:34 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 22:02:51 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 22:12:47 --> Could not find the language line "application_settings/users"
ERROR - 2020-03-17 22:36:32 --> 404 Page Not Found: Agents/index
ERROR - 2020-03-17 22:40:49 --> 404 Page Not Found: Agents/index
