<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    body {
    margin: 0;
    padding: 0;
    /*background-color: #FAFAFA;*/
    font: 11pt "Tahoma";
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    width: 40cm;
    min-height: 21.5cm;
    padding: 0.5cm;
    margin: 0.5cm auto;
    /*border: 1px #D3D3D3 solid;*/
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    font-size: 16px;
}
.subpage {
    /*padding: 1cm;*/
    /*border: 5px red solid;*/
    /*height: 256mm;*/
    /*outline: 2cm #FFEAEA solid;*/
}
table{
  font-size: 12px;
}

@page {
    size: F4;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
}

  </style>
</head>
<?php 
$value=array_chunk($catar, 10);
$noKelompok=1;
 ?>

<body>

<?php foreach ($value as $val): ?>
<div class="page">
<p style="margin: 0px;text-align: center;">UNIVERSITAS MARITIM AMNI SEMARANG</p>
<p style="margin: 0px;text-align: center;">JALAN SOEKARNO HATTA NOMOR 180 SEMARANG</p>
<center><p style="margin: 0px;text-align: center;">REKAP SAMAPTA CALON TARUNA - MAHASISWA T.A <?php echo $ta; ?></p></center>
<center><p style="margin: 0px;text-align: center;">TANGGAL : <?php echo $tgl; ?></p></center>  
<table width="100%">
  <tr>
  <th align="left"><h3>
<?php echo $jurusan?>
</h3></th>
  <th align="right">
    <h3>
 <?php if ($jk=="Pria") {
    echo "A.".$noKelompok++; 
    }else{
    echo "A.".$noKelompok++; 
    } ?>
  </h3>
  </th>
  </tr>
</table>
<table width="100%" border="1" style="border: 1px solid black;border-collapse: collapse;">
    <tr>
      <th rowspan="5">No.</th>
      <th rowspan="4">No. Dada</th>
      <th rowspan="4">Nama</th>
      <th rowspan="4">No. Catarma</th>
      <th rowspan="4">L/P</th>
      <th colspan="35">Test Samapta</th>
    </tr>
    <tr>
      <th colspan="7">A</th>
      <th colspan="24">B</th>
      <th colspan="3" rowspan="2">Nilai Akhir</th>
      <th rowspan="4">Keterangan</th>
    </tr>
    <tr>
      <th colspan="7">Lari 12 M</th>
      <th colspan="5">Sit Up</th>
      <th colspan="5">Push Up</th>
      <th colspan="5">Full Up</th>
      <th colspan="5">Shuttle Run</th>
      <th rowspan="3">Nilai Kasar</th>
      <th rowspan="3">Nilai Akhir</th>
      <th rowspan="2" colspan="2">Nilai Akhir</th>
    </tr>
    <tr>
      <th rowspan="2">A</th>
      <th rowspan="2">B</th>
      <th rowspan="2">C</th>
      <th rowspan="2">D</th>
      <th rowspan="2">E</th>
      <th colspan="2">Nilai Akhir</th>
      <th rowspan="2">A</th>
      <th rowspan="2">B</th>
      <th rowspan="2">C</th>
      <th rowspan="2">D</th>
      <th rowspan="2">E</th>
      <th rowspan="2">A</th>
      <th rowspan="2">B</th>
      <th rowspan="2">C</th>
      <th rowspan="2">D</th>
      <th rowspan="2">E</th>
      <th rowspan="2">A</th>
      <th rowspan="2">B</th>
      <th rowspan="2">C</th>
      <th rowspan="2">D</th>
      <th rowspan="2">E</th>
      <th rowspan="2">A</th>
      <th rowspan="2">B</th>
      <th rowspan="2">C</th>
      <th rowspan="2">D</th>
      <th rowspan="2">E</th>
      <th rowspan="2">Jumlah</th>
      <th rowspan="2">Nilai</th>
      <th rowspan="2">Skor</th>
    </tr>
    <tr>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>Nilai</th>
      <th>Skor</th>
       <th>Nilai</th>
      <th>Skor</th>
    </tr>

<?php //---------------------------------------------------------per tabel 10------------------------------------------ ?>
<?php
$no=1;
 foreach ($val as $v): ?>
  <tr>
    <td height="10px"><?php echo $no++; ?></td>
    <td height="10px"></td>
    <td><?php $text1= strtolower($v->nama);echo ucwords($text1) ?></td>
    <td align="center">
    <?php 
    echo $v->no; 
    echo "/A/"; 
    echo date("Y");
    ?>
    </td>
    <td><?php if ($v->jk == "Pria") {
      # code...
      echo "L";
    }else{
      echo "P";
    } ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
<?php endforeach ?>
<?php //---------------------------------------------------------akhir per tabel 10------------------------------------------ ?>
</table>
</div>
<?php endforeach ?>

</body>
</html>