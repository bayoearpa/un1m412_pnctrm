<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_registrasi');
		$this->load->helper('url');
		$this->load->helper('captcha');
		$this->load->helper('download');
		$this->load->helper('judul_seo');
		$this->load->library('m_pdf');
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function get_kabkota(){
        $id=$this->input->post('id');
        $data=$this->m_registrasi->get_kabkota($id);
        echo json_encode($data);
    }
    public function getTglSelAktif(){
	    $whereta = array(
			'aktif' => '1'		
		);
		$ta = $this->m_registrasi->get_data($whereta,'tbl_tgl_seleksi')->result();
			foreach ($ta as $t) {
			# code...
			//$data['nama'] = $n->Nama_mahasiswa ;
			return $t->id_tgl_seleksi;
		}
	}
	public function cekstatus()
	{
		// If captcha form is submitted
		if($this->input->post('submit')){
			$inputCaptcha = $this->input->post('captcha');
			$no = $this->input->post('no');
			$sessCaptcha = $this->session->userdata('captchaCode');
			if($inputCaptcha === $sessCaptcha){
				redirect(base_url().'cekstatusp/'.$no);
			}else{
				// echo 'Captcha code was not match, please try again.';
				redirect(base_url().'cekstatus?pesan=gagal');
			}
		}
		
		// Captcha configuration
		$config = array(
			'img_path'      => './captcha/',
			'img_url'       => base_url().'captcha/',
			'img_width'     => '150',
			'img_height'    => 50,
			'word_length'   => 8,
			'font_size'     => 30 
		);
		$captcha = create_captcha($config);
		
		// Unset previous captcha and store new captcha word
		$this->session->unset_userdata('captchaCode');
		$this->session->set_userdata('captchaCode',$captcha['word']);
		
		// Send captcha image to view
		$data['captchaImg'] = $captcha['image'];
		
		// Load the view
		$this->load->view('cekstatus', $data);
		// $this->load->view('cekstatus_foot');

	}
	function status_lulus($id){
		switch ($id) {

			// registrasi
				case '100':
					$pick = "<center><label for='exampleInputEmail1'><h1>Selamat anda telah lulus seleksi PMB UNIMAR AMNI Semarang. Silakan lakukan daftar ulang untuk tahap terakhir.</h1></label></center>";
				break;
				case '0' :
					$pick = "<center><label for='exampleInputEmail1'><h1>Maaf, Anda belum lulus tes Seleksi</h1></label></center>";
				break;
			}
			return $pick;
	}
	public function cekstatusp($no)
	{
		$data['welcome'] = $this;
		// Captcha configuration
		$config = array(
			'img_path'      => './captcha/',
			'img_url'       => base_url().'captcha/',
			'img_width'     => '150',
			'img_height'    => 50,
			'word_length'   => 8,
			'font_size'     => 30 
		);
		$captcha = create_captcha($config);
		
		// Unset previous captcha and store new captcha word
		$this->session->unset_userdata('captchaCode');
		$this->session->set_userdata('captchaCode',$captcha['word']);
		
		// Send captcha image to view
		$data['captchaImg'] = $captcha['image'];


			$where = array('no' => $no);
			$datax = $this->m_registrasi->get_data($where,'tbl_catar_validasi_2023');
			$cek = $datax->num_rows();

		if ($cek > 0) {
			# code...
				//get data
			$where2 = array('no' => $no);
			$where3 = array('tbl_catar_validasi_2023.no' => $no);
			$data['catar'] = $this->m_registrasi->get_data($where2,'tbl_catar_2023')->result();

			// cek wawancara
			$get_wawancara = $this->m_registrasi->get_data_test_wawancara($where3)->result();

			if ($get_wawancara > 0) {
					# code...
				foreach ($get_wawancara as $key) {
				# code...
				$data['wawancara'] = $key->hasil_wwncara;

				}
			}else{
				$data['wawancara'] = null;
			}	

				
			// ./cek wawancara
		}else{
			$data['catar'] = null ;
			$where2 = array('no' => $no);
			$data['catarz'] = $this->m_registrasi->get_data($where2,'tbl_catar_2023')->result();
			// $data['status'] = "Anda Belum tervalidasi...";
		}

		$this->load->view('cekstatusp', $data);
	}
	public function download($no)
	{
		# code...
		$where = array('no' => $no);
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$po = $key->ktkb;
			$where_prov = array('tbl_kabkota.id_wil' => $po);
		}
		$provinsi_get = $this->m_registrasi->get_data_wilayah($where_prov)->result();
		foreach ($provinsi_get as $keyp) {
			# code...
			$data['kabkota'] = $keyp->kabkota;
			$data['provinsi'] = $keyp->provinsi;
		}
		$this->load->view('cetakReg',$data);

		//pdf
		$pdfFilePath="cetak_registrasi.pdf";
		$html=$this->load->view('cetakReg',$data, TRUE);
		$pdf = $this->m_pdf->load();
 		ob_clean();
        $pdf->AddPage('P');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
		redirect("cekstatusp/".$no);

	}
	public function voucher($no)
	{
		# code...
		$where = array('no' => $no);
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$prodi = $key->prodi;
			$ref = $key->ref;
		}

		if ($prodi == '6' || $prodi == '7' && $ref == "gratismei23" ) {
			# code...

		$this->load->view('cetakVoucher',$data);
		//pdf
		$pdfFilePath="cetak_voucher.pdf";
		$html=$this->load->view('cetakVoucher',$data, TRUE);
		$pdf = $this->m_pdf->load();
 		ob_clean();
        $pdf->AddPage('P');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
		redirect("cekstatusp/".$no);
		}else{
			redirect(base_url().'cekstatus?pesan=gagal_voucher');
		}
		

	}
	public function registrasi()
	{
		$data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
		$data['provinsi'] = $this->m_registrasi->get_data_all('tbl_propinsi')->result();
		$this->load->view('registrasi',$data);
	}
	public function registrasid3()
	{
		$data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
		$data['provinsi'] = $this->m_registrasi->get_data_all('tbl_propinsi')->result();
		$this->load->view('registrasi_d3',$data);
	}
	public function registrasieks()
	{
		$data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
		$data['provinsi'] = $this->m_registrasi->get_data_all('tbl_propinsi')->result();
		$this->load->view('registrasi_eks',$data);
	}
	public function registrasi2()
	{
		$data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
		$this->load->view('registrasi2',$data);
	}
	public function registrasi_fasttrack()
	{
		$data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
		$data['provinsi'] = $this->m_registrasi->get_data_all('tbl_propinsi')->result();
		$this->load->view('registrasi_fasttrack',$data);
	}
	public function registrasid3_fasttrack()
	{
		$data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
		$data['provinsi'] = $this->m_registrasi->get_data_all('tbl_propinsi')->result();
		$this->load->view('registrasi_d3_fasttrack',$data);
	}
	public function registrasi_disc()
	{
		$data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
		$data['provinsi'] = $this->m_registrasi->get_data_all('tbl_propinsi')->result();
		$this->load->view('registrasi_disc',$data);
	}
	public function registrasi_rpl()
	{
		$data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
		$data['provinsi'] = $this->m_registrasi->get_data_all('tbl_propinsi')->result();
		$this->load->view('registrasi_rpl2',$data);
	}
	public function insertReg()
	{
		# code...
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$namafil = addslashes($nama);
		$tl = $this->input->post('tl');
		$tgl_l = $this->input->post('tgl_l');
		$agama = $this->input->post('agama');
		$jk = $this->input->post('jk');
		$bb = $this->input->post('bb');
		$tb = $this->input->post('tb');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$ktkb = $this->input->post('ktkb');
		$provinsi = $this->input->post('provinsi');
		$telp = $this->input->post('telp');
		$kategori_sek = $this->input->post('kategori_sek');
		$prodi_lama = $this->input->post('prodi_lama');
		$thn_lulus = $this->input->post('thn_lulus');
		$asek = $this->input->post('asek');
		$alamat_sek = $this->input->post('alamat_sek');
		$nama_a = $this->input->post('nama_a');
		$nama_afill = addslashes($nama_a);
		$nama_i = $this->input->post('nama_i');
		$nama_ifill = addslashes($nama_i);
		$alamat_ortu = $this->input->post('alamat_ortu');
		$telp_ortu = $this->input->post('telp_ortu');
		$informasi = $this->input->post('informasi');
		$prodi = $this->input->post('prodi');
		$prodi2 = $this->input->post('prodi2');
		$gelombang = $this->input->post('gelombang');
		$kelas = $this->input->post('kelas');
		$ref_radio = $this->input->post('ref_radio');
		$ref = $this->input->post('ref');
		$thn_pel="2023";
		$periode=date('n');
 		$id_tgl_seleksi = $this->getTglSelAktif();
		
		
		// $namagabungan1 = judul_seo("ijasah".$nama." ".$prodi." ".$tgl_l);
		// $namagabungan2 = judul_seo("sk".$nama." ".$prodi." ".$tgl_l);
		// $nmfile1 = $namagabungan1.".pdf";
		// $nmfile2 = $namagabungan2.".pdf";
        #upload file1
  //       $config['upload_path'] = FCPATH.'assets/upload';
		// $config['allowed_types'] = 'pdf';
		// $config['max_size']  = '5024';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';

     //    if($_FILES["ijasah"]["name"]){
     //    $config["file_name"] = $nmfile1;
     //    $this->load->library('upload', $config);
     //    $abstrak = $this->upload->do_upload('ijasah');
     //    if (!$abstrak){
     //        $error = array('error' => $this->upload->display_errors());
     //        // $this->session->set_flashdata("error", ".");
     //    }else{
     //        $abstrak = $this->upload->data("file_name");
     //        $data = array('upload_data' => $this->upload->data());
     //        // $this->session->set_flashdata("success", ".");
     //    	}
        	
    	// }

    	// if($_FILES["sk"]["name"]){
        // $config["file_name"] = $nmfile2;
        // $this->upload->initialize($config);// untuk upload set nama file kedua
        // $biaya = $this->upload->do_upload('sk');
        // if (!$biaya){
        //     $error = array('error' => $this->upload->display_errors());
        //     // $this->session->set_flashdata("error", ".");
        // }else{
        //     $biaya = $this->upload->data("file_name");
        //     $data = array('upload_data' => $this->upload->data());
        //     // $this->session->set_flashdata("success", ".");
        // 	}
    	// }

 		////////////////cek referral//////////////////////////////////////
 		if ($ref_radio == "1") {
 			# code...
 			$where = array('ref' => $ref);
			$cek_ref = $this->m_registrasi->get_data($where,'tbl_ref')->num_rows();
			if ($cek_ref > 0) {
				# code...
				//////////////// proses referral//////////////////////////////////////

				$data = array(
					'nama' => $namafil,
					'nik' => $nik,
					'tl' => $tl,
					'tgl_l' => $tgl_l,
					'agama' => $agama,
					'jk' => $jk,
					'alamat'=> $alamat,
					'ktkb' => $ktkb,
					'provinsi' => $provinsi,
					'telp' => $telp,
					'kategori_sek' => $kategori_sek,
					'prodi_lama' => $prodi_lama,
					'thn_lulus' => $thn_lulus,
					'asek' => $asek,
					'alamat_sek' => $alamat_sek,
					'nama_a' => $nama_afill,
					'nama_i' => $nama_ifill,
					'alamat_ortu' => $alamat_ortu,
					'telp_ortu' => $telp_ortu,
					'informasi' => $informasi,
					'prodi' => $prodi,
					'gelombang' => $gelombang,
					'periode' => $periode,
					// 'ijasah' => $nmfile1,
					// 'sk' => $nmfile2,
					'thn_pel' => $thn_pel,
					'bb' => $bb,
					'tb' => $tb,
					'email' => $email,
					'prodi2' => $prodi2,
					'kelas' => $kelas,
					'ref' => $ref,
					'id_tgl_seleksi' => $id_tgl_seleksi
					);
				
				
				$this->m_registrasi->input_data($data,'tbl_catar_2023');
				$lastid = $this->db->insert_id();
				$where = array('no' => $lastid);
				$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
				foreach ($data['catar'] as $key) {
					# code...
					$po = $key->ktkb;
					$where_prov = array('tbl_kabkota.id_wil' => $po);
				}
				$provinsi_get = $this->m_registrasi->get_data_wilayah($where_prov)->result();
				foreach ($provinsi_get as $keyp) {
					# code...
					$data['kabkota'] = $keyp->kabkota;
					$data['provinsi'] = $keyp->provinsi;
				}
				$this->load->view('cetakReg',$data);

				//pdf
				$pdfFilePath="cetak_registrasi_".$namafil."_2023.pdf";
				$html=$this->load->view('cetakReg',$data, TRUE);
				$pdf = $this->m_pdf->load();
		 
		        $pdf->AddPage('P');
		        $pdf->WriteHTML($html);
		        $pdf->Output($pdfFilePath, "D");
		        exit();
				// redirect("welcome/cetakReg");

				//////////////// .proses referral//////////////////////////////////////
			}else{
				$this->session->set_flashdata('error', "<b>Error, Kode Refferal ini tidak terdaftar</b>");
				$this->load->view('registrasi');
			}

 		}else{
 			//////////////// proses biasa//////////////////////////////////////

				$data = array(
					'nama' => $namafil,
					'nik' => $nik,
					'tl' => $tl,
					'tgl_l' => $tgl_l,
					'agama' => $agama,
					'jk' => $jk,
					'alamat'=> $alamat,
					'ktkb' => $ktkb,
					'provinsi' => $provinsi,
					'telp' => $telp,
					'kategori_sek' => $kategori_sek,
					'prodi_lama' => $prodi_lama,
					'thn_lulus' => $thn_lulus,
					'asek' => $asek,
					'alamat_sek' => $alamat_sek,
					'nama_a' => $nama_afill,
					'nama_i' => $nama_ifill,
					'alamat_ortu' => $alamat_ortu,
					'telp_ortu' => $telp_ortu,
					'informasi' => $informasi,
					'prodi' => $prodi,
					'gelombang' => $gelombang,
					'periode' => $periode,
					// 'ijasah' => $nmfile1,
					// 'sk' => $nmfile2,
					'thn_pel' => $thn_pel,
					'bb' => $bb,
					'tb' => $tb,
					'email' => $email,
					'prodi2' => $prodi2,
					'kelas' => $kelas,
					'id_tgl_seleksi' => $id_tgl_seleksi
					);
				
				
				$this->m_registrasi->input_data($data,'tbl_catar_2023');
				$lastid = $this->db->insert_id();
				$where = array('no' => $lastid);
				$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
				foreach ($data['catar'] as $key) {
					# code...
					$po = $key->ktkb;
					$where_prov = array('tbl_kabkota.id_wil' => $po);
				}
				$provinsi_get = $this->m_registrasi->get_data_wilayah($where_prov)->result();
				foreach ($provinsi_get as $keyp) {
					# code...
					$data['kabkota'] = $keyp->kabkota;
					$data['provinsi'] = $keyp->provinsi;
				}
				$this->load->view('cetakReg',$data);

				//pdf
				$pdfFilePath="cetak_registrasi_".$namafil."_2023.pdf";
				$html=$this->load->view('cetakReg',$data, TRUE);
				$pdf = $this->m_pdf->load();
		 
		        $pdf->AddPage('P');
		        $pdf->WriteHTML($html);
		        $pdf->Output($pdfFilePath, "D");
		        exit();
				// redirect("welcome/cetakReg");

				//////////////// .proses biasa//////////////////////////////////////
 		}

 		//////////////// \.cek referral//////////////////////////////////////

	}
	public function insertReg2()
	{
		# code...
		$nama = $this->input->post('nama');
		$tl = $this->input->post('tl');
		$tgl_l = $this->input->post('tgl_l');
		$agama = $this->input->post('agama');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$ktkb = $this->input->post('ktkb');
		$provinsi = $this->input->post('provinsi');
		$telp = $this->input->post('telp');
		$kategori_sek = $this->input->post('kategori_sek');
		// $prodi_lama = $this->input->post('prodi_lama');
		if ($kategori_sek=='SMA') {
			# code...
			$prodi_lama='IPA';
		}elseif ($kategori_sek=='MA') {
			# code...
			$prodi_lama='IPA';
		}else{
			$prodi_lama='Pelayaran';
		}
		$thn_lulus = $this->input->post('thn_lulus');
		$asek = $this->input->post('asek');
		$alamat_sek = $this->input->post('alamat_sek');
		$nama_a = $this->input->post('nama_a');
		$nama_i = $this->input->post('nama_i');
		$alamat_ortu = $this->input->post('alamat_ortu');
		$telp_ortu = $this->input->post('telp_ortu');
		$prodi = $this->input->post('prodi');
		$gelombang = $this->input->post('gelombang');
		$thn_pel="2020";
 
		$data = array(
			'nama' => $nama,
			'tl' => $tl,
			'tgl_l' => $tgl_l,
			'agama' => $agama,
			'jk' => $jk,
			'alamat'=> $alamat,
			'ktkb' => $ktkb,
			'provinsi' => $provinsi,
			'telp' => $telp,
			'kategori_sek' => $kategori_sek,
			'prodi_lama' => $prodi_lama,
			'thn_lulus' => $thn_lulus,
			'asek' => $asek,
			'alamat_sek' => $alamat_sek,
			'nama_a' => $nama_a,
			'nama_i' => $nama_i,
			'alamat_ortu' => $alamat_ortu,
			'telp_ortu' => $telp_ortu,
			'prodi' => $prodi,
			'gelombang' => $gelombang,
			'thn_pel' => $thn_pel
			);
		$this->m_registrasi->input_data($data,'tbl_catar');
		$lastid = $this->db->insert_id();
		$where = array('no' => $lastid);
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar')->result();

		foreach ($data['catar'] as $key) {
			# code...
			$po = $key->provinsi;
			$where_prov = array('id_provinsi' => $po);
		}
		$provinsi_get = $this->m_registrasi->get_data($where_prov,'tbl_provinsi')->result();
		foreach ($provinsi_get as $keyp) {
			# code...
			$data['provinsi'] = $keyp->provinsi;
		}
		$this->load->view('cetakReg',$data);

		//pdf
		$pdfFilePath="cetak.pdf";
		$html=$this->load->view('cetakReg',$data, TRUE);
		$pdf = $this->m_pdf->load();
 
        $pdf->AddPage('P');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
		// redirect("welcome/cetakReg");
	}
	public function jurusan($id)
	{
		# code...
		switch ($id) {

				// registrasi
					case '1':
						$pick['jurusan'] = "D3 KETATALAKSANAAN PELAYARAN NIAGA DAN KEPELABUHAN";
					break;
					case '2' :
						$pick['jurusan'] = "D3 TEKNIKA";
					break;
					case '3' :
						$pick['jurusan'] = "D3 NAUTIKA";
					break;
					case '4' :
						$pick['jurusan'] = "S1 TRANSPORTASI";
					break;
					case '5':
						$pick['jurusan'] = "S1 TRANSPORTASI ( LINTAS JALUR )";
					break;
					case '6':
						$pick['jurusan'] = "S1 TEKNIK MESIN";
					break;
					case '7':
						$pick['jurusan'] = "S1 TEKNIK TRANSPORTASI LAUT";
					break;
					case '8':
						$pick['jurusan'] = "S1 TEKNIK KESELAMATAN";
					break;
					case '9':
						$pick['jurusan'] = "S1 PERDAGANGAN INTERNASIONAL";
					break;
					
				}
				return $pick;
	}

	// captcha
	public function create_captcha()
	{
		# code...
		$option = array(
			'img_path' 	=> './captcha/', //folder untuk menampung captcha
			'img_url' 	=> base_url('captcha/'), // untuk get gambar captcha
			'img_width' => '200',
			'img_height'=> '50',
			'expiration'=> 7200
		);

		$cap = create_captcha($option);
		$image = $cap['image'];

		$this->session->set_userdata('captchaword',$cap['word']);
		return $image;
	}
	public function check_captcha()
	{
		# code...
		if ($this->input->post('captcha') == $this->session->userdata('captchaword')) {
			# code...
			return true;
		}else{
			$this->form_validation->set_message('check_captcha', 'Captcha Is Wrong');
			return false;
		}
	}
	//download biaya
	public function biaya_download()
	{
		# code...
		force_download('assets/download/biaya_pendidikan_2022.pdf',NULL);
		redirect(base_url());
	}
	//download biaya
	public function apk_download()
	{
		# code...
		force_download('_ADM_SIPENCAMAHATAR_16249950.apk',NULL);
		redirect(base_url());
	}
}
