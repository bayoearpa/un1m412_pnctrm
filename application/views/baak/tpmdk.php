 <!-- Main content -->
      <section class="content">

        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Form Pendaftaran</h3>
          </div>
          <div class="box-body">

              <form action="<?php echo base_url() ?>baak/insert_pmdk" name="form1" id="form1" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">
                </div>
               <!--  <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tl" name="tl" placeholder="Masukan Tempat Lahir Anda">
                </div> -->

               <!--  <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir (yyyy-mm-dd / tahun-bulan-hari)</label>
                       <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control" data-date-format="yyyy-mm-dd" data-link-format="yyyy-mm-dd" name="tgl_l" id="tgl_l">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                      </div>                      
                </div> -->
                 <!-- <div class="form-group">
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
                </div> -->
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
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat Anda"></textarea>
                </div>
<!--                 <div class="form-group">
                  <label for="exampleInputEmail1">Kota / Kabupaten</label>
                  <input type="text" class="form-control" id="ktkb" name="ktkb" placeholder="Masukan Kota atau Kabupaten Anda">
                </div> -->
<!--                 <div class="form-group">
                  <label for="exampleInputEmail1">Provinsi</label>
                  <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Masukan Provinsi Anda">
                </div> -->
<!--                 <div class="form-group">
                  <label for="exampleInputEmail1">Telp. / Hp</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan No. Telepon atau Hp Anda">
                </div> -->
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
                  <label>Jurusan (SMA/SMK)</label>
                  <select class="form-control select2" id="prodi_lama" name="prodi_lama" style="width: 100%;">
                    <option> </option>
                    <?php foreach ($jurusan as $j): ?>
                      <option value="<?php echo $j->nama_jurusan; ?>"><?php echo $j->nama_jurusan; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!-- /.form-group -->
<!--                 <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Lulus</label>
                  <input type="text" class="form-control" id="thn_lulus" name="thn_lulus" placeholder="Masukan Tahun Lulus Anda">
                </div> -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Asal Sekolah</label>
                  <input type="text" class="form-control" id="asek" name="asek" placeholder="Masukan Asal Sekolah Anda">
                </div>
               <!--  <div class="form-group">
                  <label>Alamat Sekolah</label>
                  <textarea class="form-control" name="alamat_sek" id="alamat_sek" rows="3" placeholder="Masukkan Alamat Sekolah Anda"></textarea>
                </div> -->
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ayah Kandung</label>
                  <input type="text" class="form-control" id="nama_a" name="nama_a" placeholder="Masukan Nama Ayah Anda">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ibu Kandung</label>
                  <input type="text" class="form-control" id="nama_i" name="nama_i" placeholder="Masukan Nama Ibu Anda">
                </div> -->
                <!-- <div class="form-group">
                  <label>Alamat Orang Tua / Wali</label>
                  <textarea class="form-control" name="alamat_ortu" id="alamat_ortu" rows="3" placeholder="Masukkan Alamat Orang Tua atau Wali Anda"></textarea>
                </div> -->
               <!--  <div class="form-group">
                  <label for="exampleInputEmail1">Telp. Orang Tua / Wali</label>
                  <input type="text" class="form-control" id="telp_ortu" name="telp_ortu" placeholder="Masukan No. Telepon Orang Tua atau Wali Anda">
                </div> -->
                <div class="form-group">
                  <label>Prodi yang Dipilih</label>
                  <select class="form-control" name="prodi" id="prodi">
                    <option> </option>
                    <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Manajemen Transpor</option>
                    <option value="5">S1 Manajemen Transpor (Lintas Jalur)</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Gelombang</label>
                  <select class="form-control" name="gelombang" id="gelombang">
                    <option> </option>
                    <option value="20191">Gelombang I</option>
                    <option value="20192">Gelombang II</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan dan Cetak</button>
                </form>


          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->