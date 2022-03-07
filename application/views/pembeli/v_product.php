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
						<p>Kami menjual berbagai barang</p><br>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon1">
  							<div class="input-group-prepend">
    							<span class="input-group-text"><i class="fa fa-search"></i></span>
  							</div>
						</div>
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
                    		<img src="<?php echo (base_url('image/') . ($j->foto))?>" class="img-circle elevation-2" alt="User Image" width="200px" height="200px">
                        </div>
						<h3><?= $j->nama_produk?></h3>
						<p class="product-price"> <?= $j->harga?></p>
						<?php 
							// $data['role_id'] = $this->db->get_where('tbl_user',['role_id' => $this->session->userdata('role_id')])->row_array();
							$data = $this->session->userdata('role_id');
							if($data == 2){?>
							<a href="<?= base_url("pembeli/product_detail/" . $j->id_produk)?>" class="cart-btn"><i class="fas fa-shopping-cart"></i>Produk Detail</a>
						<?php }else{?>
							<i class="fas fa-shopping-cart mr-1"></i><span class="text-danger">Silahkan Login Terlebih Dahulu</span></a>
						<?php }?>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<!-- end product section -->

</body>
</html>
<script>
	$(document).ready(function(){
		load_data();
		function load_data(jurusan, keyword)
		{
			$.ajax({
				method:"POST",
				url:"data.php",
				data: {jurusan: jurusan, keyword:keyword},
				success:function(hasil)
				{
					$('.data').html(hasil);
				}
			});
	 	}
		$('#s_keyword').keyup(function(){
			var jurusan = $("#s_jurusan").val();
    		var keyword = $("#s_keyword").val();
			load_data(jurusan, keyword);
		});
		$('#s_jurusan').change(function(){
			var jurusan = $("#s_jurusan").val();
    		var keyword = $("#s_keyword").val();
			load_data(jurusan, keyword);
		});
	});
</script>