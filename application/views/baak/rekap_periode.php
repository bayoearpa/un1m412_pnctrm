 <!-- Main content -->
      <section class="content">

         <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Januari</a></li>
              <li><a href="#tab_2" data-toggle="tab">Februari</a></li>
              <li><a href="#tab_3" data-toggle="tab">Maret</a></li>
              <li><a href="#tab_4" data-toggle="tab">April</a></li>
              <li><a href="#tab_5" data-toggle="tab">Mei</a></li>
              <li><a href="#tab_6" data-toggle="tab">Juni</a></li>
              <li><a href="#tab_7" data-toggle="tab">Juli</a></li>
              <li><a href="#tab_8" data-toggle="tab">Agustus</a></li>
              <li><a href="#tab_9" data-toggle="tab">September</a></li>
              <li><a href="#tab_10" data-toggle="tab">Oktober</a></li>
              <li><a href="#tab_11" data-toggle="tab">November</a></li>
              <li><a href="#tab_12" data-toggle="tab">Desember</a></li>
             <!--  <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li> -->
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <!-- tab 1 -->
              <div class="tab-pane active" id="tab_1">
                <?php echo validation_errors(); 
                      echo $this->session->flashdata('success');
                      echo $this->session->flashdata('error');
                   ?> 
               <!-- chart jajal -->
               <!-- BAR CHART -->
                <h1>Rekap per Prodi : <?php echo $nama_prodi; ?></h1>
                <h3><?php echo $pernyataan; ?></h3>
                <div class="chart">
                <canvas id="canvas" style="height:300px"></canvas>
                </div>
              <!-- /chart jajal -->
              </div>
                <!-- /tab 1 -->
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <!-- tab 2 -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                tab 3
              </div>
              <div class="tab-pane" id="tab_4">
                tab 4
              </div>
              <div class="tab-pane" id="tab_5">
                tab 5
              </div>
              <div class="tab-pane" id="tab_6">
                tab 6
              </div>
              <div class="tab-pane" id="tab_7">
                tab 7
              </div>
              <div class="tab-pane" id="tab_8">
                tab 8
              </div>
              <div class="tab-pane" id="tab_9">
                tab 9
              </div>
              <div class="tab-pane" id="tab_10">
                tab 10
              </div>
              <div class="tab-pane" id="tab_11">
                tab 11
              </div>
              <div class="tab-pane" id="tab_12">
                tab 12
              </div>

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

            <!-- MODALLL -->
             <?php 
               // foreach ($list_pert as $key) {?>
                <div class="modal fade" id="<?php echo $key->id_mhsdsn ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><?php //echo $key->pert_mhsdsn ?></h4>
                      </div>
                      <div class="modal-body">
                         
                                <div id="donut-chart-<?php //echo $key->id_mhsdsn ?>" style="height: 300px;width: 100%;"></div>

                        <table>
                          <tr>
                            <td><b>STS :</b></td>
                            <td>Sangat Tidak Setuju</td>
                          </tr>
                          <tr>
                            <td><b>TS :</b></td>
                            <td>Tidak Setuju</td>
                          </tr>
                          <tr>
                            <td><b>KS :</b></td>
                            <td>Kurang Setuju</td>
                          </tr>
                          <tr>
                            <td><b>S :</b></td>
                            <td>Setuju</td>
                          </tr>
                          <tr>
                            <td><b>SS :</b></td>
                            <td>Sangat Setuju</td>
                          </tr>

                        </table>
                          
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                 <?php //} ?>

      </section>
      <!-- /.content -->

