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
<center><p style="margin: 0px;text-align: center;">REKAP NILAI SELEKSI CALON TARUNA - MAHASISWA T.A <?php echo $ta; ?></p></center>
<center><p style="margin: 0px;text-align: center;">TANGGAL : <?php echo $tgl; ?></p></center>	
<table width="100%">
	<tr>
	<th align="left"><h3>
<?php echo $jurusan?>
</h3></th>
	<th align="right">
		<h3>
		<?php if ($jk=="Pria") {
		# code...
	 if ($prodi=="1") {
		# code...
		echo "K.".$noKelompok++; 
	}elseif ($prodi=="2") {
		# code...
		echo "T.".$noKelompok++;
	}elseif ($prodi=="3") {
		# code...
		echo "N.".$noKelompok++;
	}elseif ($prodi=="4") {
		# code...
		echo "M.".$noKelompok++;
	}elseif ($prodi=="5") {
		# code...
		echo "ME.".$noKelompok++;
	}elseif ($prodi=="6") {
		# code...
		echo "TM.".$noKelompok++;
	}elseif ($prodi=="7") {
		# code...
		echo "TTL.".$noKelompok++;
	}elseif ($prodi=="8") {
		# code...
		echo "TK.".$noKelompok++;
	}elseif ($prodi=="9") {
		# code...
		echo "PI.".$noKelompok++;
	}
	}else{
	if ($prodi=="1") {
		# code...
		echo "KP.".$noKelompok++; 
	}elseif ($prodi=="2") {
		# code...
		echo "TP.".$noKelompok++;
	}elseif ($prodi=="3") {
		# code...
		echo "NP.".$noKelompok++;
	}elseif ($prodi=="4") {
		# code...
		echo "MP.".$noKelompok++;
	}elseif ($prodi=="5") {
		# code...
		echo "MEP.".$noKelompok++;
	}elseif ($prodi=="6") {
		# code...
		echo "TMP.".$noKelompok++;
	}elseif ($prodi=="7") {
		# code...
		echo "TTLP.".$noKelompok++;
	}elseif ($prodi=="8") {
		# code...
		echo "TKP.".$noKelompok++;
	}elseif ($prodi=="9") {
		# code...
		echo "PIP.".$noKelompok++;
	}
	} ?>
	
	
	</h3>
	</th>
	</tr>
</table>
<table width="100%" border="1" style="border: 1px solid black;border-collapse: collapse;">
		<tr>
			<th rowspan="4">No.</th>
			<th rowspan="4">Nama</th>
			<th rowspan="4">No. Catarma</th>
			<th rowspan="4">L/P</th>
			<th rowspan="4">Prodi</th>
			<th colspan="10">Form Penilaian</th>
			<th rowspan="4">Keterangan</th>
			<th rowspan="3" colspan="3">Pantukir</th>
		</tr>
		<tr>
			<th rowspan="2">Variabel</th>
			<th rowspan="2">TKD</th>
			<th rowspan="2">Wawancara</th>
			<th rowspan="2">SAMAPTA</th>
			<th rowspan="2">Psykotest</th>
			<th rowspan="2">Kesehatan</th>
			<th rowspan="2">SPI</th>
			<th rowspan="2">Total</th>
			<th colspan="2">NA</th>
		</tr>
		<tr>
			<th>Nilai</th>
			<th>Skor</th>
		</tr>
		<tr>
			<th>Total</th>
			<th>5</th>
			<th>4</th>
			<th>3</th>
			<th>2</th>
			<th>3</th>
			<th>2</th>
			<th>19</th>
			<th>C</th>
			<th>3</th>
			<th>L</th>
			<th>TL</th>
			<th>C</th>
		</tr>
<?php //---------------------------------------------------------per tabel 10------------------------------------------ ?>
<?php
$no=1;
 foreach ($val as $v): ?>
	<tr>
		<td height="10px"><?php echo $no++; ?></td>
		<td><?php $text1= strtolower($v->nama);echo ucwords($text1) ?></td>
		<td align="center">
		<?php 
		echo $v->no; 
		if ($prodi=="1") {
		# code...
		echo "/K/"; 
	}elseif ($prodi=="2") {
		# code...
		echo "/T/";
	}elseif ($prodi=="3") {
		# code...
		echo "/N/";
	}elseif ($prodi=="4") {
		# code...
		echo "/M/";
	}elseif ($prodi=="5") {
		# code...
		echo "/ME/)";
	}
	echo date("Y");
		?>
		</td>
		<td><?php if ($v->jk == "Pria") {
			# code...
			echo "L";
		}else{
			echo "P";
		} ?></td>
		<td><?php echo $v->prodi_lama; ?></td>
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