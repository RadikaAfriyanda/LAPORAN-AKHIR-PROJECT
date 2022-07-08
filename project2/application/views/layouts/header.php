<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Wisata Depok</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="<?= base_url('assets/logo/favicon.png')?>"/> 

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css')?>" />

		<!--animate.css-->
		<link rel="stylesheet" href="<?= base_url('assets/css/animate.css')?>" />

		<!--hover.css-->
		<link rel="stylesheet" href="<?= base_url('assets/css/hover-min.css')?>">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="<?= base_url('assets/css/datepicker.css')?>" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css')?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css')?>"/>

		<!-- range css-->
        <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.min.css')?>" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="<?= base_url('assets/css/bootsnav.css')?>"/>

		<!--style.css-->
		<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>" />

		<!--responsive.css-->
		<link rel="stylesheet" href="<?= base_url('assets/css/responsive.css')?>" />

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="<?= base_url('index.php/home')?>">
									Wisata<span>Depok</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#beranda">Beranda</a></li>
										<li class="smooth-menu"><a href="#destinasi">Destinasi</a></li>
										<?php if($this->session->userdata('ROLE')==='administrator'){?>
										<li class="nav-item">
											<a href="<?php echo base_url('index.php/kelola_users/index')?>" class="nav-link smoothScroll" data-aos="fade-up" data-aos-delay="10">Halaman Admin</a>
										</li>
										<?php }?>
										
										
										 <?php if($this->session->has_userdata('USERNAME')){ ?>
										<li>
											<a href="#" data-aos="fade-up" data-aos-delay="10">
												Hallo, <?= $this->session->userdata('USERNAME')?>
											</a>
										</li>
										<li>
											<a href="<?= base_url('index.php/login/logout')?>" data-aos="fade-up" data-aos-delay="10" >
												Keluar
											</a>
										</li>
										<?php }  else { ?>
										<li><a href="<?= base_url('index.php/login')?>" data-aos="fade-up" data-aos-delay="10">Login</a></li>
										<li><a href="<?= base_url('index.php/register')?>" data-aos="fade-up" data-aos-delay="10">Register</a></li>
										<?php }?>
										
										<!-- <li><button class="book-btn">sign up</button></li> -->
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div>
					<!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->