<style type="text/css">
	td,p{
		font-size: 10px;
	}
	li{
		font-size: 12px;
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
<img src="<?php echo base_url() ?>assets/front1/img/header_sk_lulus25.jpg" width="100%">

<?php foreach($catar as $c){ ?>
	<p><b><u>SURAT KEPUTUSAN</u></b></p>
	<p>Nomor :   <?php echo $no_surat_hal_1 ?></p>

	<br><br><br>
	<p><b>T e n t a n g</b></p>
	<p><b>CALON MAHASISWA DAN TARUNA BARU UNIMAR AMNI SEMARANG</b></p>
	<p><b>YANG DINYATAKAN <i>LULUS <?php echo strtoupper($c->jenis_seleksi) ?></i></b></p>
	<p><b>TAHUN AKADEMIK 2025 / 2026</b></p>

	<ol type="number">
		<li>Berdasarkan hasil keputusan rapat Panitia Penerimaan Mahasiswa dan Taruna  UNIMAR AMNI Semarang Tahun Akademik 2025/2026 <?php echo ucfirst($c->jenis_seleksi) ?>, ditetapkan bahwa peserta atas nama <?php echo ucfirst($c->nama) ?> telah mengikuti seleksi Penerimaam Mahatar Baru (PMB), <b>dinyatakan lulus</b> sebagai Calon Mahasiswa dan Taruna Universitas Maritim AMNI (UNIMAR AMNI) Semarang Tahun Akademik 2025/2026.</li>
		<li>Untuk kegiatan selanjutnya,  daftar ulang bagi yang dinyatakan LULUS menjadi Calon Mahasiswa dan Taruna Universitas Maritim AMNI (UNIMAR AMNI) Semarang <?php echo ucfirst($c->jenis_seleksi) ?> dilaksanakan secara online.</li>
		<li>Persyaratan Daftar Ulang TERLAMPIR.</li>
		<li>Apabila dikemudian hari terdapat kekeliruan dalam Surat Keputusan ini, akan diadakan pembetulan sebagaimana mestinya.</li>
	</ol>
	<table align="right">
		<tr><td><?php echo $c->tgl_pengumuman ?></td></tr>
		<tr><td>Ketua Panitia PMB</td></tr>
		<tr><td>TTD</td></tr>
		<tr><td><u>Supriyanto, S.Sos., M.M</u></td></tr>
		<tr><td>NIDN. 0603046504</td></tr>
	</table>
		

<?php } ?>
</body>
</html>
