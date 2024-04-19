    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Rekap Daftar Hadir Peserta Datang Pulang Excel </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                 <div class="form-group">
                      <form method="post" action="<?php echo base_url() ?>baak/rekap_exl_daftarhadirpesertadp2022">
                      <label> Pilih Prodi
                    </label>*wajib pilih
                    <select name="prodi" id="prodi" class="form-control" style="width:50%;" required="harus dipilih">  
                    <option selected>== Pilih ==</option>
                   <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Trasnportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option> 
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>  
                    <option value="7">D4 MPLM</option>
                    <option value="8">S1 Bisnis Digital</option>                 
                    </select> 
                  </div>
                  <div class="form-group">
                  <label>Pilih Jalur</label>*wajib pilih
                  <select class="form-control" name="kelas" id="kelas" required="harus dipilih">
                    <option selected>== Pilih ==</option>
                    <option value="reguler">Reguler</option>
                    <option value="gdr1">Fast Track</option>
                  </select>
                  </div>
                  <div class="form-group">
                  <label>Jenis Kelamin</label>*wajib pilih
                  <select class="form-control" name="jk" id="jk" required="harus dipilih">
                    <option selected>== Pilih ==</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                  </select>
                  </div>
                   <div class="form-group">
                  <label>Kegiatan</label>*wajib pilih
                  <select class="form-control" name="bagian" id="bagian" required="harus dipilih">
                    <option selected>== Pilih ==</option>
                    <option value="DAFTAR HADIR">DAFTAR HADIR</option>
                    <option value="PEMBERKASAN">PEMBERKASAN</option>
                    <option value="TPA">TPA</option>
                    <option value="KESEHATAN">KESEHATAN</option>
                    <option value="WAWANCARA">WAWANCARA</option>
                    <option value="SAMAPTA">SAMAPTA</option>
                    <option value="UKUR PAKAIAN">UKUR PAKAIAN</option>
                    <option value="PANTUKHIR">PANTUKHIR</option>
                  </select>
                  </div>
                  <!-- <div class="form-group">
                  <label>Tanggal Pelaksanaan</label>*wajib pilih
                  <select class="form-control" name="tgl_pel" id="tgl_pel" required="harus dipilih">
                    <option selected>== Pilih ==</option>
                    <?php 
                      //get_instance()->load->helper('tgl_indo');
                      //foreach ($get_tgl_pel as $key) {
                        # code... ?>
                        <option value="<?php //echo $key->id_tgl_seleksi ?>"><?php //echo date_indo($key->tgl_seleksi); ?></option>
                     <?php }
                     ?>
                  </select>
                  </div> -->
                  <div class="form-group">
                  <label>Periode</label>
                  <select class="form-control" name="gelombang" id="gelombang">
                    <option value="0" selected>== Pilih ==</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                  </select>
                  </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-block btn-success" id="cek" name="cek" style="width:20%;" value="Cek">
                    </div>
                  </form>
                  
                 <div id="results"></div><!-- /.div result -->
         
              </div><!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->