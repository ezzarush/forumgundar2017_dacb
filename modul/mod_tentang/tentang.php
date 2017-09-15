<h1 class="mt-4 mb-3"><?=isset($data['judul'])?$data['judul']:'Belum Buat Konten';?>
</h1>
<div class="row" style="padding-bottom:20px;">
<div class="col-lg-6">
  <?php
	if(empty($data['gambar'])){
		echo '<img class="img-fluid rounded mb-4" src="http://placehold.it/530x350">';
	}else{
		$gambar = $data['gambar'];
		echo '<img class="img-fluid rounded mb-4" width="500px" src="'.$app_path.'images/halaman/'.$gambar.'">';
	}
	?>
</div>
<div class="col-lg-6">
  <?=isset($data['judul'])?$data['judul']:'Belum Buat Konten';?>
</div>
</div>