    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hasil Cari data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <!-- content -->
             <?php 
             // cek data
              if ($cek_validasi == null) {
                # code... ?>
                  <div class="callout callout-danger"><h4>Data tidak ditemukan!</h4><p>pastikan calon mahasiswa sudah melakukan registrasi.</p></div>
              <?php      
              }//end cek data catar
              elseif ($cek_samapta == null) {
                      # code... ?>
                      form input nilai samapta disini
                  
              <?php    
                    }else{ ?>
              <div class="callout callout-danger"><h4>Data Sudah pernah diinput!</h4><p>pastikan calon mahasiswa belum melakukan test samapta.</p></div>
                    <?php} ///end of cek samapta 
             ?>

             <!-- ./content -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->