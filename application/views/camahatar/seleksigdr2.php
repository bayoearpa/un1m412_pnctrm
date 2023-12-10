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
               <form action="<?php echo base_url() ?>proses_bukti_bayar" name="form1" id="form1" method="post" enctype="multipart/form-data">               
               <div class="form-group">
                        <label for="editufsignon">Upload Ijasah D3 (Upload dalam format .pdf)</label>
                        <input type="file" class="form-control" id="upload_ijd3" name="upload_ijd3">
                        <!-- <input type="hidden" id="editufsignon_existing" name="ufsignon_existing" value="<?php //echo $c->upload_file_signon; ?>"> -->
                        <?php if ($c->upload_ijd3) { ?>
                        <button class="btn btn-success view-file-button" data-filename="<?php echo $c->upload_ijd3; ?>">Lihat Ijasah D3</button>
                        <?php } else { ?>
                        <!-- Tampilkan pesan jika file tidak ada -->
                        File tidak tersedia
                        <?php } ?>
                        
                </div>
                <div class="form-group">
                  <label for="editufsignon">Upload Transkip D3 (Upload dalam format .pdf)</label>
                        <input type="file" class="form-control" id="upload_transd3" name="upload_transd3">
                        <!-- <input type="hidden" id="editufsignon_existing" name="ufsignon_existing" value="<?php //echo $c->upload_file_signon; ?>"> -->
                        <?php if ($c->upload_transd3) { ?>
                        <button class="btn btn-success view-file-button" data-filename="<?php echo $c->upload_transd3; ?>">Lihat Transkip D3</button>
                        <?php } else { ?>
                        <!-- Tampilkan pesan jika file tidak ada -->
                        File tidak tersedia
                        <?php } ?>
                </div>
                <div class="form-group">
                  <label for="editufsignon">Mengisi dan Mengupload Surat Pernyataan Sehat <b>Bermaterai yang sudah disediakan</b> pada link berikut -> <a href="<?php echo base_url() ?>download_supersehat"><code>Download Surat Pernyataaan Sehat</code></a>  (Lalu Upload dalam format .pdf)</label>
                        <input type="file" class="form-control" id="upload_supersehat" name="upload_supersehat">
                        <!-- <input type="hidden" id="editufsignon_existing" name="ufsignon_existing" value="<?php //echo $c->upload_file_signon; ?>"> -->
                        <?php if ($c->upload_supersehat) { ?>
                        <button class="btn btn-success view-file-button" data-filename="<?php echo $c->upload_supersehat; ?>">Lihat Surat Pernyataan Sehat</button>
                        <?php } else { ?>
                        <!-- Tampilkan pesan jika file tidak ada -->
                        File tidak tersedia
                        <?php } ?>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-primary">Simpan</button></div>

              </form>

           <?php }else{ ?>
                
              

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