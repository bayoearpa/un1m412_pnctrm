<style type="text/css">
	td,li,p{
		font-size: 10px;
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
		<p style="margin: 0px;padding: 0px;"><b>FORMULIR PENDAFTARAN PENCATARMA</b></p>
		<p style="margin: 0px;padding: 0px;"><b>TAHUN AKADEMIK 2023 / 2024 </b></p>
		<p style="margin: 0px;padding: 0px;"><b>UNIVERSITAS MARITIM AMNI SEMARANG</b></p>
		<p style="margin: 0px;padding: 0px;"><b>UNIMAR AMNI SEMARANG</b></p>
		<p style="margin: 0px;padding: 0px;">Jl. Soekarno-Hatta No. 180 Semarang 50199</p>
		<p style="margin: 0px;padding: 0px;">website : http://www.unimar-amni.ac.id</p>
		<p style="margin: 0px;padding: 0px;">email : info@unimar-amni.ac.id</p>
		</td>
		<td width="12%"><img src="<?php echo base_url() ?>assets/front1/img/DNV-GL-ISO-9001-2008.png" width="15%"></td>

	</tr>
</table>
<?php foreach($catar as $c){ ?>
<hr size="2" style="border-color: #000000;border-width: 3px;margin: 0px;padding: 0px;">
<h1 align="right" style="margin-right: 20px;margin-bottom: 0px;margin: 0px;padding: 0px;"><?php echo $c->no ?></h1>
<!-- datadiri -->
<h5 style="margin: 0px;padding: 0px;"><b>Kartu Test Catarma</b></h2>
<table width="90%" align="center" id="biodata">
	<tr>
		<td width="30%"><b>Nama</b></td><td width="1%">:</td><td><?php echo $c->nama ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Tempat Lahir</b></td><td width="1%">:</td><td><?php echo $c->tl ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Tanggal Lahir</b></td><td width="1%">:</td><td><?php echo $c->tgl_l ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Agama</b></td><td width="1%">:</td><td><?php echo $c->agama ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Jenis Kelamin</b></td><td width="1%">:</td><td><?php echo $c->jk ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Alamat</b></td><td width="1%">:</td><td><?php echo $c->alamat ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Kota / Kabupaten</b></td><td width="1%">:</td><td><?php echo $kabkota ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Provinsi</b></td><td width="1%">:</td><td><?php echo $provinsi ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Telepon</b></td><td width="1%">:</td><td><?php echo $c->telp ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Kategori Sekolah</b></td><td width="1%">:</td><td><?php echo $c->kategori_sek ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Jurusan (SMA/SMK)</b></td><td width="1%">:</td><td><?php echo $c->prodi_lama ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Tahun Lulus</b></td><td width="1%">:</td><td><?php echo $c->thn_lulus ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Asal Sekolah</b></td><td width="1%">:</td><td><?php echo $c->asek ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Alamat Sekolah</b></td><td width="1%">:</td><td><?php echo $c->alamat_sek ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Nama Ayah Kandung</b></td><td width="1%">:</td><td><?php echo $c->nama_a ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Nama Ibu Kandung</b></td><td width="1%">:</td><td><?php echo $c->nama_i ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Alamat Orang Tua / Wali</b></td><td width="1%">:</td><td><?php echo $c->alamat_ortu ?></td>
	</tr>
	<tr>
		<td width="30%"><b>Telepon Orang Tua / Wali</b></td><td width="1%">:</td><td><?php echo $c->telp_ortu ?></td>
	</tr>
	<!-- <tr>
		<td width="30%"><b>Gelombang</b></td><td width="1%">:</td><td><?php //echo substr($c->gelombang,-1); ?></td>
	</tr> -->
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
<br>
<table align="center" border="1" style="border: 1px solid black;border-collapse: collapse;" width="90%">
	<tr>
		<td><center><b>Kegiatan</b></center></td>
		<td><center><b>Paraf Petugas</b></center></td>
	</tr>
	<tr>
		<td align="left" height="30px">TPA</td>
		<td></td>
	</tr>
	<tr>
		<td align="left" height="30px">Kesehatan</td>
		<td></td>
	</tr>
	<tr>
		<td align="left" height="30px">Wawancara</td>
		<td></td>
	</tr>
	<tr>
		<td align="left" height="30px">SAMAPTA</td>
		<td></td>
	</tr>
	<tr>
		<td align="left" height="30px">Ukur Pakaian</td>
		<td></td>
	</tr>
	<tr>
		<td align="left" height="30px">Pantukhir</td>
		<td></td>
	</tr>
</table>

<!-- ttd -->
<table width="80%" align="center" style="margin: 0px;padding: 0px;">
	<tr><td align="center" style="height: 100px;">Panitia Pencatarma</td><td align="center">Calon Taruna</td></tr>
	<tr><td><hr style="border-style: dotted;width: 50%;"></td><td><hr style="border-style: dotted;width: 50%;"></td></tr>
</table>
<p style="margin: 0px;padding: 0px;"><b>Catatan :</b></p>
<ul>
	<li><small>Copy Ijazah (Dilegalisir) 1 Lembar</small></li>
	<li><small>SKCK (Surat Keterangan Catatan Kepolisian) 1 lembar</small></li>
	<li><small>Copy Surat kenal lahir / akte kelahiran 1 Lembar</small></li>
	<li><small>Copy tanda pengenal yang sah, KTP atau SIM 1 lembar</small></li>
	<li><small>Pas photo hitam putih ukuran 3x4 sebanyak 2  lembar</small></li>
	<li><small>Membawa surat pernyataan dan riwayat kesehatan</small></li>
</ul>
<p style="margin: 0px;padding: 0px;"><small>*Jika anda salah mengisi data anda dapat mengulanginya lagi dari awal. Simpanlah file pdf anda!!</small></p>
<!-- <p style="margin: 0px;padding: 0px;"><small>*Bagi pendaftar  melalui <b><i>online</i></b> dapat melaksanakan pembayaran pendaftaran melalui Bank/ATM :</small></p>
                  <tr>
                    <td style="margin: 0px;padding: 0px;"><b><small>BANK BNI</small></b></td>
                    <td style="margin: 0px;padding: 0px;"><b><small>:</small></b></td>
                    <td style="margin: 0px;padding: 0px;"><b><small>an. UNIMAR AMNI</small></b></td>
                  </tr>
                  <tr>
                    <td style="margin: 0px;padding: 0px;"><b><small>No. Rekening</small></b></td>
                    <td style="margin: 0px;padding: 0px;"><b><small>:</small></b></td>
                    <td style="margin: 0px;padding: 0px;"><b><small>0838810730</small></b></td>
                  </tr>
                  <tr>
                    <td style="margin: 0px;padding: 0px;"><b><small>Biaya Pendaftaran</small></b></td>
                    <td style="margin: 0px;padding: 0px;"><b><small>:</small></b></td>
                    <td style="margin: 0px;padding: 0px;"><b><small>Rp. 500.000,-</small></b></td>
                  </tr>
                </table> -->
<!-- <p style="margin: 0px;padding: 0px;"><small>*Bukti Pembayaran dapat dikirim melalui :</small></p>
 <table>
                  <tr>
                    <td style="margin: 0px;padding: 0px;" width="14%"><b><small>No. WA</small></b></td>
                    <td style="margin: 0px;padding: 0px;" width="1%"><b><small>:</small></b></td>
                    <td style="margin: 0px;padding: 0px;"><b><small>0822.46.900.800</small></b></td>
                  </tr>
                  <tr>
                    <td colspan="3" style="margin: 0px;padding: 0px;"><small>Dengan mencantumkan informasi :</small></td>
                  </tr>
                  <tr>
                    <td colspan="3" style="margin: 0px;padding: 0px;"><b><small>No. Pendaftaran Online_Nama Pendaftar_Prodi yang dipilih_Periode</small></b></td>
                  </tr>
                  <tr>
                    <td style="margin: 0px;padding: 0px;" width="14%"><small>Contoh</small></td>
                    <td style="margin: 0px;padding: 0px;" width="1%"><small>:</small></td>
                    <td style="margin: 0px;padding: 0px;"><b><small>1234_Rian Ardianto_Nautika_Januari</small></b></td>
                  </tr>
                </table> -->
<!-- <p style="margin: 0px;padding: 0px;"><small>*Tes seleksi 30 Mei - 4 Agustus 2020.</small></p> -->
<p style="margin: 0px;padding: 0px;"><small>*Pemberkasan dilaksanakan setelah pendaftaran dinyatakan <b>DITERIMA</b></small></p>
<p style="margin: 0px;padding: 0px;"><small>*<b><i>follow ig official kami @unimar.amni.semarang</i></b></small></p>
<table>
<!-- halaman 2 -->
<div style="page-break-before:always; ">
<table align="center" width="100%">
	<tr>
		<td width="12%"><img src="<?php echo base_url() ?>assets/front1/img/amni-png-doc.png" width="15%"></td>
		<td align="center">
		<p style="margin: 0px;padding: 0px;"><b>FORMULIR PENDAFTARAN PENCATARMA</b></p>
		<p style="margin: 0px;padding: 0px;"><b>TAHUN AKADEMIK 2022 / 2023 </b></p>
		<p style="margin: 0px;padding: 0px;"><b>UNIVERSITAS MARITIM AMNI SEMARANG</b></p>
		<p style="margin: 0px;padding: 0px;"><b>UNIMAR AMNI SEMARANG</b></p>
		<p style="margin: 0px;padding: 0px;">Jl. Soekarno-Hatta No. 180 Semarang 50199</p>
		<p style="margin: 0px;padding: 0px;">website : http://www.unimar-amni.ac.id</p>
		<p style="margin: 0px;padding: 0px;">email : info@unimar-amni.ac.id</p>
		</td>
		<td width="12%"><img src="<?php echo base_url() ?>assets/front1/img/DNV-GL-ISO-9001-2008.png" width="15%"></td>

	</tr>
</table>
<hr size="2" style="border-color: #000000;border-width: 3px;margin: 0px;padding: 0px;">
</br>
<p style="margin: 0px;padding: 0px;text-align: center;margin-top: 5px;"><b>FORMULIR SELEKSI CALON TARUNA DAN MAHASISWA</b></p>
<p style="margin: 0px;padding: 0px;text-align: center;margin-bottom: 10px;"><b>UNIMAR AMNI SEMARANG TAHUN AKADEMIK 2020/2021</b></p>
</br>
<table style="margin-bottom: 10px;">
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><?php echo $c->nama ?></td>
	</tr>
	<tr>
		<td>No. Calon Taruna / Mahasiswa</td>
		<td>:</td>
		<td><?php echo $c->no ?></td>
	</tr>
	<tr>
		<td>Asal SMA/SMK/MA</td>
		<td>:</td>
		<td><?php echo $c->kategori_sek ?></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><?php echo $c->prodi_lama ?></td>
	</tr>
	<tr>
		<td>Alamat SMA/SMK/MA</td>
		<td>:</td>
		<td><?php echo $c->alamat_sek ?></td>
	</tr>
	<tr>
		<td>Prodi yang dipilih</td>
		<td>:</td>
		<td><b><?php 
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

<table width="100%" border="1" style="border-collapse: collapse;border: 1px solid black;margin-bottom: 10px;">
	<tr>
		<td align="center" width="10px">NO.</td>
		<td align="center" width="150px">KEGIATAN</td>
		<td align="center">KETERANGAN</td>
		<td align="center" colspan="2">PARAF PETUGAS</td>
	</tr>
	<tr>
		<td align="center" height="40px">1.</td>
		<td>Daftar Hadir</td>
		<td></td>
		<td>1<hr style="border-style: dotted"></td>
		<td></td>
	</tr>
	<tr>
		<td align="center" height="40px">2.</td>
		<td>Penjelasan Umum</td>
		<td></td>
		<td></td>
		<td>2<hr style="border-style: dotted"></td>
	</tr>
	<tr>
		<td align="center" height="40px">3.</td>
		<td>Test Akademik</td>
		<td></td>
		<td>3<hr style="border-style: dotted"></td>
		<td></td>
	</tr>
	<tr>
		<td align="center" height="40px">4.</td>
		<td>Pemeriksaan Kesehatan</td>
		<td></td>
		<td></td>
		<td>4<hr style="border-style: dotted"></td>
	</tr>
	<tr>
		<td align="center" height="40px">5.</td>
		<td>Kesamaptaan Jasmani</td>
		<td></td>
		<td>5<hr style="border-style: dotted"></td>
		<td></td>
	</tr>
	<tr>
		<td align="center" height="40px">6.</td>
		<td>Psikotest</td>
		<td></td>
		<td></td>
		<td>6<hr style="border-style: dotted"></td>
	</tr>
	<tr>
		<td align="center" height="40px">7.</td>
		<td>Wawancara</td>
		<td></td>
		<td>7<hr style="border-style: dotted"></td>
		<td></td>
	</tr>
	<tr>
		<td align="center" height="40px">8.</td>
		<td>Ukuran Pakaian Dinas</td>
		<td></td>
		<td></td>
		<td>8<hr style="border-style: dotted"></td>
	</tr>
	<tr>
		<td align="center" height="40px">9.</td>
		<td>Sidang Kelulusan</td>
		<td></td>
		<td>9<hr style="border-style: dotted"></td>
		<td></td>
	</tr>


</table>
</br></br></br>
<p style="margin: 0px;padding: 0px;margin-bottom: 10px;">Keterangan : Bila semua telah selesai dilaksanakan / lengkap dengan paraf dari masing - masing petugas, formulir ini harap dikumpulkan kembali ke panitia (meja seketariat).</p>
<table align="right">
	<tr>
		<td align="center" style="margin: 0px;padding: 0px;">Semarang, <?php echo " ".date("d-m-Y") ?></td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
		<td align="center" style="margin-top: 0px;padding: 0px;">Calon Taruna / Mahasiswa</td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
		<td align="center" style="height: 100px;">(<u style="border-style: dotted"><?php echo $c->nama; ?></u>)</td>
	</tr>

	
</table>
<p><u>Keterangan:</u></p>
<p>*)Tulis menggunakan huruf balok</p>
</div>
<!-- akhir halaman 2 -->
<!-- awal halaman 3 -->
<div style="page-break-before:always; ">
	<table align="center" width="100%">
	<tr>
		<td width="12%"><img src="<?php echo base_url() ?>assets/front1/img/amni-png-doc.png" width="15%"></td>
		<td align="center">
		<p style="margin: 0px;padding: 0px;"><b>FORMULIR PENDAFTARAN PENCATARMA</b></p>
		<p style="margin: 0px;padding: 0px;"><b>TAHUN AKADEMIK 2022 / 2023 </b></p>
		<p style="margin: 0px;padding: 0px;"><b>UNIVERSITAS MARITIM AMNI SEMARANG</b></p>
		<p style="margin: 0px;padding: 0px;"><b>UNIMAR AMNI SEMARANG</b></p>
		<p style="margin: 0px;padding: 0px;">Jl. Soekarno-Hatta No. 180 Semarang 50199</p>
		<p style="margin: 0px;padding: 0px;">website : http://www.unimar-amni.ac.id</p>
		<p style="margin: 0px;padding: 0px;">email : info@unimar-amni.ac.id</p>
		</td>
		<td width="12%"><img src="<?php echo base_url() ?>assets/front1/img/DNV-GL-ISO-9001-2008.png" width="15%"></td>

	</tr>
</table>
<hr size="2" style="border-color: #000000;border-width: 3px;margin: 0px;padding: 0px;">
</br>
<p style="margin: 0px;padding: 0px;text-align: center;margin-top: 5px;"><b>DAFTAR RIWAYAT HIDUP</b></p>
<p style="margin: 0px;padding: 0px;text-align: center;"><b>CALON TARUNA DAN MAHASISWA STIMART "AMNI" SEMARANG</b></p>
<p style="margin: 0px;padding: 0px;text-align: center;margin-bottom: 10px;"><b>TAHUN AKADEMIK 2020/2021</b></p>
<p style="margin: 0px;padding: 0px;">Petunjuk Isilah daftar riwayat hidup (2 Halaman) dengan menggunakan huruf balok</p>
<!-- identitas diri -->
<p style="margin: 0px;padding: 0px;"><b>A. IDENTITAS DIRI</b></p>
<table width="100%">
	<tr>
		<td width="2%" align="left"></td>
		<td width="10%">1. Nama Lengkap</td>
		<td width="1%" align="left">:</td>
		<td width="53%"><?php echo $c->nama ?></td>
	</tr>
	<tr>
		<td></td>
		<td>2. Tempat Lahir</td>
		<td>:</td>
		<td><?php echo $c->tl ?></td>
	</tr>
	<tr>
		<td></td>
		<td>3. Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $c->jk ?></td>
	</tr>
	<tr>
		<td></td>
		<td>4. Agama</td>
		<td>:</td>
		<td><?php echo $c->agama ?></td>
	</tr>

</table>
<!-- identitas orang tua -->
<p style="margin: 0px;padding: 0px;"><b>B. IDENTITAS ORANG TUA</b></p>
<table width="100%">
	<tr>
		<td width="2%" align="left"></td>
		<td width="5%">1. Nama Ayah</td>
		<td width="1%" align="left">:</td>
		<td width="65%"><?php echo $c->nama_a ?></td>
	</tr>
	<tr>
		<td></td>
		<td>2. Nama Ibu</td>
		<td>:</td>
		<td><?php echo $c->nama_i ?></td>
	</tr>
	<tr>
		<td></td>
		<td>3. Pekerjaan Ayah</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>4. Pekerjaan Ibu</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>5. Penghasilan rata-rata per bulan*</td>
		<td>:</td>
		<td>a. Kurang dari Rp.3.000.000,-/ bulan</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>:</td>
		<td>b. Rp. 3.000.000,- s/d Rp. 6.000.000,-/ bulan</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>:</td>
		<td>c. Lebih dari Rp. 6.000.000-/ bulan</td>
	</tr>
	<tr>
		<td></td>
		<td>6. Alamat Orang Tua</td>
		<td>:</td>
		<td><?php echo $c->alamat_ortu ?></td>
	</tr>
	<tr>
		<td></td>
		<td>7. No. Telp / Hp</td>
		<td>:</td>
		<td><?php echo $c->telp_ortu ?></td>
	</tr>
</table>
<!-- alamat lengkap -->
<p style="margin: 0px;padding: 0px;"><b>C. ALAMAT LENGKAP CALON TARUNA DAN MAHASISWA YANG MUDAH DIHUBUNGI</b></p>
<table width="100%">
	<tr>
		<td width="2%" align="left"></td>
		<td width="5%">1. Jalan, No.Rumah</td>
		<td width="1%" align="left">:</td>
		<td width="70%"><?php echo $c->alamat ?></td>
	</tr>
	<tr>
		<td></td>
		<td>2. Desa RT. / RW</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>3. Kecamatan, Kodia, Kabupaten</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>4. No Telp / HP</td>
		<td>:</td>
		<td><?php echo $c->telp ?></td>
	</tr>

</table>
<!-- yang membiayai -->
<p style="margin: 0px;padding: 0px;"><b>D. YANG MEMBIAYAI PENDIDIKAN SAUDARA</b></p>
<table width="100%">
	<tr>
		<td width="2%" align="left"></td>
		<td width="5%">1. Nama </td>
		<td width="1%" align="left">:</td>
		<td width="70%"><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>2. Hubungan Keluarga</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>3. Pekerjaan</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>4. Jumlah Keluarga yang menjadi tanggungan</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>5. Tersebut Butir 4; sebutkan siapa saja</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>

</table>
<!-- Pengalaman organisasi -->
<p style="margin: 0px;padding: 0px;"><b>E. PENGALAMAN DALAM ORGANISASI</b></p>
<table width="100%">
	<tr>
		<td width="2%" align="left"></td>
		<td width="5%">1. Nama Organisasi</td>
		<td width="1%" align="left">:</td>
		<td width="70%"><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>2. Jabatan dalam Organisasi</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
</table>
<!-- Hobby -->
<p style="margin: 0px;padding: 0px;"><b>F. HOBBY</b></p>
<table width="100%">
	<tr>
		<td width="2%" align="left"></td>
		<td width="5%"> Hobby</td>
		<td width="1%" align="left">:</td>
		<td width="70%"><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
</table>
<!-- Prestasi -->
<p style="margin: 0px;padding: 0px;"><b>G. PRESTASI YANG PERNAH DICAPAI</b></p>
<table width="100%">
	<tr>
		<td width="2%" align="left"></td>
		<td width="25%">1. Kejuaraan dalam OR  / Seni</td>
		<td width="1%" align="left">:</td>
		<td width="5%">Juara</td>
		<td width="30%"><hr style="margin-bottom: 0px;padding: 0px;"></td>
		<td width="5%">Tahun</td>
		<td width="30%"><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td width="2%" align="left"></td>
		<td width="25%">2. Pertandingan</td>
		<td width="1%" align="left">:</td>
		<td width="5%">Juara</td>
		<td width="30%"><hr style="margin-bottom: 0px;padding: 0px;"></td>
		<td width="5%">Tahun</td>
		<td width="30%"><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
</table>
<!-- Motivasi masuk amni -->
<p style="margin: 0px;padding: 0px;"><b>H. MOTIVASI MASUK KE UNIMAR AMNI SEMARANG</b></p>
<table width="100%">
	<tr>
		<td width="2%" align="left"></td>
		<td width="20%">1. Mendapat Informasi</td>
		<td width="1%" align="left">:</td>
		<td width="70%">
			<?php 
		switch ($c->informasi) {

				// registrasi
					case '1':
						$pick = "Koran";
					break;
					case '2' :
						$pick = "Internet";
					break;
					case '3' :
						$pick = "Teman";
					break;
					case '4' :
						$pick = "Alumni";
					break;
					case '5':
						$pick = "Brosur";
					break;
					case '6':
						$pick = "Expo";
					break;
					
				}
				echo $pick;
		?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>2. Harapan yang akan dicapai kuliah di UNIMAR AMNI Semarang</td>
		<td>:</td>
		<td><hr style="margin-bottom: 0px;padding: 0px;"></td>
	</tr>
	<tr>
		<td></td>
		<td>3. Apakah orang tua mengetahui anda masuk UNIMAR AMNI Semarang</td>
		<td>:</td>
		<td>*) YA / TIDAK</td>
	</tr>
