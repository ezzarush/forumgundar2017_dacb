<?php
include('../../config/class_database.php');
include('../../config/serverconfig.php');

//GET PARAMETER
$topic_ref          = $_POST['topic_ref'];
$topic_title        = $_POST['topic_title'];
$topic_title_seo    = $_POST['topic_title_seo'];
$topic_category     = $_POST['topic_category'];
$topic_sub_category = $_POST['topic_sub_category'];
$topic_Description  = $_POST['topic_Description'];
    
$date               = date('Y-m-d H:m:s');
$userid             = 1;
$mode               = $_POST['mode'];
    
$filename           = $_FILES["topic_File"]["name"];
    
$target_dir = "../../uploads/topik/";
$target_file = $target_dir . basename($_FILES["topic_File"]["name"]);

if (move_uploaded_file($_FILES['topic_File']['tmp_name'], $target_file)) {
    if($mode==0){
        $query = "INSERT INTO as_topics (topic_ref,title,title_seo,category_id,sub_category_id,description,image,member_id,created_date) VALUES ('$topic_ref','$topic_title','$topic_title_seo','$topic_category','$topic_sub_category','$topic_Description','$filename','$userid','$date')";
        $db->database_prepare($query)->execute();
    }else{
        $db->database_prepare("UPDATE as_frm_categories SET category_name='$cat_name', category_seo='$cat_seo', image='$filename', status='$cat_status', description='$cat_description',modified_date='$date',modified_userid='$userid' WHERE frm_category_id='$mode'")->execute();
    }
    header('Location: '.$app_path.'topik');
}
    
?>