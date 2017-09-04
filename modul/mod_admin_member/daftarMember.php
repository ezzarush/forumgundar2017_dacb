<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Member
        <small>Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengguna</li>
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
					<th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                    <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">No.</th>
                    <th class="sorting" aria-controls="example1" aria-label="Browser: activate to sort column ascending">Username</th>
                    <th class="sorting" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama Lengkap</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">E-Mail</th>
					<th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Jurusan</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Tahun Lulus</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Alamat</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">No.Telp</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $num=1;
                while($row = $db->database_fetch_array($sql_topic)){
                    ?>
                    <tr role="row" class="odd">
                      <td>
                          <a href="#" onclick="hapusMember(<?=$row['member_id'];?>)" class="btn btn-block btn-danger btn-sm">Delete</a>
                      </td>
					  <td class="sorting_1"><?=$num;?></td>
                      <td><?=$row['username'];?></td>
                      <td><?=$row['first_name'].' '.$row['last_name'];?></td>
                      <td><?=$row['email'];?></td>
                      <td><?=$row['jurusan'];?></td>
                      <td><?=$row['tahun_lulus'];?></td>
                      <td><?=$row['address'];?></td>
                      <td><?=$row['cellphone'];?></td>
                    </tr>
                    <?php
                    $num++;
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                    <th class="sorting_asc" aria-controls="example1" aria-sort="ascending">No.</th>
                    <th class="sorting" aria-controls="example1" aria-label="Browser: activate to sort column ascending">Username</th>
                    <th class="sorting" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama Lengkap</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">E-Mail</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Jurusan</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Tahun Lulus</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">Alamat</th>
                    <th class="sorting" aria-controls="example1" aria-label="CSS grade: activate to sort column ascending">No.Telp</th>
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
        function hapusMember(param){
            var x = confirm("Delete Member "+param+"?");
            if(x){
                $.post("<?=$app_path.'modul/mod_admin_member/hapusMember_act.php';?>",{id:param}).success(function(param){
                    alert("Succeed Delete Member "+param);
                    location.reload();
                })   
            }
        }
</script>