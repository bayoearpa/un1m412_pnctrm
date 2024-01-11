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
                  <form action="<?php echo base_url() ?>proses_seleksi_gdtf" name="form1" id="form1" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="no" id="no" value="<?php echo $this->session->userdata('no'); ?>">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Link File KTP" value="<?php echo $c->nama ?>">
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
                  <label for="exampleInputEmail1">Program Studi</label>
                  <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukan Link File KTP" value="<?php echo $camhtar->prodi($c->prodi) ?>">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Hp/ Wa</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan Link File KTP" value="<?php echo $c->telp ?>">
                  </div>

                  <hr>

                  <h5><b>Pilih salah satu :</b></h5>

                   <div class="form-group">
                  <label for="exampleInputEmail1">Ukuran Sepatu</label>
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