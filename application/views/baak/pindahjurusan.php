    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pencatarma</h3>
            </div>             
            <!-- /.box-header -->
            <div class="box-body">
                <!-- Main content -->
                <?php 
                foreach($catar as $c){ 
                 ?>
    <section class="invoice">
      <!-- title row -->
      <div class="row">
      <a href="<?php echo base_url() ?>baak/"><button type="button" class="btn btn-success pull-right"><i class="fa fa-chevron-left"></i>Kembali
          </button></a>
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Detail
            <small class="pull-right">Tanggal : <?php echo date("d-m-Y"); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Data
          <address>
            <strong>Nama</strong><br>
            Tempat Lahir<br>
            Tanggal Lahir<br>
            Nama Ibu<br>
            Jenis Kelamin<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Keterangan
          <address>
            <strong><?php echo $c->nama ?></strong><br>
            <?php echo $c->tl ?><br>
            <?php echo $c->tgl_l ?><br>
            <?php echo $c->nama_i ?><br>
            <?php echo $c->jk ?> <br>

          </address>
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Jurusan yang Diambil Sebelumnya</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td><strong>
                <?php 
                  switch ($c->prodi) {

                      // registrasi
                        case '1':
                          $pick = "D3 KETATALAKSANAAN PELAYARAN NIAGA DAN KEPELABUHAN";
                        break;
                        case '2' :
                          $pick = "D3 TEKNIKA";
                        break;
                        case '3' :
                          $pick = "D3 NAUTIKA";
                        break;
                        case '4' :
                          $pick = "S1 MANAJEMEN TRANSPOR";
                        break;
                        case '5':
                          $pick = "S1 MANAJEMEN TRANSPOR ( LINTAS JALUR )";
                        break;
                        
                      }
                      echo $pick;
                ?>
                </strong>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Jurusan yang  Akan Diganti</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
               <form method="post" action="<?php echo base_url() ?>baak/pindahjurusanp">
              <td> <select class="form-control" name="prodi" id="prodi">
                    <option selected>== Pilih ==</option>
                    <option value="1">D3 Ketatalaksanaan Pelayaran Niaga dan Kepelabuhanan</option>
                    <option value="2">D3 Teknika</option>
                    <option value="3">D3 Nautika</option>
                    <option value="4">S1 Manajemen Trasnpor</option>
                    <option value="5">S1 Manajemen Trasnpor (Lintas Jalur)</option>
                  </select>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

     

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
         <?php 
          foreach($validasi as $v){ 
         ?>
        <input type="hidden" name="no" id="no" value="<?php echo $c->no ?>">
        <input type="hidden" name="val_id" id="val_id" value="<?php echo $v->val_id ?>">

          <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
          <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-repeat"></i> Ganti Jurusan
          </button>
        </form>
          <!-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> -->
        </div>
      </div>
    </section>
    <?php } }?>
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