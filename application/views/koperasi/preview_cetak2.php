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
