    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekap Pendaftar per Provinsi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Provinsi</th>
                  <th>Jumlah Pendaftar</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($stat as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->nama_provinsi ?></td>
                  <td><?php echo $c->jml_pendaftar ?></td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Provinsi</th>
                  <th>Jumlah Pendaftar</th>
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