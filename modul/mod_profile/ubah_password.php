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
			<form class="form-group" method="POST" id="frm_profile" name="frm_profile" action="modul/mod_profile/action_ubah_password.php">
			<table width="100%">
			
				
				<tr>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"><b>Masukkan Password Baru</b></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<input type="password" id="jurusan" placeholder="Masukkan Password Baru Anda" name="password" class="form-control">
					</td>
				</tr>
				
				
				<tr valign="top">
					<td style="padding-bottom: 5px; padding-top: 5px; padding-left: 5px;"></td>
					<td style="padding-bottom: 5px; padding-top: 5px; padding-right: 5px;">
						<input style="color:#fff;" type="submit" class="btn btn-info" value="Simpan" id="button_profile">
					</td>
				</tr>
			</table>
			</form>
			<p>&nbsp;</p>
		</div>
	</div>
</div>
