<?php
error_reporting(~E_ALL);
include "config/class_database.php";
include "config/serverconfig.php";

$sql_sign_in = $db->database_prepare("SELECT * FROM as_users WHERE username = ? AND password = ? AND blocked = 'N'")->execute($_POST['username'],$_POST['password']);
$nums = $db->database_num_rows($sql_sign_in);
$data = $db->database_fetch_array($sql_sign_in);

if ($nums > 0){
	session_start();
	$_SESSION['admin_username'] = $data['username'];

	header("Location: admin");
}
else{
		header("Location: admin?error=Error");
}
?>
