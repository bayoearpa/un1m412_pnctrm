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

	<table align="center">
		<tr>
			<td align="center"><p><b><u>SURAT KEPUTUSAN</u></b></p></td>
		</tr>
		<tr>
			<td align="center"><p>Nomor :   <?php echo $c->no_surat_hal_2 ?></p></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td align="center"><p><b>T e n t a n g</b></p></td>
		</tr>
		<tr>
			<td align="center"><p><b>DAFTAR ULANG DAN PEMBERKASAN CALON MAHASISWA DAN TARUNA </b></p></td>
		</tr>
		<tr>
			<td align="center"><p><b><?php echo strtoupper($c->jenis_seleksi) ?> TAHUN AKADEMIK 2025 / 2026</b></p></td>
		</tr>
	</table>
	
	<ol type="I">
		<li><b>DAFTAR ULANG</b></li>

		<ol type="number">
			<li><b>Waktu daftar ulang :</b></li>
			<p><?php echo $c->waktu_daful ?></p>
			<li><b>Syarat-syarat Daftar Ulang :</b></li>
			<p>Melunasi Biaya Pra Akademik, SPP semester 1 dan Matrikulasi (terlampir)</p>
		</ol>
		<li><b>PEMBAYARAN BIAYA PENDIDIKAN DAN SPI</b></li>
		<img src="<?php echo base_url() ?>assets/front1/img/biaya/biaya_kelastransfer_25.jpg" width="85%">
		<p><b>Catatan : </b></p>
			
			<p>Kelas Transfer (RPL)</p>
			<ol type="a">
				<li>Pelunasan SPI 100% yang dibayarkan pada tahap I (November 2025) mendapatkan potongan dana Rp 1.500.000,-</li>
				<li>Potongan SPI alumni UNIMAR AMNI Semarang sebesar Rp 2.000.000,-</li>
			</ol>

		<p>Pembayaran Pra Akademik, SPP Semester I, Biaya Asrama satu bulan (khusus taruna (prodi D3 Nautika dan D3 Teknika) dan taruni) dan Sumbangan Pengembangan Institusi (SPI), dapat dilakukan melalui transfer <b>ke BANK Mandiri 1350002900197 a/n Yayasan Bina Kemaritiman Indonesia</b> sesuai waktu pembayaran diatas, dengan mencantumkan : <b>Nomor Pendaftaran, Nama Calon Mahasiswa/Taruna dan Program Studi.</b></p>
		<ul>
			<li>Setelah melaksanakan pembayaran, <b>harap memberikan konfirmasi pembayaran dengan mengirimkan bukti transfer ke :</b></li>
			<p>CP 1 : No WA : 0851-6161-0180 </p>
			<p>CP 2 : No WA : 0851-6163-0180</p>
			<p>dengan mencantumkan : <b>Nomor Pendaftaran, Nama Calon Taruna/Mahasiswa dan Program Studi</b></p>
			<li>Selanjutnya mengisi Form Daftar Ulang Online melalui Link : <b>pmb.unimar-amni.ac.id</b></li>
		</ul>

		<li><b>PENGUNDURAN DIRI</b></li>
			<ol type="number">
				<li>Bagi calon taruna yang belum melakukan pembayaran dalam batas waktu yang telah ditentukan, atau jumlah pembayaran tidak sesuai ketentuan <b>dianggap mengundurkan diri</b>.</li>
				<li>Ketentuan bagi calon taruna yang mengundurkan diri adalah sebagai berikut:</li>
				<ol type="a">
					<li>Jika mengundurkan diri sesudah Daftar Ulang : Biaya yang telah dibayar (sesuai ketentuan) akan dikembalikan sebesar 30%.</li>
					<li>Jika pengunduran diri dilakukan pada saat dan atau sesudah pelaksanaan kegiatan akademik dengan alasan apapun, biaya yang telah dibayarkan tidak dapat diminta kembali.</li>
				</ol>
			</ol>
		<li><b>INFORMASI MADATUKAR (Masa Dasar Pembentukan Karakter) </b></li>
		<p>Informasi kegiatan MADATUKAR (Masa Dasar Pembentukan Karakter) akan diumumkan lebih lanjut.</p>
		<li><b>PENUTUP</b></li>
		<p>Demikian untuk dapat menjadikan perhatian, terima kasih.</p>

	</ol>
	<table align="right">
		<tr><td align="center"><?php
            // Konversi format tanggal dari database
            $tanggal = strtotime($c->tgl_pengumuman); // Ubah menjadi timestamp
            echo "Semarang, " . date('d-m-Y', $tanggal); // Format menjadi dd-mm-yyyy
            ?></td></tr>
		<tr><td align="center">Ketua Panitia PMB</td></tr>
		<tr><td align="center"><img src="<?php echo base_url() ?>assets/front1/img/ttd.png" width="20%"></td></tr>
		<tr><td align="center"><u>Supriyanto, S.Sos., M.M</u></td></tr>
		<tr><td align="center">NIDN. 0603046504</td></tr>
	</table>
		

<?php } ?>
</body>
</html>
