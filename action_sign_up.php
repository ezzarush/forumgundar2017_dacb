<?php
error_reporting(0);
include "config/class_database.php";
include "config/serverconfig.php";

$sql_sign_up = $db->database_prepare("SELECT * FROM as_member WHERE email = ?")->execute($_POST['email']);
$nums = $db->database_num_rows($sql_sign_up);

if ($nums > 0){
	header("Location: sign-up.html?error=Exist");
} else {
		$created_date = date('Y-m-d H:i:s');

		$db->database_prepare("INSERT INTO as_member (
														email,
														username,
														password,
														photo,
														first_name,
														last_name,
														province_id,
														cellphone,
														address,
														biografi,
														status,
														created_date,
														modified_date,
														hits)
												VALUES	(?,?,?,?,?,?,?,?,?,?,
														?,?,?,?)")
											->execute(
														$_POST['email'],
														$_POST['username'],
														$_POST['password'],
														"",
														"",
														"",
														0,
														0,
														"",
														"",
														"Y",
														$created_date,
														"",
														0);

		header("Location: success.html");
}
?>
