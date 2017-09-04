<?php
session_start();
error_reporting(0);
include "config/class_database.php";
include "config/serverconfig.php";

$cek_password = $db->database_prepare("SELECT * FROM as_users WHERE username = ?")->execute($_SESSION['admin_username']);
$nums = $db->database_num_rows($cek_password);

if ($nums < 1){
	header("Location: ubah_password.html?error=Error");
} else if ($_POST['pass_baru'] != $_POST['ulang_pass']) {
  header("Location: ubah_password.html?error=Error");
} else {

		$modified_date = date('Y-m-d H:i:s');

		$db->database_prepare("UPDATE as_users SET	password = ?,modified_date = ? WHERE username = ?")->execute($_POST["pass_baru"],$modified_date,$_SESSION["admin_username"]);

					header("Location: ubah_password.html?update=Success");

}
?>
