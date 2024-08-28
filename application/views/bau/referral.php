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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>ref</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No. Telp</th>
                  <th>Total</th>
                  <th>Total perolehan</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($refs as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->referral ?></td>
                  <td><?php echo $c->nama_pereferal ?></td>
                  <td><?php echo $c->alamat_pereferal ?></td>
                  <td><?php echo $c->no_telp_pereferal ?></td>
                  <td><?php echo $c->total?></td>
                  <td><?php echo $c->total_perolehan?></td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                <th>No.</th>
                  <th>ref</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No. Telp</th>
                  <th>Total</th>
                  <th>Total perolehan</th>
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