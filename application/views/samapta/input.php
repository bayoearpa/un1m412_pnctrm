    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pencatarma</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- content -->
              <form method="post" action="<?php echo base_url() ?>samapta/input_cari">
              <div class="form-group">
                  <label>No Pendaftar</label>
                  <input type="text" class="form-control" id="no" name="no" placeholder="Masukkan nomor pendaftaran ...">
              </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-block btn-success" id="cek" name="cek" style="width:20%;" value="Cek">
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