<!DOCTYPE html>
<html lang="en">
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <?php echo $this->session->flashdata('message');?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><strong>Detail Cart</strong></h3><br><br>
                  <div class="float-sm-right">
                    <!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tambah_product">
                        Tambah
                    </button> -->
                    
                    <div class="modal fade" id="tambah_product">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Tambah Product</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH -->
                              <!-- <form method="post" action="<?php echo base_url()?>admin/add_product" > -->
                              <?php echo form_open_multipart('admin/add_product');?>
                                <input type="hidden" name="id" id="id">
								                      <div class="mb-3 row">
								                      </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Nama Produk</label>
                                                <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk"></input>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Kode Produk</label>
                                                <input type="text" class="form-control" name="kode_produk" placeholder="Kode Produk">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Harga</label>
                                                <input type="text" class="form-control" name="harga" placeholder="Harga Produk">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Stock</label>
                                                <input type="text" class="form-control" name="stock" placeholder="Stock">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Deskripsi Produk</label>
                                                <textarea rows="3" class="form-control" name="deskripsi"></textarea>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Foto Produk</label>
                                                <input type="file" class="form-control" name="image">
                                              </div>
                                            </div>
                                        </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                              <!-- /FORM TAMBAH -->
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end div modal-->


                  <!-- DIV CLASS FLOAT SM -->
                  </div>
                  <!-- /DIV CLASS FLOAT SM -->

                <!-- DIV CARD HEADER -->
                </div>  
              <!-- /DIV CARD HEADER -->
              <div class="card-body table-responsive">
              <table border="2" id="example2" class="table table-striped table-bordered text-nowrap" style="width:100%">
                <thead class="table-header">
                <tr>
                    <th>No</th>
                    <th>Foto Produk</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Nama Pembeli</th>
                    <th><center>Action</center></th>
                </tr>
                  </thead>
                  <tbody>
                    <?php $no=1?>
                      <?php foreach($data as $j):?>
                      <tr>
                        <td><?= $no++?></td>
                        <td><img src="<?= base_url() ?>vendors/template/assets/img/products/<?= $j->foto?>" alt="" class='img-circle elevation-2' width='60px' height='60px'></td>
                        <td><?= $j->kode_produk?></td>
                        <td><?= $j->nama_produk?></td>
                        <td><?= $j->harga?></td>
                        <td><?= $j->jumlah?></td>
                        <td><?php 
                            $harga = $j->harga;
                            $jumlah = $j->jumlah;
                            echo $harga * $jumlah;
                            ?>
                        </td>
                        <td><?= $j->username?></td>
                        <td > -
                            <!-- <button type="button" class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#edit_product<?= $no?>"><i class="fas fa-pencil-alt"></i>
                              Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="deleteConfirm('<?php echo base_url() . 'admin/delete_product/' . $j->id_produk ?>')" data-tolltip="tooltip" data-placement="top"><i class="fas fa-trash-alt mr-1"></i>Hapus</button> -->

                      <div class="modal fade" id="edit_product<?= $no?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Product</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- FORM EDIT -->
                              <?php echo form_open_multipart('admin/edit_product');?>
                                <input type="hidden" name="id_produk" value="<?= $j->id_produk?>">
								                      <div class="mb-3 row">
								                      </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Nama Produk</label>
                                                <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" value="<?= $j->nama_produk?>"></input>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Kode Produk</label>
                                                <input type="text" class="form-control" name="kode_produk" placeholder="Kode Produk" value="<?= $j->kode_produk?>">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Harga</label>
                                                <input type="text" class="form-control" name="harga" placeholder="Harga Produk" value="<?= $j->harga?>">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Stock</label>
                                                <input type="text" class="form-control" name="stock" placeholder="Stock" value="<?= $j->stock?>">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Deskripsi Produk</label>
                                                <textarea rows="3" class="form-control" name="deskripsi"><?= $j->deskripsi?></textarea>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Foto Produk</label>
                                                <input type="file" class="form-control" name="foto_produk">
                                              </div>
                                            </div>
                                        </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                              <!-- /FORM TAMBAH -->
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end div modal-->
                        </td>
                      </tr>  
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!-- </div> DIV CLASS COL-12 -->
        </div>
        </div>
      </div> <!-- DIV CLASS CONTENT WRAPPER -->
    </section>
<!-------------------------------------------------- CARD 2 ---------------------------------------------------->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <?php echo $this->session->flashdata('message');?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><strong>Detail Transaksi</strong></h3><br><br>
                  <div class="float-sm-right">
                    <!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tambah_product">
                        Tambah
                    </button> -->
                    


                  <!-- DIV CLASS FLOAT SM -->
                  </div>
                  <!-- /DIV CLASS FLOAT SM -->

                <!-- DIV CARD HEADER -->
                </div>  
              <!-- /DIV CARD HEADER -->
              <div class="card-body table-responsive">
              <table border="2" id="example2" class="table table-striped table-bordered text-nowrap" style="width:100%">
                <thead class="table-header">
                <tr>
                    <th>No</th>
                    <th>Foto Produk</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Nama Pembeli</th>
                    <th><center>Action</center></th>
                </tr>
                  </thead>
                  <tbody>
                    <?php $no=1?>
                      <?php foreach($data as $j):?>
                      <tr>
                        <td><?= $no++?></td>
                        <td><img src="<?= base_url() ?>vendors/template/assets/img/products/<?= $j->foto?>" alt="" class='img-circle elevation-2' width='60px' height='60px'></td>
                        <td><?= $j->kode_produk?></td>
                        <td><?= $j->nama_produk?></td>
                        <td><?= $j->harga?></td>
                        <td><?= $j->jumlah?></td>
                        <td><?php 
                            $harga = $j->harga;
                            $jumlah = $j->jumlah;
                            echo $harga * $jumlah;
                            ?>
                        </td>
                        <td><?= $j->username?></td>
                        <td ><center>-</center>
                            
                      <div class="modal fade" id="edit_product<?= $no?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Product</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- FORM EDIT -->
                              <?php echo form_open_multipart('admin/edit_product');?>
                                <input type="hidden" name="id_produk" value="<?= $j->id_produk?>">
								                      <div class="mb-3 row">
								                      </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Nama Produk</label>
                                                <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" value="<?= $j->nama_produk?>"></input>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Kode Produk</label>
                                                <input type="text" class="form-control" name="kode_produk" placeholder="Kode Produk" value="<?= $j->kode_produk?>">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Harga</label>
                                                <input type="text" class="form-control" name="harga" placeholder="Harga Produk" value="<?= $j->harga?>">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Stock</label>
                                                <input type="text" class="form-control" name="stock" placeholder="Stock" value="<?= $j->stock?>">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Deskripsi Produk</label>
                                                <textarea rows="3" class="form-control" name="deskripsi"><?= $j->deskripsi?></textarea>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Foto Produk</label>
                                                <input type="file" class="form-control" name="foto_produk">
                                              </div>
                                            </div>
                                        </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                              <!-- /FORM TAMBAH -->
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end div modal-->
                        </td>
                      </tr>  
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!-- </div> DIV CLASS COL-12 -->
        </div>
        </div>
      </div> <!-- DIV CLASS CONTENT WRAPPER -->
    </section>
    </div>
</body>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
<script>
  $('#example4').DataTable( {
        "scrollX": true
    } );
</script>

<!-- page script -->
<script>
    $(document).ready(function() {
        $('#TabelUser').DataTable();
        $('[data-tolltip="tooltip"]').tooltip({
            trigger: "hover"
        })
    });
</script>
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

</html>