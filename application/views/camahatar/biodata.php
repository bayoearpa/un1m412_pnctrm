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
                if ($this->session->userdata('jalur')=="kelastransfer" || $this->session->userdata('jalur')=="gdr2") {
                  # code... 
                  //form biodata untuk kelas transfer ?>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Harap diperhatikan!</h4>
                    Silakan mengisi form biodata di bawah ini dan pastikan semua terisi dengan benar, karena setelah proses validasi data tidak dapat di perbaiki. terima kasih.
                </div>
                <?php foreach ($catar as $key) {
                  # code... ?>
                 <?php echo validation_errors(); 
            echo $this->session->flashdata('success');
            echo $this->session->flashdata('error'); ?>
                  <form action="<?php echo base_url() ?>proses_biodata" name="form1" id="form1" method="post" enctype="multipart/form-data">
                  <!-- <p>Jalur : Kelas Transfer</p>  -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $this->session->userdata('nama') ?>" placeholder="Masukan Nama Anda">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">NIK (Nomor Induk Kependudukan)</label>
                  <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $key->nik?>" placeholder="Masukan NIK Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tl" name="tl" value="<?php echo $key->tl?>"  placeholder="Masukan Tempat Lahir Anda">
                </div>

                <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir (yyyy-mm-dd / tahun-bulan-hari)</label>
                       <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control" data-date-format="yyyy-mm-dd" data-link-format="yyyy-mm-dd" name="tgl_l" id="tgl_l" value="<?php echo $key->tgl_l?>">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                      </div>                      
                </div>
                 <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama" id="agama">
                    <option value="<?php echo $key->agama?>"><?php echo $key->agama?></option>
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
                      <input type="radio" name="jk" id="jk" value="Pria" <?php echo ($key->jk == "Pria") ? 'checked' : ''; ?>>
                      Pria
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Wanita" <?php echo ($key->jk == "Wanita") ? 'checked' : ''; ?>>
                      Wanita
                    </label>
                  </div>
                </div>
                 <!-- <div class="form-group"> -->
                  <!-- <label for="exampleInputEmail1">Berat Badan</label> -->
                  <input type="hidden" class="form-control" id="bb" name="bb" placeholder="Masukan Berat Badan Anda (Masukkan dalam Kg)" value="<?php echo $key->bb?>">
                <!-- </div> -->
                 <!-- <div class="form-group"> -->
                  <!-- <label for="exampleInputEmail1">Tinggi Badan</label> -->
                  <input type="hidden" class="form-control" id="tb" name="tb" placeholder="Masukan Tinggi Badan Anda (Masukkan dalam Cm)" value="<?php echo $key->tb?>">
                <!-- </div> -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $key->email?>" placeholder="Masukkan Email anda)">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat Anda"><?php echo $key->alamat ?></textarea>
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Provinsi</label>
                  <select class="form-control" name="provinsi" id="provinsi" class="provinsi">
                  <option value="<?php echo $key->provinsi?>"><?php echo $getprovinsi; ?> </option>
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
                  <option value="<?php echo $key->ktkb?>"><?php echo $getktkb; ?> </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. / Hp</label>
                  <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $key->telp?>" placeholder="Masukan No. Telepon atau Hp Anda">
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
                  <input type="text" class="form-control" id="prodi_lama" name="prodi_lama" value="<?php echo $key->prodi_lama?>" placeholder="Masukan Prodi lama anda">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Lulus</label>
                  <input type="text" class="form-control" id="thn_lulus" name="thn_lulus" placeholder="Masukan Tahun Lulus Anda" value="<?php echo $key->thn_lulus?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Asal Pergurunan Tinggi sebelumnya</label>
                  <input type="text" class="form-control" id="asek" name="asek" placeholder="Masukan Pergurunan Tinggi sebelumnya" value="<?php echo $key->asek?>">
                </div>
                <div class="form-group">
                  <label>Alamat Pergurunan Tinggi Sebelumnya</label>
                  <textarea class="form-control" name="alamat_sek" id="alamat_sek" rows="3" placeholder="Masukkan Alamat Pergurunan Tinggi sebelumnya" value="<?php echo $key->alamat_sek?>"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ayah Kandung</label>
                  <input type="text" class="form-control" id="nama_a" name="nama_a" placeholder="Masukan Nama Ayah Anda" value="<?php echo $key->nama_a?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu Kandung</label>
                  <input type="text" class="form-control" id="nama_i" name="nama_i" placeholder="Masukan Nama Ibu Anda" value="<?php echo $key->nama_i?>">
                </div>
                <div class="form-group">
                  <label>Alamat Orang Tua / Wali</label>
                  <textarea class="form-control" name="alamat_ortu" id="alamat_ortu" rows="3" placeholder="Masukkan Alamat Orang Tua atau Wali Anda"><?php echo $key->alamat_ortu; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. Orang Tua / Wali</label>
                  <input type="text" class="form-control" id="telp_ortu" name="telp_ortu" placeholder="Masukan No. Telepon Orang Tua atau Wali Anda" value="<?php echo $key->telp_ortu?>">
                </div>
                <div class="form-group">
                  <label>Informasi (mendapatkan informasi tentang UNIMAR "AMNI" Semarang)</label>
                  <select class="form-control" name="informasi" id="informasi">
                    <option value="<?php echo $key->informasi?>"><?php echo $informasi; ?> </option>
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
                    <option value="<?php echo $key->prodi?>"><?php echo $nmprodi; ?> </option>
                   <!--  <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option> -->
                    <option value="4">S1 Transportasi</option>
                  <!--   <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option> -->
                  </select>
                </div>
               <!--   <div class="form-group">
                  <label>Prodi Pilihan 2</label>
                  <select class="form-control" name="prodi2" id="prodi2">
                    <option value="<?php //echo $key->prodi2?>"> </option>
                    <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Transportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>
                  </select>
                </div> -->
               <!--  <div class="form-group">
                  <label>Periode</label>
                  <select class="form-control" name="gelombang" id="gelombang">
                    <option value="<?php //echo $key->gelombang?>"> </option>
                    <option value="1">Gelombang 1</option> -->
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
                 <!--  </select>
                </div> -->
                <input type="hidden" name="gelombang" value="<?php echo $gel?>">
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
               
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <?php } ?>

                <?php }else{  ///////////////////// form reguler/////////////////////?>
                   <?php echo validation_errors(); 
            echo $this->session->flashdata('success');
            echo $this->session->flashdata('error'); ?>
                            <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Harap diperhatikan!</h4>
                    Silakan mengisi form biodata di bawah ini dan pastikan semua terisi dengan benar, karena setelah proses validasi data tidak dapat di perbaiki. terima kasih.
                </div>
                <?php foreach ($catar as $key) {
                  # code... ?>
              <form action="<?php echo base_url() ?>proses_biodata" name="form1" id="form1" method="post" enctype="multipart/form-data"> 
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $key->nama?>" placeholder="Masukan Nama Anda">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">NIK (Nomor Induk Kependudukan)</label>
                  <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $key->nik?>" placeholder="Masukan NIK Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tl" name="tl" placeholder="Masukan Tempat Lahir Anda" value="<?php echo $key->tl?>">
                </div>

                <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir (yyyy-mm-dd / tahun-bulan-hari)</label>
                       <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control" data-date-format="yyyy-mm-dd" data-link-format="yyyy-mm-dd" name="tgl_l" id="tgl_l" value="<?php echo $key->tgl_l?>">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                      </div>                      
                </div>
                 <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama" id="agama">
                    <option value="<?php echo $key->agama?>"><?php echo $key->agama?></option>
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
                      <input type="radio" name="jk" id="jk" value="Pria" <?php echo ($key->jk == "Pria") ? 'checked' : ''; ?>>
                      Pria
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Wanita" <?php echo ($key->jk == "Wanita") ? 'checked' : ''; ?>>
                      Wanita
                    </label>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" id="bb" name="bb" placeholder="Masukan Berat Badan Anda (Masukkan dalam Kg)" value="<?php echo $key->bb?>" >
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" id="tb" name="tb" placeholder="Masukan Tinggi Badan Anda (Masukkan dalam Cm)" value="<?php echo $key->tb?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email anda)" value="<?php echo $key->email?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat Anda"><?php echo $key->alamat; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Provinsi</label>
                  <select class="form-control" name="provinsi" id="provinsi" class="provinsi">
                  <option value="<?php echo $key->provinsi?>"><?php echo $getprovinsi; ?> </option>
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
                  <option value="<?php echo $key->ktkb?>"><?php echo $getktkb; ?> </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. / Hp</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan No. Telepon atau Hp Anda" value="<?php echo $key->telp?>">
                </div>
                <div class="form-group">
                  <label>Kategori Sekolah</label>
                  <select class="form-control" name="kategori_sek" id="kategori_sek">
                    <option value="<?php echo $key->kategori_sek?>"><?php echo $key->kategori_sek; ?> </option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="MA">MA</option>
                  </select>
                </div>
                   <!-- /.form-group -->
                <div class="form-group">
                  <label>Jurusan SLTA/SMK</label>
                  <select class="form-control select2" id="prodi_lama" name="prodi_lama" style="width: 100%;">
                    <option value="<?php echo $key->prodi_lama?>"><?php echo $key->prodi_lama ?> </option>
                    <?php foreach ($jurusan as $j): ?>
                      <option value="<?php echo $j->nama_jurusan; ?>"><?php echo $j->nama_jurusan; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Lulus</label>
                  <input type="text" class="form-control" id="thn_lulus" name="thn_lulus" placeholder="Masukan Tahun Lulus Anda" value="<?php echo $key->thn_lulus?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Asal Sekolah SLTA/SMK</label>
                  <input type="text" class="form-control" id="asek" name="asek" placeholder="Masukan Asal Sekolah Anda" value="<?php echo $key->asek?>">
                </div>
                <div class="form-group">
                  <label>Alamat Sekolah SLTA/SMK</label>
                  <textarea class="form-control" name="alamat_sek" id="alamat_sek" rows="3" placeholder="Masukkan Alamat Sekolah Anda"><?php echo $key->alamat_sek; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ayah Kandung</label>
                  <input type="text" class="form-control" id="nama_a" name="nama_a" placeholder="Masukan Nama Ayah Anda" value="<?php echo $key->nama_a?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu Kandung</label>
                  <input type="text" class="form-control" id="nama_i" name="nama_i" placeholder="Masukan Nama Ibu Anda" value="<?php echo $key->nama_i?>">
                </div>
                <div class="form-group">
                  <label>Alamat Orang Tua / Wali</label>
                  <textarea class="form-control" name="alamat_ortu" id="alamat_ortu" rows="3" placeholder="Masukkan Alamat Orang Tua atau Wali Anda"><?php echo $key->alamat_ortu; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telp. Orang Tua / Wali</label>
                  <input type="text" class="form-control" id="telp_ortu" name="telp_ortu" placeholder="Masukan No. Telepon Orang Tua atau Wali Anda" value="<?php echo $key->telp_ortu?>">
                </div>
                <div class="form-group">
                  <label>Informasi (mendapatkan informasi tentang UNIMAR AMNI Semarang)</label>
                  <select class="form-control" name="informasi" id="informasi">
                    <option value="<?php echo $key->informasi?>"> <?php echo $informasi; ?> </option>
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
                    <option value="<?php echo $key->prodi?>"> <?php echo $nmprodi ?> </option>
                    <option value="9">D4 Manajemen Pelabuhan dan Logistik Maritim</option>
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
                    <option value="<?php echo $key->prodi2?>"> <?php echo $nmprodi2 ?> </option>
                    <option value="9">D4 Manajemen Pelabuhan dan Logistik Maritim</option>
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
                <!-- <div class="form-group">
                  <label>Periode</label>
                  <select class="form-control" name="gelombang" id="gelombang">
                    <option value="<?php //echo $key->gelombang?>"> </option>
                    <option value="1">Gelombang 1</option> -->
                   <!-- <option value="2">Gelombang 2</option> -->
                    <!-- <option value="3">Gelombang 3</option> -->
                 <!--  </select>
                </div> -->
                <input type="hidden" name="gelombang" value="<?php echo $gel ?>">
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
              <?php }} ?>

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