<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pencatarma UNNIMAR AMNI Semarang</title>
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
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/bower_components/select2/dist/css/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url() ?>" class="navbar-brand"><span><img src="<?php echo base_url() ?>assets/front1/img/amni1.png" width="5%"></span><b>SIPENCATARMA</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        
      
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      

      <!-- Main content -->
      <section class="content">
        <div class="callout callout-info">
          <h4>Tips!</h4>
          <p># Berikut adalah halamn untuk cek status pendaftaran calon Taruna / Mahasiswa UNIMAR AMNI Semarang.</p>
          <p># Halaman ini juga berfungsi untuk download form pendaftaran yang telah dibuat sebelumnya dengan memasukkan nomor pendafatran.</p>
          <p># Jika anda mengalami kesulitan anda dapat melihat tutorial yang dapat di download disini.</p>
        </div>
        <div class="callout callout-danger">
          <h4>Perhatian!</h4>
              <ul>
              <li>Pastikan anda melihat prasyarat sesuai <b>Program Studi (Prodi)</b> yang dipilih</li>
                <li>Pendaftaran dapat dilaksanakan dengan datang langsung ke kampus biru maupun secara <i>online</i></li>
                <li>Bagi pendaftar baik melalui <b><i>online</i></b> dapat melaksanakan pembayaran pembayaran pendaftaran melalui Bank/ATM :</li>
                <table>
                  <tr>
                    <td><b>BANK BNI</b></td>
                    <td><b>:</b></td>
                    <td><b>an. STIMART AMNI</b></td>
                  </tr>
                  <tr>
                    <td><b>No. Rekening</b></td>
                    <td><b>:</b></td>
                    <td><b>0838810730</b></td>
                  </tr>
                  <tr>
                    <td><b>Biaya Pendaftaran</b></td>
                    <td><b>:</b></td>
                    <td><b>Rp. 500.000,-</b></td>
                  </tr>
                </table>
                <li>Bukti Pembayaran dapat dikirim melalui :</li>
                <table>
                  <tr>
                    <td><b>No. WA</b></td>
                    <td><b>:</b></td>
                    <td><b>0822.46.900.800</b></td>
                  </tr>
                  <tr>
                    <td colspan="3">Dengan mencantumkan informasi :</td>
                  </tr>
                  <tr>
                    <td colspan="3"><b>No. Pendaftaran Online_Nama Pendaftar_Prodi yang dipilih_Periode Pendaftaran</b></td>
                  </tr>
                  <tr>
                    <td>Contoh</td>
                    <td>:</td>
                    <td><b>1234_Rian Ardianto_Transportasi_Januari</b></td>
                  </tr>
                </table>
               
                <li>Pemberkasan dilaksanakan setelah pendaftaran dinyatakan <b>DITERIMA</b></li>
              </ul>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Cek Status</h3>
          </div>
          <div class="box-body">
              <!-- action="<?php //echo base_url() ?>cekstatus" -->
              <?php 
                  if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                      echo "<div class='alert alert-danger'>Captcha Gagal harap diulangi kembali</div>";
                    }
                  }
              ?>
              <form  name="form1" id="form1" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Masukkan Nomer Pendaftaran</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nomer Pendaftaran">
                </div>
                <div class="form-group">
                  <p align="center"><?php echo $captchaImg; ?></p>
                  <label for="exampleInputEmail1">Masukkan Captcha</label>
                  <input type="text" class="form-control" id="captcha" name="captcha">
                </div>
                  <input type="submit" name="submit" class="btn btn-primary" value="Cek Data"/>
                <!-- <button type="submit" name="submit" class="btn btn-primary">Cek Data</button> -->
                </form>


          </div>
          <!-- /.box-body -->
        </div>
         <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><!-- Cek Status --></h3>
          </div>
          <?php
          if ($catar > 0){  
          foreach($catar as $c){ 
            ?>
             <div class="box-body">        
                <div class="form-group" align="center">
                  <label for="exampleInputEmail1">Selamat <?php echo  ucwords($c->nama) ?> Anda telah terdaftar sebagai Calon Taruna / Mahasiswa STIMART "AMNI" Semarang. Silakan cek jadwal tes seleksi yang telah di tampilkan di <a href="http://pencatarma.stimart-amni.ac.id">Website Pencatarma</a>.Untuk download lembar registrasi dapat klik tombol di bawah ini</label>
                </div>  
                <div class="form-group" align="center">
                  <a href="<?php echo base_url() ?>download/<?php echo $c->no ?>"><button type="button" name="submit" class="btn btn-primary">Download</button></a>
                </div>  
                <!-- <button type="submit" name="submit" class="btn btn-primary">Cek Data</button> -->
          </div>
          <?php }}else{ ?>
          <div class="box-body">        
                <div class="form-group" align="center">
                  <label for="exampleInputEmail1">Maaf anda belum melakukan registrasi atau belum melakukan validasi. lakukan registrasi <a href="http://pencatarma.stimart-amni.ac.id/registrasi">disini</a>.</label>
                </div>   
                <!-- <button type="submit" name="submit" class="btn btn-primary">Cek Data</button> -->
          </div>
          <?php } ?>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2019 IT-STIMART "AMNI" Semarang.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/front2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/front2/dist/js/demo.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- validate -->
<script src="<?php echo base_url() ?>assets/front2/plugins/validate/jquery.validate.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/select2/dist/js/select2.full.min.js"></script>
<script type="text/javascript">
 
      jQuery(function($) {
          $.validator.setDefaults({
              submitHandler: function () {
                  form1();
 
              }
 
          });
          $().ready(function () {
              // 
              $("#form1").validate({
                  errorElement: 'div',
                  errorClass: 'help-block',
                  focusInvalid: false,
                  rules: {
                      nama: {
                          required: true
                      },
 
                      tl: {
                          required: true
                      },
                      tgl_l: {
                          required: true
                      },
                      agama: {
                          required: true
                      },
                      jk: {
                          required: true
                      },
                      alamat: {
                          required: true
                      },
                      ktkb: {
                          required: true
                      },
                      provinsi: {
                          required: true
                      },
                      telp: {
                          required: true
                      },
                      kategori_sek: {
                          required: true
                      },
                      prodi_lama: {
                          required: true
                      },
                      thn_lulus: {
                          required: true
                      },
                      asek: {
                          required: true
                      },
                      alamat_sek: {
                          required: true
                      },
                      nama_a: {
                          required: true
                      },
                      nama_i: {
                          required: true
                      },
                      alamat_ortu: {
                          required: true
                      },
                      telp_ortu: {
                          required: true
                      },
                      prodi: {
                          required: true
                      },
                      gelombang: {
                          required: true
                      },
                  },
 
                  messages: {
 
                      password: {
                          required: "Please specify a password.",
                          minlength: "Please specify a secure password."
                      },
                      username: "Mohon isi username anda",
                      nohp: "Mohon isi no handphone anda"
                  },
 
 
                  highlight: function (e) {
                      $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                  },
 
                  success: function (e) {
                      $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                      $(e).remove();
                  }
 
              })
          });

    //Date picker
    $('#tgl_l').datepicker({
      autoclose: true,
      dateFormat: 'yyyy-mm-dd'
      
    })
     //Initialize Select2 Elements
    $('.select2').select2()
 
      });
  </script>
</body>
</html>
