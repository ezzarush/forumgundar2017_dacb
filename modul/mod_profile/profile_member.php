<?php
$data_profile = $db->database_fetch_array($db->database_prepare("SELECT * FROM as_member
																WHERE member_id = ?
											")->execute($_GET['id']));

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
<table>
	<tr valign="top">
		<td width="440">
			<p style="font-size: 18px; font-weight: bold;">Member Profile</p>
			<table width="100%">
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;" width="130"><b>Foto</b></td>
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
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Nama Depan</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['first_name']; ?></td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Nama Belakang</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['last_name']; ?></td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>No tlp/HP</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php if ($data_profile['hidden_cellphone'] == 1){ echo "xxx - Hidden by user"; } else{ echo $data_profile['cellphone']; } ?></td>
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
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>biografi</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><?php echo $data_profile['biografi']; ?></td>
				</tr>
			</table>
		</td>
		<td width="10"></td>
		<td>
			<p style="font-size: 18px; font-weight: bold;"><?php echo $data_profile['username']; ?>'s Topics</p>
			<?php
			$sql_post = $db->database_prepare("SELECT * FROM as_topics WHERE member_id = ? ORDER BY created_date DESC")->execute($data_profile["member_id"]);
			while ($data_post = $db->database_fetch_array($sql_post)){
				echo "<li><a href='detail-$data_post[topic_id]-$data_post[title_seo].html' class='black'>$data_post[title]</a></li>";
			}
			?>
		</td>
	</tr>
</table>
