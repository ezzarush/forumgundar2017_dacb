<?php

session_start();
include "../../config/class_database.php";
include "../../config/serverconfig.php";

$pass 	= $_POST['password'];
$id		= $_SESSION["member_login"];

$db->database_prepare("UPDATE as_member SET password='$pass' WHERE member_id='$id'")->execute();

header("Location: ../../profile.html?suc=pass-ok");

?>