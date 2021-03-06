<script type='text/javascript' src='js/jquery.validate.js'></script>
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

<script>
	jQuery(document).ready(function(){
		$('#frm_send').validate({
			rules:{
				subject: true
			},
			messages:{
				subject:{
					required: "This is a required field."
				}
			}
		});
	});
</script>

<?php
$nm = md5(date('Ymdhis'));
$data_member = $db->database_fetch_array($db->database_prepare("SELECT member_id, username FROM as_member WHERE member_id = ? AND status = 'Y'")->execute($_GET["id"]));
?>
<div class='main-column-wrapper'>
	<div class='main-column-left2'>
		<div class='blog-style-2'>
			<?php
			$full_url = full_url();
			if (strpos($full_url, "?cp=no") == TRUE){
				echo "<div class='messageerror' style='width: auto;'><p><b>Captcha is Wrong.</b></p></div>";
			}

			if (strpos($full_url, "?save=ok") == TRUE){
				echo "<div class='messagesuccess' style='width: auto;'><p><b>Your message has been sent.</b></p></div>";
			}

			if (strpos($full_url, "?err=fail") == TRUE){
				echo "<div class='messageerror' style='width: auto;'><p><b>Your message is failed.</b></p></div>";
			}
			?>
			<div class='post-title2'>
				<p style="font-size: 18px; font-weight: bold;">Kirim pesan</p>
			</div>
			<form method="POST" id="frm_send" action="modul/mod_topics/action_send_message.php" name="frm_send" class="form-group">
			<input type="hidden" name="id" value="<?php echo $data_member['member_id']; ?>" />
			<table width="100%">
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;" width="130"><b>Kirim ke <font color="#CC0000">*</font></b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<a href="profile-<?php echo $data_member['member_id']; ?>-<?php echo $nm; ?>.html" class="black"><?php echo $data_member['username']; ?></a>
					</td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;" width="130"><b>Subjek <font color="#CC0000">*</font></b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<input type="text" maxlength="255" id="subject" placeholder="Subjek" name="subject" class="form-control required" width="50%">
					</td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Pesan</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<textarea rows="10" id="description" placeholder="Description" name="description"></textarea>
					</td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;"><br>
						<input type="submit" class="button_profile" value="Kirim">
					</td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</div>
<script>
	CKEDITOR.replace( 'description' );
</script>
