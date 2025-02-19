    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Ukur Pakaian</h3>
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
                    Anda harus lulus Seleksi terlebih dahulu untuk dapat mengakses halaman ini. terima kasih.
                </div> 

           <?php }else{ ?>
                <?php  foreach ($catar as $c) { ?>
                   

                 <?php if ($ukurpakaian == null) {
                   # code... ?>
                  <p>Sebelum mengisi form ukuran pakaian diwajibkan membaca panduan pengisian ukuran pakaian yang tersedia dibawah ini:</p>
                  <a href="<?php echo base_url() ?>download_panduan_pengisian_form_ukur_pakaian?>" target="__blank"><button type="button" class="btn btn-primary">Download Panduan Pengisian Ukuran Pakaian</button></a>
                  <?php echo validation_errors(); 
                  echo $this->session->flashdata('success');
                  echo $this->session->flashdata('error'); ?>
                  <form action="<?php echo base_url() ?>prosesukurpakaian" name="form1" id="form1" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="no" id="no" value="<?php echo $this->session->userdata('no'); ?>">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Link File KTP" value="<?php echo $c->nama ?>" readonly>
                  </div> 
                   <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Pria">
                      Laki-Laki
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Wanita" >
                      Perempuan
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Wanita_kerudung" >
                      Perempuan (Berjilbab)
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Program Studi :</label>
                  <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukan Link File KTP" value="<?php echo $camhtar->prodi($c->prodi) ?>" readonly>
                  <input type="hidden" name="prodix" id="prodix" value="<?php echo $c->prodi ?>">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Hp/ Wa :</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan Link File KTP" value="<?php echo $c->telp ?>" readonly>
                  <input type="hidden" name="jalur" value="<?php echo $c->jalur ?>">
                  </div>

                  <hr>

                  <?php 

                  if ($c->prodi == "1" || $c->prodi == "2" || $c->prodi == "3" || $c->prodi == "9" ) {
                    # code...
                  ?>

                  <h5><b>Pilih salah satu :</b></h5>

                   <div class="form-group">
                  <label for="exampleInputEmail1">Ukuran Sepatu :</label>
                 <select class="form-control" name="ukuran_sepatu" id="ukuran_sepatu" required="">
                    <option>--Pilih Ukuran Sepatu--</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="ukuran_sepatu_lainnya" id="ukuran_sepatu_lainnya" placeholder="Silakan isi Ukuran Sepatu lainnya">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Topi Pet* :</label>
                 <select class="form-control" name="topipet" id="topipet" required="">
                    <option>--Pilih Ukuran Topi Pet--</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                    <option value="57">57</option>
                    <option value="58">58</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="topipet_lainnya" id="topipet_lainnya" placeholder="Silakan isi Ukuran Topi Pet lainnya">
                  </div>

                   <div class="form-group">
                  <label for="exampleInputEmail1">Seragam PDL :</label>
                 <select class="form-control" name="seragam_pdl" id="seragam_pdl" required="">
                    <option>--Pilih Ukuran Seragam PDL--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="seragam_pdl_lainnya" id="seragam_pdl_lainnya" placeholder="Silakan isi Ukuran Seragam PDL lainnya">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Training Pack :</label>
                 <select class="form-control" name="training_pack" id="training_pack" required="">
                    <option>--Pilih Ukuran Training Pack--</option>
                   <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXL">XXXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="training_pack_lainnya" id="training_pack_lainnya" placeholder="Silakan isi Ukuran Training Pack lainnya">
                  </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">Wearpack :</label>
                 <select class="form-control" name="wearpack" id="wearpack" required="">
                    <option>--Pilih Ukuran Wearpack--</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXL">XXXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="wearpack_lainnya" id="wearpack_lainnya" placeholder="Silakan isi Ukuran Wearpack lainnya">
                  </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">Kaos olahraga :</label>
                 <select class="form-control" name="kaos_or" id="kaos_or" required="">
                    <option>--Pilih Ukuran Kaos Olahraga--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="kaos_or_lainnya" id="kaos_or_lainnya" placeholder="Silakan isi Ukuran Kaos Olahraga lainnya">
                  </div>
                 <!--  <div class="form-group">
                  <label for="exampleInputEmail1">Baju Renang :</label>
                 <select class="form-control" name="baju_renang" id="baju_renang" required="">
                    <option>--Pilih Ukuran Baju Renang--</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXL">XXXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="baju_renang_lainnya" id="baju_renang_lainnya" placeholder="Silakan isi Ukuran Baju Renang lainnya">
                  </div> -->
                   <div class="form-group">
                  <label for="exampleInputEmail1">DOGI* :</label>
                 <select class="form-control" name="dogi" id="dogi" required="">
                    <option>--Pilih Ukuran DOGI--</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan :</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan Link File KTP" value="<?php echo $c->tb ?>" readonly>
                  </div>

                  <hr>
                  <h5><b><u>SERAGAM DINAS*</u></b></h5>
                  <p><b>Seragam PDH & Seragam PDUB</b></p>
                   <div class="form-group">
                  <label for="exampleInputEmail1">-Kemeja :</label>
                 <select class="form-control" name="pdhpdub_kemeja" id="pdhpdub_kemeja" required="">
                    <option>--Pilih Ukuran Kemeja untuk seragam Seragam PDH & Seragam PDUB--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="pdhpdub_kemeja_lainnya" id="pdhpdub_kemeja_lainnya" placeholder="Silakan isi Ukuran Kemeja untuk Seragam PDH & Seragam PDUB lainnya">
                  </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">-Celana :</label>
                 <select class="form-control" name="pdhpdub_celana" id="pdhpdub_celana" required="">
                    <option>--Pilih Ukuran Celana untuk seragam Seragam PDH & Seragam PDUB--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="pdhpdub_celana_lainnya" id="pdhpdub_celana_lainnya" placeholder="Silakan isi Ukuran Celana untuk Seragam PDH & Seragam PDUB lainnya">
                  </div>

                  <hr>

                   <div class="form-group">
                  <label for="exampleInputEmail1"> Jas PDPM :</label>
                 <select class="form-control" name="jaspdpm" id="jaspdpm" required="">
                    <option>--Pilih Ukuran Jas PDPM--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="jaspdpm_lainnya" id="jaspdpm_lainnya" placeholder="Silakan isi Ukuran Jas PDPM lainnya">
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>


                <?php }else{ ?>

                <!-- selain Kemartiman -->
                <h5><b>Pilih salah satu :</b></h5>
                <center><img src="<?php echo base_url() ?>assets/download/list_uk_jas_almamater.jpg" width="75%"></center>
                <center><p>Tabel diatas untuk ukuran Jas Almamater</p></center>
                <br>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Jas Almamater :</label>
                 <select class="form-control" name="jas_almamater" id="jas_almamater" required="">
                    <option>--Pilih Ukuran Jas Almamater--</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="3XL">3XL</option>
                    <option value="5XL">5XL</option>
                    <option value="8XL">8XL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="jas_almamater_lainnya" id="jas_almamater_lainnya" placeholder="Silakan isi Ukuran Baju Renang lainnya">
                  </div>

                   <div class="form-group">
                  <label for="exampleInputEmail1">Ukuran Sepatu :</label>
                 <select class="form-control" name="ukuran_sepatu" id="ukuran_sepatu" required="">
                    <option>--Pilih Ukuran Sepatu--</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="ukuran_sepatu_lainnya" id="ukuran_sepatu_lainnya" placeholder="Silakan isi Ukuran Sepatu lainnya">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Topi Pet* :</label>
                 <select class="form-control" name="topipet" id="topipet" required="">
                    <option>--Pilih Ukuran Topi Pet--</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                    <option value="57">57</option>
                    <option value="58">58</option>
                    <option value="59">59</option>
                    <option value="60">60</option>
                  </select>
                  </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">Seragam PDL :</label>
                 <select class="form-control" name="seragam_pdl" id="seragam_pdl" required="">
                    <option>--Pilih Ukuran Seragam PDL--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="seragam_pdl_lainnya" id="seragam_pdl_lainnya" placeholder="Silakan isi Ukuran Seragam PDL lainnya">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Training Pack :</label>
                 <select class="form-control" name="training_pack" id="training_pack" required="">
                    <option>--Pilih Ukuran Training Pack--</option>
                   <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXL">XXXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="training_pack_lainnya" id="training_pack_lainnya" placeholder="Silakan isi Ukuran Training Pack lainnya">
                  </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">Wearpack :</label>
                 <select class="form-control" name="wearpack" id="wearpack" required="">
                    <option>--Pilih Ukuran Wearpack--</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXL">XXXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="wearpack_lainnya" id="wearpack_lainnya" placeholder="Silakan isi Ukuran Wearpack lainnya">
                  </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">Kaos olahraga :</label>
                 <select class="form-control" name="kaos_or" id="kaos_or" required="">
                    <option>--Pilih Ukuran Kaos Olahraga--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="kaos_or_lainnya" id="kaos_or_lainnya" placeholder="Silakan isi Ukuran Kaos Olahraga lainnya">
                  </div>
                 <!--  <div class="form-group">
                  <label for="exampleInputEmail1">Baju Renang :</label>
                 <select class="form-control" name="baju_renang" id="baju_renang" required="">
                    <option>--Pilih Ukuran Baju Renang--</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXL">XXXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="baju_renang_lainnya" id="baju_renang_lainnya" placeholder="Silakan isi Ukuran Baju Renang lainnya">
                  </div> -->
                   <div class="form-group">
                  <label for="exampleInputEmail1">DOGI* :</label>
                 <select class="form-control" name="dogi" id="dogi" required="">
                    <option>--Pilih Ukuran DOGI--</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan :</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan Link File KTP" value="<?php echo $c->tb ?>" readonly>
                  </div>

                  <hr>
                  <h5><b><u>SERAGAM DINAS*</u></b></h5>
                  <p><b>Seragam PDH & Seragam PDUB</b></p>
                   <div class="form-group">
                  <label for="exampleInputEmail1">-Kemeja :</label>
                 <select class="form-control" name="pdhpdub_kemeja" id="pdhpdub_kemeja" required="">
                    <option>--Pilih Ukuran Kemeja untuk seragam Seragam PDH & Seragam PDUB--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="pdhpdub_kemeja_lainnya" id="pdhpdub_kemeja_lainnya" placeholder="Silakan isi Ukuran Kemeja untuk Seragam PDH & Seragam PDUB lainnya">
                  </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">-Celana :</label>
                 <select class="form-control" name="pdhpdub_celana" id="pdhpdub_celana" required="">
                    <option>--Pilih Ukuran Celana untuk seragam Seragam PDH & Seragam PDUB--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="pdhpdub_celana_lainnya" id="pdhpdub_celana_lainnya" placeholder="Silakan isi Ukuran Celana untuk Seragam PDH & Seragam PDUB lainnya">
                  </div>

                 <!--  <hr>

                   <div class="form-group">
                  <label for="exampleInputEmail1"> Jas PDPM :</label>
                 <select class="form-control" name="jaspdpm" id="jaspdpm" required="">
                    <option>--Pilih Ukuran Jas PDPM--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="jaspdpm_lainnya" id="jaspdpm_lainnya" placeholder="Silakan isi Ukuran Jas PDPM lainnya">
                  </div> -->
                  <button type="submit" class="btn btn-primary">Simpan</button>
                <?php } ?>
                <?php }else{ ?>           
               <center><h4><b>Anda sudah mengisi form ukur pakaian, silakan cek kembali hasil inputan anda dibawah ini :</b><span class="badge bg-green"><i class="fa fa-check"></i></span></h4></center>
                <!-- --------reguler
                  ukuran Sepatu
                  topi pet
                  seagam PDL
                  training pack
                  wearpack
                  kaos olahraga
                  dogi

                  seragam dinas
                  - seragam PDH & seragam PDUB
                  --kemeja
                  --celana

                  jas PDPM

                  ----- reguler non maritim

                  jas almamater
                  ukuran sepatu
                  topi pet
                  seragam PDL
                  training pack
                  wearpack
                  kaos olahraga
                  dogi

                  seragam dinas
                  - seragam PDH & seragam PDUB
                  --kemeja
                  --celana
                 -->
               <?php if ($c->prodi == "1" || $c->prodi == "2" || $c->prodi == "3" || $c->prodi == "9" ) { 

                  foreach ($ukurpakaian_data as $key) {
                    # code...

                ?>


                <table>
                  <tr>
                   <td>Jas PDPM</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->jaspdpm == "lainnya") {
                        # code...
                        echo $key->jaspdpm_lainnya;
                      }else{
                        echo $key->jaspdpm;
                      }
                     ?></td>
                  </tr>
                  <tr>
                    <td>Ukuran Sepatu</td>
                    <td>:</td>
                    <td><?php echo $key->ukuran_sepatu; ?></td>
                  </tr>
                  <tr>
                    <td>Topi Pet</td>
                    <td>:</td>
                    <td><?php echo $key->topi_pet; ?></td>
                  </tr>
                  <tr>
                    <td>Seragam PDL</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->seragam_pdl == "lainnya") {
                        # code...
                        echo $key->seragam_pdl_lainnya;
                      }else{
                        echo $key->seragam_pdl;
                      }
                     ?></td>
                  </tr>
                  <tr>
                    <td>Training Pack</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->training_pack == "lainnya") {
                        # code...
                        echo $key->training_pack_lainnya;
                      }else{
                        echo $key->training_pack;
                      }
                     ?></td>
                  </tr>
                  <tr>
                    <td>Wearpack</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->wearpack == "lainnya") {
                        # code...
                        echo $key->wearpack_lainnya;
                      }else{
                        echo $key->wearpack;
                      }
                     ?></td>
                  </tr>
                   <tr>
                    <td>Kaos Olahraga</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->kaos_or == "lainnya") {
                        # code...
                        echo $key->kaos_or_lainnya;
                      }else{
                        echo $key->kaos_or;
                      }
                     ?></td>
                  </tr>

                  <tr>
                    <td>Dogi</td>
                    <td>:</td>
                    <td><?php echo $key->dogi; ?></td>
                  </tr>
                  <tr>
                    <td colspan="3">Seragam PDH & Seragam PDUB</td>
                  </tr>
                  <tr>
                    <td>Kemeja</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->pdhpdub_kemeja == "lainnya") {
                        # code...
                        echo $key->pdhpdub_kemeja_lainnya;
                      }else{
                        echo $key->pdhpdub_kemeja;
                      }
                     ?></td>
                  </tr>
                   <tr>
                    <td>Celana</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->pdhpdub_celana == "lainnya") {
                        # code...
                        echo $key->pdhpdub_celana_lainnya;
                      }else{
                        echo $key->pdhpdub_celana;
                      }
                     ?></td>
                  </tr>
                </table>


               <?php }}else{ ?>

                <table>
                  <tr>
                   <td>Jas Almamater</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->jas_almamater == "lainnya") {
                        # code...
                        echo $key->jas_almamater_lainnya;
                      }else{
                        echo $key->jas_almamater;
                      }
                     ?></td>
                  </tr>
                  <tr>
                    <td>Ukuran Sepatu</td>
                    <td>:</td>
                    <td><?php echo $key->ukuran_sepatu; ?></td>
                  </tr>
                  <tr>
                    <td>Topi Pet</td>
                    <td>:</td>
                    <td><?php echo $key->topi_pet; ?></td>
                  </tr>
                  <tr>
                    <td>Seragam PDL</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->seragam_pdl == "lainnya") {
                        # code...
                        echo $key->seragam_pdl_lainnya;
                      }else{
                        echo $key->seragam_pdl;
                      }
                     ?></td>
                  </tr>
                  <tr>
                    <td>Training Pack</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->training_pack == "lainnya") {
                        # code...
                        echo $key->training_pack_lainnya;
                      }else{
                        echo $key->training_pack;
                      }
                     ?></td>
                  </tr>
                  <tr>
                    <td>Wearpack</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->wearpack == "lainnya") {
                        # code...
                        echo $key->wearpack_lainnya;
                      }else{
                        echo $key->wearpack;
                      }
                     ?></td>
                  </tr>
                   <tr>
                    <td>Kaos Olahraga</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->kaos_or == "lainnya") {
                        # code...
                        echo $key->kaos_or_lainnya;
                      }else{
                        echo $key->kaos_or;
                      }
                     ?></td>
                  </tr>

                  <tr>
                    <td>Dogi</td>
                    <td>:</td>
                    <td><?php echo $key->dogi; ?></td>
                  </tr>
                  <tr>
                    <td colspan="3">Seragam PDH & Seragam PDUB</td>
                  </tr>
                  <tr>
                    <td>Kemeja</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->pdhpdub_kemeja == "lainnya") {
                        # code...
                        echo $key->pdhpdub_kemeja_lainnya;
                      }else{
                        echo $key->pdhpdub_kemeja;
                      }
                     ?></td>
                  </tr>
                   <tr>
                    <td>Celana</td>
                    <td>:</td>
                    <td><?php 
                      if ($key->pdhpdub_celana == "lainnya") {
                        # code...
                        echo $key->pdhpdub_celana_lainnya;
                      }else{
                        echo $key->pdhpdub_celana;
                      }
                     ?></td>
                  </tr>
                </table>
                <?php }} ?>
                
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