    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data test samapta</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped display nowrap">
                <thead>
                <tr>
                 <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Prodi</th>
                  <th>Lari</th>
                  <th>Push Up</th>
                  <th>Pull Up</th>
                  <th>Suttle Run</th>
                  <th>Petugas</th>
                  <th>Edit</th>
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
                  <td><?php echo $c->hasil_tpa ?></td>
                  <td><?php echo $c->petugas ?></td>
                  <td>
                    <a class="btn btn-success btn-sm" href="<?php echo base_url().'samapta/edit_data/'.$c->no; ?>"><i class="fa fa-pencil"></i> Edit</a> 
                 </td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                <th>No.</th>
                  <th>No. Pendf.</th>
                  <th>Nama</th>
                  <th>Prodi</th>
                  <th>Lari</th>
                  <th>Push Up</th>
                  <th>Pull Up</th>
                  <th>Suttle Run</th>
                  <th>Petugas</th>
                  <th>Edit</th>
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