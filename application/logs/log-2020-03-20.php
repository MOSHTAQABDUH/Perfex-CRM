<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-20 01:38:02 --> Severity: error --> Exception: PDOException: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
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
#11 D:\xampp\htdocs\crm\application\controllers\Agents.php(7): My_Controller->__construct()
#12 D:\xampp\htdocs\crm\system\core\CodeIgniter.php(518): Agents->__construct()
#13 D:\xampp\htdocs\crm\index.php(310): require_once('D:\\xampp\\htdocs...')
#14 {main} D:\xampp\htdocs\crm\sparks\php-activerecord\0.0.3\vendor\php-activerecord\lib\Connection.php 269
