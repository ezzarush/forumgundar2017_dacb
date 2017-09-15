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
	<script type="text/javascript" src="js/jquery-1-9/jquery.min.js"></script>
	<script type="text/javascript" src="js/mod.js"></script>
	
	<!--
		<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
	-->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
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
		    background-color: #3498db;
		    border-color: #ddd;
		    border-width: 1px;
		    border-radius: 4px;
		    -webkit-box-shadow: none;
		    box-shadow: none;
		}
		
		.kotak2 {
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

	<!-- navbar -->
	<nav class="navbar navbar-inverse" style="background-color:#3498db;border-radius: 0px;">
	  <div class="container">

	    <div class="navbar-header">
	      <a class="navbar-brand" href="home">Alumniku</a>
	    </div>

			<!-- cek login -->
			<?php
			if ($_SESSION['email_login'] != ''){
				$name_login = $db->database_fetch_array($db->database_prepare("SELECT username,photo FROM as_member WHERE email = ?")->execute($_SESSION['email_login']));
			?>

			<!-- Start contact info area -->
			<div id="conteactinfo">
				<?php if ($name_login['photo'] != ''){
					echo "<img src='images/photo_member/thumb/small_$name_login[photo]' height='25' style='border-radius: 5px; border: 1px solid #ccc;'>";
				}
				?>
				<div style="padding-bottom: 10px; float:right; padding-left: 10px; margin-top: 2px;">Hi, <b><?php echo $name_login['username']; ?> </b></div>
			</div>
			<!-- End contact info area -->
			<!-- Start navigation -->
			<?php
			$num_messages_new = $db->database_num_rows($db->database_prepare("SELECT * FROM as_frm_messages WHERE sendto = ? AND status = 0")->execute($_SESSION["member_login"]));
			?>

			<div>
				<ul class="nav navbar-nav">
					<li><a href="home">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="profile.html">Profil</a></li>
					<li><a href="all-categories.html">Kategori</a></li>
					<li><a href="all-posts.html">Post</a></li>
					<li><a href="messages-1-1.html" title="Messages">Pesan <span class="badge"><?php echo $num_messages_new; ?></span></a></li>
					<li><a href="logout.php" title="Sign Out">Logout</a></li>
					<div id="conteactinfo2">
						<a href="add-new-post.html"><button type="button" class="btn btn-primary">Buat Topik</button></a>
					</div>
				</ul>
				<div class="navbar-form navbar-right " role="search">
					<form method="GET" action="search.php">
						<div class="form-group">
							<input type="hidden" name="id" value="<?php if ($_GET['id'] != 0){ echo $_GET['id']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="page" value="1" />
							<input type="hidden" name="rid" value="<?php if ($_GET['rid'] != 0){ echo $_GET['rid']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="cid" value="<?php if ($_GET['cid'] != 0){ echo $_GET['cid']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="pid" value="<?php if ($_GET['pid'] != 0){ echo $_GET['pid']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="cat" value="<?php if ($_GET['cat'] != 0){ echo $_GET['cat']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="nm" value="<?php echo md5(date('Ymdhis')); ?>" />
							<input class="form-control" type="text" name="q" placeholder="Search post here...">
							<input class="btn btn-primary" type="submit" value="Cari">
						</div>
					</form>
				</div>
			</div>
				<!-- End navigation -->

			<?php
			} else {
			?>

			<div>
				<ul class="nav navbar-nav">
					<li><a href="sign-up.html">Buat Akun</a></li>
					<li><a href="sign-in.html">Login <span class="sr-only">(current)</span></a></li>
					<li><a href="all-categories.html">Kategori</a></li>
				</ul>
				<div class="navbar-form navbar-right " role="search">
					<form method="GET" action="search.php">
						<div class="form-group">
							<input type="hidden" name="id" value="<?php if ($_GET['id'] != 0){ echo $_GET['id']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="page" value="1" />
							<input type="hidden" name="rid" value="<?php if ($_GET['rid'] != 0){ echo $_GET['rid']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="cid" value="<?php if ($_GET['cid'] != 0){ echo $_GET['cid']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="pid" value="<?php if ($_GET['pid'] != 0){ echo $_GET['pid']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="cat" value="<?php if ($_GET['cat'] != 0){ echo $_GET['cat']; } else{ echo "0"; } ?>" />
							<input type="hidden" name="nm" value="<?php echo md5(date('Ymdhis')); ?>" />
							<input class="form-control" type="text" name="q" placeholder="Cari Post Di Sini...">
							<input class="btn btn-primary" type="submit" value="Cari">
						</div>
					</form>
				</div>
			</div>

			<?php
			}
			?>

	  </div>
	</nav>

<!-- container -->
<div class="container">

	<!-- info -->
	<?php if ($_SESSION['email_login'] == ''): ?>
		<div class="row">
			<div class="col-md-6">
				<div class="well">
					<blockquote>
					  <p>Setiap tempat adalah sekolah, setiap orang adalah guru dan setiap buku adalah ilmu.</p>
					  <footer>Roem Topatimasang, <cite title="Source Title">Sekolah itu Candu</cite></footer>
					</blockquote>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Informasi</h3>
					</div>
					<div class="panel-body">
						Aluminku merupakan Portal Web forum khusus alumni SMK N 1 bla bla bla. cari tahu selengkapnya halaman <a href="#" class="alert-link">Tentang</a>. bingung dan butuh bantuan kunjungi halaman <a href="#" class="alert-link">Bantuan</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">Pengumuman</h3>
					</div>
						<div class="list-group">
						  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
						  <a href="#" class="list-group-item">Morbi leo risus</a>
						  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
						</div>
				</div>
			</div>
		</div>
	<?php endif ?>

<!-- kategori -->
	<?php
	if ($_GET['module'] == 'cat_detail'){
		if ($_GET['id'] != 0 || $_GET['cat'] != 0){
			?>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Kategori</h3>
				</div>
				<div class="panel-body">
					<?php include "cat_header.php"; ?>
				</div>
			</div>
			<?php
		}
	}
	?>


<!-- detail post -->
<?php
if($_GET['module']=='sign_in' || $_GET['module']=='sign_up'){
	echo '<div class="kotak">';
}else{
	echo '<div class="kotak2">';
}
?>

	<?php if ($_GET['module'] != 'detail-post'): ?>

	<?php endif ?>
					<?php
						include "content.php";
					?>

	<?php if ($_GET['module'] != 'detail-post'): ?>
	<?php endif ?>
</div>

<!-- COPYRIGHT -->
<footer>
	<div id="copyright" class="clear">
		Coded with love by <strong><a href="http://jiwantoko.com">jiwantoko</a></strong>
		<a href="<?=$app_path;?>bantuan.html" class="pull-right alert-link" style="padding: 0px 5px">Bantuan</a>
		<a href="<?=$app_path;?>tentang.html" class="pull-right alert-link" style="padding: 0px 5px">Tentang</a>
		<!--
			<a href="<?=$app_path;?>hubungi-kami.html" class="pull-right alert-link" style="padding: 0px 5px">Hubungi Kami</a>
		-->
		<a href="<?=$app_path;?>syarat-ketentuan.html" class="pull-right alert-link" style="padding: 0px 5px">Syarat dan Ketentuan</a>
	</div>
</footer>
</div>



</body>
</html>
