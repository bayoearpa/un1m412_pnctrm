    <!-- Main content -->
    <section class="content">
    <?php echo $this->session->flashdata('message');?>
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
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Telp / Hp</th>
                  <th>Prodi yang Dipilih</th>
                  <th>Jurusan SMK/SMA</th>
                  <th>Kota/Kabupaten</th>
                  <th>Provinsi</th>
                  <th>Telp / Hp Ortu</th>
                  <th>Periode</th>
                  <th>Validasi</th>
                  <th>Lulus Seleksi</th>
                  <th>Daftar Ulang</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach($catar as $c){ 
                 ?>
                <tr>
                  <td><?php echo $c->no ?></td>
                  <td><?php echo $c->nama ?></td>
                  <td><?php echo $c->telp ?></td>
                  <td><?php echo $baak->prodi($c->prodi) ?></td>
                  <td><?php echo $c->prodi_lama?></td>
                  <td><?php echo $c->kabkota?></td>
                  <td><?php echo $c->propinsi?></td>
                  <td><?php echo $c->telp_ortu ?></td>
                  <td><?php echo $baak->periode($c->periode) ?></td>
                  <td><?php 
                      if ($c->no_val == null) {
                        # code... ?>
                        <i class="fa fa-close bg-red"></i>
                      <?php }else{ ?>
                        <i class="fa fa-check bg-green"></i>
                      <?php } ?>
                   </td>
                   <td><?php 
                      if ($c->no_seleksi == null) {
                        # code... ?>
                       <i class="fa fa-close bg-red"></i></li> 
                      <?php }else{ ?>
                        <i class="fa fa-check bg-green"></i>
                      <?php } ?>
                   </td>
                   <td><?php 
                      if ($c->no_daful == null) {
                        # code... ?>
                        <i class="fa fa-close bg-red"></i>
                      <?php }else{ ?>
                        <i class="fa fa-check bg-green"></i>
                      <?php } ?>
                   </td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
               <tr>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Telp / Hp</th>
                  <th>Prodi yang Dipilih</th>
                  <th>Jurusan SMK/SMA</th>
                  <th>Kota/Kabupaten</th>
                  <th>Provinsi</th>
                  <th>Telp / Hp Ortu</th>
                  <th>Periode</th>
                  <th>Validasi</th>
                  <th>Lulus Seleksi</th>
                  <th>Daftar Ulang</th>
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