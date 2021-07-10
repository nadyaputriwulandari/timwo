<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <div class="image">
      <center><img src="<?php echo base_url() ?>assets/dist/img/fg.png"></center>
    </div>

  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() ?>assets/dist/img/wedding.png">
      </div>
      <div class="info">
        <a href="#" class="d-block">Halaman Vendor <?= $this->session->userdata('nama_vendor') ?></a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('vendor/dashboard/') ?>" class="nav-link">
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('vendor/dekorasi/') ?>" class="nav-link">
                <p>Dekorasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('vendor/fotographer/') ?>" class="nav-link">
                <p>Fotographer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('vendor/catering/') ?>" class="nav-link">
                <p>Catering</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('vendor/mc/') ?>" class="nav-link">
                <p>MC</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="<?= base_url('vendor/auth/logout') ?>" class="nav-link">
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">


        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>