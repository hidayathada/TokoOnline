<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Hada Shop</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url()?>vendors/template/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url()?>vendors/template/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url()?>vendors/template/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url()?>vendors/template/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url()?>vendors/template/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url()?>vendors/template/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url()?>vendors/template/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url()?>vendors/template/assets/css/responsive.css">


	
	<!--PreLoader-->
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<center>
							<ul>
								<li <?php if($this->uri->segment(1)=="home"){echo "class='current-list-item'";}?> ><a href="<?= base_url("home")?>">Home</a>
								</li>
								<li <?php if($this->uri->segment(1)=="pembeli" | $this->uri->segment(1)=="product_detail"){echo "class='current-list-item'";}?>><a href="<?= base_url("pembeli/product")?>">Product</a></li>
								<li>
								<a href="<?= base_url("Auth")?>">Login</a>
								</li>
								<li>
									<i >
									<a class="fa fa-user">
										<?php $data['user'] = $this->db->get_where('tbl_user',['id_user' => $this->session->userdata('id_user')])->row_array();?>
            							<?php if ($data['user'] == null){
											echo " ";
										}else{
											echo ucwords($data['user']['username']);
										}?>
									</a>
									</i>
									<ul class="sub-menu">
										<li class="fa power-off"><a href="<?= base_url("auth/logout")?>">Logout</a></li>
									</ul>
								</li>
								<li>
									<a class="shopping-cart" href="<?= base_url("pembeli/cart")?>"><i class="fas fa-shopping-cart"></i></a>
								</li>
								
							</ul>
							</center>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	</head>