<?php
include('../../../config/class_database.php');
include('../../../config/serverconfig.php');

//GET PARAMETER
$pertanyaan	= $_POST['pertanyaan'];
$jawaban	= $_POST['jawaban'];
$date   = date('Y-m-d H:m:s'); 

$status	= $_POST['status'];
$hapus 	= $_POST['hapus'];
 
if($status==0){
	$query = "INSERT INTO as_halaman_bantuan(pertanyaan,jawaban,date_created) VALUES ('$pertanyaan','$jawaban','$date')";
	$db->database_prepare($query)->execute();
}else{
	if($hapus==1){
		$query = "DELETE FROM as_halaman_bantuan WHERE id_bantuan='$status'";
	}else{
		$query = "UPDATE as_halaman_tentang SET pertanyaan='$pertanyaan',jawaban='$jawaban',date_updated='$date' WHERE id_bantuan='$status'";
	}
	$db->database_prepare($query)->execute();
}


header('Location: '.$app_path.'halaman/bantuan');
    
?>