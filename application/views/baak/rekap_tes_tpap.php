    <!-- Main content -->
    <section class="content">
    <?php echo $this->session->flashdata('message');?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data PMB Hasil Test TPA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>No. Pendf.</th>
                  <th>L/P</th>
                  <th>Prodi</th>
                  <th>Nilai TPA</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($datatpa as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php $text1= strtolower($c->nama);echo ucwords($text1) ?></td>
                  <td><?php echo $c->no ?></td>
                  <td><?php if ($c->jk == "Pria") {
                      # code...
                      echo "L";
                    }else{
                      echo "P";
                    } ?></td>
                  <td><?php echo $c->nm_prodi ?></td>
                  <td><?php echo $c->hasil_tpa ?></td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>No. Pendf.</th>
                  <th>L/P</th>
                  <th>Prodi</th>
                  <th>Nilai TPA</th>
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