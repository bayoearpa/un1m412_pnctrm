    <!-- Main content -->
    <section class="content">
    <?php echo $this->session->flashdata('message');?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pencatarma Sudah Validasi Gelombang Dini</h3>
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
                  <th>No. Telp/Hp</th>
                  <th>Prodi</th>
                  <th>Lihat</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($catar as $c){ 
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
                  <td><?php echo $c->telp ?></td>
                  <td><?php 
                    switch ($c->prodi) {

                      // registrasi
                       case '1':
                        $pick = "D3 KETATALAKSANAAN PELAYARAN NIAGA DAN KEPELABUHAN";
                      break;
                      case '2' :
                        $pick = "D3 TEKNIKA";
                      break;
                      case '3' :
                        $pick = "D3 NAUTIKA";
                      break;
                      case '4' :
                        $pick = "S1 TRANSPORTASI";
                      break;
                      case '5':
                        $pick = "S1 TEKNIK TRANSPORTASI LAUT";
                      break;
                      case '6':
                        $pick = "S1 TEKNIK MESIN";
                      break;
                      case '7':
                        $pick = "S1 TEKNIK KESELAMATAN";
                      break;
                      case '8':
                        $pick = "S1 PERDAGANGAN INTERNASIONAL";
                      break;
                        
                      }
                      echo $pick;
                    
                  ?></td>
                  <td> <button type="button" name="submit" id="editseleksigdr1" class="btn editseleksigdr1 btn-primary"  data-no="<?php echo $c->no; ?>">Lihat</button></td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>No. Pendf.</th>
                  <th>L/P</th>
                  <th>No. Telp/Hp</th>
                  <th>Prodi</th>
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
                                      <input type="hidden" name="id_link" id="id_link" value="<?php echo $this->session->userdata('id_link'); ?>">
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link File KTP</label>
                                       <button type="button" name="submit" id="editseleksigdr1" class="btn editseleksigdr1 btn-primary"  data-no="<?php echo $this->session->userdata('no'); ?>">Edit Form Seleksi</button>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link File Ijasah atau surat keterangan dari sekolah (jika belum lulus)</label>
                                      <input type="text" class="form-control" id="link_ijasah" name="link_ijasah" placeholder="Link File Ijasah atau surat keterangan dari sekolah (jika belum lulus)">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link File Transkip nilai atau rapor semster 1-5 (jika belum lulus)</label>
                                      <input type="text" class="form-control" id="link_rapor" name="link_rapor" placeholder="Link File Transkip nilai atau rapor semster 1-5 (jika belum lulus)">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link File Documen pemerikasaan kesehatan dari RS Pemerintah setempat/ Puskesmas</label>
                                      <input type="text" class="form-control" id="link_kesehatan" name="link_kesehatan" placeholder="Link File Documen pemerikasaan kesehatan dari RS Pemerintah setempat/ Puskesmas">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Surat pernyataan dan riwayat kesehatan</label>
                                      <input type="text" class="form-control" id="link_supersehat" name="link_supersehat" placeholder="Link File Surat pernyataan dan riwayat kesehatan">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Sertifikasi prestasi minimal tingkat Regional/Provinsi dan Hafidz <i>Qur'an </i>minimal 10 Juz</label>
                                      <input type="text" class="form-control" id="link_prestasi" name="link_prestasi" placeholder="Link File Sertifikasi prestasi minimal tingkat Regional/Provinsi dan Hafidz Qur'an minimal 10 Juz">
                                      </div>
                                      <hr>
                                      <h5>Form Upload Link Video SAMAPTA</h5>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link Video Push Up</label>
                                      <input type="text" class="form-control" id="link_video_pushup" name="link_video_pushup" placeholder="Link video push up">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link Video Sit Up</label>
                                      <input type="text" class="form-control" id="link_video_shitup" name="link_video_shitup" placeholder="Link video shit up">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link Video Pull Up</label>
                                      <input type="text" class="form-control" id="link_video_pullup" name="link_video_pullup" placeholder="Link video pull up">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link Video Lari</label>
                                      <input type="text" class="form-control" id="link_video_shuttle" name="link_video_shuttle" placeholder="Link video shuttle run">
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