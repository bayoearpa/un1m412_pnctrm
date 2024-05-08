    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Home</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <h3>Roadmap Pengisian SiPMB</h3>
              <!------------------- timeline ------------------------------------------->
              <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
           
           
            <!-- timeline item -->
            <li>
              <i class="fa fa-check bg-green"></i>

              <div class="timeline-item">

                <h3 class="timeline-header no-border"><b>Daftar Akun SiPMB</b></h3>
              </div>
            </li>
            <!-- END timeline item -->
<!-------------------------------------------------------- cek bioadata -->
            <?php if ($nik == null) { ?>
            <!-- timeline item -->
            <li>
              <i class="fa fa-close bg-red"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><b>Biodata</b></h3>

                <div class="timeline-body">
                  Anda Harus Mengisi Biodata Terlebih Dahulu untuk melanjutkan ke Proses Berikutnya!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-flat btn-xs" href="<?php echo base_url() ?>biodata">Klik Untuk Mengakses Halaman isi Biodata</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <?php }else{ ?>
              <!-- timeline item -->
            <li>
              <i class="fa fa-check bg-green"></i>
              <div class="timeline-item">
                <h3 class="timeline-header"><b>Biodata</b></h3>
              </div>
            </li>
            <!-- END timeline item -->
            <?php } ?>
<!-------------------------------------------------------- .cek bioadata -->
<!-------------------------------------------------------- cek pembayaran -->
            <?php if ($validasi == null) { ?>
             <!-- timeline item -->
            <li>
              <i class="fa fa-close bg-red"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><b>Pembayaran</b></h3>

                <div class="timeline-body">
                  Anda Harus melakukan Pembayaran Terlebih Dahulu dan sudah divaliadsi bagian Keuangan UNIMAR AMNI Semarang untuk melanjutkan ke Proses Berikutnya!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-flat btn-xs" href="<?php echo base_url() ?>pembayaran">Klik Untuk Mengakses Halaman Pembayaran</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
          <?php }else{ ?>
             <!-- timeline item -->
            <li>
              <i class="fa fa-check bg-green"></i>
              <div class="timeline-item">
                <h3 class="timeline-header"><b>Pembayaran</b></h3>
              </div>
            </li>
            <!-- END timeline item -->
          <?php } ?>
<!-------------------------------------------------------- cek seleksi -->
            <?php if ($hs == null) { ?>
             <!-- timeline item -->
            <li>
              <i class="fa fa-close bg-red"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><b>Seleksi</b></h3>

                <div class="timeline-body">
                  Anda Harus melakukan Seleksi Terlebih dahulu dan <b>LULUS</b> seleksi untuk melanjutkan ke Proses Berikutnya!
                </div>
                <div class="timeline-footer">
                  <?php 
          $seleksiPage = ($this->session->userdata('jalur') == "reguler") ? 'seleksi_reguler' : 'seleksi_tf';
           ?>
                  <a class="btn btn-primary btn-flat btn-xs" href="<?php echo base_url($seleksiPage) ?>">Klik Untuk Mengakses Halaman Seleksi</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
          <?php }else{ ?>
             <!-- timeline item -->
            <li>
              <i class="fa fa-check bg-green"></i>
              <div class="timeline-item">
                <h3 class="timeline-header"><b>Seleksi</b></h3>
              </div>
            </li>
            <!-- END timeline item -->
          <?php } ?>
<!-------------------------------------------------------- .cek seleksi -->
<?php if ($this->session->userdata('jalur') == "reguler") { ?>
<!-------------------------------------------------------- cek ukur pakaian -->
          <?php if ($ukur == null) { ?>
             <!-- timeline item -->
            <li>
              <i class="fa fa-close bg-red"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><b>Ukur Pakaian</b></h3>

                <div class="timeline-body">
                  Anda Harus mengisi Form Ukur Pakaian untuk melanjutkan ke Proses Berikutnya!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-flat btn-xs" href="<?php echo base_url() ?>ukurpakaian">Klik Untuk Mengakses Halaman Ukur Pakaian</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
             <?php }else{ ?>
             <!-- timeline item -->
            <li>
              <i class="fa fa-check bg-green"></i>
              <div class="timeline-item">
                <h3 class="timeline-header"><b>Ukur Pakaian</b></h3>
              </div>
            </li>
            <!-- END timeline item -->
          <?php } }?>
<!-------------------------------------------------------- .cek ukur pakaian -->
<!-------------------------------------------------------- cek Daftar ulang -->
            <?php if ($daful == null) { ?>
             <!-- timeline item -->
            <li>
              <i class="fa fa-close bg-red"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><b>Daftar Ulang</b></h3>

                <div class="timeline-body">
                  Anda Harus mengisi Form Daftar Ulang Sebagai Proses Akhir Anda diterima di UNIMAR AMNI Semarang. Proses Daftar Ulang dinyatakan Selesai Jika Sudah divalidasi Pihak Keuangan!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-flat btn-xs" href="<?php echo base_url() ?>daftarulang">>Klik Untuk Mengakses Halaman Daftar Ulang</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
             <?php }else{ ?>
             <!-- timeline item -->
            <li>
              <i class="fa fa-check bg-green"></i>
              <div class="timeline-item">
                <h3 class="timeline-header"><b>Daftar Ulang</b></h3>
              </div>
            </li>
            <!-- END timeline item -->
          <?php } ?>
<!-------------------------------------------------------- .cek Daftar ulang -->
           
           
           
            <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
              <!------------------- .timeline ------------------------------------------>

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