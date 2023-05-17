<style type="text/css">
	td,li,p{
		font-size: 15px;
	}
	body{
		margin-top: 0px;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- header -->
<table align="center" width="100%">
	<tr>
		<td width="12%"><img src="<?php echo base_url() ?>assets/front1/img/amni-png-doc.png" width="15%"></td>
		<td align="center">
		<p style="margin: 0px;padding: 0px;"><b>VOUCHER PENERIMAAN MAHATAR BARU</b></p>
		<p style="margin: 0px;padding: 0px;"><b>TAHUN AKADEMIK 2023 / 2024 </b></p>
		<p style="margin: 0px;padding: 0px;"><b>UNIVERSITAS MARITIM AMNI SEMARANG</b></p>
<!-- 		<p style="margin: 0px;padding: 0px;"><b>UNIMAR AMNI SEMARANG</b></p> -->
		<p style="margin: 0px;padding: 0px;">Jl. Soekarno-Hatta No. 180 Semarang 50199</p>
		<p style="margin: 0px;padding: 0px;">website : http://www.unimar-amni.ac.id</p>
		<p style="margin: 0px;padding: 0px;">email : info@unimar-amni.ac.id</p>
		</td>
		<td width="12%"><img src="<?php echo base_url() ?>assets/front1/img/dnv2022.jpeg" width="15%"></td>

	</tr>
</table>
<?php foreach($catar as $c){ ?>
<hr size="2" style="border-color: #000000;border-width: 3px;margin: 0px;padding: 0px;">
<h1 align="right" style="margin-right: 20px;margin-bottom: 0px;margin: 0px;padding: 0px;"><?php echo $c->no ?></h1>
<!-- datadiri -->
<table align="center"><tr><td><h1 style="margin: 0px;padding: 0px;"><b>Kartu Voucher PMB</b></h1></td></tr></table>
<table width="90%" align="center" id="biodata">
	<tr>
		<td width="30%"><b>Nama</b></td><td width="1%">:</td><td><?php echo $c->nama ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Alamat</b></td><td width="1%">:</td><td><?php echo $c->alamat ?></td>
	</tr>
	<!-- <tr>
		<td width="30%"><b>Kota / Kabupaten</b></td><td width="1%">:</td><td><?php //echo $kabkota ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Provinsi</b></td><td width="1%">:</td><td><?php //echo $provinsi ?></td>
	</tr> -->
	<tr>
		<td width="30%"><b>Telepon</b></td><td width="1%">:</td><td><?php echo $c->telp ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Asal Sekolah</b></td><td width="1%">:</td><td><?php echo $c->asek ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Alamat Sekolah</b></td><td width="1%">:</td><td><?php echo $c->alamat_sek ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Prodi yang Dipilih</b></td><td width="1%">:</td><td><b><?php 
		switch ($c->prodi) {

				// registrasi
					case '1':
						$pick = "D3 KETATALAKSANAAN PELAYARAN NIAGA DAN KEPELABUHAN";
					break;
					case '2' :
						$pick = "D3 TEKNIKA";
					break;
					case '3' :
						$pick = "D3 NAUTIKA";
					break;
					case '4' :
						$pick = "S1 TRANSPORTASI";
					break;
					case '5':
						$pick = "S1 TEKNIK TRANSPORTASI LAUT";
					break;
					case '6':
						$pick = "S1 TEKNIK MESIN";
					break;
					case '7':
						$pick = "S1 TEKNIK KESELAMATAN";
					break;
					case '8':
						$pick = "S1 PERDAGANGAN INTERNASIONAL";
					break;
					
				}
				echo $pick;



		?></b></td>
	</tr>
</table>
<?php } ?>
</body>
</html>
