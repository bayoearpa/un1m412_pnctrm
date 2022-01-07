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
                  <th>Selengkapnya</th>
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
                  <td><a class="btn btn-success btn-sm" href="<?php echo base_url().'bau/get_summary_prov_detail_2021/'.$c->id_provinsi; ?>"><i class="fa fa-eye"></i>Selengkapnya</a></td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Provinsi</th>
                  <th>Jumlah Pendaftar</th>
                  <th>Selengkapnya</th>
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