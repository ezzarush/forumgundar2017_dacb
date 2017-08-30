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
    if($mode=='add'){
        include('formKategori.php');    
    }else if($mode=='edit'){
        $id = $_GET['id'];
        $sql_topic  = $db->database_prepare("SELECT * FROM as_frm_categories WHERE frm_category_id='$id'")->execute();
        $data = $db->database_fetch_array($sql_topic);
        include('formKategori.php');
    }else{
        //Get All Kategori
        $sql_topic  = $db->database_prepare("SELECT * FROM as_frm_categories")->execute();
        include('daftarKategori.php');
    }
    //Footer
    include('../mod_admin/footer.php');
}else{
    header('Location: '.$app_path.'adminlogin');
}


?>