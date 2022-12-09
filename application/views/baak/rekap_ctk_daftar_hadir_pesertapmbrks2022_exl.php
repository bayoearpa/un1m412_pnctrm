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
}
.subpage {
    /*padding: 1cm;*/
    /*border: 5px red solid;*/
    /*height: 256mm;*/
    /*outline: 2cm #FFEAEA solid;*/
}
th {
      writing-mode: vertical-rl;
    -webkit-transform:rotate(-90deg);
    -moz-transform:rotate(-90deg);
    -o-transform: rotate(-90deg);
    -ms-transform:rotate(-90deg);
    transform: rotate(180deg);
    white-space:nowrap;
    float:left;
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
$value=array_chunk($catar, '20');
 ?>

<body>

<?php foreach ($value as $val){ ?>
<div class="page">
<p style="margin: 0px;text-align: center;"><b>UNIVERSITAS MARITIM AMNI SEMARANG</b></p>
<p style="margin: 0px;text-align: center;font-size: 9px;">JALAN SOEKARNO HATTA NOMOR 180 SEMARANG</p>
<center><p style="margin: 0px;text-align: center;font-size: 9px;">DAFTAR CALON MAHATAR T.A 2023/2024</p></center>
<center><p style="margin: 0px;text-align: center;font-size: 9px;">PRODI : <?php echo $prodi; ?></p></center>
<center><p style="margin: 0px;text-align: center;font-size: 9px;">KELAS : <?php if ($kelas == "reg") {
	# code... 
	echo "REGULER";
}else{ echo "FAST TRACK";} ?></p></center>
<p style="margin: 0px;text-align: center;"><b><?php echo "ABSENSI ".$bagian; ?></b></p>



<table width="100%" border="1" style="border: 1px solid black;border-collapse: collapse;">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>No. Catarma</th>
			<th>L/P</th>
            <th class="text1">Leg. Ijasah</th>
            <th class="text1">Fc. KTP</th>
            <th class="text1">Fc. Akte Kelahiran</th>
            <th class="text1">SKCK Asli</th>
            <th class="text1">Surat Izin Ortu</th>
            <th class="text1">Surat Ket. Blm Menikah</th>
            <th class="text1">Riwayat Kesehatan</th>
            <th class="text1">Surat Keabsahan Ijazah</th>
            <th class="text1">Srt Sanggup Mentaati Peraturan</th>
            <th>KET</th>
		</tr>
<?php //---------------------------------------------------------per tabel 20------------------------------------------ ?>
<?php
$urut="1";
 foreach ($val as $v){ ?>
	<tr>
		<td height="40px" width="15px"><?php echo $urut++; ?></td>
		<td><?php $text1= strtolower($v->nama);echo ucwords($text1); ?></td>
		<td align="center" width="30px"><?php echo $v->no; ?></td>
		<td width="15px" align="center"><?php if ($v->jk == "Pria") {
			# code...
			echo "L";
		}else{
			echo "P";
		} ?></td>
		<td width="10px"></td>
        <td width="10px"></td>
        <td width="10px"></td>
        <td width="10px"></td>
        <td width="10px"></td>
        <td width="10px"></td>
        <td width="10px"></td>
        <td width="10px"></td>
        <td width="10px"></td>
        <td width="20px"></td>

	</tr>
<?php } ?>
<?php //---------------------------------------------------------akhir per tabel 10------------------------------------------ ?>
</table>
</div>
<?php } ?>

</body>
</html>