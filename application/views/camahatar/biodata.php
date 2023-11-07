    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Biodata</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php 
                if ($this->session->userdata('nama')=="kelastransfer") {
                  # code... 
                  //form biodata untuk kelas transfer ?>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Harap diperhatikan!</h4>
                    Silakan mengisi form biodata di bawah ini dan pastikan semua terisi dengan benar, karena setelah proses validasi data tidak dapat di perbaiki. terima kasih.
                </div>
                  <form action="<?php echo base_url() ?>cetakRegistrasi" name="form1" id="form1" method="post" enctype="multipart/form-data">
                  <p>Jalur : Kelas Transfer</p> 
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">NIK (Nomor Induk Kependudukan)</label>
                  <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tl" name="tl" placeholder="Masukan Tempat Lahir Anda">
                </div>

                <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir (yyyy-mm-dd / tahun-bulan-hari)</label>
                       <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control" data-date-format="yyyy-mm-dd" data-link-format="yyyy-mm-dd" name="tgl_l" id="tgl_l">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                      </div>                      
                </div>
                 <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama" id="agama">
                    <option> </option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Pria">
                      Pria
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Wanita">
                      Wanita
                    </label>
                  </div>
                </div>
                 <!-- <div class="form-group"> -->
                  <!-- <label for="exampleInputEmail1">Berat Badan</label> -->
                  <input type="hidden" class="form-control" id="bb" name="bb" placeholder="Masukan Berat Badan Anda (Masukkan dalam Kg)" value="0">
                <!-- </div> -->
                 <!-- <div class="form-group"> -->
                  <!-- <label for="exampleInputEmail1">Tinggi Badan</label> -->
                  <input type="hidden" class="form-control" id="tb" name="tb" placeholder="Masukan Tinggi Badan Anda (Masukkan dalam Cm)" value="0">
                <!-- </div> -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email anda)">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat Anda"></textarea>
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Provinsi</label>
                  <select class="form-control" name="provinsi" id="provinsi" class="provinsi">
                  <option> </option>
                  <?php foreach ($provinsi as $p) {
                    # code...
                  ?>
                    <option value="<?php echo $p->id_wil;?>"><?php echo $p->nm_wil;?></option>
                  <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota / Kabupaten</label>
                  <select class="form-control ktkb" name="ktkb" id="ktkb">
                  <option> </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. / Hp</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan No. Telepon atau Hp Anda">
                </div>
                <!-- <div class="form-group">
                  <label>Kategori Sekolah</label>
                  <select class="form-control" name="kategori_sek" id="kategori_sek">
                    <option> </option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="MA">MA</option>
                  </select>
                </div> -->
                <input type="hidden" name="kategori_sek" id="kategori_sek" value="D3">
                   <!-- /.form-group -->
                <div class="form-group">
                  <label>Prodi Sebelumnya</label>
                  <!-- <select class="form-control select2" id="prodi_lama" name="prodi_lama" style="width: 100%;">
                    <option> </option>
                    <?php //foreach ($jurusan as $j): ?>
                      <option value="<?php //echo $j->nama_jurusan; ?>"><?php //echo $j->nama_jurusan; ?></option>
                    <?php //endforeach ?>
                  </select> -->
                  <input type="text" class="form-control" id="prodi_lama" name="prodi_lama" placeholder="Masukan Prodi lama anda">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Lulus</label>
                  <input type="text" class="form-control" id="thn_lulus" name="thn_lulus" placeholder="Masukan Tahun Lulus Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Asal Pergurunan Tinggi sebelumnya</label>
                  <input type="text" class="form-control" id="asek" name="asek" placeholder="Masukan Pergurunan Tinggi sebelumnya">
                </div>
                <div class="form-group">
                  <label>Alamat Pergurunan Tinggi Sebelumnya</label>
                  <textarea class="form-control" name="alamat_sek" id="alamat_sek" rows="3" placeholder="Masukkan Alamat Pergurunan Tinggi sebelumnya"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ayah Kandung</label>
                  <input type="text" class="form-control" id="nama_a" name="nama_a" placeholder="Masukan Nama Ayah Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu Kandung</label>
                  <input type="text" class="form-control" id="nama_i" name="nama_i" placeholder="Masukan Nama Ibu Anda">
                </div>
                <div class="form-group">
                  <label>Alamat Orang Tua / Wali</label>
                  <textarea class="form-control" name="alamat_ortu" id="alamat_ortu" rows="3" placeholder="Masukkan Alamat Orang Tua atau Wali Anda"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. Orang Tua / Wali</label>
                  <input type="text" class="form-control" id="telp_ortu" name="telp_ortu" placeholder="Masukan No. Telepon Orang Tua atau Wali Anda">
                </div>
                <div class="form-group">
                  <label>Informasi (mendapatkan informasi tentang UNIMAR "AMNI" Semarang)</label>
                  <select class="form-control" name="informasi" id="informasi">
                    <option> </option>
                    <option value="1">Senior / Kakak kelas</option>
                    <option value="2">Sosial Media</option>
                    <option value="3">Keluarga / Saudara / teman</option>
                    <option value="4">Alumni</option>
                    <option value="5">Brosur</option>
                    <option value="6">Expo</option>
                    <option value="7">Sekolah / Guru</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Prodi Pilihan 1</label>
                  <select class="form-control" name="prodi" id="prodi">
                    <option> </option>
                   <!--  <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option> -->
                    <option value="4">S1 Transportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Prodi Pilihan 2</label>
                  <select class="form-control" name="prodi2" id="prodi2">
                    <option> </option>
                   <!--  <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option> -->
                    <option value="4">S1 Transportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Periode</label>
                  <select class="form-control" name="gelombang" id="gelombang">
                    <option> </option>
                    <option value="1">Gelombang 1</option>
                    <!-- <option value="2">Gelombang 2</option> -->
                    <!-- <option value="3">Gelombang 3</option> -->
                   <!--  <option value="1">Januari</option> -->
                    <!-- <option value="2">Februari</option> -->
                    <!-- <option value="3">Maret</option> -->
                    <!-- <option value="4">April</option> -->
                    <!-- <option value="5">Mei</option> -->
                    <!-- <option value="6">Juni</option> -->
                    <!-- <option value="7">Juli</option> -->
                    <!-- <option value="8">Agustus</option> -->
                     <!-- <option value="9">September</option> -->
                    <!-- <option value="10">Oktober</option> -->
                  </select>
                </div>
                <input type="hidden" name="jalur" value="<?php echo $this->session->userdata('jalur')?>">
               <!--  <div class="form-group">
                  <label>Kelas</label><br>
                  
                  <input type="radio" id="reguler" name="gender" value="reguler">
                  <label for="reguler">Reguler</label><br>
                  <input type="radio" id="lintasjalur" name="gender" value="lintasjalur">
                  <label for="lintasjalur">Lintas Jalur / Ekstensi</label><br>
                </div> -->

                <!-- <div class="form-group">
                  <label>Ijasah atau Surat Ketarangan dari Sekolah (.pdf file maksimal 5 MB)</label>
                 <input type="file" name="ijasah" id="ijasah" class="form-control">
                </div> -->
               
                <button type="submit" class="btn btn-primary">Simpan dan Cetak</button>
                </form>

                <?php }else{  ///////////////////// form reguler/////////////////////?>
                   <?php echo validation_errors(); 
            echo $this->session->flashdata('success');
            echo $this->session->flashdata('error'); ?>
                            <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Harap diperhatikan!</h4>
                    Silakan mengisi form biodata di bawah ini dan pastikan semua terisi dengan benar, karena setelah proses validasi data tidak dapat di perbaiki. terima kasih.
                </div>
              <form action="<?php echo base_url() ?>cetakRegistrasi" name="form1" id="form1" method="post" enctype="multipart/form-data"> 
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">NIK (Nomor Induk Kependudukan)</label>
                  <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tl" name="tl" placeholder="Masukan Tempat Lahir Anda">
                </div>

                <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir (yyyy-mm-dd / tahun-bulan-hari)</label>
                       <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control" data-date-format="yyyy-mm-dd" data-link-format="yyyy-mm-dd" name="tgl_l" id="tgl_l">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                      </div>                      
                </div>
                 <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama" id="agama">
                    <option> </option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Pria">
                      Pria
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Wanita">
                      Wanita
                    </label>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" id="bb" name="bb" placeholder="Masukan Berat Badan Anda (Masukkan dalam Kg)">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" id="tb" name="tb" placeholder="Masukan Tinggi Badan Anda (Masukkan dalam Cm)">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email anda)">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat Anda"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Provinsi</label>
                  <select class="form-control" name="provinsi" id="provinsi" class="provinsi">
                  <option> </option>
                  <?php foreach ($provinsi as $p) {
                    # code...
                  ?>
                    <option value="<?php echo $p->id_wil;?>"><?php echo $p->nm_wil;?></option>
                  <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota / Kabupaten</label>
                  <select class="form-control ktkb" name="ktkb" id="ktkb">
                  <option> </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. / Hp</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan No. Telepon atau Hp Anda">
                </div>
                <div class="form-group">
                  <label>Kategori Sekolah</label>
                  <select class="form-control" name="kategori_sek" id="kategori_sek">
                    <option> </option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="MA">MA</option>
                  </select>
                </div>
                   <!-- /.form-group -->
                <div class="form-group">
                  <label>Jurusan SLTA/SMK</label>
                  <select class="form-control select2" id="prodi_lama" name="prodi_lama" style="width: 100%;">
                    <option> </option>
                    <?php foreach ($jurusan as $j): ?>
                      <option value="<?php echo $j->nama_jurusan; ?>"><?php echo $j->nama_jurusan; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Lulus</label>
                  <input type="text" class="form-control" id="thn_lulus" name="thn_lulus" placeholder="Masukan Tahun Lulus Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Asal Sekolah SLTA/SMK</label>
                  <input type="text" class="form-control" id="asek" name="asek" placeholder="Masukan Asal Sekolah Anda">
                </div>
                <div class="form-group">
                  <label>Alamat Sekolah SLTA/SMK</label>
                  <textarea class="form-control" name="alamat_sek" id="alamat_sek" rows="3" placeholder="Masukkan Alamat Sekolah Anda"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ayah Kandung</label>
                  <input type="text" class="form-control" id="nama_a" name="nama_a" placeholder="Masukan Nama Ayah Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu Kandung</label>
                  <input type="text" class="form-control" id="nama_i" name="nama_i" placeholder="Masukan Nama Ibu Anda">
                </div>
                <div class="form-group">
                  <label>Alamat Orang Tua / Wali</label>
                  <textarea class="form-control" name="alamat_ortu" id="alamat_ortu" rows="3" placeholder="Masukkan Alamat Orang Tua atau Wali Anda"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. Orang Tua / Wali</label>
                  <input type="text" class="form-control" id="telp_ortu" name="telp_ortu" placeholder="Masukan No. Telepon Orang Tua atau Wali Anda">
                </div>
                <div class="form-group">
                  <label>Informasi (mendapatkan informasi tentang UNIMAR AMNI Semarang)</label>
                  <select class="form-control" name="informasi" id="informasi">
                    <option> </option>
                    <option value="1">Senior / Kakak kelas</option>
                    <option value="2">Sosial Media</option>
                    <option value="3">Keluarga / Saudara / teman</option>
                    <option value="4">Alumni</option>
                    <option value="5">Brosur</option>
                    <option value="6">Expo</option>
                    <option value="7">Sekolah / Guru</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Prodi Pilihan 1</label>
                  <select class="form-control" name="prodi" id="prodi">
                    <option> </option>
                    <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Transportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Prodi Pilihan 2</label>
                  <select class="form-control" name="prodi2" id="prodi2">
                    <option> </option>
                    <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Transportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Periode</label>
                  <select class="form-control" name="gelombang" id="gelombang">
                    <option> </option>
                    <option value="1">Gelombang 1</option>
                   <!-- <option value="2">Gelombang 2</option> -->
                    <!-- <option value="3">Gelombang 3</option> -->
                  </select>
                </div>
               <input type="hidden" name="jalur" value="<?php echo $this->session->userdata('jalur')?>">
                <!-- <input type="hidden" name="kelas" value="reg"> -->
               <!--  <div class="form-group">
                  <label>Kelas</label><br>
                  
                  <input type="radio" id="reguler" name="gender" value="reguler">
                  <label for="reguler">Reguler</label><br>
                  <input type="radio" id="lintasjalur" name="gender" value="lintasjalur">
                  <label for="lintasjalur">Lintas Jalur / Ekstensi</label><br>
                </div> -->

                <!-- <div class="form-group">
                  <label>Ijasah atau Surat Ketarangan dari Sekolah (.pdf file maksimal 5 MB)</label>
                 <input type="file" name="ijasah" id="ijasah" class="form-control">
                </div> -->
               
                <button type="submit" class="btn btn-primary">Simpan</button>
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