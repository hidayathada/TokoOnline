<!DOCTYPE html>
<html lang="en">
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<center>
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">TOKO PAKAIAN</p>
							<h1>HADA SHOP</h1>
							<!-- <div class="hero-btns">
								<a href="<?= base_url("pembeli/produk")?>" class="boxed-btn">Fruit Collection</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</center>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Kami menjual berbagai barang</p>
					</div>
				</div>
			</div>

			<div class="row">
				
				<?php
					$no=1;
					foreach($data as $j):
				?>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href=""><img src="<?= base_url()?>vendors/template/assets/img/products/tshirt.jpg" alt=""></a>
						</div>
						<h3>Tshirt</h3>
						<p class="product-price"> Rp. 150000 </p>
						<a href="<?= base_url("pembeli/product_detail")?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href=""><img src="<?= base_url()?>vendors/template/assets/img/products/hoodie.jpg" alt=""></a>
						</div>
						<h3>Hoodie</h3>
						<p class="product-price"> Rp. 1150000 </p>
						<a href="<?= base_url("pembeli/product_detail")?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href=""><img src="<?= base_url()?>vendors/template/assets/img/products/topi.jpg" alt=""></a>
						</div>
						<h3>Topi</h3>
						<p class="product-price"> Rp. 200000 </p>
						<a href="<?= base_url("pembeli/product_detail")?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href=""><img src="<?= base_url()?>vendors/template/assets/img/products/tas.jpg" alt=""></a>
						</div>
						<h3>Tas</h3>
						<p class="product-price"> Rp. 450000 </p>
						<a href="<?= base_url("pembeli/product_detail")?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href=""><img src="<?= base_url()?>vendors/template/assets/img/products/sepatu.jpg" alt=""></a>
						</div>
						<h3>Sepatu</h3>
						<p class="product-price"> Rp. 550000 </p>
						<a href="<?= base_url("pembeli/product_detail")?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href=""><img src="<?= base_url()?>vendors/template/assets/img/products/crewneck.jpg" alt=""></a>
						</div>
						<h3>Crewneck</h3>
						<p class="product-price"> Rp. 250000 </p>
						<a href="<?= base_url("pembeli/product_detail")?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

</body>
</html>