<br><br>
<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="kotak">
      <h3 style="text-align: center">Ubah password</h3>
      <table border="0" width="100%" bgcolor="#eae7e7">
      	<tr>
      		<td valign="top" style="padding: 20px;">
      			<form method="POST" id="frm_sign_in" action="action_ubah_password.php" class="form-group">
      			<?php
      			$full_url = full_url();
      			if (strpos($full_url, "error=Error") == TRUE){
      				echo "<div class='messageerror'><p>Gagal: password anda salah atau password anda tidak sama!</p></div>";
      			} else if (strpos($full_url, "update=Success") == TRUE){
                echo "<div class='messagesuccess'><p>Berhasil: password anda telah diperbaharui!</p></div>";
            }
      			?>
      			<?php
      			if (strpos($full_url, "?frm=yes") == TRUE){
      				echo "<input type='hidden' name='iden' value='1'>";
      			}
      			?>
      				<div class="form-group">
      					<label for="pass_lama">Password lama</label>
      					<input type="password" class="form-control" id="pass_lama" placeholder="Password lama" name="pass_lama" title="Password tidak boleh kosong!">
      				</div>
      				<div class="form-group">
      					<label for="pass_baru">Password baru</label>
      					<input type="password" class="form-control" id="pass_baru" placeholder="Password baru" name="pass_baru" title="Password tidak boleh kosong!">
      				</div>
              <div class="form-group">
                <label for="ulang_pass">Ulang password baru</label>
                <input type="password" class="form-control" id="ulang_pass" placeholder="Ulang Password" name="ulang_pass" title="Password tidak boleh kosong!">
              </div>
      				<div class="form-group">
      					<input type="submit" class="btn btn-warning" value="Ubah">
      				</div>
      			</form>
      		</td>
      	</tr>
      </table>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
