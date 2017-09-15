<?php
include('../../../config/class_database.php');
include('../../../config/serverconfig.php');

//GET PARAMETER
$judul	= $_POST['judul'];
$map	= $_POST['map'];
$isi	= $_POST['isi'];
$date   = date('Y-m-d H:m:s'); 

$status	= $_POST['status'];

if($status==0){
	$query = "INSERT INTO as_halaman_hubungikami(judul,map,alamat,date_created) VALUES ('$judul','$map','$isi','$date')";
	$db->database_prepare($query)->execute();
}else{
	$query = "UPDATE as_halaman_hubungikami SET judul='$judul',map='$map',alamat='$isi',date_updated='$date'";
	$db->database_prepare($query)->execute();
}

header('Location: '.$app_path.'halaman/hubungikami');
    
?>