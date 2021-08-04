<!DOCTYPE html>
<html lang="en">
<head>
<title>Cece Clothes</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?php echo base_url('assets/') ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/responsive.css">
</head>
<body>
<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="<?= base_url('category/search') ?>" id="menu_search_form" class="menu_search_form" method="post">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button type="submit" class="menu_search_button"><img src="<?= base_url('assets/images/search.png') ?>"></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="<?= base_url('category') ?>">All</a></li>
			<li><a href="<?= base_url('category/index/jacket') ?>">Jacket</a></li>
			<li><a href="<?= base_url('category/index/tshirt') ?>">T-Shirt</a></li>
			<li><a href="<?= base_url('category/index/hoodie') ?>">Hoodie</a></li>
			<li><a href="<?= base_url('category/index/shirt') ?>">Shirt</a></li>
			<li><a href="<?= base_url('category/index/pants') ?>">Pants</a></li>
			<li><a href="<?= base_url('category/index/Accessories') ?>">Accessories</a></li>
			<li><a href="<?= base_url('arrived') ?>">Konfirmasi Pesanan Sampai</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="assets/images/phone.svg"></div></div>
			<div>+62 823-4567-8910</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="<?= base_url('home') ?>">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img height="50" width="auto" src="<?= base_url('assets/images/logo.jpg') ?>">
						</div>
						<div class="header-name">C E C E</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<form action="<?= base_url('category/search') ?>" id="menu_search_form" class="menu_search_form" method="post">
					<input type="text" name="keyword" class="search_input" placeholder="Search Item" required="required">
					<button type="submit" class="menu_search_button"><img src="<?= base_url('assets/images/search.png') ?>"></button>
				</form>
				<!-- Cart -->
				<div class="cart"><a href="cart"><div class="ml-5"><img class="svg" src="assets/images/cart.svg"></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><a class="btn btn-danger" href="<?= base_url("register/logout") ?>">Logout</a></div>
				</div>
			</div>
		</div>
	</header>