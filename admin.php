<?php
session_start();
error_reporting(0);

// Panggil semua fungsi yang dibutuhkan (semuanya ada di folder config)
include "config/class_database.php";
include "config/serverconfig.php";
include "config/debug.php";
include "config/fungsi_rupiah.php";
include "config/fungsi_indotgl.php";
include "config/class_paging.php";
include "config/library.php";
include "config/fungsi_url.php";
include "config/facebook/facebook.php";

$des_ads = $db->database_fetch_array($db->database_prepare("SELECT meta_description FROM as_identity WHERE identity_id = ?")->execute(1));
$des = $des_ads['meta_description'];
$des_image = "";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
	<head>
	<title><?php include "title.php"; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow">
	<meta name="description" content="<?php echo $des; ?>">
	<meta name="keywords" content="<?php include "../keywords.php"; ?>">
	<meta http-equiv="imagetoolbar" content="no">
	<meta name="language" content="English">
	<meta name="revisit-after" content="7">
	<meta name="webcrawlers" content="all">
	<meta name="rating" content="general">
	<meta name="spiders" content="all">

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml" />
	<link rel="icon" type="image/png" href="images/myicon.png" />

	<link rel="stylesheet" href="css/flatui.min.css" type="text/css" />
	<link rel="stylesheet" href="css/layout.css" type="text/css" />
	<link rel="stylesheet" href="css/paging.css" type="text/css" />
	<link rel="stylesheet" href="css/forum_navigation.css" type="text/css" />

	<!-- Homepage Specific Elements -->
	<script type="text/javascript" src="js/icheck.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mod.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
	<!--End Homepage Specific Elements -->

	<style type="text/css">
		.error {
			font-size:small;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			border-color: #eed3d7;
			background-color: #b94a48;
			color: #FFFFFF;
			padding: 5px;
			width: 266px;
			float: left;
		}

		.available {
			font-size:small;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			border-color: #eed3d7;
			background-color: #008102;
			color: #FFFFFF;
			padding: 5px;
			width: 266px;
			float:left;
		}

		.user_error {
			font-size:small;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			border-color: #eed3d7;
			background-color: #b94a48;
			color: #FFFFFF;
			padding: 5px;
			width: 266px;
		}

		.user_available {
			font-size:small;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			border-color: #eed3d7;
			background-color: #008102;
			color: #FFFFFF;
			padding: 5px;
			width: 266px;
		}

		.kotak {
			margin: 10px 0px;
			padding: 10px;
		    background-color: #fff;
		    border-color: #ddd;
		    border-width: 1px;
		    border-radius: 4px;
		    -webkit-box-shadow: none;
		    box-shadow: none;
		}

		#pageshare {position:fixed; top:35%; left:10px; float:left; border: 1px solid #CCCCCC; border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;background-color:#eff3fa;padding:0 0 2px 0;z-index:10;}

		#pageshare .sbutton {float:left;clear:both;margin:5px 5px 0 5px;}

		.fb_share_count_top {width:48px !important;}

		.fb_share_count_top, .fb_share_count_inner {-moz-border-radius:3px;-webkit-border-radius:3px;}

		.FBConnectButton_Small, .FBConnectButton_RTL_Small {width:49px !important; -moz-border-radius:3px;-webkit-border-radius:3px;}

		.FBConnectButton_Small .FBConnectButton_Text {padding:2px 2px 3px !important;-moz-border-radius:3px;-webkit-border-radius:3px;font-size:8px;}
	</style>

</head>

<body id="top">

<!-- cek login -->
<?php
if ($_SESSION['admin_username'] != ''){
?>
  <!-- navbar -->
  <nav class="navbar navbar-inverse" style="background-color:#ec971f ;border-radius: 0px;">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="admin">Adminku</a>
      </div>
      <div>
  	     <ul class="nav navbar-nav">
  		       <li><a href="admin">Depan<span class="sr-only">(current)</span></a></li>
             <li><a href="kategori.html">Kategori</a></li>
						 <li><a href="member.html">Member</a></li>
  		       <li><a href="ubah_password.html">Ubah password</a></li>
  	     </ul>
				 <ul class="nav navbar-nav navbar-right">
					 <li><a href="logout.php" title="Sign Out">Logout</a></li>
				 </ul>
       </div>
    </div>
  </nav>
<?php } ?>
<!-- End navigation -->

<div class="container">
		<?php
		include "content.php";
		?>
</div>

</body>
</html>
