<table border="0" width="100%" height="350">
	<tr>
		
		<td valign="top" style="padding: 20px; padding-top: 50px;">
			<form method="POST" id="frm_sign_in" action="action_sign_in.php" class="form-group">
			<?php
			$full_url = full_url();
			if (strpos($full_url, "error=Error") == TRUE){
				echo "<div class='messageerror'><p>Gagal: cek password atau email anda!</p></div>";
			} else if (strpos($full_url, "signup=Success") == TRUE) {
				echo "<div class='messagesuccess'><p>Berhasil daftar: Silakan Login!</p></div>";
			}
			?>
			<?php
			if (strpos($full_url, "?frm=yes") == TRUE){
				echo "<input type='hidden' name='iden' value='1'>";
			}
			?>
			
				<div class="panel panel-primary" style="margin-left:280px;margin-right:280px;">
				  <div class="panel-heading">
					<h3 class="panel-title">LOGIN</h3>
				  </div>
				  <div class="panel-body">
					<div class="form-group">
						<label for="email">Alamat Email</label>
						<input type="email" class="form-control" id="email" placeholder="Email" name="email" title="Email tidak boleh kosong!">
					</div>
					<div class="form-group" >
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password" name="password" title="Email tidak boleh kosong!">
					</div>
					<div align="center">
						<input type="submit" style="color:white;" class="btn btn-info" value="Login" id="buttonSignin">
					</div>
				  </div>
				</div>
				
			</form>
			<br>
		</td>
	</tr>
</table>
