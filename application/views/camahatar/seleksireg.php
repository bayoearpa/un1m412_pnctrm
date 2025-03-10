    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Seleksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php if ($nik == null) {
              # code... ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Maaf!</h4>
                    Silakan mengisi form biodata terlebih dahulu untuk dapat mengakses halaman ini. terima kasih.
                </div>
            <?php }else if ($validasi == null) { 
              # code... ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Maaf!</h4>
                    Silakan melakukan pembayaran terlebih dahulu untuk dapat mengakses halaman ini. terima kasih.
                </div>

           <?php }else{ ?>
                <div class="box-body"><h3>Surat keterangan dengan Kop Sekolah dan ditandatangai oleh Kepsek <b>(Bila belum mempunyai ijazah)</b> untuk format bisa di download di bawah ini :</h3>
                   <a href="<?php echo base_url() ?>download_suket?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Keterangan</button></a>
                </div>
                
                <hr>
                <!-- <h5><b>Seleksi samapta akan dilaksanakan secara offline, tunggu pengumuman selanjutnya.</b></h5> -->
                <?php if ($prodi == '2' || $prodi == '3') { ?>

                  <!-- /////// prodi teknik nautik -->
                   <!-- <div class="box-body"><h3>Pelaksanaan Seleksi Offline Untuk Calon Taruna Nautika dan Teknika dapat dilihat selengkapnya dengan.</b> download di bawah ini :</h3>
                   <a href="<?php //echo base_url() ?>download_pengumuman_seleksi?>" target="__blank"><button type="button" class="btn btn-primary">Pengumuman Seleksi</button></a> -->

                    <div class="box-body"><h3>Silakan download file surat keterangan yang ada dibawah ini, lalu dibawa pada saat <b>Test gelombang dini</b>.file bisa di download di bawah ini :</h3>

                   <label>Surat Keterangan Sehat : </label><br>
                   <a href="<?php echo base_url() ?>download_suket_sehat_gelombang_dini25?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Keterangan Sehat</button></a><br>
                   <label>Surat Keterangan Sanggup Menaati Peraturan :</label><br>
                   <a href="<?php echo base_url() ?>download_suket_sanggup_menaati_peraturan25?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Keterangan Sanggup Menaati Peraturan</button></a><br>
                   <label>Surat Pernyataan Sanggup Tidak Menikah :</label><br>
                   <a href="<?php echo base_url() ?>download_suket_sanggup_tidak_menikah25?>" target="__blank"><button type="button" class="btn btn-primary">Surat Pernyataan Sanggup Tidak Menikah</button></a><br>

                   <?php if ($jk == 'Wanita') {
                     # code... ?>
                    <label>Surat Pernyataan Sanggup Tinggal di Asrama :</label><br>
                   <a href="<?php echo base_url() ?>download_super_sanggup_tinggal_diasrama25?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Pernyataan Sanggup Tinggal di Asrama</button></a><br>
                   <?php }elseif ($prodi == '2' || $prodi == '3') {
                     # code... ?>
                    <label>Surat Pernyataan Sanggup Tinggal di Asrama :</label><br>
                   <a href="<?php echo base_url() ?>download_super_sanggup_tinggal_diasrama25?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Pernyataan Sanggup Tinggal di Asrama</button></a><br>
                  <?php }else{} ?>

                   
                </div>
                <!-- /////// end prodi teknik nautik -->
                </div>
                 <?php # code...
                }else{ ?>
                <!-- <h5><b>Silakan mengisi form seleksi dibawah ini :</b></h5> -->
                 <div class="box-body"><h3>Surat Pernyataan Sehat.</b> dapat di download di bawah ini :</h3>
                   <a href="<?php echo base_url() ?>download_supersehatreg?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Pernyataan Sehat</button></a>
                </div>
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
                <p></p>
                <?php if ($seleksi == null) {
                  # code... cek seleksi ?>
                  <!--  <a href="<?php //echo base_url() ?>download_tutorial_form_seleksi_gelombang_dini?>" target="__blank"><button type="button" class="btn btn-primary">Download Tutorial Pengisan Form Seleksi</button></a> -->
              
                 <form action="<?php echo base_url() ?>proses_seleksi_gelombangdini_reguler" name="form1" id="form1" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="no" id="no" value="<?php echo $this->session->userdata('no'); ?>">
                  <div class="form-group">
                  <label for="exampleInputEmail1">File KTP (Format .pdf dan maksimum file size 1 mb)</label>
                  <input type="file" class="form-control" id="file_ktp" name="file_ktp" placeholder="Masukan File KTP">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">File Ijasah atau surat keterangan dari sekolah (jika belum lulus) (Format .pdf dan maksimum file size 1 mb)</label>
                  <input type="file" class="form-control" id="file_suket" name="file_suket" placeholder="File Ijasah atau surat keterangan dari sekolah (jika belum lulus)">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Rata-Rata Nilai Kelas 10</label>
                  <input type="text" class="form-control" id="n101" name="n101" placeholder="Rata-Rata Nilai Semster 1">
                  <input type="text" class="form-control" id="n102" name="n102" placeholder="Rata-Rata Nilai Semster 2">
                  <label for="exampleInputEmail1">Rata-Rata Nilai Kelas 11</label>
                  <input type="text" class="form-control" id="n111" name="n111" placeholder="Rata-Rata Nilai Semster 1">
                  <input type="text" class="form-control" id="n112" name="n112" placeholder="Rata-Rata Nilai Semster 2">
                  <label for="exampleInputEmail1">Rata-Rata Nilai Kelas 12</label>
                  <input type="text" class="form-control" id="n121" name="n121" placeholder="Rata-Rata Nilai Semster 1">
                  <input type="text" class="form-control" id="n122" name="n122" placeholder="Rata-Rata Nilai Semster 2">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Surat pernyataan dan riwayat kesehatan</label>
                  <input type="file" class="form-control" id="file_supersehat" name="file_supersehat" placeholder="File Surat pernyataan dan riwayat kesehatan">
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <?php }else{ ?>
                  <table class="table table-striped">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Status</th>
                          <th>Edit Form</th>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>Anda Telah Mengisi Form Seleksi</td>
                          <td>
                             <div class="form-group" align="center">
                             <button type="button" name="submit" id="editseleksigdr1" class="btn editseleksigdr1 btn-primary"  data-no="<?php echo $this->session->userdata('no'); ?>">Edit Form Seleksi</button>
                            </div>
                          </td>
                        </tr>
                      </tbody></table>
                      <div class="modal fade" id="editFormModal" tabindex="-1" role="dialog" aria-labelledby="editFormModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="editFormModalLabel">Edit Form Seleksi</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <!-- Isi formulir di sini -->
                                  <form action="<?php echo base_url() ?>proses_seleksi_gelombangdini_reguler_edit" name="form1" id="form1" method="post" enctype="multipart/form-data">
                                      <!-- ... (Formulir seperti yang Anda berikan) ... -->
                                      <input type="hidden" name="no" id="no" value="<?php echo $this->session->userdata('no'); ?>">
                                      <input type="hidden" name="id_seleksi" id="id_seleksi">
                                      <label for="exampleInputEmail1">File KTP (Format .pdf dan maksimum file size 1 mb)</label>
                                      <input type="file" class="form-control" id="nfile_ktp" name="nfile_ktp" placeholder="Masukan File KTP">
                                      <input type="hidden" name="efile_ktp" id="efile_ktp">
                               
                                      <label for="exampleInputEmail1">File Ijasah atau surat keterangan dari sekolah (jika belum lulus) (Format .pdf dan maksimum file size 1 mb)</label>
                                      <input type="file" class="form-control" id="nfile_suket" name="nfile_suket" placeholder="File Ijasah atau surat keterangan dari sekolah (jika belum lulus)">
                                      <input type="hidden" name="efile_suket" id="efile_suket">
                                      <label for="exampleInputEmail1">Rata-Rata Nilai Kelas 10</label>
                                      <input type="text" class="form-control" id="en101" name="en101" placeholder="Rata-Rata Nilai Semster 1">
                                      <input type="text" class="form-control" id="en102" name="en102" placeholder="Rata-Rata Nilai Semster 2">
                                      <label for="exampleInputEmail1">Rata-Rata Nilai Kelas 11</label>
                                      <input type="text" class="form-control" id="en111" name="en111" placeholder="Rata-Rata Nilai Semster 1">
                                      <input type="text" class="form-control" id="en112" name="en112" placeholder="Rata-Rata Nilai Semster 2">
                                      <label for="exampleInputEmail1">Rata-Rata Nilai Kelas 12</label>
                                      <input type="text" class="form-control" id="en121" name="en121" placeholder="Rata-Rata Nilai Semster 1">
                                      <input type="text" class="form-control" id="en122" name="en122" placeholder="Rata-Rata Nilai Semster 2">
                                      <label for="exampleInputEmail1">Surat pernyataan dan riwayat kesehatan</label>
                                      <input type="file" class="form-control" id="nfile_supersehat" name="nfile_supersehat" placeholder="File Surat pernyataan dan riwayat kesehatan">
                                      <input type="hidden" name="efile_supersehat" id="efile_supersehat">
                                     <button type="submit" class="btn btn-primary">Simpan</button>
                                  </form>
                                      
                                   
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              </div>
                          </div>
                      </div>
                  </div>
                <?php } } ?>                  


            <?php } ?>
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