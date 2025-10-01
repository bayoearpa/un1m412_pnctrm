<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
//registrasi route
// $route['default_controller'] = 'error_ctr';
//dev
// $route['dev'] = 'welcome';

// untuk dev page
$route['index_dev'] = 'welcome/jajal';

//ditutup karena sudah berakhir
// $route['registrasi'] = 'welcome/registrasi';
// $route['registrasi_d3'] = 'welcome/registrasid3';
// $route['registrasi_eks'] = 'welcome/registrasieks';
// $route['registrasi2'] = 'welcome/registrasi2';

//reg_fastrack
// $route['registrasi_fasttrack'] = 'welcome/registrasi_fasttrack';
// $route['registrasi_d3_fasttrack'] = 'welcome/registrasid3_fasttrack';
// $route['registrasi_eks_fasttrack'] = 'welcome/registrasieks_fasttrack';

//reg_disc
// $route['registrasi_disc'] = 'welcome/registrasi_disc';

//reg_rpl
// $route['registrasi_khusus'] = 'welcome/registrasi_rpl';

//referral page
// $route['referral'] = 'referral';
// $route['referral_access'] = 'referral/login';
// $route['referral_home'] = 'referral/home';

//camahatar
$route['tabraktabrakmasuk'] = 'camhtar/tabrak';
$route['proses_tabrak'] = 'camhtar/tabrakp';
$route['masuk'] = 'camhtar';
$route['keluar'] = 'camhtar/logout';
$route['lupa_password'] = 'camhtar/forgot_password';
$route['proses_masuk'] = 'camhtar/loginp';
$route['proses_masuk26'] = 'camhtar/loginp26';
$route['daftar'] = 'camhtar/daftar';
$route['daftar26'] = 'camhtar/daftar26';
$route['pendaftaran'] = 'camhtar/daftarp';
$route['pendaftaran26'] = 'camhtar/daftarp26';
$route['cek'] = 'camhtar/cek_user';
$route['cek26'] = 'camhtar/cek_user26';
$route['home'] = 'camhtar/home';
$route['biodata'] = 'camhtar/biodata';
$route['proses_biodata'] = 'camhtar/insertReg';
$route['pembayaran'] = 'camhtar/pembayaran';
$route['validasi'] = 'camhtar/validasi';
$route['proses_bukti_bayar'] = 'camhtar/upload_bukti_bayar';
$route['proses_bukti_bayar2'] = 'camhtar/upload_bukti_bayar2';
$route['seleksi_geldini_reguler'] = 'camhtar/seleksigdr1';
$route['seleksi_geldini_tf'] = 'camhtar/seleksigdr2';
$route['proses_seleksi_gdtf'] = 'camhtar/seleksigdr2p';
$route['download_suket'] = 'camhtar/down_suket';
$route['download_supersehat'] = 'camhtar/down_supersehat';
$route['download_supersehattf'] = 'camhtar/down_supersehattf';
$route['download_supersehatreg'] = 'camhtar/down_supersehatreg';
$route['proses_seleksi_gelombangdini_reguler'] = 'camhtar/proses_seleksi_reguler';
$route['getDataGelombangDiniReguler/(:num)'] = 'camhtar/getdataeditseleksigdr1/$1';
$route['proses_seleksi_gelombangdini_reguler_edit'] = 'camhtar/edit_proses_seleksi';
$route['ukurpakaian'] = 'camhtar/ukurpakaian';
$route['prosesukurpakaian'] = 'camhtar/proses_ukurpakaian';
$route['download_tutorial_form_seleksi_gelombang_dini'] = 'camhtar/down_tutorial_form_seleksi_gelombang_dini';
$route['download_panduan_pengisian_form_ukur_pakaian'] = 'camhtar/down_panduan_pengisian_form_ukur_pakaian';
$route['pengumuman_gelombangdini'] = 'camhtar/pengumuman_gd';
$route['download_pengumuman_gelombangdini'] = 'camhtar/down_pengumuman_gd';
$route['download_pengumuman_seleksi'] = 'camhtar/down_pengumuman_seleksi';

//download 2025
$route['download_suket_sanggup_tidak_menikah25'] = 'camhtar/down_sanggup_tidak_menikah25';
$route['download_suket_sanggup_menaati_peraturan25'] = 'camhtar/down_sanggup_menaati_peraturan25';
$route['download_super_sanggup_tinggal_diasrama25'] = 'camhtar/down_perny_tinggal_asrama25';
$route['download_suket_sehat_gelombang_dini25'] = 'camhtar/down_suket_sehat_geldini25';

//pengumuman
$route['pengumuman'] = 'camhtar/pengumuman';
$route['download_pengumuman_januari'] 	= 'camhtar/down_pengumuman_jan';
$route['download_pengumuman_februari_maret'] 	= 'camhtar/down_pengumuman_feb_mar';
$route['download_pengumuman_maret'] 	= 'camhtar/down_pengumuman_mar';
$route['download_pengumuman_april'] 	= 'camhtar/down_pengumuman_apr';
$route['download_pengumuman_mei'] 		= 'camhtar/down_pengumuman_mei';
$route['download_pengumuman_juni'] 		= 'camhtar/down_pengumuman_jun';
$route['download_pengumuman_juli'] 		= 'camhtar/down_pengumuman_jul';
$route['download_pengumuman_agustus'] 	= 'camhtar/down_pengumuman_ags';
$route['download_pengumuman_september'] = 'camhtar/down_pengumuman_sep';
$route['download_pengumuman_oktober'] 	= 'camhtar/down_pengumuman_nov';
$route['download_pengumuman_november'] 	= 'camhtar/down_pengumuman_des';

$route['seleksi_reguler'] = 'camhtar/seleksi_reguler';
$route['seleksi_tf'] = 'camhtar/seleksigdr2';
$route['download_super_asrama'] = 'camhtar/down_super_asrama';
$route['download_super_taat'] = 'camhtar/down_super_taat';
$route['download_super_tidak_menikah'] = 'camhtar/down_super_tidak_menikah';
$route['daftarulang'] = 'camhtar/daful';
$route['proses_bukti_bayar_daful'] = 'camhtar/upload_bukti_bayar_daful';


// referral
$route['referral_access'] = 'referral/login';
$route['referral_home'] = 'referral/home';
$route['referral_logout'] = 'referral/logout';

// $route['cetakRegistrasi'] = 'welcome/insertReg';
// $route['cetakRegistrasi2'] = 'welcome/insertReg2';
// $route['cekstatus'] = 'welcome/cekstatus';
$route['biaya_download'] = 'welcome/biaya_download';
$route['tutorial_download'] = 'welcome/tutorial_download';
// $route['apk_download'] = 'welcome/apk_download';
// $route['cekstatusp'] = 'welcome/cekstatusp';
// $route['cekstatusp/(:num)'] = 'welcome/cekstatusp/$1';
$route['download/(:num)'] = 'camhtar/download/$1';
$route['download_sk/(:num)'] = 'camhtar/download_sk/$1';
$route['download_sk_hal2_reguler/(:num)'] = 'camhtar/download_sk2reg/$1';
$route['download_sk_hal2_kelas_transfer/(:num)'] = 'camhtar/download_sk2tf/$1';
// $route['voucher/(:num)'] = 'welcome/voucher/$1';

$route['getkabkota'] = 'camhtar/get_kabkota';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
