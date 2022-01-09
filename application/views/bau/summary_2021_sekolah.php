    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekap Pendaftar per Sekolah (SMA) 2021</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Asal Sekolah</th>
                  <th>Jumlah Pendaftar</th>
                  <th>Alamat Sekolah</th>
                  <th>Kota</th>
                  <th>Provinsi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($stat_sma as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->asal_sekolah ?></td>
                  <td><?php echo $c->jml_pendaftar ?></td>
                  <td><?php echo $c->almt_sek ?></td>
                  <td><?php echo $c->kotakab ?></td>
                  <td><?php echo $bau->getnamaprovinsi_2021($c->id_provinsi) ?></td>
                  
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Asal Sekolah</th>
                  <th>Jumlah Pendaftar</th>
                  <th>Alamat Sekolah</th>
                  <th>Kota</th>
                  <th>Provinsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekap Pendaftar per Sekolah (SMA) 2021</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Asal Sekolah</th>
                  <th>Jumlah Pendaftar</th>
                  <th>Alamat Sekolah</th>
                  <th>Kota</th>
                  <th>Provinsi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($stat_smk as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->asal_sekolah ?></td>
                  <td><?php echo $c->jml_pendaftar ?></td>
                  <td><?php echo $c->almt_sek ?></td>
                  <td><?php echo $c->kotakab ?></td>
                  <td><?php echo $bau->getnamaprovinsi_2021($c->id_provinsi) ?></td>
                  
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Asal Sekolah</th>
                  <th>Jumlah Pendaftar</th>
                  <th>Alamat Sekolah</th>
                  <th>Kota</th>
                  <th>Provinsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekap Pendaftar per Sekolah (SMA) 2021</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Asal Sekolah</th>
                  <th>Jumlah Pendaftar</th>
                  <th>Alamat Sekolah</th>
                  <th>Kota</th>
                  <th>Provinsi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($stat_ma as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->asal_sekolah ?></td>
                  <td><?php echo $c->jml_pendaftar ?></td>
                  <td><?php echo $c->almt_sek ?></td>
                  <td><?php echo $c->kotakab ?></td>
                  <td><?php echo $bau->getnamaprovinsi_2021($c->id_provinsi) ?></td>
                  
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Asal Sekolah</th>
                  <th>Jumlah Pendaftar</th>
                  <th>Alamat Sekolah</th>
                  <th>Kota</th>
                  <th>Provinsi</th>
                </tr>
                </tfoot>
              </table>
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