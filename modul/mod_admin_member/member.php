<?php
include('../../config/class_database.php');
include('../../config/serverconfig.php');
session_start();

$mode=$_GET['mode'];

if(isset($_SESSION["isLogin"])){
    //Header
    include('../mod_admin/header.php');
    //Sidebar
    include('../mod_admin/sidebar.php');
    //Content
    $level       = $db->database_prepare("SELECT * FROM as_level")->execute();
	
    if($mode=='add'){
        include('formPengguna.php');    
    }else if($mode=='edit'){
        $id = $_GET['id'];
        $sql_topic  = $db->database_prepare("SELECT * FROM as_users WHERE user_id='$id'")->execute();
        $data = $db->database_fetch_array($sql_topic);
        include('formPengguna.php');
    }else{
        //Get All Kategori
        $sql_topic  = $db->database_prepare("SELECT * FROM as_member ORDER BY member_id DESC")->execute();
        include('daftarMember.php');
    }
    //Footer
    include('../mod_admin/footer.php');
}else{
    header('Location: '.$app_path.'adminlogin');
}


?>