    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hasil Cari data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <!-- content -->
             <?php echo $notif;  

             foreach ($catar as $key) {
               # code...
              echo $key->nama;
             }
             ?>

             <!-- ./content -->
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