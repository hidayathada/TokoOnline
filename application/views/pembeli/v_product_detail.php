<!DOCTYPE html>
<html lang="en">

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section">
		<!-- <div class="container"> -->
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>Hada Shop</h1>
					</div>
				</div>
			</div>
		<!-- </div> -->
	</div>
	<!-- end breadcrumb section -->

	<div class="single-product mt-150 mb-150">
		<div class="container">
			<?php foreach($data as $a):?>
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
							<img src="<?= base_url() ?>vendors/template/assets/img/products/<?= $a->foto?>" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3><?= $a->nama_produk?></h3>
						<p class="single-product-pricing"><?= $a->harga ?></p>
						<p><?= $a->deskripsi?></p>
						<form action="<?= base_url("pembeli/add_cart/" . $this->session->userdata('id_user'))?>" method="post">
						<div class="single-product-form">
							<input type="number" name="jumlah" placeholder="0">
							<input type="hidden" name="id_produk" value="<?= $a->id_produk?>">
							<div class="single-product-form">
								<button type="submit" class="btn btn-lg btn-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>

</body>
</html>

<!-- single product -->
