<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link navbar-secondary">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <center>
          <span class="brand-text font-weight-light"><b>Hada Shop</b></span>
      </center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-3 mb-3 d-flex">
       
        <div class="info ml-2">
          <!-- <a href="#" class="d-block" >Alexander Pierce</a> -->
          <a class="fa fa-user-circle fa-lg mt-2 mr-2" style="color:silver;size:10px"></a>
          <b class="text-dark text-lg">
            <?php $data['user'] = $this->db->get_where('tbl_user',['id_user' => $this->session->userdata('id_user')])->row_array();?>
            <?php echo ucwords($data['user']['username']);?>
          </b>
          
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('Admin')?>" class="nav-link <?php if($this->uri->segment(1)=="Admin"){echo "active";}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/product')?>" class="nav-link <?php if($this->uri->segment(2)=="product"){echo "active";}?>">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Detail Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/transaksi')?>" class="nav-link <?php if($this->uri->segment(2)=="transaksi"){echo "active";}?>">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/users')?>" class="nav-link <?php if($this->uri->segment(2)=="users"){echo "active";}?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-header">Logout</li>
          <li class="nav-item">
            <a href="<?php echo base_url('auth/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
          <a href="<?php echo base_url('coba/coba')?>" class="nav-link <?php if($this->uri->segment(1)=="coba"){echo "active";}?>">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                coba
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>