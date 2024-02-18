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
                <div class="box-body"><h3>Pada Saat Seleksi diharapkan mengisi form yang menggunakan <b>KOP Sekolah dan ditandatangani oleh Kepala Sekolah.</b> untuk format bisa di download di bawah ini :</h3>
                   <a href="<?php echo base_url() ?>download_suket?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Keterangan</button></a>
                </div>
                 <div class="box-body"><h3>Pada Saat Seleksi diharapkan mengisi form Surat Pernyataan Sehat.</b> yang bisa di download di bawah ini :</h3>
                   <a href="<?php echo base_url() ?>download_supersehatreg?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Pernyataan Sehat</button></a>
                </div>
                <hr>
                <h5><b>Seleksi samapta akan dilaksanakan secara offline, tunggu pengumuman selanjutnya.</b></h5>
                <!-- <h5><b>Silakan mengisi form seleksi dibawah ini :</b></h5> -->
                <?php echo validation_errors(); 
                  echo $this->session->flashdata('success');
                  echo $this->session->flashdata('error'); ?>
                <p></p>
                <?php if ($seleksi == null) {
                  # code... cek seleksi ?>
                  <!--  <a href="<?php //echo base_url() ?>download_tutorial_form_seleksi_gelombang_dini?>" target="__blank"><button type="button" class="btn btn-primary">Download Tutorial Pengisan Form Seleksi</button></a>
              
                 <form action="<?php //echo base_url() ?>proses_seleksi_gelombangdini_reguler" name="form1" id="form1" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="no" id="no" value="<?php //echo $this->session->userdata('no'); ?>">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Link File KTP</label>
                  <input type="text" class="form-control" id="link_ktp" name="link_ktp" placeholder="Masukan Link File KTP">
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
                  </div> -->
                 <!--  <div class="form-group">
                  <label for="exampleInputEmail1">Sertifikasi prestasi minimal tingkat Regional/Provinsi dan Hafidz <i>Qur'an </i>minimal 10 Juz</label>
                  <input type="text" class="form-control" id="link_prestasi" name="link_prestasi" placeholder="Link File Sertifikasi prestasi minimal tingkat Regional/Provinsi dan Hafidz Qur'an minimal 10 Juz">
                  </div> -->
                <!--   <hr>
                  <h5><b>Form Upload Link Video SAMAPTA</b></h5>
                  <p>Video Kesamaptaan : </p>
                  <p>Saat pembuatan video kesamaptaan calon mahasiswa/ taruna baru diwajibkan:</p>
                  <ul>
                    <li>Mengenakan baju olahraga putih (untuk putra lengan pendek), celana training putih (untuk putra celana pendek) dan sepatu olahraga putih.</li>
                    <li>Saat pembuatan video push up, shit up, dan pull up calon mahasiswa/ taruna baru diwajibkan untuk menghitung.</li>
                    <li>Untuk video lari harus terlihat full 1 lapangan.</li> 
                  </ul>
                  <p>Berikut video kesamaptaan yang harus dibuat:</p>
                  <ul>
                    <li>Push up <b>putri</b> 30 kali dengan tumpuan lutut dan <b>putra</b> full 50 kali</li>
                    <li>Shit up <b>putri</b> 20 kali dan <b>putra</b> 35 kali</li>
                    <li>Pull up putra 8 kali</li>
                    <li>Lari selama 12 menit di lapangan sepakbola terdekat</li>
                  </ul>
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
                <?php// }else{ ?>
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
                             <button type="button" name="submit" id="editseleksigdr1" class="btn editseleksigdr1 btn-primary"  data-no="<?php// echo $this->session->userdata('no'); ?>">Edit Form Seleksi</button>
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
                              <div class="modal-body"> -->
                                  <!-- Isi formulir di sini -->
                                <!--   <form action="<?php //echo base_url() ?>proses_seleksi_gelombangdini_reguler_edit" name="form1" id="form1" method="post" enctype="multipart/form-data">
                                      ... (Formulir seperti yang Anda berikan) ...
                                      <input type="hidden" name="no" id="no" value="<?php //echo $this->session->userdata('no'); ?>">
                                      <input type="hidden" name="id_link" id="id_link" value="<?php //echo $this->session->userdata('id_link'); ?>">
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Link File KTP</label>
                                      <input type="text" class="form-control" id="link_ktp" name="link_ktp" placeholder="Masukan Link File KTP">
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
                                      </div> -->
                                     <!--  <div class="form-group">
                                      <label for="exampleInputEmail1">Sertifikasi prestasi minimal tingkat Regional/Provinsi dan Hafidz <i>Qur'an </i>minimal 10 Juz</label>
                                      <input type="text" class="form-control" id="link_prestasi" name="link_prestasi" placeholder="Link File Sertifikasi prestasi minimal tingkat Regional/Provinsi dan Hafidz Qur'an minimal 10 Juz">
                                      </div> -->
                                     <!--  <hr>
                                      <h5><b>Form Upload Link Video SAMAPTA</b></h5>
                                      <p>Video Kesamaptaan : </p>
                                      <p>Saat pembuatan video kesamaptaan calon mahasiswa/ taruna baru diwajibkan:</p>
                                      <ul>
                                        <li>Mengenakan baju olahraga putih (untuk putra lengan pendek), celana training putih (untuk putra celana pendek) dan sepatu olahraga putih.</li>
                                        <li>Saat pembuatan video push up, shit up, dan pull up calon mahasiswa/ taruna baru diwajibkan untuk menghitung.</li>
                                        <li>Untuk video lari harus terlihat full 1 lapangan.</li> 
                                      </ul>
                                      <p>Berikut video kesamaptaan yang harus dibuat:</p>
                                      <ul>
                                        <li>Push up <b>putri</b> 30 kali dengan tumpuan lutut dan <b>putra</b> full 50 kali</li>
                                        <li>Shit up <b>putri</b> 20 kali dan <b>putra</b> 35 kali</li>
                                        <li>Pull up putra 8 kali</li>
                                        <li>Lari selama 12 menit di lapangan sepakbola terdekat</li>
                                      </ul>
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
                  </div> -->
                <?php } ?>                  


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