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
                  <th>Lihat data</th>
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
               <td><button type="button" name="submit" id="lihatukuran" class="btn lihatukuran btn-primary"  data-no="<?php echo $c->no; ?>">Lihat</button></td>
                </tbody>
                <tfoot>
                <tr>
                 <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Telp / Hp</th>
                  <th>Prodi yang Dipilih</th>
                  <th>Sudah ukur pakaian</th>
                  <th>Lihat data</th>
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
                                  <h5 class="modal-title" id="editFormModalLabel">Lihat Data Ukur Pakaian</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <!-- Isi formulir di sini -->
                                  <form action="#" name="form1" id="form1" method="post" enctype="multipart/form-data">
                                      <!-- ... (Formulir seperti yang Anda berikan) ... -->
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">No Pendafatran:</label><p></p>
                                      <input type="text" class="form-control" name="no" id="no" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Nama :</label><p></p>
                                      <input type="text" class="form-control" name="nama" id="nama" readonly="">
                                      </div>
                                    
                                      <hr>
                                      <!-- <h5>Form Upload Link Video SAMAPTA</h5> -->
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Jenis Kelamin</label><p></p>
                                      <input type="text" class="form-control" name="jk_pakaian" id="jk_pakaian" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Ukuran Sepatu</label><p></p>
                                      <input type="text" class="form-control" name="ukuran_sepatu" id="ukuran_sepatu" readonly="">
                                      <input type="text" class="form-control" name="ukuran_sepatu_lainnya" id="ukuran_sepatu_lainnya" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Topi Pet</label><p></p>
                                      <input type="text" class="form-control" name="topipet" id="topipet" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Seragam PDL</label><p></p>
                                      <input type="text" class="form-control" name="seragam_pdl" id="seragam_pdl" readonly="">
                                      <input type="text" class="form-control" name="seragam_pdl_lainnya" id="seragam_pdl_lainnya" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Training Pack</label><p></p>
                                      <input type="text" class="form-control" name="training_pack" id="training_pack" readonly="">
                                      <input type="text" class="form-control" name="training_pack_lainnya" id="training_pack_lainnya" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Wearpack</label><p></p>
                                      <input type="text" class="form-control" name="wearpack" id="wearpack" readonly="">
                                      <input type="text" class="form-control" name="wearpack_lainnya" id="wearpack_lainnya" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Kaos Olahraga</label><p></p>
                                      <input type="text" class="form-control" name="kaos_or" id="kaos_or" readonly="">
                                      <input type="text" class="form-control" name="kaos_or_lainnya" id="kaos_or_lainnya" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Baju Renang</label><p></p>
                                      <input type="text" class="form-control" name="baju_renang" id="baju_renang" readonly="">
                                      <input type="text" class="form-control" name="baju_renang_lainnya" id="baju_renang_lainnya" readonly="">
                                      </div>
                                       <div class="form-group">
                                      <label for="exampleInputEmail1">Dogi</label><p></p>
                                      <input type="text" class="form-control" name="dogi" id="dogi" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Tinggi Badan</label><p></p>
                                      <input type="text" class="form-control" name="tb" id="tb" readonly="">
                                      </div>
                                       <hr>
                                      <h5><b><u>SERAGAM DINAS*</u></b></h5>
                                      <p><b>Seragam PDH & Seragam PDUB</b></p>
                                       <div class="form-group">
                                      <label for="exampleInputEmail1">-Kemeja</label><p></p>
                                      <input type="text" class="form-control" name="pdhpdub_kemeja" id="pdhpdub_kemeja" readonly="">
                                      <input type="text" class="form-control" name="pdhpdub_kemeja_lainnya" id="pdhpdub_kemeja_lainnya" readonly="">
                                      </div>
                                       <div class="form-group">
                                      <label for="exampleInputEmail1">-Celana</label><p></p>
                                      <input type="text" class="form-control" name="pdhpdub_celana" id="pdhpdub_celana" readonly="">
                                      <input type="text" class="form-control" name="pdhpdub_celana_lainnya" id="pdhpdub_celana_lainnya" readonly="">
                                      </div>
                                      <hr>
                                       <div class="form-group">
                                      <label for="exampleInputEmail1">Jas PDPM</label><p></p>
                                      <input type="text" class="form-control" name="jaspdpm" id="jaspdpm" readonly="">
                                      <input type="text" class="form-control" name="jaspdpm_lainnya" id="jaspdpm_lainnya" readonly="">
                                      </div>  
                                  </form>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              </div>
                          </div>
                      </div>
                  </div>