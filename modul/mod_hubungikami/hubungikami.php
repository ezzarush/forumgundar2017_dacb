<h1 class="mt-4 mb-3"><?=$data['judul'];?>
</h1>
<div class="row">
	<!-- Map Column -->
	<div class="col-lg-8 mb-4">
	  <!-- Embedded Google Map -->
	  <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=<?=$data['map'];?>&amp;spn=<?=$data['map'];?>&amp;t=m&amp;z=15&amp;output=embed"></iframe>
	</div>
	<!-- Contact Details Column -->
	<div class="col-lg-4 mb-4">
	  <h3>Contact Details</h3>
	  <p>
		<?=$data['alamat'];?>
	  </p>
	</div>
  </div>