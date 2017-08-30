<?php
include('../../config/class_database.php');
include('../../config/serverconfig.php');

//GET PARAMETER
$cat_name           = $_POST['catName'];
$cat_seo            = $_POST['catSeo'];
$cat_status         = $_POST['catStatus'];
$cat_description    = $_POST['catDescription'];
$date               = date('Y-m-d H:m:s');
$userid             = 1;
$mode               = $_POST['mode'];
    
$filename           = $_FILES["catFile"]["name"];
    
$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["catFile"]["name"]);

if (move_uploaded_file($_FILES['catFile']['tmp_name'], $target_file)) {
    if($mode==0){
        $db->database_prepare("INSERT INTO as_frm_categories (category_name,category_seo,image,status,description,created_date,created_userid) VALUES ('$cat_name','$cat_seo','$filename','$cat_status','$cat_description','$date','$userid')")->execute();
    }else{
        $db->database_prepare("UPDATE as_frm_categories SET category_name='$cat_name', category_seo='$cat_seo', image='$filename', status='$cat_status', description='$cat_description',modified_date='$date',modified_userid='$userid' WHERE frm_category_id='$mode'")->execute();
    }
    header('Location: '.$app_path.'kategori');
}
    
?>