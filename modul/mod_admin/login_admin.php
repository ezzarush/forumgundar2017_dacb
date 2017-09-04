<br><br><br><br><br>
<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="kotak">
      <h3 style="text-align: center">Login Admin</h3>
      <table border="0" width="100%" bgcolor="#eae7e7">
      	<tr>
      		<td valign="top" style="padding: 20px;">
      			<form method="POST" id="frm_sign_in" action="action_login_admin.php" class="form-group">
      			<?php
      			$full_url = full_url();
      			if (strpos($full_url, "error=Error") == TRUE){
      				echo "<div class='messageerror'><p>Gagal: cek username atau password anda!</p></div>";
      			}
      			?>
      			<?php
      			if (strpos($full_url, "?frm=yes") == TRUE){
      				echo "<input type='hidden' name='iden' value='1'>";
      			}
      			?>
      				<div class="form-group">
      					<label for="Username">Username</label>
      					<input type="text" class="form-control" id="Username" placeholder="Username" name="username" title="Username tidak boleh kosong!">
      				</div>
      				<div class="form-group">
      					<label for="password">Password</label>
      					<input type="password" class="form-control" id="password" placeholder="Password" name="password" title="Password tidak boleh kosong!">
      				</div>
      				<div class="form-group">
      					<input type="submit" class="btn btn-warning" value="Login">
      				</div>
      			</form>
      		</td>
      	</tr>
      </table>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
