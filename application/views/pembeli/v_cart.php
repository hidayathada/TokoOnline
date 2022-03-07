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
<!-- cart -->
<div class="cart-section mt-150 mb-150">
		<div class="container">
		<a href="<?= base_url("pembeli/product")?>" class="boxed-btn mb-3"><i class="fas fa-chevron-left mr-1"></i>Belanja Lagi</a>

			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
                                <?php 
                                foreach($data as $j):?>
								<tr class="table-body-row">
									<td class="product-remove">
                                        <a href="<?php echo base_url() . 'pembeli/delete_cart/' . $j->id_produk ?>">
                                            <button type="button" class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button> 
                                        </a>
                                    </td>
									<td class="product-image"><img src="<?= base_url()?>vendors/template/assets/img/products/<?= $j->foto?>" alt=""></td>
									<td class="product-name"><?= $j->nama_produk?></td>
									<td class="product-price"><?= $j->harga?></td>
									<td class="product-quantity"><?= $j->jumlah ?></td>
									<td class="product-total">
                                        <?php
                                            $jumlah = $j->jumlah;
                                            $total = $j->jumlah * $j->harga;
                                            echo $total;?>
                                    </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>
										</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="cart.html" class="boxed-btn">Update Cart</a>
							<a href="checkout.html" class="boxed-btn black">Check Out</a>
						</div>
					</div>

				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<!-- end cart -->
    <!--Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-3 d-flex justify-content-center">
                        <i class="fa  fa-exclamation-triangle" style="font-size: 70px; color:red;"></i>
                    </div>
                    <div class="col-9 pt-2">
                        <h5>Apakah anda yakin?</h5>
                        <span>Data yang dihapus tidak akan bisa dikembalikan.</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"> Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#"> Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirm -->
<script type="text/javascript">
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>
