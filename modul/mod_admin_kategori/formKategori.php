<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Kategori
        <small>Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kategori</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Kategori Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?=$app_path.'modul/mod_admin_kategori/prosesKategori_act.php';?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mode" value="<?=isset($data['frm_category_id'])?$data['frm_category_id']:0;?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Category Name</label>
                  <div class="col-sm-8">
                    <input type="text" required name="catName" class="form-control" placeholder="Category Name" value="<?=isset($data['category_name'])?$data['category_name']:'';?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Category SEO</label>
                  <div class="col-sm-8">
                    <input type="text" required name="catSeo" class="form-control" placeholder="Category Name" value="<?=isset($data['category_seo'])?$data['category_seo']:'';?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-8">
                    <input type="file" required class="form-control" name="catFile" placeholder="Category Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="catStatus">
                          <option value="Y" <?=isset($data['status'])?$data['status']=='Y'?'selected':'':'';?>>Active</option>
                          <option value="N" <?=isset($data['status'])?$data['status']=='N'?'selected':'':'';?>>Non-Active</option>
                      </select>  
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-8">
                      <textarea class="form-control" name="catDescription"><?=isset($data['description'])?$data['description']:'';?></textarea>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
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