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
		$data['samapta'] = $this;
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
			'suttle_run' => $suttle_run,
			'petugas' => $petugas,
			);
		$this->m_registrasi->input_data($data,'tbl_seleksi_samapta');
		// ($this->db->affected_rows() != 1) ? false : true;

		if ($this->db->affected_rows() != 1) {
			$this->session->set_flashdata('error', 'Input data gagal.');
		    $this->load->view('samapta/header');
			$this->load->view('samapta/input');
			$this->load->view('samapta/footer');
		} else {
		    $this->session->set_flashdata('success', 'Input data berhasil.');
		    $this->load->view('samapta/header');
			$this->load->view('samapta/input');
			$this->load->view('samapta/footer');
		}
	}
	public function data_masuk()
	{
		# code...
		$this->load->view('samapta/header');
		$this->load->view('samapta/data_masuk');
		$this->load->view('samapta/footer');
	}
	public function data_masukp()
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
        	$data['catar'] = $this->m_registrasi->get_data_test_samapta($where)->result();
			$this->load->view('samapta/header');
			$this->load->view('samapta/data_masuk');
			$this->load->view('samapta/data_masukp',$data);
			$this->load->view('samapta/footer');
		}else{
			$where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.gelombang' => $gelombang,                
        	);
        	$data['catar'] = $this->m_registrasi->get_data_test_samapta($where)->result();
			$this->load->view('samapta/header');
			$this->load->view('samapta/data_masuk');
			$this->load->view('samapta/data_masukp',$data);
			$this->load->view('samapta/footer');
		}
	}
	public function edit_data($id)
	{
		# code...
		$data['samapta'] = $this;
		$where = array(
            'tbl_catar_2023.no' => $id,                
        );
        $data['catar'] = $this->m_registrasi->get_data_test_samapta($where)->result();
        	$this->load->view('samapta/header');
			$this->load->view('samapta/edit',$data);
			$this->load->view('samapta/footer');

	}
	public function edit_datap()
	{
		# code...
		$where = array(
				'id_ssmp'  	=> $this->input->post('id_ssmp'),
		);
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
			'suttle_run' => $suttle_run,
			'petugas' => $petugas,
			);
		$this->m_registrasi->update_data($where,$data,'tbl_seleksi_samapta');

		if ($this->db->affected_rows() != 1) {
			$this->session->set_flashdata('error', ' Edit data gagal.');
		    $this->load->view('samapta/header');
			$this->load->view('samapta/data_masuk');
			$this->load->view('samapta/footer');
		} else {
		    $this->session->set_flashdata('success', ' Edit data berhasil.');
		    $this->load->view('samapta/header');
			$this->load->view('samapta/data_masuk');
			$this->load->view('samapta/footer');
		}
	}

	  ////////////////////////////////////////// seleksi 2024 /////////////////////////////////////////////////////
    public function getdataeditseleksigdr1($no)
    {
        # code...
        // Ambil data berdasarkan ID dari model Anda
        $data = $this->m_registrasi->get_data_edit_gdr1_samapta($no); // Gantilah 'get_data_by_id' dengan metode yang sesuai dalam model Anda

        // Konversi data ke format JSON dan kirimkan ke view
        echo json_encode($data);
    }
    public function seleksigd()
    {
        # code...
         $where = array(
            'jalur' => 'gdr1'
        );
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $this->load->view('samapta/header');
        $this->load->view('samapta/seleksigd',$data);
        $this->load->view('samapta/footer');
        $this->load->view('samapta/seleksigd_js');
    }
     public function getdataeditseleksi($no)
    {
        # code...
        // Ambil data berdasarkan ID dari model Anda
        $data = $this->m_registrasi->get_data_edit_gdr1_samapta($no); // Gantilah 'get_data_by_id' dengan metode yang sesuai dalam model Anda

        // Konversi data ke format JSON dan kirimkan ke view
        echo json_encode($data);
    }
    public function seleksi()
    {
        # code...
         $where = array(
            'jalur' => 'reguler'
        );
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $this->load->view('samapta/header');
        $this->load->view('samapta/seleksi',$data);
        $this->load->view('samapta/footer');
        $this->load->view('samapta/seleksi_js');
    }
    public function proses_seleksi24()
    {
    	# code...
    	$no = $this->input->post('no');
		$lari = $this->input->post('lari');
		$push_up = $this->input->post('push_up');
		$pull_up = $this->input->post('pull_up');
		$suttle_run = $this->input->post('suttle_run');
		$petugas = $this->input->post('petugas');
    }

    ////////////////////////////////////////// .seleksi 2024 /////////////////////////////////////////////////////


}

/* End of file Samapta.php */
/* Location: ./application/controllers/Samapta.php */
