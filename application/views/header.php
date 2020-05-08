<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <title>Home</title> -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('/assets/images/icons/favicon.png');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/fonts/iconic/css/material-design-iconic-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/fonts/linearicons-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/animsition/css/animsition.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/daterangepicker/daterangepicker.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/slick/slick.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/MagnificPopup/magnific-popup.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/vendor/perfect-scrollbar/perfect-scrollbar.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body class="animsition">
	<!-- Header desktop -->
	<div class="container-menu-desktop">
		<!-- Topbar -->
		<div class="top-bar">
			<div class="content-topbar flex-sb-m h-full container">
				<div class="left-top-bar">
					Cantik dan sans store
				</div>

				<div class="right-top-bar flex-w h-full">
				<?php if($this->session->userdata('login')==TRUE){?>
                    <a href="Profile.html" class="flex-c-m trans-04 p-lr-25">
                        Profile
                    </a>
                    <?php } ?>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        FAQs
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">

                    </a>
                <?php if($this->session->userdata('login')==FALSE){?>
                    <a href="<?php echo base_url('login/');?>" class="flex-c-m trans-04 p-lr-25">
                        Login
                    </a>
                <?php } else {?>
                    <a href="<?php echo base_url('login/do_logout');?>" class="flex-c-m trans-04 p-lr-25">
                        Logout
                    </a>
                <?php } ?>
				</div>
			</div>
		</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="<?php echo base_url('/assets/images/icons/logo-01.png');?>" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="<?php echo base_url('home');?>">Home</a>
							</li>

							<li>
								<a href="<?php echo base_url('home/katalog');?>">Katalog</a>
							</li>
							<li>
								<a href="<?php echo base_url('home/testimoni');?>">Testimoni</a>
							</li>

							<li>
								<a href="<?php echo base_url('home/about');?>">About</a>
							</li>

							<li>
								<a href="<?php echo base_url('home/contact');?>">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<?php if($this->session->userdata('login')==TRUE){
							$id = $this->session->userdata('id');?>
						<a href="<?php echo base_url('home/cart/');?><?php echo $id;?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0">
							<i class="zmdi zmdi-shopping-cart"></i>
						</a>
						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
						<a href="<?php echo base_url('home/profile/');?><?php echo $id;?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
							<i class="zmdi zmdi-account"></i>
						</a>
						<?php } ?>
						
					</div>
				</nav>
			</div>	
		</div>

	
		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="<?php echo base_url('/assets/images/icons/icon-close2.png');?>" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	