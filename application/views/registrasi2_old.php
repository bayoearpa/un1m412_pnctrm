<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pencatarma STIMART "AMNI" Semarang</title>
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

          <p>Jika anda mengalami kesulitan anda dapat melihat tutorial yang dapat di download disini.</p>
        </div>
        <div class="callout callout-danger">
          <h4>Perhatian!</h4>
              <ul>
                <li>Pastikan anda melihat prasyarat sesuai jurusan yang dipilih. Jika anda masih belum jelas dapat kembali ke menu awal dengan klik logo "SIPENCATARMA" atau klik <a href="<?php echo base_url() ?>">disini</a></li>
                <li>Bagi pendaftar melalui online batas verifikasi/validasi (dilakukan di STIMART "AMNI" Semarang) adalah Tanggal 2 Januari- 19 April 2019 Jam 12.00 WIB</li>
                <li>Tes seleksi 22 April 2019 sd 23 April 2019.</li>
              </ul>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Form Pendaftaran</h3>
          </div>
          <div class="box-body">

              <form action="<?php echo base_url() ?>cetakRegistrasi" name="form1" id="form1" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tl" name="tl" placeholder="Masukan Tempat Lahir Anda">
                </div>

                <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir (yyyy-mm-dd / tahun-bulan-hari)</label>
                       <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control" data-date-format="yyyy-mm-dd" data-link-format="yyyy-mm-dd" name="tgl_l" id="tgl_l">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                      </div>                      
                </div>
                 <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama" id="agama">
                    <option> </option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Pria">
                      Pria
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Wanita">
                      Wanita
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat Anda"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota / Kabupaten</label>
                  <input type="text" class="form-control" id="ktkb" name="ktkb" placeholder="Masukan Kota atau Kabupaten Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Provinsi</label>
                  <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Masukan Provinsi Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. / Hp</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan No. Telepon atau Hp Anda">
                </div>
                <div class="form-group">
                  <label>Kategori Sekolah / Perguruan Tinggi</label>
                  <select class="form-control" name="kategori_sek" id="kategori_sek">
                    <option> </option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="MA">MA</option>
                    <option value="D3">D3</option>
                  </select>
                </div>
                   <!-- /.form-group -->
                <div class="form-group">
                  <label>Jurusan (SMA/SMK) *jika berasal dari D3 Pilih "Lainya"</label>
                  <select class="form-control select2" id="prodi_lama" name="prodi_lama" style="width: 100%;">
                    <option> </option>
                    <?php foreach ($jurusan as $j): ?>
                      <option value="<?php echo $j->nama_jurusan; ?>"><?php echo $j->nama_jurusan; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Lulus</label>
                  <input type="text" class="form-control" id="thn_lulus" name="thn_lulus" placeholder="Masukan Tahun Lulus Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Asal Sekolah</label>
                  <input type="text" class="form-control" id="asek" name="asek" placeholder="Masukan Asal Sekolah Anda">
                </div>
                <div class="form-group">
                  <label>Alamat Sekolah</label>
                  <textarea class="form-control" name="alamat_sek" id="alamat_sek" rows="3" placeholder="Masukkan Alamat Sekolah Anda"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ayah Kandung</label>
                  <input type="text" class="form-control" id="nama_a" name="nama_a" placeholder="Masukan Nama Ayah Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu Kandung</label>
                  <input type="text" class="form-control" id="nama_i" name="nama_i" placeholder="Masukan Nama Ibu Anda">
                </div>
                <div class="form-group">
                  <label>Alamat Orang Tua / Wali</label>
                  <textarea class="form-control" name="alamat_ortu" id="alamat_ortu" rows="3" placeholder="Masukkan Alamat Orang Tua atau Wali Anda"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. Orang Tua / Wali</label>
                  <input type="text" class="form-control" id="telp_ortu" name="telp_ortu" placeholder="Masukan No. Telepon Orang Tua atau Wali Anda">
                </div>
                <div class="form-group">
                  <label>Informasi (mendapatkan informasi tentang STIMART "AMNI" Semarang)</label>
                  <select class="form-control" name="informasi" id="informasi">
                    <option> </option>
                    <option value="1">Koran</option>
                    <option value="2">Internet</option>
                    <option value="3">Teman</option>
                    <option value="4">Alumni</option>
                    <option value="5">Brosur</option>
                    <option value="5">Expo</option>
                  </select>
                </div>
              <div class="form-group">
                  <label>Prodi yang Dipilih</label>
                  <select class="form-control" name="prodi" id="prodi">
                    <option> </option>
                    <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Transportasi</option>
                    <option value="5">S1 Transportasi (Kelas Sore)</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Transportasi Laut</option>
                    <option value="8">S1 Teknik Keselamatan</option>
                    <option value="9">S1 Perdagangan Internasional</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Gelombang</label>
                  <select class="form-control" name="gelombang" id="gelombang">
                    <option> </option>
                    <option value="20201">Gelombang I</option>
                    <option value="20202">Gelombang II</option>
                     <option value="20203">Gelombang II</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan dan Cetak</button>
                </form>


          </div>
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
      <strong>Copyright &copy; 2018 IT-STIMART "AMNI" Semarang.</strong> All rights
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
