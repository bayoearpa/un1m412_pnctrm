    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Proses Seleksi Kelas Transfer</h3>
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
            <strong>No. Pendft</strong><br>
            <strong>Nama</strong><br>
            Tempat Lahir<br>
            Tanggal Lahir<br>
            Jenis Kelamin<br>

          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Keterangan
          <address>
            <strong><?php echo $c->no ?></strong><br>
            <strong><?php echo $c->nama ?></strong><br>
            <?php echo $c->tl ?><br>
            <?php echo $c->tgl_l ?><br>
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
              <th>Jurusan yang Diambil</th>
              <th>Periode Pendaftaran</th>
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
                    $pick = "S1 TRANSPORTASI";
                break;
                case '5':
                    $pick = "S1 TEKNIK TRANSPORTASI LAUT";
                break;
                case '6':
                    $pick = "S1 TEKNIK MESIN";
                break;
                case '7':
                    $pick = "S1 TEKNIK KESELAMATAN";
                break;
                case '8':
                    $pick = "S1 PERDAGANGAN INTERNASIONAL";
                break;
                case '9':
                    $pick = "D4 MANAJEMEN PELABUHAN DAN LOGISTIK MARITIM";
                break;
                 case '10':
                    $pick = "S1 BISNIS DIGITAL";
                break;
                default :
                    $pick = "Belum Pilih Prodi";
                        
                      }
                      echo $pick;
                ?>
                </strong>
              </td>
              <td><strong>
                <?php 
                 switch ($c->periode) {

            // registrasi
               case '1':
                    $pick = "Januari";
                break;
                case '2' :
                    $pick = "Februari";
                break;
                case '3' :
                    $pick = "Maret";
                break;
                case '4' :
                    $pick = "April";
                break;
                case '5':
                    $pick = "Mei";
                break;
                case '6':
                    $pick = "Juni";
                break;
                case '7':
                    $pick = "Juli";
                break;
                case '8':
                    $pick = "Agustus";
                break;
                case '9':
                    $pick = "September";
                break;
                 case '10':
                    $pick = "Oktober";
                break;
                case '11':
                    $pick = "November";
                break;
                 case '12':
                    $pick = "Desember";
                break;
                default :
                    $pick = "Periode tidak ditemukan";
                
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

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
         
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Detail File</p>

          <div class="table-responsive">
            <table class="table">
              
              <tr>
                <th><button class="btn btn-success view-file-buttonk" data-filename="<?php echo $c->upload_ktp; ?>">Lihat KTP</button></th>
                <th><button class="btn btn-success view-file-button" data-filename="<?php echo $c->upload_ijd3; ?>">Lihat Ijasah D3</button></th>
                <th><button class="btn btn-success view-file-buttonb" data-filename="<?php echo $c->upload_transd3; ?>">Lihat Transkip D3</button></th>

                <!-- <th><button class="btn btn-success view-file-buttonc" data-filename="<?php //echo $c->upload_supersehat; ?>">Lihat File Surat Pernyataan Sehat</button></th> -->
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
        <form method="post" action="<?php echo base_url() ?>baak/prosesseleksip" target="_blank">
        <input type="hidden" name="no" id="no" value="<?php echo $c->no ?>">
        <input type="hidden" name="gelombang" id="gelombang" value="<?php echo $c->gelombang ?>">
        <input type="hidden" name="tgl_byr" id="tgl_byr" value="<?php echo date("Y-m-d"); ?>">
        <input type="hidden" name="prodi" id="prodi" value="<?php echo $c->prodi ?>">
        <!-- <input type="hidden" name="jml_byr" id="jml_byr" value="500000"> -->
		<input type="hidden" name="thn_pel" id="thn_pel" value="<?php echo $c->thn_pel?>">
    <!-- <input type="hidden" name="id_seleksi" id="id_seleksi" value="<?php// echo $c->id_seleksi?>"> -->
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Pengumuman</label>
                  <input type="date" class="form-control" name="tgl_pengumuman" id="tgl_pengumuman" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No. Surat Hal 1</label>
                  <input type="text" class="form-control" name="no_surat_hal_1" id="no_surat_hal_1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No. Surat Hal 2</label>
                  <input type="text" class="form-control" name="no_surat_hal_2" id="no_surat_hal_2" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Seleksi (contoh : Gelombang dini, Periode Januari)</label>
                  <input type="text" class="form-control" name="jenis_seleksi" id="jenis_seleksi" required>
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Waktu Daftar Ulang (contoh : 01 s/d  31 Januari 2025 )</label>
                  <input type="text" class="form-control" name="waktu_daful" id="waktu_daful" required>
            </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Hasil :</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="hasil" id="hasil" value="lulus">
                      Lulus
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="hasil" id="hasil" value="tidak_lulus">
                      Tidak Lulus
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="hasil" id="hasil" value="cadangan">
                      Cadangan
                    </label>
                  </div>
                </div>

          <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
          <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-credit-card"></i> Proses
          </button>
        </form>
          <!-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> -->
        </div>
      </div>
    </section>
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