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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Nama Ibu</th>
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
                  <td><?php echo $c->nama_i?></td>
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
                  <th>Nama Ibu</th>
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