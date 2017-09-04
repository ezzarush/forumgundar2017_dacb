<?php

$hostname = $_SERVER['SERVER_NAME'];
$app_path = 'http://'.$hostname.'/forumgundar2017_dacb/';

$database_host = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "db_forum";
$db=new ee_database($database_host,$database_username,$database_password,$database_name);
?>