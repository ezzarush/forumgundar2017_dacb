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
            <form class="form-horizontal" action="<?=$app_path.'modul/mod_admin_pengguna/prosesPengguna_act.php';?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mode" value="<?=isset($data['user_id'])?$data['user_id']:0;?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Fullname</label>
                  <div class="col-sm-8">
                    <input type="text" required name="pengguna_fullname" class="form-control" placeholder="Fullname" value="<?=isset($data['full_name'])?$data['full_name']:'';?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-8">
                    <input type="text" required name="pengguna_username" class="form-control" placeholder="Username" value="<?=isset($data['username'])?$data['username']:'';?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="text" required name="pengguna_password" class="form-control" placeholder="Password" value="<?=isset($data['password'])?$data['password']:'';?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">E-Mail</label>
                  <div class="col-sm-8">
                    <input type="text" required name="pengguna_email" class="form-control" placeholder="E-Mail" value="<?=isset($data['email'])?$data['email']:'';?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-8">
                    <input type="text" required name="pengguna_phone" class="form-control" placeholder="Phone" value="<?=isset($data['phone'])?$data['phone']:'';?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Level</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="pengguna_level">
                          <?php
                          while($row = $db->database_fetch_array($level)){
                              $level_id = $row['level_id'];
                            ?>
                            <option value="<?=$row['level'];?>" <?=isset($data['level'])?$data['level']==$level_id?'selected':'':'';?>><?=$row['description'];?></option>
                            <?php
                          }
                          ?>
                      </select>  
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Blocked Status</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="pengguna_blocked">
                            <option value="Y" <?=isset($data['blocked'])?$data['blocked']=='Y'?'selected':'':'';?>>Y</option>
                            <option value="N" <?=isset($data['blocked'])?$data['blocked']=='N'?'selected':'':'';?>>N</option>
                      </select>  
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