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
          
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row">
                  <div class="col-sm-12 table-responsive">
                      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" width="100%">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">No.</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                    <th class="sorting" aria-controls="example1" aria-label="Browser: activate to sort column ascending">Title</th>
                    <th class="sorting" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Title SEO</th>
                    <th class="sorting" aria-controls="example1" aria-label="Engine version: activate to sort column ascending">Category ID</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">SubCategory ID</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Description</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Image</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Hits</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $num=1;
                while($row = $db->database_fetch_array($sql_topic)){
                    ?>
                    <tr role="row" class="odd">
                      <td class="sorting_1"><?=$num;?></td>
                      <td>
                          <a href="<?=$app_path.'topik/editTopik/'.$row['topic_id'];?>" class="btn btn-block btn-info btn-sm">Edit</a>
                          <a href="#" onclick="hapusTopik(<?=$row['topic_id'];?>)" class="btn btn-block btn-danger btn-sm">Delete</a>
                      </td>
                      <td><?=$row['title'];?></td>
                      <td><?=$row['title_seo'];?></td>
                      <td><?=$row['category_id'];?></td>
                      <td><?=$row['sub_category_id'];?></td>
                      <td><?=$row['description'];?></td>
                      <td><?=$row['image'];?></td>
                      <td><?=$row['hits'];?></td>
                    </tr>
                    <?php
                    $num++;
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">No.</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                    <th class="sorting" aria-controls="example1" aria-label="Browser: activate to sort column ascending">Title</th>
                    <th class="sorting" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Title SEO</th>
                    <th class="sorting" aria-controls="example1" aria-label="Engine version: activate to sort column ascending">Category ID</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">SubCategory ID</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Description</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Image</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Hits</th>
                </tr>
                </tfoot>
              </table></div></div></div>
            </div>
            <!-- /.box-body -->
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
        function hapusTopik(param){
            var x = confirm("Delete Topic "+param+"?");
            if(x){
                $.post("<?=$app_path.'modul/mod_admin_topik/hapusTopik_act.php';?>",{id:param}).success(function(param){
                    alert("Succeed Delete Topic "+param);
                    location.reload();
                })   
            }
        }
</script>