<!-- fungsi panggil detail post -->
<?php
$aksi = "modul/mod_topics/reply_topic.php";
$db->database_prepare("UPDATE as_topics SET hits=hits+1 WHERE topic_id = ?")->execute($_GET["id"]);
$data_topic = $db->database_fetch_array($db->database_prepare("SELECT A.topic_ref, A.topic_id, A.title, A.title_seo, A.category_id, A.description, A.image as topicimage, A.hits, A.member_id,
														B.email, B.username, B.photo, C.category_name, C.category_seo, A.created_date, B.created_date as join_date, D.province_name
														FROM as_topics A INNER JOIN as_member B ON A.member_id = B.member_id
														INNER JOIN as_frm_categories C ON C.frm_category_id = A.category_id
														LEFT JOIN as_provinces D ON D.province_id=B.province_id
														WHERE A.topic_id = ?")->execute($_GET["id"]));
$num_topic = $db->database_num_rows($db->database_prepare("SELECT * FROM as_topics WHERE member_id = ?")->execute($data_topic['member_id']));

if ($data_topic['photo'] != ''){
	$image = "<img src='images/photo_member/thumb/small_$data_topic[photo]' width='140' height='140' style='border-radius: 10px;'>";
}
else{
	$image = "<img src='images/no_photo.jpg' width='140' height='140' style='border-radius: 10px;'>";
}

if ($data_topic['topicimage'] != ''){
	$image_topic = "<img src='images/photo_topics/$data_topic[topicimage]' width='600'>";
}
else{
	$image_topic = "";
}

$tgl = explode(" ", $data_topic['created_date']);
$dt = explode("-", $tgl[0]);
$date_topic = $dt[2]."-".$dt[1]."-".$dt[0]." ".$tgl[1];

$join = explode(" ", $data_topic['join_date']);
$join_dt =  explode("-", $join[0]);
$join_date = $join_dt[2]."-".$join_dt[1]."-".$join_dt[0];

?>
<?php
$nm = md5(date('Ymdhis'));
$full_url = full_url();
if (strpos($full_url, "?cp=no") == TRUE){
	echo "<div class='messageerror' style='width: auto;'><p><b>Captcha is Wrong.</b></p></div>";
}
?>
<form method="POST" action="<?php echo $aksi; ?>">

	<div class="panel panel-info" style="border-radius: 0px">
	  <div class="panel-heading" style="color: white; border-radius: 0px"><?php echo $date_topic; ?></div>
	  <div class="panel-body" style="margin: -15px 0px; border-radius: 0px">
			<div class="row">
				<div class="col-md-2" style="background-color:#2c3e50;">
					<br>
					<center> <?php echo $image; ?> </center>
					<hr>
					<a href="profile-<?php echo $data_topic['member_id']; ?>-<?php echo $nm; ?>.html"><?php echo $data_topic['username']; ?></a><br>
					<b>Propinsi</b> : <?php echo $data_topic['province_name']; ?><br>
					<b>Bergabung</b> : <?php echo $join_date; ?><br>
					<b>jumlah post</b> : <?php echo $num_topic; ?><br>
					<hr>
					<?php
					if ($_SESSION['member_login'] != $data_topic['member_id']){
					?>
						<p><a href="send-message-<?php echo $data_topic['member_id']; ?>-<?php echo $nm; ?>.html"><button type="button" class="btn btn-info">Kirim Pesan</button></a></p>
					<?php
					}
					?>
				</div>
				<div class="col-md-10"><br>
					<center><?php echo $image_topic; ?></center>
					<p><?php echo $data_topic['description']; ?></p>
				</div>
			</div>
	  </div>

		<!-- fungsi panggil komentar -->
		<?php
		$sql_comment = $db->database_prepare("SELECT A.created_date, A.description, B.photo, B.username, B.member_id, C.province_name, B.created_date as join_date
			FROM as_comments A INNER JOIN as_member B ON B.member_id=A.member_id
			LEFT JOIN as_provinces C ON C.province_id = B.province_id
			WHERE A.topic_id = ? ORDER BY A.created_date, A.comment_id DESC")->execute($data_topic['topic_id']);
			while ($data_comment = $db->database_fetch_array($sql_comment)){
				$num_topic2 = $db->database_num_rows($db->database_prepare("SELECT * FROM as_topics WHERE member_id = ?")->execute($data_comment['member_id']));
				$tgl2 = explode(" ", $data_comment['created_date']);
				$dt2 = explode("-", $tgl2[0]);
				$date_comment = $dt2[2]."-".$dt2[1]."-".$dt2[0]." ".$tgl2[1];

				if ($data_comment['photo'] != ''){
					$image_comment = "<img src='images/photo_member/thumb/small_$data_comment[photo]' width='140' height='140' style='border-radius: 10px;'>";
				}
				else{
					$image_comment = "<img src='images/no_photo.jpg' width='140' height='140' style='border-radius: 10px;'>";
				}

				$join2 = explode(" ", $data_comment['join_date']);
				$join_dt2 =  explode("-", $join2[0]);
				$join_date2 = $join_dt2[2]."-".$join_dt2[1]."-".$join_dt2[0];

		?>
		<!-- comments -->
		<div class="panel-heading" style="border-radius: 0px"><?php echo $date_comment; ?></div>
		<div class="panel-body" style="margin: -15px 0px">
			<div class="row">
				<div class="col-md-2" style="background-color:#2c3e50;">
					<br>
					<center><?php echo $image_comment; ?></center>
					<hr>
					<a href="profile-<?php echo $data_comment['member_id']; ?>-<?php echo $nm; ?>.html"><?php echo $data_comment['username']; ?></a><br>
					<b>Propinsi</b> : <?php echo $data_comment['province_name']; ?><br>
					<b>Bergabung</b> : <?php echo $join_date2; ?><br>
					<b>jumlah post</b : <?php echo $num_topic2; ?><br>
					<hr>
					<?php
					if ($_SESSION['member_login'] != $data_comment['member_id']){
					?>
						<p><a href="send-message-<?php echo $data_comment['member_id']; ?>-<?php echo $nm; ?>.html"><button type="button" class="btn btn-info">Kirim Pesan</button></a></p>
					<?php
					}
					?>
				</div>
				<div class="col-md-10"><br>
					<p><?php echo nl2br($data_comment['description']); ?></p>
				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>

	<tr valign="top">
		<td style="background-color: #4C66A4; color: #FFFFFF; box-shadow: 0 2px 0 #0A4166;"></td>
		<td style="padding: 5px 3px 3px 10px; background-color: #4C66A4; color: #FFFFFF; box-shadow: 0 2px 0 #0A4166; font-weight: bold;">
			Post a Comment:
		</td>
	</tr>
	<?php
	if ($_SESSION["member_login"] != ''){
	?>
		<input type="hidden" name="topic_id" value="<?php echo $data_topic['topic_id']; ?>" />
		<input type="hidden" name="member_id" value="<?php echo $_SESSION['member_login']; ?>" />
		<input type="hidden" name="title_seo" value="<?php echo $data_topic['title_seo']; ?>" />
		<tr>
			<td style="padding: 10px 10px 10px 10px; background-color: #E3ECF1; border-right: 1px solid rgba(0, 0, 0, 0.2);"></td>
			<td style="padding: 10px 10px 10px 10px;">
				<textarea name="description" placeholder="Post a comment..." style="background: #FFF; border: 1px solid #DDD; border-radius: 5px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; width: 600px; margin-right: 10px; padding: 5px; height:120px;"></textarea>
				<br><br>
				<p>This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.</p>
				<?php
				require_once('config/recaptcha/recaptchalib.php');
				$publickey = "6LeAdO8SAAAAAEuxDK-Lf6QagL_NaJWWeKBZovU0";
				echo recaptcha_get_html($publickey);
				?>
				<br>
				<input type="submit" name="submit" value="Post Your Comment" class="button_facebook" />
			</td>
		</tr>
	<?php
	}
	else{
	?>
		<tr>
			<td style="padding: 10px 10px 10px 10px; background-color: #E3ECF1; border-right: 1px solid rgba(0, 0, 0, 0.2);"></td>
			<td style="padding: 10px 10px 10px 10px;">
				Please Sign In before <p>&nbsp;</p>
			</td>
		</tr>
	<?php
	}
	?>
</table>
</form>
