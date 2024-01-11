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
            <?php }else if ($validasi == null) { 
              # code... ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Maaf!</h4>
                    Silakan melakukan pembayaran terlebih dahulu untuk dapat mengakses halaman ini. terima kasih.
                </div> 

           <?php }else{ ?>
                <?php  foreach ($catar as $c) { ?>
                   

                 <?php if ($ukurpakaian == null): ?>
                  <p>Sebelum mengisi form ukuran pakaian diwajibkan membaca panduan pengisian ukuran pakaian yang tersedia dibawah ini:</p>
                  <a href="<?php echo base_url() ?>download_supersehatreg?>" target="__blank"><button type="button" class="btn btn-primary">Download Panduan Pengisian Ukuran Pakaian</button></a>
                  <form action="<?php echo base_url() ?>proses_seleksi_gdtf" name="form1" id="form1" method="post" enctype="multipart/form-data">
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
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Hp/ Wa :</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan Link File KTP" value="<?php echo $c->telp ?>" readonly>
                  </div>

                  <hr>

                  <h5><b>Pilih salah satu :</b></h5>

                   <div class="form-group">
                  <label for="exampleInputEmail1">Ukuran Sepatu :</label>
                 <select class="form-control" name="ukuran_sepatu" id="ukuran_sepatu">
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
                 <select class="form-control" name="topipet" id="topipet">
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
                 <select class="form-control" name="seragam_pdl" id="seragam_pdl">
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
                 <select class="form-control" name="training_pack" id="training_pack">
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
                 <select class="form-control" name="wearpack" id="wearpack">
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
                 <select class="form-control" name="kaos_or" id="kaos_or">
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
                  <div class="form-group">
                  <label for="exampleInputEmail1">Baju Renang :</label>
                 <select class="form-control" name="baju_renang" id="baju_renang">
                    <option>--Pilih Ukuran Baju Renang--</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXL">XXXL</option>
                    <option value="lainnya">lainnya</option>
                  </select>
                  <input type="text" class="form-control" name="baju_renang_lainnya" id="baju_renang_lainnya" placeholder="Silakan isi Ukuran Baju Renang lainnya">
                  </div>
                   <div class="form-group">
                  <label for="exampleInputEmail1">DOGI* :</label>
                 <select class="form-control" name="dogi" id="dogi">
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
                 <select class="form-control" name="pdhpdub_kemeja" id="pdhpdub_kemeja">
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
                 <select class="form-control" name="pdhpdub_celana" id="pdhpdub_celana">
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
                 <select class="form-control" name="jaspdpm" id="jaspdpm">
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

                  </form>          
                <?php endif ?>             
               
               
                
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