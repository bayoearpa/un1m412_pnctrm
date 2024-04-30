    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pencatarma <?php echo $prodi; ?></h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <!-- info catar -->
              <?php 
              if ($cek == "1") { ?>

                  <!-- semua -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Semua Prodi</span>
                          <span class="info-box-number"><?php echo $tot_catar; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- kpn -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">KPN</span>
                          <span class="info-box-number"><?php echo $tot_catar1; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- teknika -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Teknika</span>
                          <span class="info-box-number"><?php echo $tot_catar2; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!--  nautika -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Nautika</span>
                          <span class="info-box-number"><?php echo $tot_catar3; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- transportasi -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Transportasi</span>
                          <span class="info-box-number"><?php echo $tot_catar4; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- TTL -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">TTL</span>
                          <span class="info-box-number"><?php echo $tot_catar5; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- teknik Mesin -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">T. Mesin</span>
                          <span class="info-box-number"><?php echo $tot_catar6; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- tek keselamatan -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">T. Keselamatan</span>
                          <span class="info-box-number"><?php echo $tot_catar7; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- perdagangan internasional -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">P. Internasional</span>
                          <span class="info-box-number"><?php echo $tot_catar8; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                   <!-- MPLM -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">MPLM</span>
                          <span class="info-box-number"><?php echo $tot_catar9; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- Bisnis Digital -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">B. Digital</span>
                          <span class="info-box-number"><?php echo $tot_catar10; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- Kelas Transfer -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Trasnportasi TF</span>
                          <span class="info-box-number"><?php echo $tot_catar11; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    <!-- /.info-box -->
                  </div>

                <?php }else{  ?>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Total Pendaftar</span>
                      <span class="info-box-number"><?php echo $tot_catar; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                    <!-- /.info-box -->
              </div>

            <?php } ?>


              <!-- ./info catar -->

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Telp</th>
                  <th>Prodi</th>
                  <th>Validasi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($catar as $c){ 
                 ?>
                <tr>
                 <td><?php echo $no++; ?></td>
                  <td><?php echo $c->no ?></td>
                  <td><?php echo $c->nama ?></td>
                  <td><?php echo $c->tl ?></td>
                  <td><?php echo $c->tgl_l ?></td>
                  <td><?php echo $c->alamat?></td>
                  <td><?php echo $c->telp  ?></td>
                  <td>
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
                        $pick = "D4 MPLM";
                      break;
                       case '10':
                        $pick = "S1 BISNIS DIGITAL";
                      break;
                        
                      }
                      echo $pick;
                    
                  ?></td>
                  <td>

                  <?php 
                  $where = array(
                  'no' => $c->no,
                  'aktif' => "1"       
                  );
                  $cek=$this->m_registrasi->get_data($where,'tbl_catar_validasi_2024')->row();
                   ?>
                  <?php 
                  if ($cek > "0"){ ?>
                    <a class="btn btn-success btn-sm" href="#"><i class="fa fa-check-circle"></i> Validasi</a> 
                  <?php }else{ ?>
                    <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-check-circle"></i>Belum Validasi</a>
                  <?php }?>
                 </td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                 <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Telp</th>
                  <th>Prodi</th>
                  <th>Validasi</th>
                </tr>
                </tfoot>
              </table>
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
