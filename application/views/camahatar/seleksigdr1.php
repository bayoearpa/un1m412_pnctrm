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
                <!-- <div class="box-body"><h3>Surat keterangan dengan Kop Sekolah dan ditandatangai oleh Kepsek <b>(Bila belum mempunyai ijazah)</b> untuk format bisa di download di bawah ini :</h3>
                   <a href="<?php //echo base_url() ?>download_suket?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Keterangan</button></a>
                </div> -->

                <div class="box-body"><h3>Silakan download file surat keterangan yang ada dibawah ini, lalu dibawa pada saat <b>Test gelombang dini</b>.file bisa di download di bawah ini :</h3>

                   <label>Surat Keterangan Sehat :</label><br>
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