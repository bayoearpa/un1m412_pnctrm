    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Rekap Psykotest </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                  <div class="form-group">
                      <form method="post" action="<?php echo base_url() ?>baak/rekap_pdf_psykotest">
                      <label> Pilih Jurusan
                    </label>
                    <select name="prodi" id="prodi" class="form-control" style="width:50%;">  
                    <option selected>== Pilih ==</option>
                    <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Trasnportasi</option>
                    <option value="5">S1 Trasnportasi (Lintas Jalur)</option>   
                    <option value="6">S1 Teknik Mesin</option>
                    <option value="7">S1 Teknik Transportasi Laut</option>
                    <option value="8">S1 Teknik Keselamatan</option>
                    <option value="9">S1 Perdagangan Internasional</option>                     
                    </select> 
                    <input type="hidden" name="gelombang" id="gelombang" value="20181">
                    </div>
                                         <div class="form-group">
 
                      <label> Pilih Jenis Kelamin
                    </label>
                    <select name="jk" id="jk" class="form-control" style="width:50%;">  
                    <option selected>== Pilih ==</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>                       
                    </select> 
                    </div>
                                        <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Pelaksanaan</label>
                       <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control" data-date-format="yyyy-mm-dd" data-link-format="yyyy-mm-dd" name="tgl" id="tgl">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                      </div>                      
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