    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekapitulasi Jumlah Pendaftar 2024</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

             <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <?php 
                    //  $where2= array(
                    // 'id_gelombang' => '1',  
                    //   );
                    //   $gelombang=$this->m_registrasi->get_data_gelombang($where2);
                    $where = array(
                    // 'tbl_catar_2024.gelombang' => $gelombang,
                    'tbl_catar_2024.jalur' => 'reguler',
                    'tbl_catar_validasi_2024.aktif' => '1'      
                    );
                     ?>
                    <h3><?php echo $this->m_registrasi->get_data_join_where($where)->num_rows(); ?></h3>

                    <p>Total Sudah Validasi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <!-- <a href="<?php //echo base_url() ?>baak/perolehan_referral_detail/mahatar" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>PROGRAM STUDI</th>
                  <th>TOTAL PENDAFTAR</th>
                  <!-- <th>Selengkapnya</th> -->
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>KPN</td>
                  <?php 
                  $where_kpn = array(
                  'tbl_catar_2024.prodi' => '1',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_kpn)->num_rows(); ?></td>
                </tr>
                 <tr>
                  <td>TEKNIKA</td>
                  <?php 
                  $where_t = array(
                  'tbl_catar_2024.prodi' => '2',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_t)->num_rows(); ?></td>
                </tr>
                <tr>
                  <td>NAUTIKA</td>
                  <?php 
                  $where_n = array(
                  'tbl_catar_2024.prodi' => '3',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_n)->num_rows(); ?></td>
                </tr>
                <tr>
                  <td>TRANSPORTASI</td>
                  <?php 
                  $where_t = array(
                  'tbl_catar_2024.prodi' => '4',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_t)->num_rows(); ?></td>
                </tr>
                <tr>
                  <td>T. TRANSPORTASI LAUT</td>
                  <?php 
                  $where_tl = array(
                  'tbl_catar_2024.prodi' => '5',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_tl)->num_rows(); ?></td>
                </tr>
                 <tr>
                  <td>T. MESIN</td>
                  <?php 
                  $where_tm = array(
                  'tbl_catar_2024.prodi' => '6',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_tm)->num_rows(); ?></td>
                </tr>
                <tr>
                  <td>T. KESELAMATAN</td>
                  <?php 
                  $where_tk = array(
                  'tbl_catar_2024.prodi' => '7',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_tk)->num_rows(); ?></td>
                </tr>
                <tr>
                  <td>PERDAGANGAN INTERNASIONAL</td>
                  <?php 
                  $where_pi = array(
                  'tbl_catar_2024.prodi' => '8',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_pi)->num_rows(); ?></td>
                </tr>
                 <tr>
                  <td>MPLM</td>
                  <?php 
                  $where_mplm = array(
                  'tbl_catar_2024.prodi' => '9',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_mplm)->num_rows(); ?></td>
                </tr>
                 <tr>
                  <td>BISNIS DIGITAL</td>
                  <?php 
                  $where_bd = array(
                  'tbl_catar_2024.prodi' => '10',
                  'tbl_catar_validasi_2024.aktif' => '1',
                  // 'tbl_catar_2024.jalur' => 'reguler'      
                  ); ?>
                  <td><?php echo $this->m_registrasi->get_data_join_where_row($where_bd)->num_rows(); ?></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Program Studi</th>
                  <th>Total Pendaftar</th>
                  <!-- <th>Selengkapnya</th> -->
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