<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
*{
font-family: Arial;
font-size: 8px;
margin:0px;
padding:0px;
letter-spacing: 2px;
}

@page {
margin-left:3cm 2cm 2cm 2cm;
margin-top: 0px;
}

table.grid{
font-size: 10pt;
border-collapse:collapse;
}

table.grid th{
padding-top:1mm;
padding-bottom:1mm;
}

table.grid th{
background: #F0F0F0;
border-top: 0.2mm solid #000;
border-bottom: 0.2mm solid #000;
text-align:left;
padding-left:0.2cm;
}

table.grid tr td{
padding-top:0.5mm;
padding-bottom:0.5mm;
padding-left:2mm;
border-bottom:0.2mm solid #000;
}

h1{
font-size: 18pt;
}

h2{
font-size: 14pt;
}

.header{
display: block;
/*width:15.6cm ;*/
margin-bottom: 0.3cm;
text-align: center;
}

.attr{
font-size:9pt;
width: 100%;
padding-top:2pt;
padding-bottom:2pt;
border-top: 0.2mm solid #000;
border-bottom: 0.2mm solid #000;
}

.pagebreak {
page-break-after: always;

}


	</style>
</head>
<body>
<br><br>
<table align="center" width="100%">
		<tr><td align="center"><h3>UNIVERSITAS MARITIM AMNI</h3></td></tr>
		<tr><td align="center"><h3>( UNIMAR AMNI )</h3></td></tr>
	</table>
<?php 
foreach($validasi as $v){ 
foreach($catar as $c){ 
?>	
<table border="0" width="100%">

<tr><td colspan="5" align="center" style="border-top-style:dotted;border-bottom-style:dotted;border-width: 1px;"><h3 style="margin:1px;">P E N C A T A R M A</h3></td></tr>
<tr><td width="30%"><p style="margin:1px;">Tanggal</p></td><td width="1px">:</td><td width="15%"><?php echo $v->tgl_byr ?></td><td></td><td width="30%"></td></tr>
<tr><td><p style="margin:1px;">No Registrasi</p></td><td>:</td><td><?php echo $v->no ?>
	<?php 
                  switch ($v->prodi) {

                      // registrasi
                        case '1':
                          $pick = "/K/".date("Y");
                        break;
                        case '2' :
                          $pick = "/T/".date("Y");
                        break;
                        case '3' :
                          $pick = "/N/".date("Y");
                        break;
                        case '4' :
                          $pick = "/TRA/".date("Y");
                        break;
                        case '5':
                          $pick = "/TTL/".date("Y");
                        break;
                        case '6':
                          $pick = "/TM/".date("Y");
                        break;
                        case '7':
                          $pick = "/TK/".date("Y");
                        break;
                        case '8':
                          $pick = "/PI/".date("Y");
                        break;
                        case '9':
                          $pick = "/MPLM/".date("Y");
                        break;
                         case '10':
                          $pick = "/BD/".date("Y");
                        break;
                        
                      }
                      echo $pick;
                ?>


</td><td></td></tr>
<tr><td><p style="margin:1px;">Jurusan yang Dipilih</p></td><td>:</td><td>
	<?php 
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
                       case '9':
                        $pick = "D4 MANAJEMEN PELABUHAN DAN LOGISTIK MARITIM";
                      break; 
                      case '10':
                        $pick = "S1 BISNIS DIGITAL";
                      break;
                        
                      }
                      echo $pick;
                ?>


</td><td></td></tr>
<tr><td><p style="margin:1px;">Nama</p></td><td>:</td><td><?php echo $c->nama ?></td><td></td></tr>
<tr><td style="border-top-style:dotted;border-bottom-style:dotted;border-width: 1px;" colspan="4"><p style="margin:1px;"><b>JENIS PEMBAYARAN<b></p></td><td width="30%" style="border-top-style:dotted;border-bottom-style:dotted;border-width: 1px;"><b>RINCIAN</b></p></td></tr>

<?php if ($c->prodi == '2' || $c->prodi == '3') {
  # code... ?>

  <tr><td><p style="margin:1px;">BIAYA KESEHATAN</p></td><td>:</td><td></td><td></td><td>Rp. 500.000,-</td></tr>
<tr><td style="border-top-style:dotted;border-bottom-style:dotted;border-width: 1px;" colspan="4"><p style="margin:1px;"><b>TOTAL</b></p></td><td width="30%" style="border-top-style:dotted;border-bottom-style:dotted;border-width: 1px;"><p style="margin:1px;"><b>Rp. 500.000,-</b></p></td></tr>
<tr><td style="border-bottom-style:dotted;border-width:1px;" colspan="4"><p><b>Terbilang</b></p></td><td  width="30%" style="border-bottom-style:dotted;border-width:1px;"><p><b>LIMA RATUS RIBU RUPIAH</b></p></td></tr>


<?php }else{ ?>

<tr><td><p style="margin:1px;">BIAYA KESEHATAN</p></td><td>:</td><td></td><td></td><td>Rp. 120.000,-</td></tr>
<tr><td style="border-top-style:dotted;border-bottom-style:dotted;border-width: 1px;" colspan="4"><p style="margin:1px;"><b>TOTAL</b></p></td><td width="30%" style="border-top-style:dotted;border-bottom-style:dotted;border-width: 1px;"><p style="margin:1px;"><b>Rp. 120.000,-</b></p></td></tr>
<tr><td style="border-bottom-style:dotted;border-width:1px;" colspan="4"><p><b>Terbilang</b></p></td><td  width="30%" style="border-bottom-style:dotted;border-width:1px;"><p><b>SERATUS DUA PULUH RIBU RUPIAH</b></p></td></tr>

<?php } ?>

<tr><td></td><td></td><td></td><td>Petugas</td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td><?php echo $this->session->userdata('nama'); ?></td></tr>
</table>
</body>
</html>
<?php }} ?>
<script language="javascript">
window.print();
</script>

  
