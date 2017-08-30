<?php
include('../../config/class_database.php');
include('../../config/serverconfig.php');

$id = $_POST['id'];

$db->database_prepare("DELETE FROM as_frm_categories WHERE frm_category_id='$id'")->execute();

?>