</table>
<!-- Pengalaman organisasi -->
<p style="margin: 0px;padding: 0px;"><b>I. KEBIASAAN YANG DILAKUKAN SEHARI - HARI</b></p>
<table width="100%">
	<tr>
		<td width="2%" align="left"></td>
		<td width="15%">1. Minum - minuman keras</td>
		<td width="1%" align="left">:</td>
		<td width="20%">a. Ya</td>
		<td width="20%">b. Kadang - Kadang</td>
		<td width="20%">c. Tidak Pernah</td>
	</tr>
	<tr>
		<td width="2%" align="left"></td>
		<td width="15%">2. Merokok</td>
		<td width="1%" align="left">:</td>
		<td width="20%">a. Ya</td>
		<td width="20%">b. Kadang - Kadang</td>
		<td width="20%">c. Tidak Pernah</td>
	</tr>
	<tr>
		<td width="2%" align="left"></td>
		<td width="15%">3. Berkelahi</td>
		<td width="1%" align="left">:</td>
		<td width="20%">a. Ya</td>
		<td width="20%">b. Kadang - Kadang</td>
		<td width="20%">c. Tidak Pernah</td>
	</tr>
	<tr>
		<td width="2%" align="left"></td>
		<td width="15%">4. Begadang</td>
		<td width="1%" align="left">:</td>
		<td width="20%">a. Ya</td>
		<td width="20%">b. Kadang - Kadang</td>
		<td width="20%">c. Tidak Pernah</td>
	</tr>
	<tr>
		<td width="2%" align="left"></td>
		<td width="20%">5. Penggunaan NARKOBA</td>
		<td width="1%" align="left">:</td>
		<td width="20%">a. Ya</td>
		<td width="20%">b. Kadang - Kadang</td>
		<td width="20%">c. Tidak Pernah</td>
	</tr>
	
