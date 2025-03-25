<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends CI_Controller {


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
		$this->load->view('koperasi/header');
        $this->load->view('koperasi/index');
        $this->load->view('koperasi/footer');
	}
	public function rekap()
	{
		# code...
		$where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array('reguler', 'gdr1');
		$data['catar'] = $this->m_registrasi->get_data_sudah_daful($where)->result();
		foreach ($data['catar'] as $row)
		{
        $prodi = $row->prodi;
		}
		$data['prodi'] = $this->prodi($prodi);
		$data['koperasi'] = $this;
		$this->load->view('koperasi/header');
        $this->load->view('koperasi/rekap',$data);
        $this->load->view('koperasi/footer');
        $this->load->view('koperasi/rekap_js');
	}
	public function cetak()
	{
		# code...
		$this->load->view('koperasi/header');
        $this->load->view('koperasi/cetak');        
        $this->load->view('koperasi/footer');
        $this->load->view('koperasi/cetak_js');
	}
	 public function getdatacatarukurpakaian($no)
    {
        # code...
        // Ambil data berdasarkan ID dari model Anda
        $data = $this->m_registrasi->get_data_catar_ukurpakaian($no); // Gantilah 'get_data_by_id' dengan metode yang sesuai dalam model Anda

        // Konversi data ke format JSON dan kirimkan ke view
        echo json_encode($data);
    }
    public function preview_cetak()
    {
        # code...
        $data['koperasi'] = $this;
        $jalur = $this->input->post('jalur');
        $prodi = $this->input->post('prodi');
        $gelombang = $this->input->post('gelombang');

        if ($jalur == "reguler") {
            # code...
            $where= array(
            'tbl_catar_2025.jalur' => $jalur,
            'tbl_catar_2025.prodi' => $prodi,
            'tbl_catar_2025.gelombang' => $gelombang, 
            );

            $data['frm_jalur'] = $jalur;
            $data['frm_prodi'] = $prodi;
            $data['frm_gelombang'] = $gelombang;

           $data['results'] = $this->m_registrasi->get_data_rekap_ukurpakaian($where);

            $this->load->view('koperasi/header');
            $this->load->view('koperasi/preview_cetak',$data);        
            $this->load->view('koperasi/footer');
        }else{
            $where= array(
            'tbl_catar_2025.jalur' => $jalur,
            'tbl_catar_2025.prodi' => $prodi,
            );

            $data['frm_jalur'] = $jalur;
            $data['frm_prodi'] = $prodi;

           $data['results'] = $this->m_registrasi->get_data_rekap_ukurpakaian($where);

            $this->load->view('koperasi/header');
            $this->load->view('koperasi/preview_cetak',$data);        
            $this->load->view('koperasi/footer');
        }

    }
    public function preview_cetak2()
    {
        // Ambil data dari request POST
        $jalur = $this->input->post('jalur');
        $prodi = $this->input->post('prodi');
        $gelombang = $this->input->post('gelombang');

        $data['koperasi'] = $this; // Jika diperlukan di dalam view

        // Tentukan kondisi berdasarkan pilihan jalur
        if ($jalur == "reguler") {
            $where = array(
                'tbl_catar_2025.jalur' => $jalur,
                'tbl_catar_2025.prodi' => $prodi,
                'tbl_catar_2025.gelombang' => $gelombang, 
            );

            // Siapkan data untuk view
            $data['frm_jalur'] = $jalur;
            $data['frm_prodi'] = $prodi;
            $data['frm_gelombang'] = $gelombang;
        } else {
            $where = array(
                'tbl_catar_2025.jalur' => $jalur,
                'tbl_catar_2025.prodi' => $prodi,
            );

            // Siapkan data untuk view
            $data['frm_jalur'] = $jalur;
            $data['frm_prodi'] = $prodi;
        }

        // Ambil data dari model
        $data['results'] = $this->m_registrasi->get_data_rekap_ukurpakaian($where);

        // Load the view with the data, returning the HTML string (no headers or footers)
        $this->load->view('koperasi/preview_cetak2', $data);
    }

    public function cetak_excel()
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
            'tbl_catar_2025.jalur' => $jalur,
            'tbl_catar_2025.prodi' => $prodi,
            'tbl_catar_2025.gelombang' => $gelombang, 
	        );

	       $data['results'] = $this->m_registrasi->get_data_rekap_ukurpakaian($where);
        }else{
        	$where= array(
            'tbl_catar_2025.jalur' => $jalur,
            'tbl_catar_2025.prodi' => $prodi,
	        );

	       $data['results'] = $this->m_registrasi->get_data_rekap_ukurpakaian($where);
        }


        

        // Load PHPExcel
        // Load plugin PHPExcel nya
	    ob_start();
	    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        $this->load->library('PHPExcel');
        
        // Create a new PHPExcel object
        $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Kopkar Kampus Biru Sejahtera")
                                     ->setLastModifiedBy("Kopkar Kampus Biru Sejahtera")
                                     ->setTitle("Rekap Ukur Pakaian")
                                     ->setSubject("Rekap Ukur Pakaian")
                                     ->setDescription("Rekap Ukur Pakaian");

        // Add a worksheet
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->setTitle('Rekap Ukur Pakaian');

        // Set headers
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'REKAP UKUR PAKAIAN CALON MAHASISWA BARU TA. 2024/2025');
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);

        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'UNIMAR AMNI SEMARANG');
        $objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);

        if ($jalur == "reguler") {
        	# code...
		$objPHPExcel->getActiveSheet()->setCellValue('A3', 'REGULER');
        }else{
		$objPHPExcel->getActiveSheet()->setCellValue('A3', 'GELOMBANG DINI');
        }
        $objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);

        // Fetch Prodi from tbl_catar_2024
        $nmprodi = $this->prodi("$prodi"); // Replace this with your actual function
        $objPHPExcel->getActiveSheet()->setCellValue('A4', 'Program Studi: ' . $nmprodi);
        $objPHPExcel->getActiveSheet()->getStyle('A4')->getFont()->setBold(true);

        $objPHPExcel->getActiveSheet()->setCellValue('A6', 'No');
        $objPHPExcel->getActiveSheet()->setCellValue('B6', 'Nama');
        $objPHPExcel->getActiveSheet()->setCellValue('C6', 'Jenis Kelamin');
        $objPHPExcel->getActiveSheet()->setCellValue('D6', 'Ukuran Sepatu');
        $objPHPExcel->getActiveSheet()->setCellValue('E6', 'Topi Pet');
        $objPHPExcel->getActiveSheet()->setCellValue('F6', 'Seragam PDL');
        $objPHPExcel->getActiveSheet()->setCellValue('G6', 'Training Pack');
        $objPHPExcel->getActiveSheet()->setCellValue('H6', 'Wearpack');
        $objPHPExcel->getActiveSheet()->setCellValue('I6', 'Kaos Olahraga');
        $objPHPExcel->getActiveSheet()->setCellValue('J6', 'Baju Renang');
        $objPHPExcel->getActiveSheet()->setCellValue('K6', 'Dogi');
        $objPHPExcel->getActiveSheet()->setCellValue('L6', 'Kemeja PDH PDUB');
        $objPHPExcel->getActiveSheet()->setCellValue('M6', 'Celana PDH PDUB');
        $objPHPExcel->getActiveSheet()->setCellValue('N6', 'Jas PDPM');

        // Loop through the data and populate the worksheet
        $row = 7;
        foreach ($data['results'] as $result) {
            $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $result->no);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $result->nama);

            if ($result->jk_pakaian == "wanita_kerudung") {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, 'WANITA (KERUDUNG)');
            }else if ($result->jk_pakaian == "pria") {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, 'PRIA');
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, 'WANITA');
            }

            if ($result->ukuran_sepatu == 'lainnya') {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $result->ukuran_sepatu_lainnya);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $result->ukuran_sepatu);
            }
            
            // $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $result->topipet);
            if ($result->topipet == 'lainnya') {
                # code...
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $result->topipet_lainnya);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $result->topipet);
            }

            if ($result->seragam_pdl == 'lainnya') {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $result->seragam_pdl_lainnya);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $result->seragam_pdl);
            }

            if ($result->training_pack == 'lainnya') {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $result->training_pack_lainnya);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $result->training_pack);
            }

            if ($result->wearpack == 'lainnya') {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $result->wearpack_lainnya);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $result->wearpack);
            }

            if ($result->kaos_or == 'lainnya') {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $result->kaos_or_lainnya);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $result->kaos_or);
            }

            if ($result->baju_renang == 'lainnya') {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $result->baju_renang_lainnya);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $result->baju_renang);
            }

            $objPHPExcel->getActiveSheet()->setCellValue('K' . $row, $result->dogi);

            if ($result->pdhpdub_kemeja == 'lainnya') {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $result->pdhpdub_kemeja_lainnya);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $result->pdhpdub_kemeja);
            }

            if ($result->pdhpdub_celana == 'lainnya') {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('M' . $row, $result->pdhpdub_celana_lainny);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('M' . $row, $result->pdhpdub_celana);
            }

            if ($result->jaspdpm == 'lainnya') {
            	# code...
            $objPHPExcel->getActiveSheet()->setCellValue('N' . $row, $result->jaspdpm_lainnya);
            }else{
            $objPHPExcel->getActiveSheet()->setCellValue('N' . $row, $result->jaspdpm);
            }

            $row++;
        }

        // Save Excel file
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $filename = 'Rekap_ukur_pakaian.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $objWriter->save('php://output');
	}

}

/* End of file Koperasi.php */
/* Location: ./application/controllers/Koperasi.php */