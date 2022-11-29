    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Nilai TPA</h3>
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
                foreach ($catar as $key) {
                  # code...
                  $no = $key->no;
                  $petugas = $this->session->userdata('nama');
                  $nama = $key->nama;
                  $prodi = $bau->prodi($key->prodi);
         
                      # code... ?>
                      <!-- form input nilai samapta disini -->
                <form method="post" action="<?php echo base_url() ?>bau/editp">
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
                   <input type="hidden" name="no" id="no" value="<?php echo $no ?>">
                  <div class="form-group">
                      <label> Pilih Prodi
                    </label>
                    <select name="prodi" id="prodi" class="form-control" style="width:50%;">  
                    <option value="<?php echo $key->prodi ?>" selected>== Pilih ==</option>
                    <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Trasnportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>                       
                    </select> 
                  </div>
                 <?php } ?>
                  <div class="form-group">
                  <input type="submit" class="btn btn-block btn-success" id="cek" name="cek" style="width:20%;" value="Input">
                  </div>
                </form>
                      
                  
            

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