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
              <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>ref</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No. Telp</th>
                  <th>Total</th>
                  <th>Total perolehan</th>
                  <th>Daftar Catarma</th>
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
                  <td> <button type="button" name="submit" id="editseleksigdr1" class="btn editseleksigdr1 btn-primary"  data-no="<?php echo $c->referral; ?>">Lihat</button></td>
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
                  <th>Daftar Catarma</th>
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


        <!-- ////////////////// modal-->
                          <div class="modal fade" id="editFormModal" tabindex="-1" role="dialog" aria-labelledby="editFormModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="editFormModalLabel">Data Catarma Referral</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <!-- Isi formulir di sini -->
                                  <table id="selectTable" class="table table-bordered table-striped">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>No. Pendft</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <!-- Isi tabel akan di-load secara dinamis -->
                                    </tbody>
                                  </table>

                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              </div>
                          </div>
                      </div>
                  </div>