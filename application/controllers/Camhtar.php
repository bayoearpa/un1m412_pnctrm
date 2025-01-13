<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camhtar extends CI_Controller {

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
		$this->load->view('camahatar/login');
	}
	public function tabrak()
	{
		$this->load->view('camahatar/bypass');
	}
	 function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'masuk?pesan=logout');
	}
	public function loginp()
	{
		# code...
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() != false){
			$where = array(
				'username' => $username,
				'password' => md5($password)			
			);
			$data = $this->m_registrasi->get_data($where, 'tbl_catar_2025');
			$d = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->row();
			$cek = $data->num_rows();
			if($cek > 0){
				$session = array(
					'username'=> $d->username,
					'no'=> $d->no,
					'nama'=> $d->nama,
					'jalur'=> $d->jalur,
					'status' => 'login'
				);
				$this->session->set_userdata($session);
				redirect(base_url().'home');
			}else{
				redirect(base_url().'masuk?pesan=gagal');			
			}
		}else{
			redirect(base_url().'masuk');
		}
	}
	public function tabrakp()
	{
		# code...
		$no = $this->input->post('no');
		// $password = $this->input->post('password');
		$this->form_validation->set_rules('no','no','trim|required');
		// $this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() != false){
			$where = array(
				'no' => $no,
				// 'password' => md5($password)			
			);
			$data = $this->m_registrasi->get_data($where, 'tbl_catar_2025');
			$d = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->row();
			$cek = $data->num_rows();
			if($cek > 0){
				$session = array(
					'username'=> $d->username,
					'no'=> $d->no,
					'nama'=> $d->nama,
					'jalur'=> $d->jalur,
					'status' => 'login'
				);
				$this->session->set_userdata($session);
				redirect(base_url().'biodata');
			}else{
				redirect(base_url().'tabraktabrakmasuk?pesan=gagal');			
			}
		}else{
			redirect(base_url().'tabraktabrakmasuk');
		}
	}
	public function daftar()
	{
		$this->load->view('camahatar/daftar');
		$this->load->view('camahatar/daftar_js');
	}
	public function cek_user()
	{
		# code...
		if ($this->input->post('username')) {
            $username = $this->input->post('username');
            $is_available = $this->m_registrasi->cek_user($username);

            if ($is_available) {
                echo "available"; // Username tersedia
            } else {
                echo "unavailable"; // Username sudah digunakan
            }
        }
	}
	function prodi($id){
        switch ($id) {

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
            return $pick;
    }
	public function daftarp()
	{
		if ($this->input->post()) {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $jalur = $this->input->post('jalur');

            // Lakukan validasi data yang diterima jika diperlukan

            // Simpan data pendaftaran ke dalam tabel "tbl_catar_2025"
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'jalur' => $jalur
                // Tambahkan kolom lain sesuai dengan struktur tabel
            );

            $insert_result = $this->m_registrasi->input_data($data,'tbl_catar_2025');

            if ($insert_result) {
               echo "error";
            } else {
                 echo "success";
            }
        }
	}
	public function informasi($id)
	{
		# code...
		switch ($id) {

				// registrasi
					case '1':
						$pick = "Senior / Kakak kelas";
					break;
					case '2' :
						$pick = "Sosial Media";
					break;
					case '3' :
						$pick = "Keluarga / Saudara / teman";
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
					case '7':
						$pick = "Sekolah / Guru";
					break;
					default:
						$pick = "Belum Pilih";
					
				}
				return $pick;
	}
	public function getGelombang($id)
	{
		# code...
		# code...
		//get nama
		$where = array(
			'id_gelombang' => $id,			       
        );
		$getP = $this->m_registrasi->get_data($where,'tbl_gelombang')->result();
		foreach ($getP as $p) {
			# code...
			//$data['nama'] = $n->Nama_mahasiswa ;
			return $p->gelombang;
		}
	}
	public function getProvinsi($id)
	{
		# code...
		# code...
		//get nama
		$where = array(
			'id_wil' => $id,			       
        );
		$getP = $this->m_registrasi->get_data($where,'tbl_propinsi')->result();
		foreach ($getP as $p) {
			# code...
			//$data['nama'] = $n->Nama_mahasiswa ;
			return $p->nm_wil;
		}
	}
	public function getKotaKab($id)
	{
		# code...
		# code...
		//get nama
		$where = array(
			'id_wil' => $id,			       
        );
		$getP = $this->m_registrasi->get_data($where,'tbl_kabkota')->result();
		foreach ($getP as $p) {
			# code...
			//$data['nama'] = $n->Nama_mahasiswa ;
			return $p->nm_wil;
		}
	}
	public function getProdi($prodi)
	{
		# code...
		//get nama
		$where = array(
			'id_prodi' => $prodi,			       
        );
		$getP = $this->m_registrasi->get_data($where,'tbl_prodi')->result();
		foreach ($getP as $p) {
			# code...
			//$data['nama'] = $n->Nama_mahasiswa ;
			return $p->prodi;
		}
	}
	public function home()
	{
		# code...
		$no = $this->session->userdata('no');

		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();
		foreach ($data['catar'] as $key) {
			# code...
			//cek biodata
			$data['nik'] = $key->nik;
		}
		//cek pembayaran
		$data['validasi'] = $this->m_registrasi->get_data($where, 'tbl_catar_validasi_2025')->num_rows();

		//cek seleksi
		$data['hs'] = $this->m_registrasi->get_data($where, 'tbl_catar_hasil_seleksi_2025')->num_rows();

		//cek ukur pakaian
		$data['ukur'] = $this->m_registrasi->get_data($where, 'tbl_ukurpakaian')->num_rows();

		//cek Daftar Ulang
		$data['daful'] = $this->m_registrasi->get_data($where, 'tbl_catar_daful_2025')->num_rows();

		
		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/home',$data);
        $this->load->view('camahatar/footer');
	}
	public function biodata()
	{
		# code...
		$data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
		$data['provinsi'] = $this->m_registrasi->get_data_all('tbl_propinsi')->result();

		$no = $this->session->userdata('no');
		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();

		foreach ($data['catar'] as $key) {
			# code...
			$data['getprovinsi'] = $this->getProvinsi($key->provinsi);
			$data['getktkb'] = $this->getKotaKab($key->ktkb);
			$data['informasi'] = $this->informasi($key->informasi);
			$data['nmprodi'] = $this->getProdi($key->prodi);
			$data['nmprodi2'] = $this->getProdi($key->prodi2);
			$data['gel'] = $this->getGelombang("1");
		}

		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/biodata',$data);
        $this->load->view('camahatar/footer');
        $this->load->view('camahatar/biodata_js');

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
		$prodi_lama_lainnya = $this->input->post('prodi_lama_lainnya');
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
		$jalur = $this->input->post('jalur');
		// $ref_radio = $this->input->post('ref_radio');
		$ref = strtolower($this->input->post('ref'));
		$thn_pel="2025";
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

 		
 			//////////////// proses biasa//////////////////////////////////////
 				$where = array(
					'no' => $this->session->userdata('no')		
				);
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
					'prodi_lama_lainnya' => $prodi_lama_lainnya,
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
					'ref' => $ref,
					'thn_pel' => $thn_pel,
					'bb' => $bb,
					'tb' => $tb,
					'email' => $email,
					'prodi2' => $prodi2,
					'jalur' => $jalur,
					'id_tgl_seleksi' => $id_tgl_seleksi
					);
				
				
				$proses_insert = $this->m_registrasi->update_data($where,$data,'tbl_catar_2025');
				// $lastid = $this->db->insert_id();
				// $where = array('no' => $lastid);
				// $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
				// foreach ($data['catar'] as $key) {
				// 	# code...
				// 	$po = $key->ktkb;
				// 	$where_prov = array('tbl_kabkota.id_wil' => $po);
				// }
				// $provinsi_get = $this->m_registrasi->get_data_wilayah($where_prov)->result();
				// foreach ($provinsi_get as $keyp) {
				// 	# code...
				// 	$data['kabkota'] = $keyp->kabkota;
				// 	$data['provinsi'] = $keyp->provinsi;
				// }
				// $this->load->view('cetakReg',$data);

				// //pdf
				// $pdfFilePath="cetak_registrasi_".$namafil."_2023.pdf";
				// $html=$this->load->view('cetakReg',$data, TRUE);
				// $pdf = $this->m_pdf->load();
		 
		  //       $pdf->AddPage('P');
		  //       $pdf->WriteHTML($html);
		  //       $pdf->Output($pdfFilePath, "D");
		  //       exit();
				if ($proses_insert) {
					# code...
					redirect("validasi?pesan=succsess");
				}
				redirect("validasi?pesan=error");

				//////////////// .proses biasa//////////////////////////////////////
 	
	}

	public function pembayaran()
	{
		# code...
		# code...
		$no = $this->session->userdata('no');
		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$data['nik'] = $key->nik;
			$programStudi = $key->prodi;
		}
		$data['prodi'] = $this->getProdi($programStudi);

		$data['validasi'] = $this->m_registrasi->get_data($where, 'tbl_catar_validasi_2025')->num_rows();

		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/pembayaran',$data);
        $this->load->view('camahatar/footer');
        $this->load->view('camahatar/pembayaran_js');
	}
	public function validasi()
	{
		# code...
		$no = $this->session->userdata('no');
		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$data['nik'] = $key->nik;
			$programStudi = $key->prodi;
		}
		$data['prodi'] = $this->getProdi($programStudi);

		$data['validasi'] = $this->m_registrasi->get_data($where, 'tbl_catar_validasi_2025')->num_rows();

		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/validasi',$data);
        $this->load->view('camahatar/footer');
         $this->load->view('camahatar/validasi_js');
	}
	public function upload_bukti_bayar()
	{
		# code...
		// Tangani unggahan file
		$no = $this->session->userdata('no');
		$where = array(
	        'no' => $no,
	    );

        $config['upload_path'] = './assets/upload/2025/bukti_bayar';
        $config['max_size'] = 1048;
        $config['allowed_types'] = 'pdf|jpg'; // Sesuaikan dengan jenis file yang diizinkan
        $config['file_name'] = $no.'_bukti_bayar'; // Nama file yang diunggah sesuai NIM
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('bukti_bayar')) {
            // Jika unggahan berhasil
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            // Simpan data ke database (contoh)
            $data = array(
                'bukti_bayar' => $file_name
            );
            $this->m_registrasi->update_data($where,$data,'tbl_catar_2025');

            // ($this->session->userdata('jalur') == "fasttrack") ? redirect(base_url().'validasi') : redirect(base_url().'pembayaran');
            redirect(base_url().'validasi');
        } else {
            // ($this->session->userdata('jalur') == "fasttrack") ? redirect(base_url().'validasi') : redirect(base_url().'pembayaran');
            redirect(base_url().'validasi');
        }
	}
	public function upload_bukti_bayar2()
	{
		# code...
		// Tangani unggahan file
		$no = $this->session->userdata('no');
		$where = array(
	        'no' => $no,
	    );

        $config['upload_path'] = './assets/upload/2025/bukti_bayar';
        $config['max_size'] = 1048;
        $config['allowed_types'] = 'pdf|jpg'; // Sesuaikan dengan jenis file yang diizinkan
        $config['file_name'] = $no.'_bukti_bayar'; // Nama file yang diunggah sesuai NIM
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('bukti_bayar')) {
            // Jika unggahan berhasil
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            // Simpan data ke database (contoh)
            $data = array(
                'bukti_bayar' => $file_name
            );
            $this->m_registrasi->update_data($where,$data,'tbl_catar_2025');

            // ($this->session->userdata('jalur') == "fasttrack") ? redirect(base_url().'validasi') : redirect(base_url().'pembayaran');
            redirect(base_url().'pembayaran');
        } else {
            // ($this->session->userdata('jalur') == "fasttrack") ? redirect(base_url().'validasi') : redirect(base_url().'pembayaran');
            redirect(base_url().'pembayaran');
        }
	}
	public function download($no)
	{
		# code...
		$where = array('no' => $no);
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2025')->result();
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
		$pdfFilePath="form_pendaftaran.pdf";
		$html=$this->load->view('cetakReg',$data, TRUE);
		$pdf = $this->m_pdf->load();
 		ob_clean();
        $pdf->AddPage('P');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
		redirect("validasi");

	}
	public function download_sk($no)
	{
		# code...
		$where = array('tbl_catar_2025.no' => $no);
		// $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2025')->result();
		$data['catar'] = $this->m_registrasi->get_data_join_2025_where($where)->result();
		// foreach ($data['catar'] as $key) {
		// 	# code...
		// 	$po = $key->ktkb;
		// 	$where_prov = array('tbl_kabkota.id_wil' => $po);
		// }
		// $provinsi_get = $this->m_registrasi->get_data_wilayah($where_prov)->result();
		// foreach ($provinsi_get as $keyp) {
		// 	# code...
		// 	$data['kabkota'] = $keyp->kabkota;
		// 	$data['provinsi'] = $keyp->provinsi;
		// }
		$this->load->view('camahatar/cetaksk',$data);

		//pdf
		$pdfFilePath="SK_LULUS_SELEKSI_UNIMAR_AMNI.pdf";
		$html=$this->load->view('camahatar/cetaksk',$data, TRUE);
		$pdf = $this->m_pdf->load();
 		ob_clean();
        $pdf->AddPage('P');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
		redirect("pengumuman");

	}
	public function down_sanggup_tidak_menikah25()
	{
		# code...
		force_download('assets/download/surat_pernyataan_sanggup_tidak_menikah_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_sanggup_menaati_peraturan25()
	{
		# code...
		force_download('assets/download/surat_pernyataan_sanggup_mentaati_peraturan_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_perny_tinggal_asrama25()
	{
		# code...
		force_download('assets/download/surat_pernyataan_di_asrama_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_suket_sehat_geldini25()
	{
		# code...
		force_download('assets/download/surat_kesehatan_kelas_reguler_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_suket()
	{
		# code...
		force_download('assets/download/surat_keterangan_siswa2.docx',NULL);
		redirect(base_url());
	}
	public function down_supersehat()
	{
		# code...
		force_download('assets/download/surat_kesehatan_kelas_reguler_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_supersehattf()
	{
		# code...
		force_download('assets/download/surat_kesehatan_kelas_transfer_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_supersehatreg()
	{
		# code...
		force_download('assets/download/surat_pernyataan_sehat_reg3.pdf',NULL);
		redirect(base_url());
	}
	public function seleksigdr1()
	{
		# code...
		$no = $this->session->userdata('no');
		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$data['nik'] = $key->nik;
			$data['prodi'] = $key->prodi;
			$data['jk'] = $key->jk;
		}
		$data['validasi'] = $this->m_registrasi->get_data($where, 'tbl_catar_validasi_2025')->num_rows();
		$data['seleksi'] = $this->m_registrasi->get_data($where, 'tbl_seleksi_2025')->num_rows();
		$data['seleksi_data'] = $this->m_registrasi->get_data($where, 'tbl_seleksi_2025')->result();

		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/seleksigdr1',$data);
        $this->load->view('camahatar/footer');
        $this->load->view('camahatar/seleksigdr1_js');
	}
	public function seleksigdr2()
	{
		# code...
		$no = $this->session->userdata('no');
		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$data['nik'] = $key->nik;
		}
		$data['validasi'] = $this->m_registrasi->get_data($where, 'tbl_catar_validasi_2025')->num_rows();

		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/seleksigdr2',$data);
        $this->load->view('camahatar/footer');
        $this->load->view('camahatar/seleksigdr2_js');
	}
	public function seleksigdr2p()
	{
		# code...
		$no = $this->session->userdata('no');
		$where = array(
	        'no' => $no,
	    );

	    		// cek sudah input
		if ($this->input->post('eupload_ktp') > 0) {
			# code...
			$update_data = array(
	            'upload_ktp' => $this->input->post('eupload_ktp'),
	            // Tambahkan field lain sesuai kebutuhan
	        );
			$this->m_registrasi->update_data($where,$update_data,'tbl_catar_2025');

		}else{
	      // Konfigurasi upload file Surat Pernyataan Sehat
	    $config_supersehat['upload_path'] = './assets/upload/2025/upload_ktp/';
	    $config_supersehat['allowed_types'] = 'pdf';
	    $config_supersehat['max_size'] = 1048; // Ukuran maksimum file (dalam kilobyte)
	    $config_supersehat['file_name'] = $no.'_KTP'; // Nama file yang diunggah sesuai NIM

	    $this->load->library('upload');
	    $this->upload->initialize($config_supersehat);
	    // Jika upload berhasil
	    if ($this->upload->do_upload('upload_ktp')) {
	        $upload_data = $this->upload->data();

	        // Update data pada database
	        $update_data = array(
	            'upload_ktp' => $upload_data['file_name'],
	            // Tambahkan field lain sesuai kebutuhan
	        );

	        $this->m_registrasi->update_data($where,$update_data,'tbl_catar_2025');
	    } else {
	        // Jika upload gagal, tampilkan pesan kesalahan
	        $error = array('error' => $this->upload_ktp->display_errors());
	       	$this->session->set_flashdata('error', $error);
			redirect(base_url('seleksi_geldini_tf'));
	    }
		} // end cek

		// cek sudah input
		if ($this->input->post('eupload_ijd3') > 0) {
			# code...
			$update_data = array(
	            'upload_ijd3' => $this->input->post('eupload_ijd3'),
	            // Tambahkan field lain sesuai kebutuhan
	        );
			$this->m_registrasi->update_data($where,$update_data,'tbl_catar_2025');

		}else{
		    // Konfigurasi upload file Ijasah D3
	    $config_ijasah_d3['upload_path'] = './assets/upload/2025/upload_ijasah_d3/';
	    $config_ijasah_d3['allowed_types'] = 'pdf';
	    $config_ijasah_d3['max_size'] = 1048; // Ukuran maksimum file (dalam kilobyte)
	    $config_ijasah_d3['file_name'] = $no.'_ijasah_D3'; // Nama file yang diunggah sesuai NIM

	    // $this->load->library('upload', $config_ijasah_d3, 'upload_ijd3');
	    $this->load->library('upload');
    	$this->upload->initialize($config_ijasah_d3);

	    // Jika upload berhasil
	    if ($this->upload->do_upload('upload_ijd3')) {
	        $upload_data = $this->upload->data();

	        // Update data pada database
	        $update_data = array(
	            'upload_ijd3' => $upload_data['file_name'],
	            // Tambahkan field lain sesuai kebutuhan
	        );

	        $this->m_registrasi->update_data($where,$update_data,'tbl_catar_2025');
	    } else {
	        // Jika upload gagal, tampilkan pesan kesalahan
	        $error = array('error' => $this->upload_ijasah_d3->display_errors());
	       	$this->session->set_flashdata('error', $error);
			redirect(base_url('seleksi_tf'));
	    }
		}//end cek

		// cek sudah input
		if ($this->input->post('eupload_transd3') > 0) {
			# code...
			$update_data = array(
	            'upload_transd3' => $this->input->post('eupload_transd3'),
	            // Tambahkan field lain sesuai kebutuhan
	        );
			$this->m_registrasi->update_data($where,$update_data,'tbl_catar_2025');

		}else{
	       // Konfigurasi upload file Transkip D3
	    $config_transkip_d3['upload_path'] = './assets/upload/2025/upload_transkip_d3/';
	    $config_transkip_d3['allowed_types'] = 'pdf';
	    $config_transkip_d3['max_size'] = 1048; // Ukuran maksimum file (dalam kilobyte)
	    $config_transkip_d3['file_name'] = $no.'_Transkip_D3'; // Nama file yang diunggah sesuai NIM

	    $this->load->library('upload');
	    $this->upload->initialize($config_transkip_d3);
	    // Jika upload berhasil
	    if ($this->upload->do_upload('upload_transd3')) {
	        $upload_data = $this->upload->data();

	        // Update data pada database
	        $update_data = array(
	            'upload_transd3' => $upload_data['file_name'],
	            // Tambahkan field lain sesuai kebutuhan
	        );

	        $this->m_registrasi->update_data($where,$update_data,'tbl_catar_2025');
	    } else {
	        // Jika upload gagal, tampilkan pesan kesalahan
	        $error = array('error' => $this->upload_transkip_d3->display_errors());
	       	$this->session->set_flashdata('error', $error);
			redirect(base_url('seleksi_tf'));
	    }
		} // end cek


		// // cek sudah input
		// if ($this->input->post('eupload_supersehat') > 0) {
		// 	# code...
		// 	$update_data = array(
	 //            'upload_supersehat' => $this->input->post('eupload_supersehat'),
	 //            // Tambahkan field lain sesuai kebutuhan
	 //        );
		// 	$this->m_registrasi->update_data($where,$update_data,'tbl_catar_2025');

		// }else{
	 //      // Konfigurasi upload file Surat Pernyataan Sehat
	 //    $config_supersehat['upload_path'] = './assets/upload/2025/upload_surat_pernyataan_sehat/';
	 //    $config_supersehat['allowed_types'] = 'pdf';
	 //    $config_supersehat['max_size'] = 1048; // Ukuran maksimum file (dalam kilobyte)
	 //    $config_supersehat['file_name'] = $no.'_Surat_Pernyataan_sehat'; // Nama file yang diunggah sesuai NIM

	 //    $this->load->library('upload');
	 //    $this->upload->initialize($config_supersehat);
	 //    // Jika upload berhasil
	 //    if ($this->upload->do_upload('upload_supersehat')) {
	 //        $upload_data = $this->upload->data();

	 //        // Update data pada database
	 //        $update_data = array(
	 //            'upload_supersehat' => $upload_data['file_name'],
	 //            // Tambahkan field lain sesuai kebutuhan
	 //        );

	 //        $this->m_registrasi->update_data($where,$update_data,'tbl_catar_2025');
	 //    } else {
	 //        // Jika upload gagal, tampilkan pesan kesalahan
	 //        $error = array('error' => $this->upload_supersehat->display_errors());
	 //       	$this->session->set_flashdata('error', $error);
		// 	redirect(base_url('seleksi_geldini_tf'));
	 //    }
		// } // end cek


	    // Lakukan hal yang sama untuk file-file lainnya
	    // ...
	    redirect(base_url('seleksi_tf'));

	    // Jika Anda memiliki lebih banyak jenis file yang diupload, lakukan hal yang sama untuk konfigurasi upload dan proses uploadnya
	}
	public function proses_seleksi_reguler() {
    $no = $this->session->userdata('no');

    // Konfigurasi upload file untuk file KTP
    $config_ktp['upload_path']          = './assets/upload/2025/upload_seleksi_ktp';
    $config_ktp['allowed_types']        = 'pdf'; // Sesuaikan dengan jenis file yang diperbolehkan
    $config_ktp['max_size']             = 1048; // Ukuran maksimum file (dalam kilobyte)
    $config_ktp['file_name']            = $no.'_ktp';

    // Konfigurasi upload file untuk file surat keterangan
    $config_suket['upload_path']        = './assets/upload/2025/upload_seleksi_suket';
    $config_suket['allowed_types']      = 'pdf';
    $config_suket['max_size']           = 1048;
    $config_suket['file_name']          = $no.'_suket';

    // Konfigurasi upload file untuk file hasil pemeriksaan kesehatan
    $config_supersehat['upload_path']   = './assets/upload/2025/upload_seleksi_supersehat';
    $config_supersehat['allowed_types'] = 'pdf';
    $config_supersehat['max_size']      = 1048;
    $config_supersehat['file_name']     = $no.'_supersehat';

    // Load library upload dengan konfigurasi yang sesuai untuk masing-masing jenis file
    $this->load->library('upload');
    $this->upload->initialize($config_ktp);
    // Lakukan upload file KTP
    if ($this->upload->do_upload('file_ktp')) {
        $data['file_ktp'] = $this->upload->data('file_name');
    } else {
        // Jika gagal upload file KTP, tampilkan pesan error
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
        return;
    }

    // Lakukan upload file surat keterangan
    $this->upload->initialize($config_suket);
    if ($this->upload->do_upload('file_suket')) {
        $data['file_suket'] = $this->upload->data('file_name');
    } else {
        // Jika gagal upload file surat keterangan, tampilkan pesan error
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
        return;
    }

    // Lakukan upload file hasil pemeriksaan kesehatan
    $this->upload->initialize($config_supersehat);
    if ($this->upload->do_upload('file_supersehat')) {
        $data['file_supersehat'] = $this->upload->data('file_name');
    } else {
        // Jika gagal upload file hasil pemeriksaan kesehatan, tampilkan pesan error
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
        return;
    }

    // Tangkap data dari form untuk data selain file
    $data['no'] = $this->input->post('no');
    $data['n101'] = $this->input->post('n101');
    $data['n102'] = $this->input->post('n102');
    $data['n111'] = $this->input->post('n111');
    $data['n112'] = $this->input->post('n112');
    $data['n121'] = $this->input->post('n121');
    $data['n122'] = $this->input->post('n122');
    $data['cek'] = "belum";

    // Panggil fungsi model untuk tambah data
    $result = $this->m_registrasi->input_data($data, 'tbl_seleksi_2025');

    if ($result) {
		// Jika gagal tambah data, tampilkan pesan error
       redirect("seleksi_reguler?pesan=error");
    } else {

       // Jika berhasil tambah data, tampilkan pesan sukses
        redirect("seleksi_reguler?pesan=success");
    }
}
public function edit_proses_seleksi()
{
	# code...
	$id_seleksi = $this->input->post('id_seleksi');
	$no = $this->input->post('no');
	$data['n101'] = $this->input->post('en101');
    $data['n102'] = $this->input->post('en102');
    $data['n111'] = $this->input->post('en111');
    $data['n112'] = $this->input->post('en112');
    $data['n121'] = $this->input->post('en121');
    $data['n122'] = $this->input->post('en122');

    $where = array(
	        'id_seleksi' => $id_seleksi,
	);
	$this->m_registrasi->update_data($where,$data,'tbl_seleksi_2025');

	// cek sudah input
		if ($_FILES['nfile_ktp']['error'] === UPLOAD_ERR_OK) {
			    // Konfigurasi upload file Ijasah D3
	    $config_ktp['upload_path'] = './assets/upload/2025/upload_seleksi_ktp';
	    $config_ktp['allowed_types'] = 'pdf';
	    $config_ktp['max_size'] = 1048; // Ukuran maksimum file (dalam kilobyte)
	    $config_ktp['file_name'] = $no.'_ktp'; // Nama file yang diunggah sesuai NIM

	    // $this->load->library('upload', $config_ijasah_d3, 'upload_ijd3');
	    $this->load->library('upload');
    	$this->upload->initialize($config_ktp);

	    // Jika upload berhasil
	    if ($this->upload->do_upload('nfile_ktp')) {
	        $upload_data = $this->upload->data();

	        // Update data pada database
	        $update_data = array(
	            'file_ktp' => $upload_data['file_name'],
	            // Tambahkan field lain sesuai kebutuhan
	        );

	        $this->m_registrasi->update_data($where,$update_data,'tbl_seleksi_2025');
	    } else {
	        // Jika upload gagal, tampilkan pesan kesalahan
	        $error = array('error' => $this->upload_data->display_errors());
	       	$this->session->set_flashdata('error', $error);
			redirect(base_url('seleksi_reguler'));
	    }

		}else{
		# code...
			$update_data = array(
	            'file_ktp' => $this->input->post('efile_ktp'),
	            // Tambahkan field lain sesuai kebutuhan
	        );
			$this->m_registrasi->update_data($where,$update_data,'tbl_seleksi_2025');
		}//end cek

		// cek sudah input
		if ($_FILES['nfile_suket']['error'] === UPLOAD_ERR_OK) {
			    // Konfigurasi upload file Ijasah D3
	    $config_suket['upload_path'] = './assets/upload/2025/upload_seleksi_suket';
	    $config_suket['allowed_types'] = 'pdf';
	    $config_suket['max_size'] = 1048; // Ukuran maksimum file (dalam kilobyte)
	    $config_suket['file_name'] = $no.'_suket'; // Nama file yang diunggah sesuai NIM

	    // $this->load->library('upload', $config_ijasah_d3, 'upload_ijd3');
	    $this->load->library('upload');
    	$this->upload->initialize($config_suket);

	    // Jika upload berhasil
	    if ($this->upload->do_upload('nfile_suket')) {
	        $upload_data = $this->upload->data();

	        // Update data pada database
	        $update_data = array(
	            'file_suket' => $upload_data['file_name'],
	            // Tambahkan field lain sesuai kebutuhan
	        );

	        $this->m_registrasi->update_data($where,$update_data,'tbl_seleksi_2025');
	    } else {
	        // Jika upload gagal, tampilkan pesan kesalahan
	        $error = array('error' => $this->upload_data->display_errors());
	       	$this->session->set_flashdata('error', $error);
			redirect(base_url('seleksi_reguler'));
	    }

		}else{
		# code...
			$update_data = array(
	            'file_suket' => $this->input->post('efile_suket'),
	            // Tambahkan field lain sesuai kebutuhan
	        );
			$this->m_registrasi->update_data($where,$update_data,'tbl_seleksi_2025');
		}//end cek

		// cek sudah input
		if ($_FILES['nfile_supersehat']['error'] === UPLOAD_ERR_OK) {
			    // Konfigurasi upload file Ijasah D3
	    $config_supersehat['upload_path'] = './assets/upload/2025/upload_seleksi_supersehat';
	    $config_supersehat['allowed_types'] = 'pdf';
	    $config_supersehat['max_size'] = 1048; // Ukuran maksimum file (dalam kilobyte)
	    $config_supersehat['file_name'] = $no.'_supersehat'; // Nama file yang diunggah sesuai NIM

	    // $this->load->library('upload', $config_ijasah_d3, 'upload_ijd3');
	    $this->load->library('upload');
    	$this->upload->initialize($config_supersehat);

	    // Jika upload berhasil
	    if ($this->upload->do_upload('nfile_supersehat')) {
	        $upload_data = $this->upload->data();

	        // Update data pada database
	        $update_data = array(
	            'file_supersehat' => $upload_data['file_name'],
	            // Tambahkan field lain sesuai kebutuhan
	        );

	        $this->m_registrasi->update_data($where,$update_data,'tbl_seleksi_2025');
	    } else {
	        // Jika upload gagal, tampilkan pesan kesalahan
	        $error = array('error' => $this->upload_data->display_errors());
	       	$this->session->set_flashdata('error', $error);
			redirect(base_url('seleksi_reguler'));
	    }

		}else{
		# code...
			$update_data = array(
	            'file_supersehat' => $this->input->post('efile_supersehat'),
	            // Tambahkan field lain sesuai kebutuhan
	        );
			$this->m_registrasi->update_data($where,$update_data,'tbl_seleksi_2025');
		}//end cek


	$this->session->set_flashdata('success', 'Data Seleksi berhasil diedit.');	
	redirect(base_url('seleksi_reguler'));

}

	public function proses_seleksi_gdr1()
	{
		# code...
		$link_ktp = $this->input->post('link_ktp');
		$link_ijasah = $this->input->post('link_ijasah');
		$link_rapor = $this->input->post('link_rapor');
		$link_kesehatan = $this->input->post('link_kesehatan');
		$link_supersehat = $this->input->post('link_supersehat');
		// $link_prestasi = $this->input->post('link_prestasi');
		$link_video_pushup = $this->input->post('link_video_pushup');
		$link_video_shitup = $this->input->post('link_video_shitup');
		$link_video_pullup = $this->input->post('link_video_pullup');
		$link_video_shuttle = $this->input->post('link_video_shuttle');

		$data = array(
					'no'=> $this->session->userdata('no'),
					'link_ktp' => $link_ktp,
					'link_ijasah' => $link_ijasah,
					'link_rapor' => $link_rapor,
					'link_kesehatan' => $link_kesehatan,
					'link_supersehat' => $link_supersehat,
					// 'link_prestasi' => $link_prestasi,
					'link_video_pushup' => $link_video_pushup,
					'link_video_shitup' => $link_video_shitup,
					'link_video_pullup' => $link_video_pullup,
					'link_video_shuttle' => $link_video_shuttle,
					);
		$proses_insert = $this->m_registrasi->input_data($data,'tbl_seleksi_2025');
				if ($proses_insert) {
					# code...
					redirect("seleksi_reguler?pesan=succsess");
				}
				redirect("seleksi_reguler?pesan=error");		
	}
	public function getdataeditseleksigdr1($no)
	{
		# code...
		// Ambil data berdasarkan ID dari model Anda
        $data = $this->m_registrasi->get_data_edit_gdr1($no); // Gantilah 'get_data_by_id' dengan metode yang sesuai dalam model Anda

        // Konversi data ke format JSON dan kirimkan ke view
        echo json_encode($data);
	}
	public function proses_seleksi_edit_gdr1()
	{
		# code...
		$id_link = $this->input->post('id_link');
		$no = $this->input->post('no');
		$link_ktp = $this->input->post('link_ktp');
		$link_ijasah = $this->input->post('link_ijasah');
		$link_rapor = $this->input->post('link_rapor');
		$link_kesehatan = $this->input->post('link_kesehatan');
		$link_supersehat = $this->input->post('link_supersehat');
		// $link_prestasi = $this->input->post('link_prestasi');
		$link_video_pushup = $this->input->post('link_video_pushup');
		$link_video_shitup = $this->input->post('link_video_shitup');
		$link_video_pullup = $this->input->post('link_video_pullup');
		$link_video_shuttle = $this->input->post('link_video_shuttle');

		$where = array(
	        'id_link' => $id_link,
	    );		

		$update_data = array(
					'no'=> $no,
					'link_ktp' => $link_ktp,
					'link_ijasah' => $link_ijasah,
					'link_rapor' => $link_rapor,
					'link_kesehatan' => $link_kesehatan,
					'link_supersehat' => $link_supersehat,
					// 'link_prestasi' => $link_prestasi,
					'link_video_pushup' => $link_video_pushup,
					'link_video_shitup' => $link_video_shitup,
					'link_video_pullup' => $link_video_pullup,
					'link_video_shuttle' => $link_video_shuttle,
					);
		$proses_insert = $this->m_registrasi->update_data($where,$update_data,'tbl_seleksi_2025');
				if ($proses_insert) {
					# code...
					redirect("seleksi_reguler?pesan=succsess");
				}
				redirect("seleksi_reguler?pesan=error");		
	}
	public function ukurpakaian()
	{
		# code...
		$no = $this->session->userdata('no');
		$data['camhtar'] = $this;
		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$data['nik'] = $key->nik;
		}
		//cek seleksi
		$data['hs'] = $this->m_registrasi->get_data($where, 'tbl_catar_hasil_seleksi_2025')->num_rows();
		$data['validasi'] = $this->m_registrasi->get_data($where, 'tbl_catar_validasi_2025')->num_rows();
		$data['ukurpakaian'] = $this->m_registrasi->get_data($where, 'tbl_ukurpakaian')->num_rows();
		// $data['ukurpakaian_data'] = $this->m_registrasi->get_data($where, 'tbl_ukurpakaian')->result();

		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/ukurpakaian',$data);
        $this->load->view('camahatar/footer');
        $this->load->view('camahatar/ukurpakaian_js');
        // $this->load->view('camahatar/seleksigdr2_js');
	}
	public function proses_ukurpakaian($value='')
	{
		# code...
		$jalur = $this->input->post('jalur');
		if ($jalur == "reguler" || $jalur == "gdr1") {
			# code...
		$no = $this->input->post('no');
		$jk_pakaian = $this->input->post('jk');
		$ukuran_sepatu = $this->input->post('ukuran_sepatu');
		$topipet = $this->input->post('topipet');
		$seragam_pdl = $this->input->post('seragam_pdl');
		$training_pack = $this->input->post('training_pack');
		$wearpack = $this->input->post('wearpack');
		$kaos_or = $this->input->post('kaos_or');
		// $baju_renang = $this->input->post('baju_renang');
		$baju_renang = "0";
		$dogi = $this->input->post('dogi');
		$pdhpdub_kemeja = $this->input->post('pdhpdub_kemeja');
		$pdhpdub_celana = $this->input->post('pdhpdub_celana');
		$jaspdpm = $this->input->post('jaspdpm');
		$jas_almamater = $this->input->post('jas_almamater');
		$ukuran_sepatu_lainnya = $this->input->post('ukuran_sepatu_lainnya');
		$seragam_pdl_lainnya = $this->input->post('seragam_pdl_lainnya');
		$training_pack_lainnya = $this->input->post('training_pack_lainnya');
		$wearpack_lainnya = $this->input->post('wearpack_lainnya');
		$kaos_or_lainnya = $this->input->post('kaos_or_lainnya');
		$baju_renang_lainnya = $this->input->post('baju_renang_lainnya');
		$pdhpdub_kemeja_lainnya = $this->input->post('pdhpdub_kemeja_lainnya');
		$pdhpdub_celana_lainny = $this->input->post('pdhpdub_celana_lainny');
		$jaspdpm_lainnya = $this->input->post('jaspdpm_lainnya');
		$jas_almamater_lainnya = $this->input->post('jas_almamater_lainnya');

		$data = array(
					'no'=> $this->session->userdata('no'),
					'jk_pakaian' => $jk_pakaian,
					'ukuran_sepatu' => $ukuran_sepatu,
					'topipet' => $topipet,
					'seragam_pdl' => $seragam_pdl,
					'training_pack' => $training_pack,
					'wearpack' => $wearpack,
					'kaos_or' => $kaos_or,
					'baju_renang' => $baju_renang,
					'dogi' => $dogi,
					'pdhpdub_kemeja' => $pdhpdub_kemeja,
					'pdhpdub_celana' => $pdhpdub_celana,
					'jaspdpm' => $jaspdpm,
					'jas_almamater' => $jas_almamater,
					'ukuran_sepatu_lainnya' => $ukuran_sepatu_lainnya,
					'seragam_pdl_lainnya' => $seragam_pdl_lainnya,
					'training_pack_lainnya' => $training_pack_lainnya,
					'wearpack_lainnya' => $wearpack_lainnya,
					'kaos_or_lainnya' => $kaos_or_lainnya,
					'baju_renang_lainnya' => $baju_renang_lainnya,
					'pdhpdub_kemeja_lainnya' => $pdhpdub_kemeja_lainnya,
					'pdhpdub_celana_lainny' => $pdhpdub_celana_lainny,
					'jaspdpm_lainnya' => $jaspdpm_lainnya,
					'jas_almamater_lainnya' => $jas_almamater_lainnya,
					);
		}else{

		$no = $this->input->post('no');
		$jk_pakaian = $this->input->post('jk');
		$ukuran_sepatu = $this->input->post('ukuran_sepatu');
		$topipet = $this->input->post('topipet');
		$seragam_pdl = $this->input->post('seragam_pdl');
		$training_pack = $this->input->post('training_pack');
		$wearpack = $this->input->post('wearpack');
		$kaos_or = $this->input->post('kaos_or');
		// $baju_renang = $this->input->post('baju_renang');
		$baju_renang = "0";
		$dogi = $this->input->post('dogi');
		$pdhpdub_kemeja = "0";
		$pdhpdub_celana = "0";
		$jaspdpm = "0";
		$jas_almamater = $this->input->post('jas_almamater');
		$ukuran_sepatu_lainnya = $this->input->post('ukuran_sepatu_lainnya');
		$seragam_pdl_lainnya = $this->input->post('seragam_pdl_lainnya');
		$training_pack_lainnya = $this->input->post('training_pack_lainnya');
		$wearpack_lainnya = $this->input->post('wearpack_lainnya');
		$kaos_or_lainnya = $this->input->post('kaos_or_lainnya');
		$baju_renang_lainnya = $this->input->post('baju_renang_lainnya');
		$pdhpdub_kemeja_lainnya = $this->input->post('pdhpdub_kemeja_lainnya');
		$pdhpdub_celana_lainny = $this->input->post('pdhpdub_celana_lainny');
		$jaspdpm_lainnya = $this->input->post('jaspdpm_lainnya');
		$jas_almamater_lainnya = $this->input->post('jas_almamater_lainnya');

		$data = array(
					'no'=> $this->session->userdata('no'),
					'jk_pakaian' => $jk_pakaian,
					'ukuran_sepatu' => $ukuran_sepatu,
					'topipet' => $topipet,
					'seragam_pdl' => $seragam_pdl,
					'training_pack' => $training_pack,
					'wearpack' => $wearpack,
					'kaos_or' => $kaos_or,
					'baju_renang' => $baju_renang,
					'dogi' => $dogi,
					'pdhpdub_kemeja' => $pdhpdub_kemeja,
					'pdhpdub_celana' => $pdhpdub_celana,
					'jaspdpm' => $jaspdpm,
					'jas_almamater' => $jas_almamater,
					'ukuran_sepatu_lainnya' => $ukuran_sepatu_lainnya,
					'seragam_pdl_lainnya' => $seragam_pdl_lainnya,
					'training_pack_lainnya' => $training_pack_lainnya,
					'wearpack_lainnya' => $wearpack_lainnya,
					'kaos_or_lainnya' => $kaos_or_lainnya,
					'baju_renang_lainnya' => $baju_renang_lainnya,
					'pdhpdub_kemeja_lainnya' => $pdhpdub_kemeja_lainnya,
					'pdhpdub_celana_lainny' => $pdhpdub_celana_lainny,
					'jaspdpm_lainnya' => $jaspdpm_lainnya,
					'jas_almamater_lainnya' => $jas_almamater_lainnya,
					);
		}
		
		$proses_insert = $this->m_registrasi->input_data($data,'tbl_ukurpakaian');
				if ($proses_insert) {
					# code...
					redirect("ukurpakaian?pesan=succsess");
				}
				redirect("ukurpakaian?pesan=error");

	}
	public function down_tutorial_form_seleksi_gelombang_dini()
	{
		# code...
		force_download('assets/download/tutorial_form_seleksi_gelombang_dini.pdf',NULL);
		redirect(base_url());
	}
	public function down_panduan_pengisian_form_ukur_pakaian()
	{
		# code...
		force_download('assets/download/panduan_pengisian_ukuran_baju.pdf',NULL);
		redirect(base_url());
	}
	public function down_pengumuman_gd()
	{
		# code...
		force_download('assets/download/sk_lulus_periode_gelombang_dini_tahun_ajaran_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_pengumuman_seleksi()
	{
		# code...
		force_download('assets/download/seleksi_september_20252.pdf',NULL);
		redirect(base_url());
	}
	public function down_pengumuman_jan()
	{
		# code...
		force_download('assets/download/sk_lulus_periode_januari_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_pengumuman_feb_mar()
	{
		# code...
		force_download('assets/download/sk_lulus_periode_februari_maret_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_pengumuman_mei()
	{
		# code...
		force_download('assets/download/sk_lulus_periode_mei_2025.pdf',NULL);
		redirect(base_url());
	}
	public function down_pengumuman_juni()
	{
		# code...
		force_download('assets/download/sk_lulus_periode_juni_2025.pdf',NULL);
		redirect(base_url());
	}
	public function pengumuman_gd()
	{
		# code...
		$no = $this->session->userdata('no');
		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();
		$data['hasil_sel'] = $this->m_registrasi->get_data($where, 'tbl_catar_hasil_seleksi_2025')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$data['nik'] = $key->nik;
		}
				//cek seleksi
		$data['hs'] = $this->m_registrasi->get_data($where, 'tbl_catar_hasil_seleksi_2025')->num_rows();
		$data['validasi'] = $this->m_registrasi->get_data($where, 'tbl_catar_validasi_2025')->num_rows();

		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/pengumuman_gd',$data);
        $this->load->view('camahatar/footer');
        // $this->load->view('camahatar/pengumuman_gd_js');
	}
	public function pengumuman()
	{
		# code...
		$no = $this->session->userdata('no');
		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();
		$data['hasil_sel'] = $this->m_registrasi->get_data($where, 'tbl_catar_hasil_seleksi_2025')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$data['nik'] = $key->nik;
		}
				//cek seleksi
		$data['hs'] = $this->m_registrasi->get_data($where, 'tbl_catar_hasil_seleksi_2025')->num_rows();
		$data['validasi'] = $this->m_registrasi->get_data($where, 'tbl_catar_validasi_2025')->num_rows();

		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/pengumuman',$data);
        $this->load->view('camahatar/footer');
        // $this->load->view('camahatar/pengumuman_gd_js');
	}
	public function down_super_asrama()
	{
		# code...
		force_download('assets/download/surat_pernyataan_di_asrama_khusus_taruni.pdf',NULL);
		redirect(base_url());
	}
	public function down_super_taat()
	{
		# code...
		force_download('assets/download/surat_pernyataan_sanggup_mentaati_peraturan.pdf',NULL);
		redirect(base_url());
	}
	public function down_super_tidak_menikah()
	{
		# code...
		force_download('assets/download/surat_pernyataan_sanggup_tidak_menikah.pdf',NULL);
		redirect(base_url());
	}
	public function daful()
	{
		# code...
		# code...
		$no = $this->session->userdata('no');
		$where = array(
				'no' => $no,
			);
		$data['catar'] = $this->m_registrasi->get_data($where, 'tbl_catar_2025')->result();
		foreach ($data['catar'] as $key) {
			# code...
			$data['nik'] = $key->nik;
			$programStudi = $key->prodi;
		}
		$data['prodi'] = $this->getProdi($programStudi);

				//cek seleksi
		$data['hs'] = $this->m_registrasi->get_data($where, 'tbl_catar_hasil_seleksi_2025')->result();
		foreach ($data['hs'] as $key) {
			# code...
			$data['cek_lulus'] = $key->hasil;
		}

		$data['daful'] = $this->m_registrasi->get_data($where, 'tbl_catar_daful_2025')->num_rows();

		$this->load->view('camahatar/header',$data);
        $this->load->view('camahatar/daful',$data);
        $this->load->view('camahatar/footer');
        $this->load->view('camahatar/daful_js');
	}
	public function upload_bukti_bayar_daful()
	{
		# code...
		// Tangani unggahan file
		$no = $this->session->userdata('no');
		$where = array(
	        'no' => $no,
	    );

        $config['upload_path'] = './assets/upload/2025/bukti_bayar_daful';
        $config['max_size'] = 1048;
        $config['allowed_types'] = 'pdf'; // Sesuaikan dengan jenis file yang diizinkan
        $config['file_name'] = $no.'_bukti_bayar_daful'; // Nama file yang diunggah sesuai NIM
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('bukti_bayar_daful')) {
            // Jika unggahan berhasil
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            // Simpan data ke database (contoh)
            $data = array(
                'bukti_bayar_daful' => $file_name
            );
            $this->m_registrasi->update_data($where,$data,'tbl_catar_2025');

            // ($this->session->userdata('jalur') == "fasttrack") ? redirect(base_url().'validasi') : redirect(base_url().'pembayaran');
            redirect(base_url().'daftarulang');
        } else {
            // ($this->session->userdata('jalur') == "fasttrack") ? redirect(base_url().'validasi') : redirect(base_url().'pembayaran');
            redirect(base_url().'daftarulang');
        }
	}


}

/* End of file camahatar.php */
/* Location: ./application/controllers/camahatar.php */