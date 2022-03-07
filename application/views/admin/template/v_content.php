<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>1</h3>
                <p>Karyawan Paling Lama <br> Dalam Rest Room</p>
                </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url("Monitoring_karyawan/karyawan_terlama")?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>1</h3>

                <p>Karyawan Paling Sering <br> Pergi Ke Rest Room</p>
                </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url("Monitoring_karyawan/karyawan_paling_sering") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $durasi?></h3>

                <p>Karyawan Paling Sering<br>Pergi Ke Rest Room Pada Saat Jam Kerja</p>
                </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url('Monitoring_karyawan/karyawan_paling_sering_jam_kerja')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- BAR CHART -->
        <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Grafik Karyawan</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="myChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                  <?php foreach ($total as $grafik){
                     $total = $grafik->total;
                  }
                    ?>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script src="<?php echo base_url();?>vendors/AdminLTE/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url();?>vendors/AdminLTE/plugins/chart.js/Chart.js"></script>
<script src="<?php echo base_url();?>vendors/AdminLTE/plugins/chart.js/Chart2.js"></script>
<!-- // https://drive.google.com/uc?id=1Qk_oaqp9N90dSxVtewNff8Dk__NqGyUg&export=download -->