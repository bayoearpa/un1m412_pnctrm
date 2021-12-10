    <!-- Main content -->
    <section class="content">
    <?php echo $this->session->flashdata('message');?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kriteria</h3>
            </div>
            <!-- /.box-header -->
            <a href="<?php echo base_url().'baak/tambah_kriteria/' ?>"><button type="button" class="btn btn-block btn-success" style="width: 15%;">Tambah Kriteria</button></a> 
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Kriteria</th>
                  <th>Jenis</th>
                  <th>Kolom</th>
                  <th>Bobot (W)</th>
                  <th>Max. Nilai</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($catar as $c){ 
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $c->nama ?></td>
                  <td><?php echo $c->jenis ?></td>
                  <td><?php echo $c->kolom ?></td>
                  <td><?php echo $c->bobot ?></td>
                  <td><?php echo $c->max ?></td>
                  <td>
                   <a class="btn btn-warning btn-sm" href="<?php echo base_url().'baak/edit_kriteria/'.$c->id_kriteria; ?>"><i class="fa fa-pencil"></i>Edit</a>
                   <a class="btn btn-danger btn-sm" href="<?php echo base_url().'baak/kriteria_del/'.$c->id_kriteria; ?>"><i class="fa fa-trash"></i>Delete</a>
                 </td>
                </tr>
               <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Nama Kriteria</th>
                  <th>Jenis</th>
                  <th>Kolom</th>
                  <th>Bobot (W)</th>
                  <th>Max. Nilai</th>
                  <th>Pilihan</th>
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