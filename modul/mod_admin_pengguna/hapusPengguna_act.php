<?php
include('../../config/class_database.php');
include('../../config/serverconfig.php');

$id = $_POST['id'];

$db->database_prepare("DELETE FROM as_admin WHERE admin_id='$id'")->execute();

?>