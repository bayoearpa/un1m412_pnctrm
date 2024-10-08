    <!-- Main content -->
    <section class="content">
    <?php echo $this->session->flashdata('message');?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peseta Referral</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <?php echo validation_errors(); ?>
              <?php if ($this->session->flashdata('success')): ?>
                  <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                <?php echo $this->session->flashdata('success'); ?>
              </div>
              <?php endif; ?>

            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4><?php echo $this->session->flashdata('error'); ?>
              </div>
            <?php endif; ?>
               <button type="button" name="tambahref" id="tambahref" class="btn tambahref btn-primary">Tambah Data Referral</button>
              <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Referral</th>
                  <th>Status</th>
                  <th>Lihat</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($ref as $r){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $r->nama ?></td>
                  <td><?php echo $r->ref ?></td>
                  <td><?php echo $r->aktif ?></td>
                  <td>
                      <button type="button" name="submit" id="editref" class="btn editref btn-primary"  data-id_ref="<?php echo $r->id_ref; ?>">Edit</button>
                   </td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Referral</th>
                  <th>Status</th>
                  <th>Lihat</th>
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
                          <div class="modal fade" id="tambahFormModal" tabindex="-1" role="dialog" aria-labelledby="tambahFormModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="tambahFormModalLabel">Tambah Data Pereferral</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <!-- Isi formulir di sini -->
                                  <form action="<?php echo base_url() ?>baak/referral_add" name="form1" id="form1" method="post" enctype="multipart/form-data">
                                      <!-- ... (Formulir seperti yang Anda berikan) ... -->
                                      <!-- <input type="hidden" name="id_ref" id="id_ref"> -->
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Nama :</label><p></p>
                                      <input type="text" class="form-control" name="nama" id="nama">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Alamat :</label><p></p>
                                       <textarea class="form-control" rows="3" id="alamat" name="alamat"></textarea>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">No. telp/Hp :</label><p></p>
                                      <input type="text" class="form-control" name="no_telp" id="no_telp">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Kode Referral :</label>
                                      <p></p>
                                       <input type="text" class="form-control" name="referral" id="referral">
                                      </div>
                                       <div class="form-group">
                                      <label for="exampleInputEmail1">Password :</label>
                                      <p></p>
                                       <input type="text" class="form-control" name="password" id="password">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Status Aktif :</label>
                                      <p></p>
                                      <select class="form-control" name="aktif" id="aktif">
                                        <option> </option>
                                        <option value="aktif">Aktif</option>
                                        <option value="nonaktif">Nonaktif</option>
                                      </select>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Tipe:</label>
                                      <p></p>
                                      <select class="form-control" name="tipe" id="tipe">
                                        <option> </option>
                                        <option value="umum">Umum</option>
                                        <option value="bk">BK</option>
                                        <option value="mahatar">Mahatar</option>
                                        <option value="ikani">Ikani</option>
                                      </select>
                                      </div>  
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                  </form>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              </div>
                          </div>
                      </div>
                  </div>
    <!-- ////////////////// modal-->
                          <div class="modal fade" id="editFormModal" tabindex="-1" role="dialog" aria-labelledby="editFormModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="editFormModalLabel">Edit Data Pereferral</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <!-- Isi formulir di sini -->
                                  <form action="<?php echo base_url() ?>baak/referral_edit" name="form1" id="form1" method="post" enctype="multipart/form-data">
                                      <!-- ... (Formulir seperti yang Anda berikan) ... -->
                                      <input type="hidden" name="id_ref" id="id_ref">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Nama :</label><p></p>
                                      <input type="text" class="form-control" name="enama" id="enama">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Alamat :</label><p></p>
                                       <textarea class="form-control" rows="3" id="ealamat" name="ealamat"></textarea>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">No. telp/Hp :</label><p></p>
                                      <input type="text" class="form-control" name="eno_telp" id="eno_telp">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Kode Referral :</label>
                                      <p></p>
                                       <input type="text" class="form-control" name="ereferral" id="ereferral" readonly="">
                                      </div>
                                       <div class="form-group">
                                      <label for="exampleInputEmail1">Password :</label>
                                      <p></p>
                                       <input type="text" class="form-control" name="epassword" id="epassword">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Status Aktif :</label>
                                      <p></p>
                                      <select class="form-control" name="eaktif" id="eaktif">
                                        <option> </option>
                                        <option value="aktif">Aktif</option>
                                        <option value="nonaktif">Nonaktif</option>
                                      </select>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Tipe:</label>
                                      <p></p>
                                      <select class="form-control" name="etipe" id="etipe">
                                        <option> </option>
                                        <option value="umum">Umum</option>
                                        <option value="bk">BK</option>
                                        <option value="mahatar">Mahatar</option>
                                        <option value="ikani">Ikani</option>
                                      </select>
                                      </div>  
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                  </form>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              </div>
                          </div>
                      </div>
                  </div>