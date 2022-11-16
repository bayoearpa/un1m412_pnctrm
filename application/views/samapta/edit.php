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
                  <div class="form-group">
                  <label>Lari</label>
                  <input type="hidden" name="no" id="no" value="<?php echo $key->no ?>">
                  <input type="hidden" name="petugas" id="petugas" value="<?php echo $petugas ?>">
                  <input type="number" min="1" max="100" class="form-control" id="lari" name="lari" value="<?php echo $key->lari ?>" placeholder="isi nilai dari 10-100">
                  </div>

                  <div class="form-group">
                  <label>Push Up</label>
                  <input type="number" min="1" max="100" class="form-control" id="push_up" name="push_up" value="<?php echo $key->push_up ?>" placeholder="isi nilai dari 10-100">
                  </div>

                  <div class="form-group">
                  <label>Pull Up</label>
                  <input type="number" min="1" max="100" class="form-control" id="pull_up" name="pull_up" value="<?php echo $key->pull_up ?>" placeholder="isi nilai dari 10-100">
                  </div>

                  <div class="form-group">
                  <label>Suttle Run</label>
                  <input type="number" min="1" max="100" class="form-control" id="suttle_run" name="suttle_run" value="<?php echo $key->suttle_run ?>" placeholder="isi nilai dari 10-100">
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