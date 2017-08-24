<p style='font-size: 18px; font-weight: bold;'>LOGIN</p>
<table border="0" width="100%" bgcolor="#eae7e7" height="350">
	<tr>
		<td style="padding-left: 20px; padding-top: 50px; padding-right: 20px" width="45%" align="center" valign="top">
			<div class="well"><br><br><br>Its Fast - Free - Fun<br><br><br><br></div>
		</td>
		
		<td align="center" valign="top" style="padding-top: 120px;"><font color="#666">or</font> <br><div style="border-left: 1px solid rgba(0, 0, 0, 0.1); border-right: 1px solid rgba(255, 255, 255, 0.8); display: inline;"></div></td>
		<td valign="top" style="padding: 20px; padding-top: 50px;">
			<form method="POST" id="frm_sign_in" action="action_sign_in.php" class="form-group">
			<?php
			if (strpos($full_url, "?frm=yes") == TRUE){
				echo "<input type='hidden' name='iden' value='1'>";
			}
			?>
				<div class="form-group">
					<label for="email">Alamat Email</label>
					<input type="email" class="form-control" id="email" placeholder="Email" name="email" title="Email tidak boleh kosong!">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Password" name="password" title="Email tidak boleh kosong!">
				</div>
				<div>
					<input type="submit" class="btn btn-info" value="Login" id="buttonSignin">
				</div>
			</form>
			<br>
		</td>
	</tr>
</table>
