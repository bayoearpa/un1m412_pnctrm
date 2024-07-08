    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Rekap Seleksi Samapta</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                    <form method="post" action="<?php echo base_url() ?>koperasi/preview_cetak">
                    <div class="form-group">
                    <label> Pilih Jalur Pendaftaran</label>
                    <select onchange="toggleGelombangForm()" name="jalur" id="jalur" class="form-control" style="width:50%;">  
                    <option selected>== Pilih ==</option>
                    <option value="gdr1">Gelombang Dini</option>
                    <option value="reguler">Reguler</option>                       
                    </select> 
                    </div>  
                    <div class="form-group">
                    <label> Pilih Program Studi</label>
                    <select name="prodi" id="prodi" class="form-control" style="width:50%;">  
                    <option selected>== Pilih ==</option>
                    <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Trasnportasi</option>
                    <option value="5">S1 Teknik Transportasi Laut</option>
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Keselamatan</option>
                    <option value="8">S1 Perdagangan Internasional</option>
                    <option value="9">D4 MPLM</option> 
                    <option value="10">S1 Bisnis Digital</option>      
                    </select> 
                    </div>
                    <div class="form-group">
                    <label> Pilih Gelombang Pendaftaran</label>
                    <select name="gelombang" id="gelombang" class="form-control" style="width:50%;">  
                    <option selected>== Pilih ==</option>
                    <option value="1">Gelombang 1</option>
                    <option value="2">Gelombang 2</option>               
                    <option value="3">Gelombang 3</option>
                    </select> 
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-block btn-success" id="cek" name="cek" style="width:20%;" value="Klik Untuk Export ke Excel">
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