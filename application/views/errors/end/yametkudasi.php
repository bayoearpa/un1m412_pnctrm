<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Pendaftaran Ditutup</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style type="text/css">

/* Universal Styles */
body {
	background-color: #f3f4f6;
	margin: 0;
	font-family: 'Poppins', sans-serif;
	color: #333;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	overflow: hidden;
}

a {
	color: #ff5722;
	background-color: transparent;
	text-decoration: none;
	font-weight: 600;
}

h1 {
	color: #ff6f61;
	background-color: transparent;
	font-size: 24px;
	font-weight: 600;
	text-align: center;
	margin-bottom: 24px;
}

#container {
	text-align: center;
	background-color: #ffffff;
	padding: 30px;
	border-radius: 10px;
	box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
	max-width: 600px;
	width: 100%;
}

p {
	font-size: 16px;
	line-height: 1.5;
	color: #777;
	margin-top: 20px;
}

button {
	background-color: #ff6f61;
	color: #fff;
	border: none;
	padding: 10px 20px;
	border-radius: 25px;
	cursor: pointer;
	font-size: 14px;
	margin-top: 20px;
	transition: background-color 0.3s ease;
}

button:hover {
	background-color: #ff3d33;
}

audio {
	margin-top: 20px;
}

footer {
	margin-top: 40px;
	font-size: 12px;
	color: #bbb;
}

#footer-text {
	color: #aaa;
}
</style>
</head>
<body>
	<div id="container">
		<h1>Mohon Maaf, Pendaftaran Sudah Ditutup</h1>
		<p>Pendaftaran Mahasiswa dan Taruna UNIMAR AMNI Semarang Tahun 2024 sudah kami tutup. Terima kasih atas minat Anda. Untuk informasi lebih lanjut, Anda dapat menghubungi kami melalui WA. 0851 6161 0180<!--  <a href="#">kontak ini</a> -->.</p>
		<!-- Audio for background music -->
		<audio id="playAudio" controls autoplay loop>
		  <source src="<?php echo base_url() ?>assets/download/boba_date.mp3" type="audio/mpeg">
		  Your browser does not support the audio element.
		</audio>
		<!-- <button onclick="window.location.href='<?php //echo base_url(); ?>'">Kembali ke Beranda</button> -->
		<footer>
			<p id="footer-text">© 2024 UNIMAR AMNI Semarang. All rights reserved.</p>
		</footer>
	</div>

<script>
var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  if (!isChrome){
      document.getElementById('playAudio').remove(); // Remove audio element if not Chrome
  }
</script>
</body>
</html>
