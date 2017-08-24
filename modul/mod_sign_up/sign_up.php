<script src="js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>

<script>
	function validateEmail(email) {
		var re = /\S+@\S+\.\S+/
		return re.test(email);
	}

	jQuery(document).ready(function(){
		$('#frm_sign_up').validate({
			rules:{
				username: true,
				email: true,
				password: true,
				retype_password: true
			},
			messages:{
				username:{
					required: "This is a required field."
				},
				email:{
					required: "This is a required field."
				},
				password:{
					required: "This is a required field."
				},
				retype_password:{
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
							document.getElementById("buttonSignup").disabled = false;
							//add this image to the span with id "availability_status"
						}
						else  if(server_response == '1')//if it returns "1"
						{
							$("#availability_username").html('<div class="error">Username is already used</div>');
							document.getElementById("buttonSignup").disabled = true;
						}
						else  if(server_response == '2')//if it returns "1"
						{
							$("#availability_username").html('<div class="error">Username can only contain letters and numbers</div>');
							document.getElementById("buttonSignup").disabled = true;
						}
					});
				}
			});
		});

		$("#email").change(function()
		{ //if theres a change in the username textbox
			var email = $("#email").val();//Get the value in the username textbox
			$("#availability_status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
			//Add a loading image in the span id="availability_status"
			$.ajax({  //Make the Ajax Request
				type: "POST",
				url: "modul/mod_sign_up/check_email.php",  //file name
				data: "email="+ email,  //data
				success: function(server_response){
					$("#availability_status").ajaxComplete(function(event, request){
						if(server_response == '0')//if ajax_check_username.php return value "0"
						{
							$("#availability_status").html('<div class="available"> Email is Available </div>  ');
							document.getElementById("buttonSignup").disabled = false;
							//add this image to the span with id "availability_status"
						}
						else  if(server_response == '1')//if it returns "1"
						{
							$("#availability_status").html('<div class="error">Email is already registered</div>');
							document.getElementById("buttonSignup").disabled = true;
						}
						else  if(server_response == '2')//if it returns "1"
						{
							$("#availability_status").html('<div class="error">Invalid email address.</div>');
							document.getElementById("buttonSignup").disabled = true;
						}
					});
				}
			});
		});
	});
</script>

<p style='font-size: 18px; font-weight: bold;'>Daftar</p>
<table border="0" width="100%" bgcolor="#eae7e7" height="450">
	<tr>
		<td style="padding: 20px;" width="45%" align="center">
			<div class="well"><br><br><br>Its Fast - Free - Fun<br><br><br><br></div>
		</td>
		<td align="center"><font color="#666">or</font> <br><div style="border-left: 1px solid rgba(0, 0, 0, 0.1); border-right: 1px solid rgba(255, 255, 255, 0.8); display: inline;"></div></td>
		<td valign="middle" style="padding: 20px; padding-top: 50px;">
			<?php
			$full_url = full_url();
			if (strpos($full_url, "error=Error") == TRUE){
				echo "<div class='messageerror'><p>Gagal: cek password atau email anda!</p></div>";
			}
			?>
			<form method="POST" id="frm_sign_up" action="action_sign_up.php" class="form-group">
				<div class="form-group">
					<label for="email">Username</label>
					<input  class="form-control" type="text" id="username" class="required" placeholder="Username" name="username">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input  class="form-control" type="text" id="email" class="required" placeholder="email" name="email" >
				</div>
				<div class="form-group">
					<label for="password1">Password</label>
					<input  class="form-control" type="password" id="password1" class="required" placeholder="password" name="password" >
				</div>
				<div>
					<input type="submit" class="btn btn-info" value="Daftar" id="buttonSignup">
				</div>
			</form>
			<br>
		</td>
	</tr>
</table>
