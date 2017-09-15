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
	
	$is_edit = $_GET['is_edit'];
	
	if(!empty($is_edit)){
		$sql_topic  	= $db->database_prepare("SELECT * FROM as_halaman_bantuan WHERE id_bantuan='$is_edit'")->execute();
		$data_spesifik 	= $db->database_fetch_array($sql_topic);
	}
	
	$sql_topic_data  = $db->database_prepare("SELECT * FROM as_halaman_bantuan")->execute();
	
	
	if(empty($data_spesifik)){
		$id_pertanyaan=0;
	}else{
		$id_pertanyaan=$data_spesifik['id_bantuan'];
	}
	
	include('formBantuan.php');
		
    //Footer
    include('../../mod_admin/footer.php');
}else{
    header('Location: '.$app_path.'adminlogin');
}


?>