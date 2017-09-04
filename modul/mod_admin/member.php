<?php if ($_SESSION['admin_username'] != ''): ?>
  <div class="kotak">
    <div class="form-group">
      <h3>  Cari member</h3>
      <form class="" action="" method="post">
        <div class="form-group">
          <input type="text" name="cari_member" value="" placeholder="Cari berdasarkan username! <ketikkan username lalu enter>" class="form-control">
        </div>
      </form>
      <?php
        $cari_member = $db->database_fetch_array($db->database_prepare("SELECT * FROM as_member WHERE username = ?")->execute($_POST['cari_member']));

        if ($cari_member) {
          echo "<hr><h3>Hasil :</h3><br><table class='table table-striped table-bordered' style='text-align:center;'><tr><td>Nama depan</td><td>Nama belakang</td><td>Propinsi</td><td>Aksi</td></tr><tr><td>".$cari_member['first_name']."</td><td>".$cari_member['last_name']."</td><td>".$cari_member['province_name']."</td><td><a href='#' class='btn btn-danger'>Banned</a></td></tr></table>";
        }

      ?>
    </div>
  </div>

<?php else: ?>
  <?php header('Location: login_admin') ?>
<?php endif; ?>
