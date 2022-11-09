<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Samapta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'welcome?pesan=belumlogin');
		}
		$this->load->model('m_registrasi');
        $this->load->helper('url');
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
			return $pick;
	}
	public function index()
	{
		# code...
		$where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
			'gelombang' => $gelombang,			       
        );
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
		foreach ($data['catar'] as $row)
		{
        $prodi = $row->prodi;
		}
		$data['prodi'] = $this->prodi($prodi);
        $this->load->view('samapta/header');
        $this->load->view('samapta/index',$data);
        $this->load->view('samapta/footer');
	}
	public function input_data()
	{
		# code...
		$this->load->view('samapta/header');
        $this->load->view('samapta/input');
        $this->load->view('samapta/footer');
	}
	public function input_cari()
	{
		# code...
		$prodi = $this->input->post('no');
		$where = array(
            'no' => $prodi,                
        );
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
        $data['cek_validasi'] = $this->m_registrasi->get_data($where,'tbl_catar_validasi_2023')->result();
        $data['cek_samapta'] = $this->m_registrasi->get_data($where,'tbl_seleksi_samapta')->result();
        	

        $this->load->view('samapta/header');
		$this->load->view('samapta/input');
		$this->load->view('samapta/input_cari',$data);
		$this->load->view('samapta/footer');
	}
	public function input_carip()
	{
		# code...
		$no = $this->input->post('no');
		$lari = $this->input->post('lari');
		$push_up = $this->input->post('push_up');
		$pull_up = $this->input->post('pull_up');
		$suttle_run = $this->input->post('suttle_run');
		$petugas = $this->input->post('petugas');

		$data = array(
			'no' => $no,
			'lari' => $lari,
			'push_up' => $push_up,
			'pull_up' => $pull_up,
			'settle_run' => $settle_run,
			'petugas' => $petugas,
			);
		$proses = $this->m_registrasi->input_data($data,'tbl_seleksi_samapta');

		if ($proses) {
		    $this->session->set_flashdata('success', 'Added successfully.');
		    $this->load->view('samapta/header');
			$this->load->view('samapta/input');
			$this->load->view('samapta/footer');
		} else {
		    $this->session->set_flashdata('error', 'Something wrong.');
		    $this->load->view('samapta/header');
			$this->load->view('samapta/input');
			$this->load->view('samapta/footer');
		}
	}

}

/* End of file Samapta.php */
/* Location: ./application/controllers/Samapta.php */
