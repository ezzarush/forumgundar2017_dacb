<?php
include('../../../config/class_database.php');
include('../../../config/serverconfig.php');

//GET PARAMETER
$judul	= $_POST['judul'];
$isi	= $_POST['isi'];
$date   = date('Y-m-d H:m:s'); 

$pic = $_FILES["gambar"]["name"];	
$folder = "../../../images/halaman/";
$path = $folder.$pic;

$status	= $_POST['status'];

if(!empty($pic)){
	//Upload Gambar
	move_uploaded_file($_FILES["gambar"]["tmp_name"], $path);
	if($status==0){
		$query = "INSERT INTO as_halaman_tentang(judul,gambar,isi,date_created) VALUES ('$judul','$pic','$isi','$date')";
		$db->database_prepare($query)->execute();
	}else{
		$query = "UPDATE as_halaman_tentang SET judul='$judul',gambar='$pic',isi='$isi',date_updated='$date'";
		$db->database_prepare($query)->execute();
	}
}else{
	//Tidak Upload Gambar
	if($status==0){
		$query = "INSERT INTO as_halaman_tentang(judul,isi,date_created) VALUES ('$judul','$isi','$date')";
		$db->database_prepare($query)->execute();
	}else{
		$query = "UPDATE as_halaman_tentang SET judul='$judul',isi='$isi',date_updated='$date'";
		$db->database_prepare($query)->execute();
	}
}

header('Location: '.$app_path.'halaman/tentang');
    
?>