<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Revo Print Online</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/divisima/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/divisima/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/divisima/css/flaticon.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/divisima/css/slicknav.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/divisima/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/divisima/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/divisima/css/animate.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/divisima/css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="assets/img/revo_logo.png" width="70" height="60" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Cari produk ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="<?= ('admin/produk');?>">Login</a> / <a style="color:lightblue;" href="#">Daftar</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Shopping Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="#">Beranda</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<!-- kategori -->
					<li><a href="#">Kategori</a>
						<ul class="sub-menu">
							<li><a href="./product.html">Stiker</a></li>
							<li><a href="./category.html">Brosur</a></li>
							<li><a href="./cart.html">Masker New Normal</a></li>
							<li><a href="./checkout.html">Cetak Kilat</a></li>
							<li><a href="./contact.html">Cetak Foto</a></li>
						</ul>
					</li>
					<!-- end kategori -->
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->
