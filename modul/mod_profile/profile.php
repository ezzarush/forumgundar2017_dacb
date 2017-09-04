<?php
	$data_profile = $db->database_fetch_array($db->database_prepare("SELECT * FROM as_member
																WHERE email = ?
											")->execute($_SESSION['email_login']));

if ($data_profile['facebook_id'] != ''){
	$app_id = "255449991303140";
	$secret_id = "fde2b94d49a1559c54ba706300b4a78f";

	$facebook = new Facebook(array(
		'appId'  => $app_id,
		'secret' => $secret_id,
	));
	$user		= $facebook->getUser();
	$get_data	= $facebook->api('/'.$data_profile['facebook_id'], 'GET');
	$facebook_name = "<a href='http://www.facebook.com/$data_profile[facebook_id]' target='_blank' class='black'>$get_data[username]</a>";
}
else{
	$facebook_name = "-";
}
?>
<div class='main-column-wrapper'>
	<div class='main-column-left2'>
		<div class='blog-style-2'>
			<p style="font-size: 18px; font-weight: bold;">Your Profile</p>
			<?php
			$full_url = full_url();
			if (strpos($full_url, "?suc=ok") == TRUE){
				echo "<div class='messagesuccess' style='width: auto;'><p><b>Your profile is successfully updated.</b></p></div>";
			}
			?>
			<p>Tambah fotomu biar temanmu tau siapa kamu...</p>
			<a href="edit_profile.html"><button type="button" class="btn btn-info">EDIT PROFILE</button></a>
			<br><br>
			<table width="100%">
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;" width="130"><b>Foto profil</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<?php
						if ($data_profile['photo'] != ''){
							echo "<img src='images/photo_member/thumb/small_$data_profile[photo]' width='100' style='border-radius: 10px; border: 3px solid #ccc;'>";
						}
						?>
					</td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Username</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['username']; ?></td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Email</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['email']; ?></td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Nama depan</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['first_name']; ?></td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Nama belakang</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['last_name']; ?></td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>No Telp/HP</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['cellphone']; ?></td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Jurusan</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['jurusan']; ?></td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Tahun Lulus</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['tahun_lulus']; ?></td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Alamat</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['address']; ?></td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Propinsi</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php if ($data_profile['province_name'] != ''){ echo $data_profile['province_name']; } else{ echo "-"; } ?></td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Bio</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['biografi']; ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
