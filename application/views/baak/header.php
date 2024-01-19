<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Administrasi</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/front1/img/amni-png.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/front1/img/amni-png.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('nama'); ?> - BAAK
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url().'bau/logout'; ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/front1/img/amni1.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li><a href="<?php echo base_url() ?>baak/"><i class="fa fa-book"></i> <span>Home</span></a></li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Rekapitulasi Catar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li class="active"><a href="<?php //echo base_url() ?>baak/"><i class="fa fa-repeat"></i>Ganti Jurusan</a></li> -->
            <li><a href="<?php echo base_url() ?>baak/rekap_periode"><i class="fa fa-paperclip"></i>Rkp Peserta per Periode </a></li>
            <li><a href="<?php echo base_url() ?>baak/rekap_peserta2022"><i class="fa fa-paperclip"></i>Rekap Daftar Peserta</a></li>
            <li><a href="<?php echo base_url() ?>baak/rekap_daftarhadir2022"><i class="fa fa-paperclip"></i>Daftar Hadir Peserta</a></li>
            <li><a href="<?php echo base_url() ?>baak/rekap_daftarhadirdp2022"><i class="fa fa-paperclip"></i>Daftar Hadir Peserta Dtg Plg</a></li>
            <li><a href="<?php echo base_url() ?>baak/rekap_daftarhadirpmbrks2022"><i class="fa fa-paperclip"></i>Daftar Hadir Pemberkasan</a></li>
            <!-- <li><a href="<?php //echo base_url() ?>baak/rekap_abs_tda"><i class="fa fa-paperclip"></i>Rekap Abasen TDA</a></li>
            <li><a href="<?php //echo base_url() ?>baak/rekap"><i class="fa fa-paperclip"></i>Rekap Daftar Hadir</a></li>
            <li><a href="<?php// echo base_url() ?>baak/rekap_targas"><i class="fa fa-paperclip"></i>Rekap Daftar Hadir Targas</a></li>
            <li><a href="<?php //echo base_url() ?>baak/rekap_tkd"><i class="fa fa-paperclip"></i>Rekap Nilai TKD</a></li>
            <li><a href="<?php //echo base_url() ?>baak/rekap_samapta"><i class="fa fa-paperclip"></i>Rekap Nilai Seleksi Samapta</a></li>
            <li><a href="<?php //echo base_url() ?>baak/rekap_wawancara"><i class="fa fa-paperclip"></i>Rekap Nilai Wawancara</a></li>
            <li><a href="<?php //echo base_url() ?>baak/rekap_psykotest"><i class="fa fa-paperclip"></i>Rekap Nilai Psykotest</a></li>
            <li><a href="<?php //echo base_url() ?>baak/rekap_kesehatan"><i class="fa fa-paperclip"></i>Rekap Nilai Kesehatan</a></li>
            <li><a href="<?php //echo base_url() ?>baak/rekap_pantukir"><i class="fa fa-paperclip"></i>Rekap Nilai Pantukir</a></li>
            <li><a href="<?php// echo base_url() ?>baak/rekap_seleksi"><i class="fa fa-paperclip"></i>Rekap Nilai Seleksi</a></li> -->

          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Seleksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li class="active"><a href="<?php //echo base_url() ?>baak/"><i class="fa fa-repeat"></i>Ganti Jurusan</a></li> -->
            <li><a href="<?php echo base_url() ?>baak/seleksigd"><i class="fa fa-paperclip"></i>Seleksi GD</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Summary 2024</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url() ?>baak/get_summary_prov_2024"><i class="fa fa-money"></i>Statistik per Provinsi</a></li>
            <li class="active"><a href="<?php echo base_url() ?>baak/get_summary_kabkota_2024"><i class="fa fa-money"></i>Statistik per Kab / Kota</a></li>
            <li><a href="<?php echo base_url() ?>baak/get_summary_sekolah_2024"><i class="fa fa-paperclip"></i>Statistik per sekolah</a></li>
            <li><a href="<?php echo base_url() ?>baak/get_summary_sumber_2024"><i class="fa fa-paperclip"></i>Statistik Sumber Informasi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Summary 2023</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url() ?>baak/get_summary_prov_2023"><i class="fa fa-money"></i>Statistik per Provinsi</a></li>
            <li class="active"><a href="<?php echo base_url() ?>baak/get_summary_kabkota_2023"><i class="fa fa-money"></i>Statistik per Kab / Kota</a></li>
            <li><a href="<?php echo base_url() ?>baak/get_summary_sekolah_2023"><i class="fa fa-paperclip"></i>Statistik per sekolah</a></li>
            <li><a href="<?php echo base_url() ?>baak/get_summary_sumber_2023"><i class="fa fa-paperclip"></i>Statistik Sumber Informasi</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Summary 2022</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url() ?>baak/get_summary_prov_2022"><i class="fa fa-money"></i>Statistik per Provinsi</a></li>
            <li class="active"><a href="<?php echo base_url() ?>baak/get_summary_kabkota_2022"><i class="fa fa-money"></i>Statistik per Kab / Kota</a></li>
            <li><a href="<?php echo base_url() ?>baak/get_summary_sekolah_2022"><i class="fa fa-paperclip"></i>Statistik per sekolah</a></li>
            <li><a href="<?php echo base_url() ?>baak/get_summary_sumber_2022"><i class="fa fa-paperclip"></i>Statistik Sumber Informasi</a></li>
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Summary 2021</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url() ?>baak/get_summary_prov_2021"><i class="fa fa-money"></i>Statistik per Provinsi</a></li>
            <li class="active"><a href="<?php echo base_url() ?>baak/get_summary_ktkb_2021"><i class="fa fa-money"></i>Statistik per Kota / Kab</a></li>
            <li><a href="<?php echo base_url() ?>baak/get_summary_sekolah_2021"><i class="fa fa-paperclip"></i>Statistik per sekolah</a></li>
            <li><a href="<?php echo base_url() ?>baak/get_summary_sumber_2021"><i class="fa fa-paperclip"></i>Statistik Sumber Informasi</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Summary 2020</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <!--  <li class="active"><a href="<?php //echo base_url() ?>bau/get_summary_prov_2021"><i class="fa fa-money"></i>Statistik per Provinsi</a></li> -->
            <li><a href="<?php echo base_url() ?>baak/get_summary_sekolah_2020"><i class="fa fa-paperclip"></i>Statistik per sekolah</a></li>
            <li><a href="<?php echo base_url() ?>baak/get_summary_sumber_2020"><i class="fa fa-paperclip"></i>Statistik Sumber Informasi</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 0px;padding-bottom: 0px;">
      <h1>
        Selamat Datang
        <small>Di Sistem Informasi Administrasi Pencatarma UNIMAR AMNI Semarang</small>
      </h1>

    </section>
