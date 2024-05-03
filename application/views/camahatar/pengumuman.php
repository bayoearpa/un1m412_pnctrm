    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pengumuman</h3>
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
            <?php }else if ($hs == null) { 
              # code... ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Maaf!</h4>
                    Silakan melakukan pembayaran terlebih dahulu untuk dapat mengakses halaman ini. terima kasih.
                </div> 

           <?php }else{ ?>
                <?php  foreach ($hasil_sel as $c) { ?>
                  <?php if ($c->hasil == 'lulus'){ ?>
                    <div class="box-body"><h4>Berdasarkan hasil keputusan Panitia Penerimaan Mahasiswa dan Taruna UNIMAR AMNI Semarang Tahun Akademik 2024/2025, ditetapkan bahwa peserta seleksi Penerimaan Mahatar Baru (PMB) sebagaimana tersebut dalam lampiran <b>dinyatakan lulus </b>sebagai Calon Mahasiswa dan Taruna Universitas Maritim AMNI (UNIMAR AMNI) Semarang Tahun Akademik 2024/2025. untuk selengkapnya dapat kalian download dibawah ini :</h4>
                   <a href="<?php echo base_url() ?>download_pengumuman_januari?>" target="__blank"><button type="button" class="btn btn-primary">Download Pengumuman Lulus Januari</button></a>
                    </div>
                  <?php }else{ ?>
                   <div class="box-body"><h4>Berdasarkan hasil keputusan Panitia Penerimaan Mahasiswa dan Taruna UNIMAR AMNI Semarang Tahun Akademik 2024/2025, ditetapkan bahwa peserta seleksi Penerimaan Mahatar Baru (PMB) sebagaimana tersebut dalam lampiran <b>dinyatakan tidak lulus </b>sebagai Calon Mahasiswa dan Taruna Universitas Maritim AMNI (UNIMAR AMNI) Semarang Tahun Akademik 2024/2025. untuk selengkapnya dapat kalian download dibawah ini :</h4>
                    </div>

                    <?php } ?>
            <?php } } ?>
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