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
			$data = $this->m_mahasiswa->get_data($where, 'tbl_catar_2024');
			$d = $this->m_mahasiswa->get_data($where, 'tbl_catar_2024')->row();
			$cek = $data->num_rows();
			if($cek > 0){
				$session = array(
					'username'=> $d->username,
					'nama'=> $d->nama,
					'jalur'=> $d->jalur,
					'status' => 'login'
				);
				$this->session->set_userdata($session);
				redirect(base_url().'camahatar/home');
			}else{
				redirect(base_url().'camahatar?pesan=gagal');			
			}
		}else{
			redirect(base_url().'masuk');
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
	public function daftarp()
	{
		if ($this->input->post()) {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $jalur = $this->input->post('jalur');

            // Lakukan validasi data yang diterima jika diperlukan

            // Simpan data pendaftaran ke dalam tabel "tbl_catar_2024"
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'jalur' => $jalur
                // Tambahkan kolom lain sesuai dengan struktur tabel
            );

            $insert_result = $this->m_registrasi->input_data($data,'tbl_catar_2024');

            if ($insert_result) {
               echo "error";
            } else {
                 echo "success";
            }
        }
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

}

/* End of file camahatar.php */
/* Location: ./application/controllers/camahatar.php */