<!-- Main content -->
  <section class="content-header">
      <!-- Small boxes (Stat box) -->
      <div class="row">

<!-- ////////////////////////////////////////////////////////////new -->



  <!-- pendaftaran -->
        <div class="col-lg-3 col-xs-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pendaftar</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Total
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_all('tbl_catar_2024')->num_rows(); ?><sup style="font-size: 20px"></span>
            </div>
            <div class="box-body" style="">
              <a href="<?php echo base_url() ?>baak/data_sudah_validasi">Sudah Validasi</a>
               <?php 
             $where2= array(
            'id_gelombang' => '1',  
              );
              $gelombang=$this->m_registrasi->get_data_gelombang($where2);
            $where = array(
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_2024.jalur' => 'reguler',
            'tbl_catar_validasi_2024.aktif' => '1'      
            );
             ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              <a href="<?php echo base_url() ?>baak/data_sudah_validasi_gd">Sudah Validasi (Gelombang Dini)</a>
               <?php 
             $where2= array(
            'id_gelombang' => '1',  
              );
              $gelombang=$this->m_registrasi->get_data_gelombang($where2);
            $where = array(
            'tbl_catar_2024.jalur' => 'gdr1',
            'tbl_catar_validasi_2024.aktif' => '1'      
            );
             ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              <a href="<?php echo base_url() ?>baak/data_sudah_validasi_gdtf">Sudah Validasi (Gelombang Dini TF)</a>
               <?php 
             $where2= array(
            'id_gelombang' => '1',  
              );
              $gelombang=$this->m_registrasi->get_data_gelombang($where2);
            $where = array(
            'tbl_catar_2024.jalur' => 'gdr2',
            'tbl_catar_validasi_2024.aktif' => '1'      
            );
             ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where($where)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

 <!-- ketatalaksanaan -->
        <div class="col-lg-3 col-xs-6">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Ketatalaksanaan</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Reguler
              <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '1',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'reguler'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Gelombang Dini
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '1',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr1'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

<!-- teknika -->
        <div class="col-lg-3 col-xs-6">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Teknika</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Reguler
              <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '2',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'reguler'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Gelombang Dini
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '2',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr1'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <!-- Nautika -->
        <div class="col-lg-3 col-xs-6">
          <div class="box box-aqua">
            <div class="box-header with-border">
              <h3 class="box-title">Nautika</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Reguler
                <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '3',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'reguler'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Gelombang Dini
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '3',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr1'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

          <!-- Transportasi -->
        <div class="col-lg-3 col-xs-6">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Transportasi</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Reguler
              <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '4',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'reguler'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Ekstensi
              <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '4',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'kelastransfer'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Gelombang Dini
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '4',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr1'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <div class="box-body" style="">
              Gelombang Dini TF
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '4',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr2'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

          <!-- Transportasi laut -->
        <div class="col-lg-3 col-xs-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Teknik Transportasi Laut</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Reguler
              <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '5',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'reguler'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Gelombang Dini
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '5',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr1'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

          <!-- Tek. mesin -->
        <div class="col-lg-3 col-xs-6">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Teknik Mesin</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Reguler
              <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '6',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'reguler'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Gelombang Dini
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '6',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr1'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

          <!-- tek. keselamatan -->
        <div class="col-lg-3 col-xs-6">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Teknik Keselamatan</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Reguler
              <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '7',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'reguler'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Gelombang Dini
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '7',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr1'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
            
              <!-- perdg. internasional -->
        <div class="col-lg-3 col-xs-6">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Perdagangan Internasional</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Reguler
              <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '8',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'reguler'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Gelombang Dini
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '8',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr1'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

               <!-- D4 MPLM -->
        <div class="col-lg-3 col-xs-6">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">D4 MPLM</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              Reguler
              <?php 
            $where = array(
            'tbl_catar_2024.prodi' => '9',
            'tbl_catar_2024.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'reguler'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where)->num_rows(); ?></span>
            </div>
             <div class="box-body" style="">
              Gelombang Dini
              <?php 
            $where_ft = array(
            'tbl_catar_2024.prodi' => '9',
            // 'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_validasi_2024.aktif' => '1',
            'tbl_catar_2024.jalur' => 'gdr1'      
            ); ?>
              <span class="pull-right badge bg-blue"><?php echo $this->m_registrasi->get_data_join_where_row($where_ft)->num_rows(); ?></span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>




        
        <!-- ./col -->
      <!-- /.row -->
      <!-- Main row -->
    </section>