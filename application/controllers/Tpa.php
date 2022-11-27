<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tpa extends CI_Controller {

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
        $this->load->view('tpa/header');
        $this->load->view('tpa/index',$data);
        $this->load->view('tpa/footer');
	}
	public function input()
	{
		# code...
		$this->load->view('tpa/header');
		$this->load->view('tpa/input');
		$this->load->view('tpa/footer');
	}
	public function input_cari()
	{
		# code...
		$prodi = $this->input->post('prodi');
		$kelas = $this->input->post('kelas');
		$gelombang = $this->input->post('gelombang');


		if ($gelombang == null) {
			# code...
			$where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,                
        	);
        	$data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
			$this->load->view('tpa/header');
			$this->load->view('tpa/input');
			$this->load->view('tpa/input_cari',$data);
			$this->load->view('tpa/footer');
		}else{
			$where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.gelombang' => $gelombang,                
        	);
        	$data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
			$this->load->view('tpa/header');
			$this->load->view('tpa/input');
			$this->load->view('tpa/input_cari',$data);
			$this->load->view('tpa/footer');
		}
	}
	public function input_carip()
	{
		# code...

		/////////////////////////////input arry///////////////////////////////////////
		$result = array();
		foreach ($_POST['hasil_tpa'] as $key => $val) {
			$result[] = array( 
				'no'     		=> $_POST['no'][$key],		
				'hasil_tpa' 	=> $_POST['hasil_tpa'][$key],
				'petugas' 		=> $_POST['petugas'][$key],			
			);		
		}		
		$this->db->insert_batch('tbl_kliring_smta_makul_temp',$result);

		/////////////////////////////./input arry///////////////////////////////////////	
		if ($this->db->affected_rows() != 1) {
			$this->session->set_flashdata('error', 'Input data gagal.');
		    $this->load->view('tpa/header');
			$this->load->view('tpa/input');
			$this->load->view('tpa/footer');
		} else {
		    $this->session->set_flashdata('success', 'Input data berhasil.');
		    $this->load->view('tpa/header');
			$this->load->view('tpa/input');
			$this->load->view('tpa/footer');
		}
	}

}

/* End of file Tpa.php */
/* Location: ./application/controllers/Tpa.php */