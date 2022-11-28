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
              
                foreach ($catar as $key) {
                  # code...
                  $no = $key->no;
                  $petugas = $this->session->userdata('nama');
                  $nama = $key->nama;
                  $hasil_tpa = $key->hasil_tpa;
                  $prodi = $tpa->prodi($key->prodi);
                }
                      # code... ?>
                      <!-- form input nilai samapta disini -->
                <form method="post" action="<?php echo base_url() ?>tpa/edit_datap">
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
                  <input type="hidden" name="no" id="no" value="<?php echo $no ?>">
                  <input type="hidden" name="petugas" id="petugas" value="<?php echo $petugas ?>">
                  <label>Hasil Tpa</label>
                  <input type="number" min="1" max="100" class="form-control" id="hasil_tpa" name="hasil_tpa" placeholder="isi nilai dari 10-100" value="<?php echo $hasil_tpa ?>">
                  </div>
                 
                  <div class="form-group">
                  <input type="submit" class="btn btn-block btn-success" id="cek" name="cek" style="width:20%;" value="Edit">
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