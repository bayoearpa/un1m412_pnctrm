    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Edit Nilai Wawancara</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <!-- content -->
             <?php 
             $petugas = $this->session->userdata('nama');
             foreach ($catar as $key ) {
               # code...

              ?>
                      <!-- form input nilai samapta disini -->
                <form method="post" action="<?php echo base_url() ?>samapta/editp">
                  <table>
                    <tr>
                      <td><b>No. Pendafataran</b></td>
                      <td>:</td>
                      <td><?php echo $key->no ?></td>
                    </tr>
                    <tr>
                      <td><b>Nama</b></td>
                      <td>:</td>
                      <td><?php echo $key->nama ?></td>
                    </tr>
                    <tr>
                      <td><b>Prodi yang diambil</b></td>
                      <td>:</td>
                      <td><?php echo $samapta->prodi($key->prodi) ?></td>
                    </tr>
                  </table>
                  <input type="hidden" name="id_sw" id="id_sw" value="<?php echo $key->id_sw ?>">
                  <input type="hidden" name="no" id="no" value="<?php echo $key->no ?>">
                  <input type="hidden" name="petugas" id="petugas" value="<?php echo $petugas ?>">

                  <div class="form-group">
                    <div class="radio">
                      <label>
                        <input type="radio" name="hasil_wwncra" id="hasil_wwncra" value="100" <?php echo ($key->hasil_wwncra == '100') ? 'checked' : ''; ?>>
                        Lulus
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="hasil_wwncra" id="hasil_wwncra" value="0" <?php echo ($key->hasil_wwncra == '0') ? 'checked' : ''; ?>>
                        Tidak Lulus
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                  <label>Keterangan</label>
                    <textarea name="ket" id="ket" class="form-control" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                  <input type="submit" class="btn btn-block btn-success" id="cek" name="cek" style="width:20%;" value="Input">
                  </div>
                </form>
              <?php } ?>
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