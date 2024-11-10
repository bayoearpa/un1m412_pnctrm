    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form validasi</h3>
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
              <form action="<?php echo base_url() ?>proses_bukti_bayar" name="form1" id="form1" method="post" enctype="multipart/form-data">
                <?php if ($this->session->userdata('jalur') == "gdr1") {
                  # code... 
                  ?>
                    <p align="center">Untuk Pembayaran dapat di Transfer ke Bank BNI dengan nomor rekening <b>0838810730 an. UNIMAR AMNI</b> biaya yang harus anda bayar sebesar:</p>
                    <h2 align="center"><small><s>Rp. 500.000,-</s></small> Rp. 250.000,-</h2>
                <?php }else{ ?>
                    <p align="center">Untuk Pembayaran dapat di Transfer ke Bank BNI dengan nomor rekening <b>0838810730 an. UNIMAR AMNI</b> biaya yang harus anda bayar sebesar:</p>
                    <h2 align="center"><small><s>Rp. 700.000,-</s></small>Rp. 500.000,-</h2>
               <?php } ?>
               
               <div class="form-group">
                        <label for="editufsignon">Upload Bukti Pembayaran (Upload dalam format .pdf, Maks. File 1 MB)</label>
                        <input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar">
                        <!-- <input type="hidden" id="editufsignon_existing" name="ufsignon_existing" value="<?php //echo $c->upload_file_signon; ?>"> -->
                        <?php if ($c->bukti_bayar) { ?>
                        <button class="btn btn-success view-file-button" data-filename="<?php echo $c->bukti_bayar; ?>">Lihat Bukti Bayar</button>
                        <?php } else { ?>
                        <!-- Tampilkan pesan jika file tidak ada -->
                        File tidak tersedia
                        <?php } ?>
                        
                </div>
                <div class="form-group"><button type="submit" class="btn btn-primary">Simpan</button></div>

              </form>

              <?php 
                  if ($validasi > "0") {
                    # code... ?>
                     <table class="table table-striped">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Proses</th>
                          <th>Download Form Pendaftaran</th>
                          <th style="width: 40px">Status</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>Data anda telah selesai divalidasi</td>
                          <td>
                             <div class="form-group" align="center">
                              <a href="<?php echo base_url() ?>download/<?php echo $c->no ?>"><button type="button" name="submit" class="btn btn-primary">Download</button></a>
                            </div>
                          </td>
                          <td><span class="badge bg-green"><i class="fa fa-check"></i></span></td>
                        </tr>
                      </tbody></table>

                  <?php }else{ ?>
                     <table class="table table-striped">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Proses</th>
                          <th>Download Form Pendaftaran</th>
                          <th style="width: 40px">Status</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>Sedang dalam proses validasi</td>
                          <td>
                            Maaf anda belum bisa mendownload form pendaftaran anda karena belum divalidasi
                          </td>
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