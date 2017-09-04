<?php if ($_SESSION['admin_username'] != ''): ?>
  <div class="kotak">
    <div class="form-group">
      <h3>  Daftar Kategori</h3>
      <br>
      <table class='table table-striped table-bordered' style='text-align:center;'>
        <tr>
          <td>Nama</td>
          <td>Deskrikpsi</td>
          <td>Aksi</td>
        </tr>
      <?php
        $query = $db->database_prepare("SELECT * FROM as_frm_categories WHERE status = 'Y' ORDER BY category_name ASC")->execute();

        while ($daftar_kategori = $db->database_fetch_array($query)) {
          echo "<tr><td>".$daftar_kategori['category_name']."</td><td>".$daftar_kategori['description']."</td><td>"."<a href='#' class='btn btn-danger'>Hapus</a>  <a href='#' class='btn btn-warning'>Edit</a></tr>";
        }
      ?>
      </table>
    </div>
  </div>

<?php else: ?>
  <?php header('Location: login_admin') ?>
<?php endif; ?>
