<script src="js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/ajaxupload.3.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/Ajaxfile-upload.css" />

<script>
	var htmlobjek;
	function validateEmail(email) {
		var re = /\S+@\S+\.\S+/
		return re.test(email);
	}

	function Count(){
		var karakter,maksimum;
		maksimum = 500
		karakter = maksimum-(document.frm_profile.biografi.value.length);
		if (karakter < 0) {
			alert("Max. characters:  " + maksimum + "");
			document.frm_profile.biografi.value = document.frm_profile.biografi.value.substring(0,maksimum);
			karakter = maksimum-(document.frm_profile.biografi.value.length);
			document.frm_profile.counter.value = karakter;
		}
		else {
			document.frm_profile.counter.value =  maksimum-(document.frm_profile.biografi.value.length);
		}
	}

	jQuery(document).ready(function(){
		$("#province").change(function(){
			var province = $("#province").val();
			$.ajax({
				url: "get_city.php",
				data: "province="+province,
				cache: false,
				success: function(msg){
					$("#city").html(msg);
				}
			});
		});

		$('#frm_profile').validate({
			rules:{
				username: true,
				first_name: true,
				province: true,
				city: true,
				address: true
			},
			messages:{
				username:{
					required: "This is a required field."
				},
				first_name:{
					required: "This is a required field."
				},
				province:{
					required: "This is a required field."
				},
				city:{
					required: "This is a required field."
				},
				address:{
					required: "This is a required field."
				}
			}
		});

		$("#username").change(function()
		{ //if theres a change in the username textbox
			var username = $("#username").val();//Get the value in the username textbox
			$("#availability_username").html('<img src="images/loader.gif" align="absmiddle">&nbsp;Checking availability...');
			//Add a loading image in the span id="availability_status"
			$.ajax({  //Make the Ajax Request
				type: "POST",
				url: "modul/mod_sign_up/check_username.php",  //file name
				data: "username="+ username,  //data
				success: function(server_response){
					$("#availability_username").ajaxComplete(function(event, request){
						if(server_response == '0')//if ajax_check_username.php return value "0"
						{
							$("#availability_username").html('<div class="available"> Username is Available </div>  ');
							document.getElementById("button_profile").disabled = false;
							//add this image to the span with id "availability_status"
						}
						else  if(server_response == '1')//if it returns "1"
						{
							$("#availability_username").html('<div class="error">Username is already used</div>');
							document.getElementById("button_profile").disabled = true;
						}
						else  if(server_response == '2')//if it returns "1"
						{
							$("#availability_username").html('<div class="error">Username can only contain letters and numbers</div>');
							document.getElementById("button_profile").disabled = true;
						}
					});
				}
			});
		});

		var btnUpload=$('#me');
		var mestatus=$('#mestatus');
		var files=$('#files');
		new AjaxUpload(btnUpload, {
			action: 'modul/mod_profile/upload_profile.php',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|jpeg|png)$/.test(ext))){
                    // extension is not allowed
					mestatus.text('Upload foto yang valid!');
					return false;
				}
				mestatus.html('<img src="images/loader.gif" height="16" width="16">');
			},
			onComplete: function(file, response){
				//On completion clear the status
				mestatus.text('');
				//On completion clear the status
				files.html('');
				//Add uploaded file to list
				if(response!=="error"){
					$('<li></li>').appendTo('#files').html('<img src="images/photo_member/'+response+'" alt="" width="100" style="border-radius: 10px; border: 3px solid #ccc"/><br />').addClass('success');
					$('<li></li>').appendTo('#member').html('<input type="hidden" name="filename" value="'+response+'">').addClass('nameupload');

				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
				}
			}
		});
	});
</script>

