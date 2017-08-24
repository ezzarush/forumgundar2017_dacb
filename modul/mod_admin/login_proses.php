<?php
include('../../config/class_database.php');
include('../../config/serverconfig.php');
session_start();

//tangkep variabel
$username = $_POST['username'];
$password = $_POST['password'];

//check ke database
$sql_topic = $db->database_prepare("SELECT * FROM as_users WHERE username='$username' AND password='$password'")->execute();
$dt_topic = $db->database_fetch_array($sql_topic);

if(empty($dt_topic)){
    //redirect to login form
    $_SESSION['info_login'] = "Login Gagal!, Username atau Password Tidak Sesuai";
    header_remove();
    header('Location: '.$app_path.'adminlogin');
}else{
    $_SESSION['isLogin']    = TRUE;
    header('Location: '.$app_path.'admin');
}

?>