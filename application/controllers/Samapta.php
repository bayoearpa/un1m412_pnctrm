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
    	$id_ssmp = $this->input->post('id_ssmp');
    	$no = $this->input->post('no');
		$sit_up = $this->input->post('sit_up');
		$push_up = $this->input->post('push_up');
		$pull_up = $this->input->post('pull_up');
		$lari = $this->input->post('lari');
		$petugas = $this->input->post('petugas');

		$data = array(
			'no' => $no,
			'sit_up' => $sit_up,
			'push_up' => $push_up,
			'pull_up' => $pull_up,
			'lari' => $lari,
			'petugas' => $petugas,
			);

		$where= array(
            'no' => $no, 
        );

		$cek = $this->m_registrasi->get_data($where, 'tbl_seleksi_samapta_2024')->num_rows();

		if ($cek == null) {
			# code...
			$insert = $this->m_registrasi->input_data($data,'tbl_seleksi_samapta_2024');
			if ($insert) {
				# code...
				redirect(base_url().'samapta/seleksi?pesan=gagal'); 
			}else{ 
				redirect(base_url().'samapta/seleksi?pesan=berhasil');
			}
			
		}else{
			$where = array(
				'id_ssmp'  	=> $id_ssmp,
			);
			$edit = $this->m_registrasi->update_data($where,$data,'tbl_seleksi_samapta_2024');
			if ($edit) {
				# code...
				redirect(base_url().'samapta/seleksi?pesan=gagal');
			}else{ 
				redirect(base_url().'samapta/seleksi?pesan=berhasil');
			}
		}
    }
    
    ////////////////////////////////////////// .seleksi 2024 /////////////////////////////////////////////////////

    public function rekapseleksi()
	{
		# code...
		$this->load->view('samapta/header');
        $this->load->view('samapta/rekapseleksi');
        $this->load->view('samapta/footer');
        $this->load->view('samapta/rekapseleksi_js');
	}
	public function rekapseleksip()
	{
		# code...
		// Load necessary models and libraries here
        // Fetch data from the database
        $jalur = $this->input->post('jalur');
        $prodi = $this->input->post('prodi');
        $gelombang = $this->input->post('gelombang');

        if ($jalur == "reguler") {
        	# code...
        	$where= array(
            'tbl_catar_2024.jalur' => $jalur,
            'tbl_catar_2024.prodi' => $prodi,
            'tbl_catar_2024.gelombang' => $gelombang, 
	        );

	       $data['results'] = $this->m_registrasi->get_data_rekap_samapta($where);
        }else{
        	$where= array(
            'tbl_catar_2024.jalur' => $jalur,
            'tbl_catar_2024.prodi' => $prodi,
	        );

	       $data['results'] = $this->m_registrasi->get_data_rekap_samapta($where);
        }


        

        // Load PHPExcel
        // Load plugin PHPExcel nya
	    ob_start();
	    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        $this->load->library('PHPExcel');
        
        // Create a new PHPExcel object
        $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Tim Samapta")
                                     ->setLastModifiedBy("Tim Samapta")
                                     ->setTitle("Daftar Nilai Tes Samapta")
                                     ->setSubject("Nilai Tes Samapta")
                                     ->setDescription("Daftar Nilai Tes Samapta");

        // Add a worksheet
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->setTitle('Daftar Nilai');

        // Set headers
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'DAFTAR NILAI TES SAMAPTA SELEKSI CALON MAHASISWA BARU TA. 2024/2025');
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);

        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'UNIMAR AMNI SEMARANG');
        $objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);

        $objPHPExcel->getActiveSheet()->setCellValue('A3', 'REGULER');
        $objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);

        // Fetch Prodi from tbl_catar_2024
        $nmprodi = $this->prodi("$prodi"); // Replace this with your actual function
        $objPHPExcel->getActiveSheet()->setCellValue('A4', 'Program Studi: ' . $nmprodi);
        $objPHPExcel->getActiveSheet()->getStyle('A4')->getFont()->setBold(true);

        $objPHPExcel->getActiveSheet()->setCellValue('A6', 'No');
        $objPHPExcel->getActiveSheet()->setCellValue('B6', 'Nama');
        $objPHPExcel->getActiveSheet()->setCellValue('C6', 'JK');
        $objPHPExcel->getActiveSheet()->setCellValue('D6', 'Lari');
        $objPHPExcel->getActiveSheet()->setCellValue('E6', 'Sit Up');
        $objPHPExcel->getActiveSheet()->setCellValue('F6', 'Push Up');
        $objPHPExcel->getActiveSheet()->setCellValue('G6', 'Pull Up');
        $objPHPExcel->getActiveSheet()->setCellValue('H6', 'Nilai Akhir');

        // Loop through the data and populate the worksheet
        $row = 7;
        foreach ($data['results'] as $result) {
            $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $result->no);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $result->nama);
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $result->jk);
            $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $result->lari);
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $result->sit_up);
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $result->push_up);
            $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $result->pull_up);

            // Calculate the final score
            $nilai_akhir = ($result->lari + $result->sit_up + $result->push_up + $result->pull_up) / 4;
            $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $nilai_akhir);

            $row++;
        }

        // Save Excel file
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $filename = 'Daftar_Nilai_Tes_Samapta.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $objWriter->save('php://output');
	}
}

/* End of file Samapta.php */
/* Location: ./application/controllers/Samapta.php */
