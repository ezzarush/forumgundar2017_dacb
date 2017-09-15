<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengaturan
        <small>Halaman Bantuan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Pengaturan</a></li>
        <li class="active">Halaman Bantuan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
            <div class="box box-info">
            <div class="box-header with-border">
              <?php
				if(empty($data_spesifik['pertanyaan'])){
					echo '<h3 class="box-title">Form Tambah Bantuan</h3>';
				}else{
					echo '<h3 class="box-title">Form Ubah Bantuan</h3>';
				}
			  ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form class="form-horizontal" action="<?=$app_path.'modul/mod_admin_halaman/bantuan/prosesBantuan.php';?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mode" value="<?=isset($data['user_id'])?$data['user_id']:0;?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Judul Pertanyaan</label>
                  <div class="col-sm-8">
                    <input type="text" required name="pertanyaan" class="form-control" placeholder="Judul" value="<?=isset($data_spesifik['pertanyaan'])?$data_spesifik['pertanyaan']:'';?>">
					<input type="hidden" value="<?=$id_pertanyaan;?>" name="status">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Jawaban</label>
                  <div class="col-sm-8">
					<textarea name="jawaban" id="textarea"><?=isset($data_spesifik['jawaban'])?$data_spesifik['jawaban']:'';?></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
				<?php
					if(empty($data_spesifik['pertanyaan'])){
						
					}else{
						echo '<a href="'.$app_path.'halaman/bantuan" class="btn btn-primary">+ Tambah Bantuan Baru</a>';
					}
				  ?>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            
        </div>
        <!-- ./col -->
      
      </div>
	  
	  <div class="row">
        <div class="col-lg-12 col-xs-12">
          
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Bantuan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
			<div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                  <div class="col-sm-12 table-responsive">
                      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" width="100%">
                <thead>
                <tr role="row">
					<th class="sorting_asc" aria-controls="example1" aria-sort="ascending">No.</th>
                    <th class="sorting" aria-controls="example1" aria-label="Browser: activate to sort column ascending">Pertanyaan</th>
                    <th class="sorting" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Jawaban</th>
					<th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $num=1;
                while($row = $db->database_fetch_array($sql_topic_data)){
                    ?>
                    <tr role="row" class="odd">
					  <td class="sorting_1"><?=$num;?></td>
                      <td><?=$row['pertanyaan'];?></td>
                      <td><?=$row['jawaban'];?></td>
					  <td>
						<a href="<?=$app_path.'halaman/editBantuan/'.$row['id_bantuan'];?>" class="btn btn-success btn-sm">Ubah</a>
                        <a href="#" onclick="hapus(<?=$row['id_bantuan'];?>)" class="btn btn-danger btn-sm">Hapus</a>
                      </td>
                    </tr>
                    <?php
                    $num++;
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">No.</th>
					<th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Aksi</th>
                    <th class="sorting" aria-controls="example1" aria-label="Browser: activate to sort column ascending">Pertanyaan</th>
                    <th class="sorting" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Jawaban</th>
                </tr>
                </tfoot>
              </table></div></div></div>
            </div>
			
          </div>
            
        </div>
        <!-- ./col -->
      
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
	function hapus(id){
		var x = confirm("Yakin menghapus data?");
		if(x){
			$.post("<?=$app_path.'modul/mod_admin_halaman/bantuan/prosesBantuan.php';?>",{hapus:'1',status:id}).success(function(){
				alert("Hapus Data Berhasil");
				window.location.href="<?=$app_path.'halaman/bantuan';?>";
			})
		}
	}
  </script>