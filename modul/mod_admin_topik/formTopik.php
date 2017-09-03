<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Topik
        <small>Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Topik</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Topik Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?=$app_path.'modul/mod_admin_topik/prosesTopik_act.php';?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mode" value="<?=isset($data['topic_id'])?$data['topic_id']:0;?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Topic Ref</label>
                  <div class="col-sm-8">
                    <input type="number" required name="topic_ref" class="form-control" placeholder="Topic Ref" value="<?=isset($data['topic_ref'])?$data['topic_ref']:'';?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Title</label>
                  <div class="col-sm-8">
                    <input type="text" required name="topic_title" class="form-control" placeholder="Title" value="<?=isset($data['title'])?$data['title']:'';?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Title SEO</label>
                  <div class="col-sm-8">
                    <input type="text" required name="topic_title_seo" class="form-control" placeholder="Title SEO" value="<?=isset($data['title_seo'])?$data['title_seo']:'';?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Category</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="topic_category">
                          <?php
                          while($row = $db->database_fetch_array($category)){
                              $category_id = $row['frm_category_id'];
                            ?>
                            <option value="<?=$row['frm_category_id'];?>" <?=isset($data['category_id'])?$data['category_id']==$category_id?'selected':'':'';?>><?=$row['category_name'];?></option>
                            <?php
                          }
                          ?>
                      </select>  
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sub Category</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="topic_sub_category">
                          <?php
                          while($row = $db->database_fetch_array($sub_category)){
                              $subcategory_id = $row['frm_category_id'];
                            ?>
                            <option value="<?=$row['frm_category_id'];?>" <?=isset($data['category_id'])?$data['category_id']==$subcategory_id?'selected':'':'';?>><?=$row['category_name'];?></option>
                            <?php
                          }
                          ?>
                      </select>  
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-8">
                    <input type="file" required class="form-control" name="topic_File" placeholder="Category Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-8">
                      <textarea class="form-control" name="topic_Description"><?=isset($data['description'])?$data['description']:'';?></textarea>
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