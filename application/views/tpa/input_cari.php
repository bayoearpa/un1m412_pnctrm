    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data test TPA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="<?php echo base_url() ?>tpa/input_carip">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                  <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Prodi</th>
                  <th>Nilai</th>
                </tr>
                               <?php 
                $no = 1;
                foreach($catar as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->no ?></td>
                  <td><?php echo $c->nama ?></td>
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
                    <input type="hidden" name="no[]" id="no[]" value="<?php echo $c->no ?>">
                    <input type="hidden" name="petugas[]" id="petugas[]" value="<?php echo $this->session->userdata('nama') ?>">
                    <input type="number" min="1" max="100" class="form-control" id="hasil_tpa[]" name="hasil_tpa[]" placeholder="isi nilai dari 10-100">
                 </td>
                </tr>
               <?php } ?>
              </tbody></table>
              <div class="form-group">
                  <input type="submit" class="btn btn-block btn-success" id="cek" name="cek" style="width:20%;" value="Input">
                  </div>

            
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