<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pencatarma UNIMAR AMNI Semarang</title>
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
              <li>Pastikan anda melihat prasyarat sesuai <b>Program Studi (Prodi)</b> yang dipilih</li>
                <li>Pendaftaran dapat dilaksanakan dengan datang langsung ke kampus biru maupun secara <i>online</i></li>
                <li>Bagi pendaftar baik melalui <b><i>online</i></b> dapat melaksanakan pembayaran pembayaran pendaftaran melalui Bank/ATM :</li>
                <table>
                  <tr>
                    <td><b>BANK BNI</b></td>
                    <td><b>:</b></td>
                    <td><b>an. UNIMAR AMNI</b></td>
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
                <!-- <li>Bukti Pembayaran dapat dikirim melalui :</li>
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
                    <td colspan="3"><b>No. Pendaftaran Online_Nama Pendaftar_Prodi yang dipilih_Gelombang Pendaftaran</b></td>
                  </tr>
                  <tr>
                    <td>Contoh</td>
                    <td>:</td>
                    <td><b>1234_Rian Ardianto_Nautika_II</b></td>
                  </tr>
                </table> -->
                <li>Pemberkasan dilaksanakan setelah pendaftaran dinyatakan <b>DITERIMA</b></li>
              </ul>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Form Pendaftaran</h3>
          </div>
          <div class="box-body">

              <form action="<?php echo base_url() ?>cetakRegistrasi" name="form1" id="form1" method="post" enctype="multipart/form-data"> 
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
                 <!-- <div class="form-group"> -->
                  <!-- <label for="exampleInputEmail1">Berat Badan</label> -->
                  <input type="hidden" class="form-control" id="bb" name="bb" placeholder="Masukan Berat Badan Anda (Masukkan dalam Kg)" value="0">
                <!-- </div> -->
                 <!-- <div class="form-group"> -->
                  <!-- <label for="exampleInputEmail1">Tinggi Badan</label> -->
                  <input type="hidden" class="form-control" id="tb" name="tb" placeholder="Masukan Tinggi Badan Anda (Masukkan dalam Cm)" value="0">
                <!-- </div> -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email anda)">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat Anda"></textarea>
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Provinsi</label>
                  <select class="form-control" name="provinsi" id="provinsi" class="provinsi">
                  <option> </option>
                  <?php foreach ($provinsi as $p) {
                    # code...
                  ?>
                    <option value="<?php echo $p->id_wil;?>"><?php echo $p->nm_wil;?></option>
                  <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota / Kabupaten</label>
                  <select class="form-control ktkb" name="ktkb" id="ktkb">
                  <option> </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. / Hp</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan No. Telepon atau Hp Anda">
                </div>
                <!-- <div class="form-group">
                  <label>Kategori Sekolah</label>
                  <select class="form-control" name="kategori_sek" id="kategori_sek">
                    <option> </option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="MA">MA</option>
                  </select>
                </div> -->
                <input type="hidden" name="kategori_sek" id="kategori_sek" value="D3">
                   <!-- /.form-group -->
                <div class="form-group">
                  <label>Prodi Sebelumnya</label>
                  <!-- <select class="form-control select2" id="prodi_lama" name="prodi_lama" style="width: 100%;">
                    <option> </option>
                    <?php //foreach ($jurusan as $j): ?>
                      <option value="<?php //echo $j->nama_jurusan; ?>"><?php //echo $j->nama_jurusan; ?></option>
                    <?php //endforeach ?>
                  </select> -->
                  <input type="text" class="form-control" id="prodi_lama" name="prodi_lama" placeholder="Masukan Prodi lama anda">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Lulus</label>
                  <input type="text" class="form-control" id="thn_lulus" name="thn_lulus" placeholder="Masukan Tahun Lulus Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Asal Pergurunan Tinggi sebelumnya</label>
                  <input type="text" class="form-control" id="asek" name="asek" placeholder="Masukan Pergurunan Tinggi sebelumnya">
                </div>
                <div class="form-group">
                  <label>Alamat Pergurunan Tinggi Sebelumnya</label>
                  <textarea class="form-control" name="alamat_sek" id="alamat_sek" rows="3" placeholder="Masukkan Alamat Pergurunan Tinggi sebelumnya"></textarea>
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
                  <label>Informasi (mendapatkan informasi tentang UNIMAR "AMNI" Semarang)</label>
                  <select class="form-control" name="informasi" id="informasi">
                    <option> </option>
                    <option value="1">Senior / Kakak kelas</option>
                    <option value="2">Sosial Media</option>
                    <option value="3">Keluarga / Saudara / teman</option>
                    <option value="4">Alumni</option>
                    <option value="5">Brosur</option>
                    <option value="6">Expo</option>
                    <option value="7">Sekolah / Guru</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Prodi Pilihan 1</label>
                  <select class="form-control" name="prodi" id="prodi">
                    <option> </option>
                   <!--  <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option> -->
                    <option value="4">S1 Transportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Prodi Pilihan 2</label>
                  <select class="form-control" name="prodi2" id="prodi2">
                    <option> </option>
                   <!--  <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option> -->
                    <option value="4">S1 Transportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Periode</label>
                  <select class="form-control" name="gelombang" id="gelombang">
                    <option> </option>
                   <!--  <option value="1">Januari</option> -->
                    <!-- <option value="2">Februari</option> -->
                    <option value="3">Maret</option>
                    <!-- <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                     <option value="9">September</option>
                    <option value="10">Oktober</option> -->
                  </select>
                </div>
                <input type="hidden" name="kelas" value="eks">
               <!--  <div class="form-group">
                  <label>Kelas</label><br>
                  
                  <input type="radio" id="reguler" name="gender" value="reguler">
                  <label for="reguler">Reguler</label><br>
                  <input type="radio" id="lintasjalur" name="gender" value="lintasjalur">
                  <label for="lintasjalur">Lintas Jalur / Ekstensi</label><br>
                </div> -->

                <!-- <div class="form-group">
                  <label>Ijasah atau Surat Ketarangan dari Sekolah (.pdf file maksimal 5 MB)</label>
                 <input type="file" name="ijasah" id="ijasah" class="form-control">
                </div> -->
               
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
      <strong>Copyright &copy; 2019 IT-UNIMAR "AMNI" Semarang.</strong> All rights
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
  $(document).ready(function(){
        $('#provinsi').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>getkabkota",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_wil+'>'+data[i].nm_wil+'</option>';
                    }
                    $('.ktkb').html(html);
                     
                }
            });
        });
    });
</script>
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
                      informasi: {
                          required: true
                      },
                      prodi: {
                          required: true
                      },
                      gelombang: {
                          required: true
                      },
                      ijasah: {
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
