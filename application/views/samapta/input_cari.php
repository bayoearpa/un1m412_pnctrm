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
              foreach ($cek_validasi as $key) {
                # code...
                $cek_no = $key->no;
              
              if ($cek_no == null) {
                # code...
                    echo $notif = "<div class=callout callout-danger><h4>Data tidak ditemukan!</h4><p>pastikan calon mahasiswa sudah melakukan registrasi.</p></div>";
              }else{
                # code...
              foreach ($cek_samapta as $key) {
                # code...
                $cek_samapta_data = $key->no; 
                

              if ($cek_samapta_data == null) {
                      # code...
                  echo $notif = "<div class=callout callout-danger><h4>Data Sudah pernah diinput!</h4><p>pastikan calon mahasiswa belum melakukan test samapta.</p></div>";
                    } ///end of cek data samapta 
              }///end of cek samapta value data   
              }///end of cek data pendaftar
              }///end of cek no pendaftaran value data  
              // ./cek data
             foreach ($catar as $key) {
               # code...
              echo $key->nama;
             }
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