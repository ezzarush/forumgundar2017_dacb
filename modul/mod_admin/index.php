<?php
include('../../config/class_database.php');
include('../../config/serverconfig.php');
session_start();

//print_r($_SESSION);
//$_SESSION["isLogin"] = TRUE;

if(isset($_SESSION["isLogin"])){
    //Header
    include('header.php');
    //Sidebar
    include('sidebar.php');
    //Content
    include('content.php');
    //Footer
    include('footer.php');
}else{
    header('Location: '.$app_path.'adminlogin');
}


?>