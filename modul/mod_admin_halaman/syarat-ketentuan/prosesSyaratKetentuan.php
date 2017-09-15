<?php
include('../../../config/class_database.php');
include('../../../config/serverconfig.php');

//GET PARAMETER
$judul	= $_POST['judul'];
$isi	= $_POST['isi'];
$date   = date('Y-m-d H:m:s'); 

$status	= $_POST['status'];

if($status==0){
	$query = "INSERT INTO as_halaman_syaratketentuan(judul,isi,date_created) VALUES ('$judul','$isi','$date')";
	$db->database_prepare($query)->execute();
}else{
	$query = "UPDATE as_halaman_syaratketentuan SET judul='$judul',isi='$isi',date_updated='$date'";
	$db->database_prepare($query)->execute();
}

header('Location: '.$app_path.'halaman/syarat-ketentuan');
    
?>