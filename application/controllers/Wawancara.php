<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wawancara extends CI_Controller {

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
        $this->load->view('wawancara/header');
        $this->load->view('wawancara/index',$data);
        $this->load->view('wawancara/footer');
	}
	public function input_data()
	{
		# code...
		$this->load->view('wawancara/header');
        $this->load->view('wawancara/input');
        $this->load->view('wawancara/footer');
	}
	public function input_cari()
	{
		# code...
		$data['wawancara'] = $this;
		$prodi = $this->input->post('no');
		$where = array(
            'no' => $prodi,                
        );
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
        $data['cek_validasi'] = $this->m_registrasi->get_data($where,'tbl_catar_validasi_2023')->result();
        $data['cek_wawancara'] = $this->m_registrasi->get_data($where,'tbl_seleksi_wawancara')->result();
        	

        $this->load->view('wawancara/header');
		$this->load->view('wawancara/input');
		$this->load->view('wawancara/input_cari',$data);
		$this->load->view('wawancara/footer');
	}
	public function input_carip()
	{
		# code...
		$no = $this->input->post('no');
		$hasil_wwncra = $this->input->post('hasil_wwncra');
		$ket = $this->input->post('ket');
		$petugas = $this->input->post('petugas');

		$data = array(
			'no' => $no,
			'hasil_wwncra' => $hasil_wwncra,
			'ket' => $ket,
			'petugas' => $petugas,
			);
		$this->m_registrasi->input_data($data,'tbl_seleksi_wawancara');
		// ($this->db->affected_rows() != 1) ? false : true;

		if ($this->db->affected_rows() != 1) {
			$this->session->set_flashdata('error', 'Input data gagal.');
		    $this->load->view('wawancara/header');
			$this->load->view('wawancara/input');
			$this->load->view('wawancara/footer');
		} else {
		    $this->session->set_flashdata('success', 'Input data berhasil.');
		    $this->load->view('wawancara/header');
			$this->load->view('wawancara/input');
			$this->load->view('wawancara/footer');
		}
	}
	public function data_masuk()
	{
		# code...
		$this->load->view('wawancara/header');
		$this->load->view('wawancara/data_masuk');
		$this->load->view('wawancara/footer');
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
        	$data['catar'] = $this->m_registrasi->get_data_test_wawancara($where)->result();
			$this->load->view('wawancara/header');
			$this->load->view('wawancara/data_masuk');
			$this->load->view('wawancara/data_masukp',$data);
			$this->load->view('wawancara/footer');
		}else{
			$where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.gelombang' => $gelombang,                
        	);
        	$data['catar'] = $this->m_registrasi->get_data_test_wawancara($where)->result();
			$this->load->view('wawancara/header');
			$this->load->view('wawancara/data_masuk');
			$this->load->view('wawancara/data_masukp',$data);
			$this->load->view('wawancara/footer');
		}
	}
	public function edit_data($id)
	{
		# code...
		$data['wawancara'] = $this;
		$where = array(
            'tbl_catar_2023.no' => $id,                
        );
        $data['catar'] = $this->m_registrasi->get_data_test_wawancara($where)->result();
        	$this->load->view('wawancara/header');
			$this->load->view('wawancara/edit',$data);
			$this->load->view('wawancara/footer');

	}
	public function edit_datap()
	{
		# code...
		$where = array(
				'id_sw'  	=> $this->input->post('id_sw'),
		);
		$no = $this->input->post('no');
		$hasil_wwncra = $this->input->post('hasil_wwncra');
		$ket = $this->input->post('ket');
		$petugas = $this->input->post('petugas');

		$data = array(
			'no' => $no,
			'hasil_wwncra' => $hasil_wwncara,
			'ket' => $ket,
			'petugas' => $petugas,
			);
		$this->m_registrasi->update_data($where,$data,'tbl_seleksi_wawancara');

		if ($this->db->affected_rows() != 1) {
			$this->session->set_flashdata('error', ' Edit data gagal.');
		    $this->load->view('wawancara/header');
			$this->load->view('wawancara/data_masuk');
			$this->load->view('wawancara/footer');
		} else {
		    $this->session->set_flashdata('success', ' Edit data berhasil.');
		    $this->load->view('wawancara/header');
			$this->load->view('wawancara/data_masuk');
			$this->load->view('wawancara/footer');
		}
	}


}

/* End of file Wawancara.php */
/* Location: ./application/controllers/Wawancara.php */