<?php
$data_profile = $db->database_fetch_array($db->database_prepare("SELECT * FROM as_member A WHERE A.email = ?")->execute($_SESSION['email_login']));
?>
<div class='main-column-wrapper'>
	<div class='main-column-left2'>
		<div class='blog-style-2'>
			<p style="font-size:18px; font-weight: bold;">Edit Profile</p>
			<form class="form-group" method="POST" id="frm_profile" name="frm_profile" action="modul/mod_profile/action_update_profile.php">
			<table width="100%">
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;" width="130"><b>Upload Foto</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<div id="me" style="cursor:pointer; height: 40px; width: 72px;">
							<label>
								<button class="btn btn-info" style="color:white">Pilih gambar</button>
							</label>
						</div>
						<span id="mestatus" ></span>
						<div id="member">
							<li class="nameupload"></li>
						</div>
						<div id="files">
							<li class="success">
								<?php
								if ($data_profile['photo'] != ''){
									echo "<img src='images/photo_member/thumb/small_$data_profile[photo]' width='100' style='border: 3px solid #ccc; border-radius: 10px;'>";
								}
								?>
			              </li>
			            </div>
					</td>
				</tr>
				<!--<?php if ($data_profile['username'] != ''){
				?>-->
					<tr valign="top">
						<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Username</b></td>
						<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
							<!--<input type="text" id="username" class="required" value="<?php echo $data_profile['username']; ?>" placeholder="Username, Only Contain Letters and Numbers" name="username" style="background: #FFF; border: 1px solid #DDD; border-radius: 5px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 20px; width: 266px; margin-right: 10px; padding: 5px;" DISABLED>
							<span id="availability_username"></span>-->
							<?php echo $data_profile['username']; ?>
						</td>
					</tr>
				<!--<?php
				}
				else{
				?>
					<tr valign="top">
						<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Username</b></td>
						<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
							<input type="text" id="username" class="required" placeholder="Username, Only Contain Letters and Numbers" name="username" style="background: #FFF; border: 1px solid #DDD; border-radius: 5px; box-shadow: 0 0 5px #DDD inset; color:#666; outline: none; height: 20px; width: 266px; margin-right: 10px; padding: 5px;">
							<span id="availability_username"></span>
						</td>
					</tr>
				<?php
				}
				?>-->
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Email</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<input type="text" id="email" placeholder="Email" value="<?php echo $data_profile['email']; ?>" name="email" class="form-control" DISABLED>
					</td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Nama Depan</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<input type="text" id="first_name" placeholder="Nama depan" value="<?php echo $data_profile['first_name']; ?>" name="first_name" class="form-control">
					</td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Nama Belakang</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<input type="text" id="last_name" placeholder="Nama Belakang" value="<?php echo $data_profile['last_name']; ?>" name="last_name" class="form-control">
					</td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>No Tlp/HP</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<input type="text" id="cellphone" placeholder="No Telp/Hp" value="<?php echo $data_profile['cellphone']; ?>" name="cellphone" class="form-control">
					</td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Alamat</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<textarea rows="3" id="address" placeholder="Alamat" name="address" class="form-control"><?php echo $data_profile['address']; ?></textarea>
					</td>
				</tr>
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Propinsi</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<select name="province" id="province" class="form-control">
							<?php
							$sql_province = $db->database_prepare("SELECT * FROM as_provinces WHERE status = 'Y' ORDER BY province_name ASC")->execute();
							while ($data_province = $db->database_fetch_array($sql_province)){
								if ($data_province['province_id'] == $data_profile['province_id']){
									echo "<option value='$data_province[province_id]' SELECTED>$data_province[province_name]</option>";
								}
								else{
									echo "<option value='$data_province[province_id]'>$data_province[province_name]</option>";
								}
							}
							?>
						</select>
					</td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Bio</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<textarea rows="4" id="biografi" placeholder="Biography" name="biografi" class="form-control"><?php echo $data_profile['biografi']; ?></textarea>

					</td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<input type="submit" class="btn btn-info" value="Simpan" id="button_profile">
					</td>
				</tr>
			</table>
			</form>
			<p>&nbsp;</p>
		</div>
	</div>
</div>
