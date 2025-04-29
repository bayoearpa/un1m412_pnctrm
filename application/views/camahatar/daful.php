    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Daftar Ulang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php if ($hs == null) {
              # code... ?>
              <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Maaf!</h4>
                    Silakan mengisi form biodata terlebih dahulu untuk dapat mengakses halaman ini. terima kasih.
                </div>
            <?php }else{ 
                foreach ($catar as $c) {
                # code...
              ?>

               <table width="30%">
                <tr>
                  <td><label for="exampleInputEmail1">No. Pendaftaran</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->no; ?></label></td>
                </tr>
                <tr>
                  <td><label for="exampleInputEmail1">Nama</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->nama; ?></label></td>
                </tr>
                 <tr>
                  <td><label for="exampleInputEmail1">Tanggal Lahir</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->tgl_l; ?></label></td>
                </tr>
                 <tr>
                  <td><label for="exampleInputEmail1">Alamat</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->alamat; ?></label></td>
                </tr>
                <tr>
                  <td><label for="exampleInputEmail1">Jenis Kelamin</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->jk ; ?></label></td>
                </tr>
                 <tr>
                  <td><label for="exampleInputEmail1">Program Studi yang dipilih</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $prodi ; ?></label></td>
                </tr>
              </table>
              <hr>
              <form action="<?php echo base_url() ?>proses_bukti_bayar_daful" name="form1" id="form1" method="post" enctype="multipart/form-data">
              <?php if ($this->session->userdata('jalur')=="gdr1" || $this->session->userdata('jalur')=="reguler"): ?>
                <!-- <div class="box-body"><h3>Pada Saat Madabintal diharapkan mengisi form yang sudah disiapkan tim PMB.</b> untuk format bisa di download di bawah ini :</h3>
                <p></p>
                 <a href="<?php //echo base_url() ?>download_super_asrama?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Pernyataan di Asrama (Khusus Putri)</button></a>
                <p></p>
                <a href="<?php //echo base_url() ?>download_super_taat?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Pernyataan Sanggup Mentaati Peraturan</button></a>
                <p></p>
                <a href="<?php //echo base_url() ?>download_super_tidak_menikah?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Pernyataan Sanggup Tidak Menikah</button></a>
                </div> -->
                 <?php if ($kdprodi == '1' || $kdprodi == '4'|| $kdprodi == '5'|| $kdprodi == '6'|| $kdprodi == '7'|| $kdprodi == '8'|| $kdprodi == '9'|| $kdprodi == '10') { ?>

                  <!-- /////// prodi teknik nautik -->
                   <!-- <div class="box-body"><h3>Pelaksanaan Seleksi Offline Untuk Calon Taruna Nautika dan Teknika dapat dilihat selengkapnya dengan.</b> download di bawah ini :</h3>
                   <a href="<?php //echo base_url() ?>download_pengumuman_seleksi?>" target="__blank"><button type="button" class="btn btn-primary">Pengumuman Seleksi</button></a> -->

                    <div class="box-body"><h3>Silakan download file surat keterangan yang ada dibawah ini, lalu dibawa pada saat <b>ke UNIMAR AMNI Semarang</b>.file bisa di download di bawah ini :</h3>

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
                   <?php }elseif ($kdprodi == '2' || $kdprodi == '3') {
                     # code... ?>
                    <label>Surat Pernyataan Sanggup Tinggal di Asrama :</label><br>
                   <a href="<?php echo base_url() ?>download_super_sanggup_tinggal_diasrama25?>" target="__blank"><button type="button" class="btn btn-primary">Download Surat Pernyataan Sanggup Tinggal di Asrama</button></a><br>
                  <?php }else{ echo "ora ono";}} ?>

                
                
              <?php endif ?>
               
                 

                  
               <div class="form-group">
                        <label for="editufsignon">Upload Bukti Pembayaran Daftar Ulang (Upload dalam format .pdf)</label>
                        <input type="file" class="form-control" id="bukti_bayar_daful" name="bukti_bayar_daful">
                        <!-- <input type="hidden" id="editufsignon_existing" name="ufsignon_existing" value="<?php //echo $c->upload_file_signon; ?>"> -->
                        <?php if ($c->bukti_bayar_daful) { ?>
                        <button class="btn btn-success view-file-button" data-filename="<?php echo $c->bukti_bayar_daful; ?>">Lihat Bukti Bayar Daftar Ulang</button>
                        <?php } else { ?>
                        <!-- Tampilkan pesan jika file tidak ada -->
                        File tidak tersedia
                        <?php } ?>
                        
                </div>
                <p>nb : segala bentuk pembayaran yang sudah di setorkan ke unimar amni tidak dapat ditarik kembali dengan alasan apapun</p>
                <div class="form-group"><button type="submit" class="btn btn-primary">Simpan</button></div>

              </form>

              <?php 
                  if ($daful > "0") {
                    # code... ?>
                     <table class="table table-striped">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Keterangan</th>
                          <th style="width: 40px">Status</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>Data Daftar Ulang anda telah selesai divalidasi</td>
                          <td><span class="badge bg-green"><i class="fa fa-check"></i></span></td>
                        </tr>
                      </tbody></table>

                  <?php }else{ ?>
                     <table class="table table-striped">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Keterangan</th>
                          <th style="width: 40px">Status</th>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td>bukti pembayaran daftar ulang anda belum diupload atau Sedang dalam proses validasi</td>
                          <td><span class="badge bg-red"><i class="fa fa-times"></i></span></td>
                        </tr>
                      </tbody></table>

                  <?php } ?>
              
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