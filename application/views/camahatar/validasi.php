    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form validasi</h3>
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
            <?php }else{ ?>

               <table width="30%">
                <tr>
                  <td><label for="exampleInputEmail1">No. Pendaftaran</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->no; ?></label></td>
                </tr>
                <tr>
                  <td><label for="exampleInputEmail1">Nama</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->nama; ?></label></td>
                </tr>
                 <tr>
                  <td><label for="exampleInputEmail1">Tanggal Lahir</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->tgl_l; ?></label></td>
                </tr>
                 <tr>
                  <td><label for="exampleInputEmail1">Alamat</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->alamat; ?></label></td>
                </tr>
                <tr>
                  <td><label for="exampleInputEmail1">Jenis Kelamin</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $c->jk ; ?></label></td>
                </tr>
                 <tr>
                  <td><label for="exampleInputEmail1">Program Studi yang dipilih</label></td>
                  <td><label for="exampleInputEmail1">:</label></td>
                  <td><label for="exampleInputEmail1"><?php echo $prodi ; ?></label></td>
                </tr>
              </table>
              <table class="table table-striped">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th>
                  <th>Progress</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
              </tbody></table>
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