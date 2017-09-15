<?php
include('../../../config/class_database.php');
include('../../../config/serverconfig.php');
session_start();

if(isset($_SESSION["isLogin"])){
    //Header
    include('../../mod_admin/header.php');
    //Sidebar
    include('../../mod_admin/sidebar.php');
    //Content
	
	$sql_topic  = $db->database_prepare("SELECT * FROM as_halaman_hubungikami")->execute();
	$data = $db->database_fetch_array($sql_topic);
	
	if(empty($data)){
		$status=0;
	}else{
		$status=1;
	}
	
	include('formHubungiKami.php');
		
    //Footer
    include('../../mod_admin/footer.php');
}else{
    header('Location: '.$app_path.'adminlogin');
}


?>