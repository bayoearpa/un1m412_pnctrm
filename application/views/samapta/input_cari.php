    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Nilai Samapta</h3>
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
                foreach ($catar as $key) {
                  # code...
                  $no = $key->no;
                  $petugas = $this->session->userdata('nama');
                  $nama = $key->nama;
                  $prodi = $samapta->prodi($key->prodi);
                }
                      # code... ?>
                      <!-- form input nilai samapta disini -->
                <form method="post" action="<?php echo base_url() ?>samapta/input_carip">
                  <table>
                    <tr>
                      <td><b>No. Pendafataran</b></td>
                      <td>:</td>
                      <td><?php echo $no ?></td>
                    </tr>
                    <tr>
                      <td><b>Nama</b></td>
                      <td>:</td>
                      <td><?php echo $nama ?></td>
                    </tr>
                    <tr>
                      <td><b>Prodi yang diambil</b></td>
                      <td>:</td>
                      <td><?php echo $prodi ?></td>
                    </tr>
                  </table>
                  <div class="form-group">
                  <label>Lari</label>
                  <input type="hidden" name="no" id="no" value="<?php echo $no ?>">
                  <input type="hidden" name="petugas" id="petugas" value="<?php echo $petugas ?>">
                  <input type="number" min="1" max="100" class="form-control" id="lari" name="lari" placeholder="isi nilai dari 10-100">
                  </div>

                  <div class="form-group">
                  <label>Push Up</label>
                  <input type="number" min="1" max="100" class="form-control" id="push_up" name="push_up" placeholder="isi nilai dari 10-100">
                  </div>

                  <div class="form-group">
                  <label>Pull Up</label>
                  <input type="number" min="1" max="100" class="form-control" id="pull_up" name="pull_up" placeholder="isi nilai dari 10-100">
                  </div>

                  <div class="form-group">
                  <label>Suttle Run</label>
                  <input type="number" min="1" max="100" class="form-control" id="suttle_run" name="suttle_run" placeholder="isi nilai dari 10-100">
                  </div>

                  <div class="form-group">
                  <input type="submit" class="btn btn-block btn-success" id="cek" name="cek" style="width:20%;" value="Input">
                  </div>
                </form>
                      
                  
              <?php    
                    }else{ ?>
              <div class="callout callout-danger"><h4>Data Sudah pernah diinput!</h4><p>pastikan calon mahasiswa belum melakukan test samapta.</p></div>
              <?php } ///end of cek samapta ?>

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