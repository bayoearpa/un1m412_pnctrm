    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekap Pendaftar per Provinsi 2021</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo base_url() ?>bau/get_summary_prov_2021"><button type="button" class="btn btn-success pull-left"><i class="fa fa-chevron-left"></i>Kembali</button></a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Nama Ibu</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($stat as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->no ?></td>
                  <td><?php echo $c->nama ?></td>
                  <td><?php echo $c->tl ?></td>
                  <td><?php echo $c->tgl_l ?></td>
                  <td><?php echo $c->nama_i?></td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>No.</th>
                 <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Nama Ibu</th>
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