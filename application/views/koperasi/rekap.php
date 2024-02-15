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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Telp / Hp</th>
                  <th>Prodi yang Dipilih</th>
                  <th>Sudah ukur pakaian</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($catar as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->no ?></td>
                  <td><?php echo $c->nama ?></td>
                  <td><?php echo $c->telp ?></td>
                  <td><?php echo $koperasi->prodi($c->prodi) ?></td>
                  <td>

                  <?php 
                  $where = array(
                  'no' => $c->no       
                  );
                  $cek=$this->m_registrasi->get_data($where,'tbl_ukurpakaian')->num_rows(); ?>
                   <?php if ($cek > 0){ ?>
                      <a class="btn btn-success btn-sm" href="#"><i class="fa fa-check-circle"></i> Sudah mengisi</a>
                  <?php }else{ ?>
                      <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-check-circle"></i>Belum Mengisi</a>
                  <?php }?>
                  </td>
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
                  <th>Nama Ibu</th>
                  <th>Telp / Hp Ortu</th>
                  <th>Validasi</th>
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