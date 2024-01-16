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
                  $no_pendf = $c->no;
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
                                  <h5 class="modal-title" id="editFormModalLabel">Lihat form Seleksi</h5>
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
                                      <label for="exampleInputEmail1">Nama :</label>
                                      <input type="text" name="nama" id="nama" readonly="">
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link File KTP :</label>
                                      <p></p>
                                       <button type="button" name="submit" id="link_ktp" class="btn link_ktp btn-primary"  data-link="">Lihat</button>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link File Ijasah atau surat keterangan dari sekolah (jika belum lulus)</label><p></p>
                                      <button type="button" name="submit" id="link_ijasah" class="btn link_ijasah btn-primary"  data-link="">Lihat</button>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link File Transkip nilai atau rapor semster 1-5 (jika belum lulus)</label><p></p>
                                      <button type="button" name="submit" id="link_rapor" class="btn link_rapor btn-primary"  data-link="">Lihat</button>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link File Documen pemerikasaan kesehatan dari RS Pemerintah setempat/ Puskesmas</label><p></p><p></p>
                                      <button type="button" name="submit" id="link_kesehatan" class="btn link_kesehatan btn-primary"  data-link="">Lihat</button>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Surat pernyataan dan riwayat kesehatan</label><p></p>
                                      <button type="button" name="submit" id="link_supersehat" class="btn link_supersehat btn-primary"  data-link="">Lihat</button>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Sertifikasi prestasi minimal tingkat Regional/Provinsi dan Hafidz <i>Qur'an </i>minimal 10 Juz</label><p></p>
                                      <button type="button" name="submit" id="link_prestasi" class="btn link_prestasi btn-primary"  data-link="">Lihat</button>
                                      </div>
                                      <hr>
                                      <h5>Form Upload Link Video SAMAPTA</h5>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link Video Push Up</label><p></p>
                                      <button type="button" name="submit" id="link_video_pushup" class="btn link_video_pushup btn-primary"  data-link="">Lihat</button>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link Video Sit Up</label><p></p>
                                      <button type="button" name="submit" id="link_video_situp" class="btn link_video_situp btn-primary"  data-link="">Lihat</button>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link Video Pull Up</label><p></p>
                                      <button type="button" name="submit" id="link_video_pullup" class="btn link_video_pullup btn-primary"  data-link="">Lihat</button>
                                      </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link Video Lari</label><p></p>
                                      <button type="button" name="submit" id="link_video_shuttle" class="btn link_video_shuttle btn-primary"  data-link="">Lihat</button>
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