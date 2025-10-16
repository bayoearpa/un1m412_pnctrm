    <!-- Main content -->
    <section class="content">
    <?php echo $this->session->flashdata('message');?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pencatarma Sudah Validasi TF</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>No. Pendf.</th>
                  <th>L/P</th>
                  <th>No. Telp/Hp</th>
                  <th>Prodi</th>
                  <th>KTP</th>
                  <th>Ijsh D3</th>
                  <th>Transkip</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($catar as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php $text1= strtolower($c->nama);echo ucwords($text1) ?></td>
                  <td><?php echo $c->no ?></td>
                  <td><?php if ($c->jk == "Pria") {
                      # code...
                      echo "L";
                    }else{
                      echo "P";
                    } ?></td>
                  <td><?php echo $c->telp ?></td>
                  <td><?php 
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
                    <!-- Tombol Lihat File Sign Off -->
                    <?php if ($c->upload_ktp) { ?>
                        <button class="btn btn-info view-file-button-ktp" alt="File KTP" data-filename="<?php echo $c->upload_ktp; ?>"><i class="fa fa-fw fa-file-pdf-o"></i></button>
                    <?php } else { ?>
                        <!-- Tampilkan pesan jika file tidak ada -->
                        File tidak tersedia
                    <?php } ?>
                  </td>
                  <td>
                    <!-- Tombol Lihat File Sign Off -->
                    <?php if ($c->upload_ijd3) { ?>
                        <button class="btn btn-info view-file-button-ijsh" alt="File Ijasah" data-filename="<?php echo $c->upload_ijd3; ?>"><i class="fa fa-fw fa-file-pdf-o"></i></button>
                    <?php } else { ?>
                        <!-- Tampilkan pesan jika file tidak ada -->
                        File tidak tersedia
                    <?php } ?>
                  </td>
                  <td>
                     <!-- Tombol Lihat File Sign Off -->
                    <?php if ($c->upload_transd3) { ?>
                        <button class="btn btn-info view-file-button-trans" alt="File Transkip" data-filename="<?php echo $c->upload_transd3; ?>"><i class="fa fa-fw fa-file-pdf-o"></i></button>
                    <?php } else { ?>
                        <!-- Tampilkan pesan jika file tidak ada -->
                        File tidak tersedia
                    <?php } ?>
                  </td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>No. Pendf.</th>
                  <th>L/P</th>
                  <th>No. Telp/Hp</th>
                  <th>Prodi</th>
                  <th>KTP</th>
                  <th>Ijsh D3</th>
                  <th>Transkip</th>
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