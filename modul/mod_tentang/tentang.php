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

<div class="row">
	<!-- Map Column -->
	<div class="col-lg-8 mb-4">
	  <!-- Embedded Google Map -->
	  <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=<?=$data2['map'];?>&amp;spn=<?=$data2['map'];?>&amp;t=m&amp;z=15&amp;output=embed"></iframe>
	</div>
	<!-- Contact Details Column -->
	<div class="col-lg-4 mb-4">
	  <h3>Contact Details</h3>
	  <p>
		<?=$data2['alamat'];?>
	  </p>
	</div>
  </div>