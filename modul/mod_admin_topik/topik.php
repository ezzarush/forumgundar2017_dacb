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
    $category       = $db->database_prepare("SELECT * FROM as_frm_categories")->execute();
    $sub_category   = $db->database_prepare("SELECT * FROM as_frm_categories")->execute();
    if($mode=='add'){
        include('formTopik.php');    
    }else if($mode=='edit'){
        $id = $_GET['id'];
        $sql_topic  = $db->database_prepare("SELECT * FROM as_topics WHERE topic_id='$id'")->execute();
        $data = $db->database_fetch_array($sql_topic);
        include('formTopik.php');
    }else{
        //Get All Kategori
        $sql_topic  = $db->database_prepare("SELECT * FROM as_topics ORDER BY topic_id DESC")->execute();
        include('daftarTopik.php');
    }
    //Footer
    include('../mod_admin/footer.php');
}else{
    header('Location: '.$app_path.'adminlogin');
}


?>