<?php
include('../../config/class_database.php');
include('../../config/serverconfig.php');

//GET PARAMETER
$pengguna_fullname	= $_POST['pengguna_fullname'];
$pengguna_username	= $_POST['pengguna_username'];
$pengguna_password	= $_POST['pengguna_password'];
$pengguna_email		= $_POST['pengguna_email'];
$pengguna_phone	 	= $_POST['pengguna_phone'];
$pengguna_level	  	= $_POST['pengguna_level'];
$pengguna_blocked	= $_POST['pengguna_blocked'];
    
$date               = date('Y-m-d H:m:s');
$userid             = 1;
$mode               = $_POST['mode'];
 

if($mode==0){
	$query = "INSERT INTO as_admin (username,password,full_name,email,phone,level,blocked,created_date,created_userid) VALUES ('$pengguna_username','$pengguna_password','$pengguna_fullname','$pengguna_email','$pengguna_phone','$pengguna_level','$pengguna_blocked','$date','$userid')";
	$db->database_prepare($query)->execute();
}else{
	$query = "UPDATE as_admin SET username='$pengguna_username', password='$pengguna_password', full_name='$pengguna_fullname', email='$pengguna_email', phone='$pengguna_phone',  level='$pengguna_level', blocked='$pengguna_blocked',modified_date='$date', modified_userid='$userid' WHERE admin_id='$mode'";
	$db->database_prepare($query)->execute();
}
header('Location: '.$app_path.'pengguna');
    
?>