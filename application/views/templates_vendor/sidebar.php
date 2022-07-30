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
        <a href="#" class="d-block">Halaman Vendor <br> <?= $this->session->userdata('nama_vendor') ?></a>
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
              <a href="
              <?php
              if ($this->session->userdata('kategori_vendor') == "DKR") {
                echo base_url("vendor/dashboard/dekor");
              } elseif ($this->session->userdata('kategori_vendor' == "FTG")) {
                echo base_url("vendor/dashboard/fotografer");
              } elseif ($this->session->userdata('kategori_vendor') == "MUA") {
                echo base_url("vendor/dashboard/mua");
              } elseif ($this->session->userdata('kategori_vendor') == "CTR") {
                echo base_url("vendor/dashboard/catering");
              } else {
                echo base_url("vendor/dashboard/mc");
              }
              ?>
              " class="nav-link">
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('vendor/paket/') ?>" class="nav-link">
                <p>Paket</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('vendor/galeri/') ?>" class="nav-link">
                <p>Galeri</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/vendor/pesanan') ?>" class="nav-link">
                <p>Booking</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('vendor/login_vendor/logout') ?>" class="nav-link">
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