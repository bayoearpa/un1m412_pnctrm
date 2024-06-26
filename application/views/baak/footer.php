   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 IT-STIMART "AMNI" Semarang.</strong> All rights
    reserved.
  </footer>

 
  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/front2/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>assets/front2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/front2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/front2/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/front2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/front2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/front2/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/front2/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/front2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- validate -->
<script src="<?php echo base_url() ?>assets/front2/plugins/validate/jquery.validate.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/chart.js/Chart.js"></script>
<!-- FLOT CHARTS -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url() ?>assets/front2/bower_components/Flot/jquery.flot.resize.js"></script>
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

              $('#example1').DataTable({
                "paging": true,
                      "lengthChange": true,
                      "searching": true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": true,
                      "responsive": true
              })
          });

    //Date picker
    // $('#tgl_l').datepicker({
    //   autoclose: false,
    //   dateFormat: 'yyyy-mm-dd'
    // })
     //Initialize Select2 Elements
    $('.select2').select2()
 
      });
  </script>
<script>
  $(function () {
   
    $('#example2').DataTable()
    $('#example3').DataTable()
    // $('#example2').DataTable({
    //   'paging'      : true,
    //   'lengthChange': false,
    //   'searching'   : false,
    //   'ordering'    : true,
    //   'info'        : true,
    //   'autoWidth'   : false
    // })
  })
</script>
</body>
</html>