    <!-- Main content -->
    <section class="content">
    <?php echo $this->session->flashdata('message');?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Ukur Pakaian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
              <form method="post" action="<?php echo base_url() ?>koperasi/cetak_excel">
                <input type="hidden" name="jalur" value="<?php echo $frm_jalur ?>">
                <input type="hidden" name="prodi" value="<?php echo $frm_prodi ?>">
                <input type="hidden" name="gelombang" value="<?php echo $frm_gelombang ?>">
                <button type="button" class="btn btn-primary btn-sm" width="30%"><i class="fa fa-fw fa-print"></i>Cetak</button>
              </form>
              <a href="<?php echo base_url() ?>koperasi/cetak"><button type="button" class="btn btn-success btn-sm" width="30%"><i class="fa fa-fw fa-backward"></i>Kembali</button></a>
              </div>
              <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Telp / Hp</th>
                  <th>Prodi yang Dipilih</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($results as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->no ?></td>
                  <td><?php echo $c->nama ?></td>
                  <td><?php echo $c->telp ?></td>
                  <td><?php echo $koperasi->prodi($c->prodi) ?></td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Telp / Hp</th>
                  <th>Prodi yang Dipilih</th>
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
