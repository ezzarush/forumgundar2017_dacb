<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengaturan
        <small>Halaman Hubungi Kami</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Pengaturan</a></li>
        <li class="active">Halaman Hubungi Kami</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Hubungi Kami</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?=$app_path.'modul/mod_admin_halaman/hubungi-kami/prosesHubungiKami.php';?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mode" value="<?=isset($data['user_id'])?$data['user_id']:0;?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Judul</label>
                  <div class="col-sm-8">
                    <input type="text" required name="judul" class="form-control" placeholder="Judul" value="<?=isset($data['judul'])?$data['judul']:'';?>">
					<input type="hidden" value="<?=$status;?>" name="status">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Google Map URL</label>
                  <div class="col-sm-8">
                    <input type="text" required name="map" class="form-control" placeholder="Google Map URL" value="<?=isset($data['map'])?$data['map']:'';?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
					<textarea name="isi" id="textarea"><?=isset($data['alamat'])?$data['alamat']:'';?></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
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