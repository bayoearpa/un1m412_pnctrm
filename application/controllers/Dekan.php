<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dekan extends CI_Controller {
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
		$where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
			'gelombang' => $gelombang,			       
        );
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2021')->result();
		foreach ($data['catar'] as $row)
		{
        $prodi = $row->prodi;
		}
		$data['prodi'] = $this->prodi($prodi);
        // $data['catar'] = $this->m_registrasi->get_data_all('tbl_catar')->result(); 
        $this->load->view('dekan/header');
        $this->load->view('dekan/index',$data);
        $this->load->view('dekan/footer');
	}


}

/* End of file dekan.php */
/* Location: ./application/controllers/dekan.php */