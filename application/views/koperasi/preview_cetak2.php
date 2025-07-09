
<form method="post" action="<?php echo base_url() ?>koperasi/cetak_excel">
    <input type="hidden" name="jalur" value="<?php echo isset($frm_jalur) ? $frm_jalur : ''; ?>">
    <input type="hidden" name="prodi" value="<?php echo isset($frm_prodi) ? $frm_prodi : ''; ?>">
    <input type="hidden" name="gelombang" value="<?php echo isset($frm_gelombang) ? $frm_gelombang : ''; ?>">
    
    <button type="submit" class="btn btn-primary btn-sm" style="width:30%;">
        <i class="fa fa-fw fa-print"></i> Cetak Semua
    </button>
    
   <!--  <a href="<?php //echo base_url() ?>koperasi/cetak" class="btn btn-success btn-sm" style="width:30%;">
        <i class="fa fa-fw fa-backward"></i> Kembali
    </a> -->
</form>
<table id="example4" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No.</th>
      <th>No. Pendf.</th>
      <th>Nama</th>
      <th>Telp / Hp</th>
      <th>Prodi yang Dipilih</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach($results as $c){ 
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $c->no ?></td>
      <td><?php echo $c->nama ?></td>
      <td><?php echo $c->telp ?></td>
      <td><?php echo $koperasi->prodi($c->prodi) ?></td>
    </tr>
    <?php } ?>
  </tbody>
  <tfoot>
    <tr>
      <th>No.</th>
      <th>No. Pendf.</th>
      <th>Nama</th>
      <th>Telp / Hp</th>
      <th>Prodi yang Dipilih</th>
    </tr>
  </tfoot>
</table>
