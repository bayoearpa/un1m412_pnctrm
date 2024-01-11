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
                <h5>Silakan mengisi form seleksi dibawah ini :</h5>
                 <form action="<?php echo base_url() ?>proses_seleksi" name="form1" id="form1" method="post" enctype="multipart/form-data">
                  
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
                  <input type="text" class="form-control" id="link_rapor" name="link_rapor" placeholder=">Link File Transkip nilai atau rapor semster 1-5 (jika belum lulus)">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Link File Documen pemerikasaan kesehatan dari RS Pemerintah setempat/ Puskesmas</label>
                  <input type="text" class="form-control" id="link_kesehatan" name="link_kesehatan" placeholder="Link File Documen pemerikasaan kesehatan dari RS Pemerintah setempat/ Puskesmas">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Surat pernyataan dan riwayat kesehatan</label>
                  <input type="text" class="form-control" id="link_supersehat" name="link_supersehat" placeholder="Surat pernyataan dan riwayat kesehatan">
                  </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">Sertifikasi prestasi minimal tingkat Regional/Provinsi dan Hafidz <i>Qur'an </i>minimal 10 Juz</label>
                  <input type="text" class="form-control" id="link_prestasi" name="link_prestasi" placeholder="Sertifikasi prestasi minimal tingkat Regional/Provinsi dan Hafidz Qur'an minimal 10 Juz">
                  </div>
                </form>
              
              

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