</table>
<p style="margin: 0px;padding: 0px;margin-top: 10px">Demikian daftar riwayat hidup ini saya buat dengan sebenar - benarnya.</p>
<p style="margin: 0px;padding: 0px;margin-bottom: 10px">Keterangan : Beri tanda X (silang) untuk pilihan anda</p>
<table align="right">
	<tr>
		<td align="center" style="margin: 0px;padding: 0px;">Semarang, <?php echo " ".date("d-m-Y") ?></td>
	</tr>
	<tr>
		<td align="center" style="margin-top: 0px;padding: 0px;">Hormat Saya,</td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
		<td align="center" style="height: 100px;">(<u style="border-style: dotted"><?php echo $c->nama; ?></u>)</td>
	</tr>

	
</table>
</div>
<!-- akhir halaman 3 -->
<div style="page-break-before:always; ">
<p align="center" style="margin-bottom: 20px;font-size: 24px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; "> SURAT PERNYATAAN BERBADAN SEHAT</p>
<p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;margin-left: 10px; ">Saya yang bertanda tangan dibawah ini :</p>
<table style="margin-left: 10px;">
	<tr>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">Nama</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">:</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; "><?php echo $c->nama ?></p></td>
	</tr>
	<tr>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">Alamat</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">:</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; "><?php echo $c->alamat ?></p></td>
	</tr>
	<tr>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">No. KTP</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">:</p></td>
	</tr>
	<tr>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">Tempat/Tanggal Lahir</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">:</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; "><?php echo $c->tl." / ".$c->tgl_l ?></p></td>
	</tr>
	<tr>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">Jenis Kelamin</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">:</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; "><?php echo $c->jk; ?></p></td>
	</tr>
	<tr>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">Program Studi</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">:</p></td>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; "><?php 
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
						$pick = "S1 TRANSPORTASI ( LINTAS JALUR )";
					break;
					case '6':
						$pick = "S1 TEKNIK MESIN";
					break;
					case '7':
						$pick = "S1 TEKNIK TRANSPORTASI LAUT";
					break;
					case '8':
						$pick = "S1 TEKNIK KESELAMATAN";
					break;
					case '9':
						$pick = "S1 PERDAGANGAN INTERNASIONAL";
					break;
					
				}
				echo $pick;



		?></p></td>
	</tr>

</table>
<p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;text-align: justify;margin-left: 10px; ">
Sesuai dengan ketentuan persyaratan penerimaan calon taruna/mahasiswa beru maka dengan ini saya menyatakan bahwa saya dalam keadaan sehat jasmani dan rohani, tidak pernah menderita penyakit berat baik kronis maupun akut, penyakit yang membahayakan keselamatan jiwa dan dilarang oleh ketentuan peraturan pemerintah lainnya, tidak buta warna, tidak tuli dan bertatto.</p>
<p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;text-align: justify;margin-left: 10px; ">
	Demikian surat pernyataan ini saya buat dengan sesungguhnya danjujur, sehingga saya bersedia menerima sangsi jika kelak dikemudian hari ditemukan hal yang tidak sesuai dengan surat pernyataan ini
</p>
<table width="75%" style="margin-left: 10px;">
	<tr>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">Semarang,<?php echo " ".date("d-m-Y") ?></p></td>

	</tr>
	<tr>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">Yang Menyatakan</p></td>

	</tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr>
		<td><p style="font-size: 16px;font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; ">(<?php echo $c->nama; ?>)</p></td>

	</tr>
</table>

</div>
<?php } ?>
</body>
</html>
