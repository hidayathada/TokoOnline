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
                <h3 class="card-title"><strong>Data Users</strong></h3><br><br>
                  <div class="float-sm-right">
                    <!-- <button type="button" class="btn btn-default btn-success" data-toggle="modal" data-target="#save_kiba">
                        Tambah
                    </button> -->
                    
                    <div class="modal fade" id="">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Tambah Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH -->
                              <!-- /FORM TAMBAH -->
                            </div>
                          </div>
                        </div>
                      </div>


                  <!-- DIV CLASS FLOAT SM -->
                  </div>
                  <!-- /DIV CLASS FLOAT SM -->

                <!-- DIV CARD HEADER -->
                </div>  
              <!-- /DIV CARD HEADER -->
              <div class="card-body table-responsive">
              <table border="2" id="example4" class="table table-striped table-bordered text-nowrap" style="width:100%">
                  <thead class="table-header">
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th><center>Action</center></th>
                </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no=1;
                    foreach($data as $j):
                  ?>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $j->username?></td>
                    <td><?= $j->alamat?></td>
                    <td>
                      <?php 
                      if ($j->role_id == 1){
                        echo "Admin";
                      }elseif($j->role_id == 2){
                        echo "Member";
                      }?>
                    </td>
                    <td><center>-</center></td>
                </tr>
                <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    </div>
</body>
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