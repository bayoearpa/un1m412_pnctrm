<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front2/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<?php 
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>";
      }else if($_GET['pesan'] == "logout"){
        echo "<div class='alert alert-danger'>Anda telah logout.</div>";
      }else if($_GET['pesan'] == "belumlogin"){
        echo "<div class='alert alert-success'>Silahkan login dulu.</div>";
      }
    }
    ?>
<div class="login-box">
  <div class="login-logo">
  <img src="<?php echo base_url() ?>assets/front1/img/amni-png.png" width="20%">
    <a href="../../index2.html"><b>Daftar</b> SI PMB</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Daftar untuk mengakses sistem</p>

    <form action="<?php echo base_url().'daftarp26' ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="email" id="email" class="form-control" placeholder="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span id="emailMessage"></span>
      </div>
      <p id="usernameLengthMessage"></p>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <p id="passwordLengthMessage"></p>
      <div class="form-group has-feedback">
        <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Ketik Ulang Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <p id="passwordMatchMessage"></p>
      <div class="form-group has-feedback" >
        <label>Pilih Jalur Pendaftaran:</label>
                  <select class="form-control" name="jalur" id="jalur" placeholder="Pilih Jalur" required="">
                    <option> </option>
                    <option value="gdr1">Gelombang Dini (Reguler)</option>
                    <option value="gdr2">Gelombang Dini (RPL/Transfer)</option>
                    <option value="reguler">Reguler</option>
                    <option value="regulers">Reguler Sore</option>
                    <option value="rpl">Kelas Transfer / RPL</option>
                    <option value="beayb">Beasiswa Yasbinmar</option>
                  </select>
      </div>
      <p id="jalurMessage"></p>
      <p><b>Perlu diperhatikan !</b></p>
      <ul>
      <li>Kelas Reguler untuk pendaftar dari SMA/SMK/MA</li>
      <li>Kelas Transfer/RPL untuk pendaftar dari D3 melanjutkan ke S1</li>
      </ul>
      <div class="row">
        <!-- <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div> -->
        <!-- /.col -->
        <div class="col-xs-4">
         <center><button id="submitBtn" type="submit" class="btn btn-primary btn-block btn-flat" disabled>Daftar</button></center>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->
<!-- 
    <a href="#">I forgot my password</a><br> -->
    <a href="<?php echo base_url() ?>masuk" class="text-center">Masuk jika sudah memiliki akun</a></br>
    <a href="<?php echo base_url() ?>lupa_password" class="text-center">lupa password</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/front2/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
