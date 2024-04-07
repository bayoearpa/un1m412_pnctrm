<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Baak extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url().'welcome?pesan=belumlogin');
		}
		$this->load->model('m_registrasi');
        $this->load->helper('url');
        $this->load->helper('tgl_indo');
        $this->load->library('m_pdf');
        $this->load->helper('download');
    }
    function jurusan($id){
        if ($id == "1") {
            # code...
            return $jurusan = "KPN";
        }elseif ($id == "2") {
            # code...
            return $jurusan = "Teknika";
        }elseif ($id == "3") {
            # code...
            return $jurusan = "Nautika";
        }elseif ($id=="4"){
            return $jurusan = "Transportasi";
        }elseif ($id=="5"){
            return $jurusan = "Transportasi (Kelas Sore)";
        }elseif ($id=="6"){
            return $jurusan = "Teknik Mesin";
        }elseif ($id=="7"){
            return $jurusan = "Teknik Transportasi Laut";
        }elseif ($id=="8"){
            return $jurusan = "Teknik Keselamatan";
        }else{
            return $jurusan = "Perdagangan Internasional";
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
                default :
                    $pick = "Belum Pilih Prodi";
                
            }
            return $pick;
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'administrasi?pesan=logout');
    }
    function index() {
        // $data['catar'] = $this->m_registrasi->get_data_join_all()->result(); 
        // $data['catar'] = $this->m_registrasi->get_data_all('tbl_catar_2021')->result(); 
        $data['baak'] = $this;
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
            'gelombang' => $gelombang       
        );
        $data['catar'] = $this->m_registrasi->get_data_all('tbl_catar_2024')->result();
        $this->load->view('baak/header');
        $this->load->view('baak/index',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    public function data_sudah_validasi()
    {
        # code...
       $where = array(
            'jalur' => 'reguler'
        );
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $this->load->view('baak/header');
        $this->load->view('baak/data_sudah_validasi',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     public function data_sudah_validasi_tf()
    {
        # code...
       $where = array(
            'jalur' => 'kelastransfer'
        );
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $this->load->view('baak/header');
        $this->load->view('baak/data_sudah_validasi',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    public function data_sudah_validasi_gd()
    {
        # code...
        $where = array(
            'jalur' => 'gdr1'
        );
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $this->load->view('baak/header');
        $this->load->view('baak/data_sudah_validasi_gd',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     public function data_sudah_validasi_gdtf()
    {
        # code...
        $where = array(
            'jalur' => 'gdr2'
        );
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $this->load->view('baak/header');
        $this->load->view('baak/data_sudah_validasi_gd',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
      public function data_sudah_daful_reg()
    {
        # code...
        $where = array(
            'tbl_catar_2024.jalur' => 'reguler',
            'tbl_catar_daful_2024.aktif' => '1'  
        );
        $data['catar'] = $this->m_registrasi->get_data_sudah_daful($where)->result();
        $this->load->view('baak/header');
        $this->load->view('baak/data_sudah_validasi_gd',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     public function data_sudah_daful_tf()
    {
        # code...
        $where = array(
            'tbl_catar_2024.jalur' => 'kelastransfer',
            'tbl_catar_daful_2024.aktif' => '1'  
        );
        $data['catar'] = $this->m_registrasi->get_data_sudah_daful($where)->result();
        $this->load->view('baak/header');
        $this->load->view('baak/data_sudah_validasi_gd',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     public function data_sudah_daful_gd()
    {
        # code...
        $where = array(
            'tbl_catar_2024.jalur' => 'gdr1',
            'tbl_catar_daful_2024.aktif' => '1'  
        );
        $data['catar'] = $this->m_registrasi->get_data_sudah_daful($where)->result();
        $this->load->view('baak/header');
        $this->load->view('baak/data_sudah_validasi_gd',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     public function data_sudah_daful_gdtf()
    {
        # code...
        $where = array(
            'tbl_catar_2024.jalur' => 'gdr2',
            'tbl_catar_daful_2024.aktif' => '1'  
        );
        $data['catar'] = $this->m_registrasi->get_data_sudah_daful($where)->result();
        $this->load->view('baak/header');
        $this->load->view('baak/data_sudah_validasi_gd',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap');
        $this->load->view('baak/rekap_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_peserta(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_peserta');
        $this->load->view('baak/rekap_peserta_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_peserta2022(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_peserta2022');
        $this->load->view('baak/rekap_peserta_exl2022');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }

    function rekap_targas(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_targas');
        $this->load->view('baak/rekap_targas_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_tkd(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_tkd');
        $this->load->view('baak/rekap_tkd_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_psykotest(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_psykotest');
        $this->load->view('baak/rekap_psykotest_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_pantukir(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_pantukir');
        $this->load->view('baak/rekap_pantukir_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_seleksi(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_seleksi');
        $this->load->view('baak/rekap_seleksi_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_kesehatan(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_kesehatan');
        $this->load->view('baak/rekap_kesehatan_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_samapta(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_samapta');
        $this->load->view('baak/rekap_samapta_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_wawancara(){
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_wawancara');
        $this->load->view('baak/rekap_wawancara_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_daftarhadirdp2022(){
        $data['get_tgl_pel'] = $this->m_registrasi->get_data_tgl_seleksi()->result();
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_daftar_hadir_pesertadp2022',$data);
        $this->load->view('baak/rekap_daftar_hadir_pesertadp2022_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_daftarhadirpmbrks2022(){
        $data['get_tgl_pel'] = $this->m_registrasi->get_data_tgl_seleksi()->result();
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_daftar_hadir_pesertapmbrks2022',$data);
        $this->load->view('baak/rekap_daftar_hadir_pesertapmbrks2022_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_daftarhadir2022(){
        $data['get_tgl_pel'] = $this->m_registrasi->get_data_tgl_seleksi()->result();
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_daftar_hadir_peserta2022',$data);
        $this->load->view('baak/rekap_daftar_hadir_peserta2022_exl');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    ////////////////////////// per periode saga //////////////////////////////////
    function rekap_periode(){
        // $data['Baak'] = $this;
        $this->load->view('baak/header');
        $this->load->view('baak/rekap_periode');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_periodep(){
        $data['Baak'] = $this;
        $prodi = $this->input->post('prodi');
        $periode = $this->input->post('periode');

         if ($prodi == "99") {
             # code...

        $where= array(
            'tbl_catar_2024.periode' => $periode,  
        );
        $where1= array(
            'tbl_catar_2024.prodi' => "1",
            'tbl_catar_2024.periode' => $periode,  
        );
        $where2= array(
            'tbl_catar_2024.prodi' => "2",
            'tbl_catar_2024.periode' => $periode,  
        );
        $where3= array(
            'tbl_catar_2024.prodi' => "3",
            'tbl_catar_2024.periode' => $periode,  
        );
        $where4= array(
            'tbl_catar_2024.prodi' => "4",
            'tbl_catar_2024.periode' => $periode,  
        );
        $where5= array(
            'tbl_catar_2024.prodi' => "5",
            'tbl_catar_2024.periode' => $periode,  
        );
        $where6= array(
            'tbl_catar_2024.prodi' => "6",
            'tbl_catar_2024.periode' => $periode,  
        );
        $where7= array(
            'tbl_catar_2024.prodi' => "7",
            'tbl_catar_2024.periode' => $periode,  
        );
        $where8= array(
            'tbl_catar_2024.prodi' => "8",
            'tbl_catar_2024.periode' => $periode,  
        );
         $where9= array(
            'tbl_catar_2024.prodi' => "9",
            'tbl_catar_2024.periode' => $periode,  
        );
          $where10= array(
            'tbl_catar_2024.prodi' => "10",
            'tbl_catar_2024.periode' => $periode,  
        );


        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        //get total
        $data['tot_catar'] = $this->m_registrasi->get_data_join_where($where)->num_rows();
        $data['tot_catar1'] = $this->m_registrasi->get_data_join_where($where1)->num_rows();
        $data['tot_catar2'] = $this->m_registrasi->get_data_join_where($where2)->num_rows();
        $data['tot_catar3'] = $this->m_registrasi->get_data_join_where($where3)->num_rows();
        $data['tot_catar4'] = $this->m_registrasi->get_data_join_where($where4)->num_rows();
        $data['tot_catar5'] = $this->m_registrasi->get_data_join_where($where5)->num_rows();
        $data['tot_catar6'] = $this->m_registrasi->get_data_join_where($where6)->num_rows();
        $data['tot_catar7'] = $this->m_registrasi->get_data_join_where($where7)->num_rows();
        $data['tot_catar8'] = $this->m_registrasi->get_data_join_where($where8)->num_rows();
        $data['tot_catar9'] = $this->m_registrasi->get_data_join_where($where9)->num_rows();
        $data['tot_catar10'] = $this->m_registrasi->get_data_join_where($where10)->num_rows();

        // get nama prodi
        $data['prodi'] = "Semua Program Studi";
        $data['cek'] = "1";

        $this->load->view('baak/header');
        $this->load->view('baak/rekap_periode');
        $this->load->view('baak/rekap_periodep',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
         }else{
        $where= array(
            'tbl_catar_2024.prodi' => $prodi,
            'tbl_catar_2024.periode' => $periode,  
        );
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        //get total
        $data['tot_catar'] = $this->m_registrasi->get_data_join_where($where)->num_rows();
        // get nama prodi
        $data['prodi'] = $this->prodi($prodi);
        $data['cek'] = "2";

        $this->load->view('baak/header');
        $this->load->view('baak/rekap_periode');
        $this->load->view('baak/rekap_periodep',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        }
    }
    ////////////////////////// ./per periode saga //////////////////////////////////
    function rekap_pdf_daftarhadirpeserta(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $ta=$this->m_registrasi->get_data_ta($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        $jurusan = $this->jurusan($prodi);;
        $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $data['ta'] = $ta;

        //pdf
        $pdfFilePath="daftar_hadir_catar_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }  
    function rekap_pdf_daftarpeserta2022(){


        $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $gelombang = $this->input->post('gelombang');

        $nameprodi = $this->prodi($prodi);

        if ($gelombang == null) {
            # code...
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
             //pdf
            $pdfFilePath="daftar_catar_".$nameprodi.".pdf";
            $html=$this->load->view('baak/rekap_ctk_peserta2022',$data, TRUE);
            $pdf = $this->m_pdf->load();
     
            $pdf->AddPage('P');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
        }else{
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.gelombang' => $gelombang,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
             //pdf
            $pdfFilePath="daftar_catar_".$nameprodi.".pdf";
            $html=$this->load->view('baak/rekap_ctk_peserta2022',$data, TRUE);
            $pdf = $this->m_pdf->load();
     
            $pdf->AddPage('P');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();
        }

    }  
    function rekap_pdf_daftarhadirpeserta2022(){


        $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $jk = $this->input->post('jk');
        $tgl_pel = $this->input->post('tgl_pel');
        $gelombang = $this->input->post('gelombang');
        $bagian = $this->input->post('bagian');

        $nameprodi = $this->prodi($prodi);

        if ($gelombang == "0") {
            # code...
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //pdf
            $pdfFilePath="daftar_hadir_catar_".$nameprodi.".pdf";
            $html=$this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data, TRUE);
            $pdf = $this->m_pdf->load();
     
            $pdf->AddPage('P');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");

            // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }else{
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,    
            'tbl_catar_2023.gelombang' => $gelombang,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //pdf
            $pdfFilePath="daftar_hadir_catar_".$nameprodi.".pdf";
            $html=$this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data, TRUE);
            $pdf = $this->m_pdf->load();
     
            $pdf->AddPage('P');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();
             // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }

    }  
    function rekap_pdf_daftarhadirpesertadp2022(){


        $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $jk = $this->input->post('jk');
        $tgl_pel = $this->input->post('tgl_pel');
        $gelombang = $this->input->post('gelombang');
        $bagian = $this->input->post('bagian');

        $nameprodi = $this->prodi($prodi);

        if ($gelombang == "0") {
            # code...
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //pdf
            $pdfFilePath="daftar_hadir_catar_".$nameprodi.".pdf";
            $html=$this->load->view('baak/rekap_ctk_daftar_hadir_pesertadp2022',$data, TRUE);
            $pdf = $this->m_pdf->load();
     
            $pdf->AddPage('P');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");

            // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }else{
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,    
            'tbl_catar_2023.gelombang' => $gelombang,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //pdf
            $pdfFilePath="daftar_hadir_catar_".$nameprodi.".pdf";
            $html=$this->load->view('baak/rekap_ctk_daftar_hadir_pesertadp2022',$data, TRUE);
            $pdf = $this->m_pdf->load();
     
            $pdf->AddPage('P');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();
             // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }

    }  
    function rekap_pdf_daftarhadirpesertapmbrks2022(){


        $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $jk = $this->input->post('jk');
        $tgl_pel = $this->input->post('tgl_pel');
        $gelombang = $this->input->post('gelombang');
        $bagian = $this->input->post('bagian');

        $nameprodi = $this->prodi($prodi);

        if ($gelombang == "0") {
            # code...
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //pdf
            $pdfFilePath="daftar_hadir_catar_pemberkasan_".$nameprodi.".pdf";
            $html=$this->load->view('baak/rekap_ctk_daftar_hadir_pesertapmbrks2022',$data, TRUE);
            $pdf = $this->m_pdf->load();
     
            $pdf->AddPage('P');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");

            // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }else{
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,    
            'tbl_catar_2023.gelombang' => $gelombang,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //pdf
            $pdfFilePath="daftar_hadir_catar_pemberkasan_".$nameprodi.".pdf";
            $html=$this->load->view('baak/rekap_ctk_daftar_hadir_pesertapmbrks2022',$data, TRUE);
            $pdf = $this->m_pdf->load();
     
            $pdf->AddPage('P');
            $pdf->WriteHTML($html);
            $pdf->Output($pdfFilePath, "D");
            exit();
             // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }

    } 
    function rekap_pdf_daftarpeserta(){
       $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
        $jurusan = $this->jurusan($prodi);;
        $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;

        //pdf
        $pdfFilePath="daftar_catar_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk_peserta',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('P');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }  
    function rekap_pdf_targas(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
         $jurusan = $this->jurusan($prodi);;
         $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        
    

        //pdf
        $pdfFilePath="daftar_targas_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk_targas',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }        
    function rekap_pdf_tkd(){
       $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
         $jurusan = $this->jurusan($prodi);;
         $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        
 
        //pdf
        $pdfFilePath="daftar_tkd_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk_tkd',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }      
    function rekap_pdf_psykotest(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
         $jurusan = $this->jurusan($prodi);;
         $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        
        //pdf
        $pdfFilePath="daftar_psykotest_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk_psykotest',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }     
     function rekap_pdf_pantukir(){
       $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        

        //pdf
        $pdfFilePath="daftar_pantukir_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk_pantukir',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }  
     function rekap_pdf_seleksi(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        
        //pdf
        $pdfFilePath="daftar_seleksi_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk_seleksi',$data, TRUE);
        $pdf = $this->m_pdf->loadf();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }               
     function rekap_pdf_kesehatan(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        

        //pdf
        $pdfFilePath="daftar_kesehatan_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk_kesehatan',$data, TRUE);
        $pdf = $this->m_pdf->loadf();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }         
     function rekap_pdf_samapta(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        
        //pdf
        $pdfFilePath="daftar_samapta_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk_samapta',$data, TRUE);
        $pdf = $this->m_pdf->loadf();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }        
     function rekap_pdf_wawancara(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        
        //pdf
        $pdfFilePath="daftar_wawancara_".$jurusan.".pdf";
        $html=$this->load->view('baak/rekap_ctk_wawancara',$data, TRUE);
        $pdf = $this->m_pdf->loadf();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }


/////////////////////////////////////////////EXCELLLL////////////////////////////////////////////////////////////////



     function rekap_exl_daftarhadirpeserta2022(){


       $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $jk = $this->input->post('jk');
        $tgl_pel = $this->input->post('tgl_pel');
        $gelombang = $this->input->post('gelombang');
        $bagian = $this->input->post('bagian');

        $nameprodi = $this->prodi($prodi);

        if ($gelombang == "0") {
            # code...
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //excel

            header("Content-type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=".$nameprodi."_daftar_hadir_excel.xls");

            $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022_exl',$data);

            // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }else{
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,    
            'tbl_catar_2023.gelombang' => $gelombang,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //excel

            header("Content-type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=".$nameprodi."_daftar_hadir_excel.xls");

            $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022_exl',$data);
             // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }

    }
    function rekap_exl_daftarhadirpesertadp2022(){


       $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $jk = $this->input->post('jk');
        $tgl_pel = $this->input->post('tgl_pel');
        $gelombang = $this->input->post('gelombang');
        $bagian = $this->input->post('bagian');

        $nameprodi = $this->prodi($prodi);

        if ($gelombang == "0") {
            # code...
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //excel

            header("Content-type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=".$nameprodi."_daftar_hadir_datang_pulang_excel.xls");

            $this->load->view('baak/rekap_ctk_daftar_hadir_pesertadp2022_exl',$data);

            // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }else{
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,    
            'tbl_catar_2023.gelombang' => $gelombang,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //excel

            header("Content-type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=".$nameprodi."_daftar_hadir_datang_pulang_excel.xls");

            $this->load->view('baak/rekap_ctk_daftar_hadir_pesertadp2022_exl',$data);
             // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }

    }  
    function rekap_exl_daftarhadirpesertapmbrks2022(){


       $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $jk = $this->input->post('jk');
        $tgl_pel = $this->input->post('tgl_pel');
        $gelombang = $this->input->post('gelombang');
        $bagian = $this->input->post('bagian');

        $nameprodi = $this->prodi($prodi);

        if ($gelombang == "0") {
            # code...
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //excel

            header("Content-type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=".$nameprodi."_daftar_hadir_pemberkasan_excel.xls");

            $this->load->view('baak/rekap_ctk_daftar_hadir_pesertapmbrks2022_exl',$data);

            // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }else{
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.jk' => $jk,
            'tbl_catar_2023.id_tgl_seleksi' => $tgl_pel,    
            'tbl_catar_2023.gelombang' => $gelombang,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
            $data['bagian'] = $bagian;
             //excel

            header("Content-type: application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=".$nameprodi."_daftar_hadir_pemberkasan_excel.xls");

            $this->load->view('baak/rekap_ctk_daftar_hadir_pesertapmbrks2022_exl',$data);
             // $this->load->view('baak/rekap_ctk_daftar_hadir_peserta2022',$data);
        }

    }  
    function rekap_exl_daftarhadirpeserta(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
        $jurusan = $this->jurusan($prodi);;
        $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;

 
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_daftar_hadir_excel.xls");

        $this->load->view('baak/rekap_ctk',$data);   
    }
     function rekap_exl_daftarpeserta2022(){
        $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $gelombang = $this->input->post('gelombang');

        $nameprodi = $this->prodi($prodi);

        if ($gelombang == null) {
            # code...
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;

             //excel
            header("Content-type:application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=".$nameprodi."_peserta_excel.xls");

            $this->load->view('baak/rekap_ctk_peserta_exl2022',$data);
           
        }else{
            $where = array(
            'tbl_catar_2023.prodi' => $prodi,
            'tbl_catar_2023.kelas' => $kelas,
            'tbl_catar_2023.gelombang' => $gelombang,                
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['kelas'] = $kelas;
            $data['prodi'] = $nameprodi;
              //excel
            header("Content-type:application/vnd.ms-excel");
            header("Content-Disposition: attachment; filename=".$nameprodi."_peserta_excel.xls");

            $this->load->view('baak/rekap_ctk_peserta_exl2022',$data);
        }

    }                             
     function rekap_exl_daftarpeserta(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        ////echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;

        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_peserta_excel.xls");

        $this->load->view('baak/rekap_ctk_peserta_exl',$data);   
    }                 
    function rekap_exl_targas(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;


        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_targas_excel.xls");

        $this->load->view('baak/rekap_ctk_targas_exl',$data);   
    }  
    function rekap_exl_tkd(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;

 
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_tkd_excel.xls");

        $this->load->view('baak/rekap_ctk_tkd_exl',$data);   
    } 
    function rekap_exl_samapta(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;


        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_samapta_excel.xls");

        $this->load->view('baak/rekap_ctk_samapta_exl',$data);   
    }      
    function rekap_exl_wawancara(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_wawancara_excel.xls");

        $this->load->view('baak/rekap_ctk_wawancara_exl',$data);   
    } 
    function rekap_exl_psykotest(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_psykotest_excel.xls");

        $this->load->view('baak/rekap_ctk_psykotest_exl',$data);   
    }   
    function rekap_exl_kesehatan(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;


        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_kesehatan_excel.xls");

        $this->load->view('baak/rekap_ctk_kesehatan_exl',$data);   
    }  
    function rekap_exl_pantukir(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_pantukir_excel.xls");

        $this->load->view('baak/rekap_ctk_pantukir_exl',$data);   
    }   
    function rekap_exl_seleksi(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
         $ta=$this->m_registrasi->get_data_ta($where2);
        $data['ta'] = $ta;
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'tbl_catar_2021.prodi' => $prodi,
            'tbl_catar_2021.gelombang' => $gelombang,
            'tbl_catar_2021.jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_seleksi_excel.xls");

        $this->load->view('baak/rekap_ctk_seleksi_exl',$data);   
    }               
     


    //-----------------------------------PMDK--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    function tambah_pmdk(){
        $data['jurusan'] = $this->m_registrasi->get_data_all('tbl_jurusan')->result();
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/tpmdk',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     function pmdk_kpn() {
        $where2= array(
            'id_gelombang' => '1'  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
            'prodi' => "1",
            'gelombang' => $gelombang
        );
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/pmdk_peserta',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     function pmdk_nautika() {
        $where2= array(
            'id_gelombang' => '1'  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
            'prodi' => "3",
            'gelombang' => $gelombang
        );
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/pmdk_peserta',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     function pmdk_teknika() {
        $where2= array(
            'id_gelombang' => '1'  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
            'prodi' => "2",
            'gelombang' => $gelombang
        );
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/pmdk_peserta',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     function pmdk_manajemen() {
        $where2= array(
            'id_gelombang' => '1'  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
            'prodi' => "4",
            'gelombang' => $gelombang
        );
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/pmdk_peserta',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function insert_pmdk()
    {
        # code...
        $nama = $this->input->post('nama');
        // $tl = $this->input->post('tl');
        // $tgl_l = $this->input->post('tgl_l');
        // $agama = $this->input->post('agama');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        // $ktkb = $this->input->post('ktkb');
        // $provinsi = $this->input->post('provinsi');
        // $telp = $this->input->post('telp');
        $kategori_sek = $this->input->post('kategori_sek');
        $prodi_lama = $this->input->post('prodi_lama');
        // $thn_lulus = $this->input->post('thn_lulus');
        $asek = $this->input->post('asek');
        // $alamat_sek = $this->input->post('alamat_sek');
        // $nama_a = $this->input->post('nama_a');
        // $nama_i = $this->input->post('nama_i');
        // $alamat_ortu = $this->input->post('alamat_ortu');
        // $telp_ortu = $this->input->post('telp_ortu');
        $prodi = $this->input->post('prodi');
        $gelombang = $this->input->post('gelombang');
        $where2= array(
            'id_gelombang' => '1'  
        );
        $thn_pel=$this->m_registrasi->get_data_tahun($where2); 
        $data = array(
            'nama' => $nama,
            // 'tl' => $tl,
            // 'tgl_l' => $tgl_l,
            // 'agama' => $agama,
            'jk' => $jk,
            'alamat'=> $alamat,
            // 'ktkb' => $ktkb,
            // 'provinsi' => $provinsi,
            // 'telp' => $telp,
            'kategori_sek' => $kategori_sek,
            'prodi_lama' => $prodi_lama,
            // 'thn_lulus' => $thn_lulus,
            'asek' => $asek,
            // 'alamat_sek' => $alamat_sek,
            // 'nama_a' => $nama_a,
            // 'nama_i' => $nama_i,
            // 'alamat_ortu' => $alamat_ortu,
            // 'telp_ortu' => $telp_ortu,
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'thn_pel' => $thn_pel
            );
        $this->m_registrasi->input_data($data,'tbl_catar_2021_pmdk');
        $lastid = $this->db->insert_id();
        $where = array('no' => $lastid);
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2021_pmdk')->result();
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
    function editpmdk($id)
    {
        # code...
        $where = array(
            'no' => $id       
        );
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2021_pmdk')->result();
        foreach ($data['catar'] as $c) {
            # code...
            $jurusan = $this->jurusan($c->prodi);
        }
        $data['prodi'] = $jurusan;
        // $data['validasi'] = $this->m_registrasi->get_data($where,'tbl_catar_2021_validasi')->result();
        $this->load->view('baak/header');
        $this->load->view('baak/epmdk',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function edit_pmdk()
    {
        # code...
        $no = $this->input->post('no');
        $nama = $this->input->post('nama');
        // $tl = $this->input->post('tl');
        // $tgl_l = $this->input->post('tgl_l');
        // $agama = $this->input->post('agama');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        // $ktkb = $this->input->post('ktkb');
        // $provinsi = $this->input->post('provinsi');
        // $telp = $this->input->post('telp');
        $kategori_sek = $this->input->post('kategori_sek');
        $prodi_lama = $this->input->post('prodi_lama');
        // $thn_lulus = $this->input->post('thn_lulus');
        $asek = $this->input->post('asek');
        // $alamat_sek = $this->input->post('alamat_sek');
        // $nama_a = $this->input->post('nama_a');
        // $nama_i = $this->input->post('nama_i');
        // $alamat_ortu = $this->input->post('alamat_ortu');
        // $telp_ortu = $this->input->post('telp_ortu');
        $prodi = $this->input->post('prodi');
        $gelombang = $this->input->post('gelombang');
        $where2= array(
            'id_gelombang' => '1'  
        );
        $thn_pel=$this->m_registrasi->get_data_tahun($where2); 
        $data = array(
            'nama' => $nama,
            // 'tl' => $tl,
            // 'tgl_l' => $tgl_l,
            // 'agama' => $agama,
            'jk' => $jk,
            'alamat'=> $alamat,
            // 'ktkb' => $ktkb,
            // 'provinsi' => $provinsi,
            // 'telp' => $telp,
            'kategori_sek' => $kategori_sek,
            'prodi_lama' => $prodi_lama,
            // 'thn_lulus' => $thn_lulus,
            'asek' => $asek,
            // 'alamat_sek' => $alamat_sek,
            // 'nama_a' => $nama_a,
            // 'nama_i' => $nama_i,
            // 'alamat_ortu' => $alamat_ortu,
            // 'telp_ortu' => $telp_ortu,
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'thn_pel' => $thn_pel
            );
        $where= array(
                'no' => $no  
            );
        $this->m_registrasi->update_data($where,$data,'tbl_catar_2021_pmdk');
        // $this->m_registrasi->input_data($data,'tbl_catar_2021_pmdk');
        // $lastid = $this->db->insert_id();
        // $where = array('no' => $lastid);
        // $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2021_pmdk')->result();
        // $this->load->view('cetakReg',$data);

        // //pdf
        // $pdfFilePath="cetak.pdf";
        // $html=$this->load->view('cetakReg',$data, TRUE);
        // $pdf = $this->m_pdf->load();
 
        // $pdf->AddPage('P');
        // $pdf->WriteHTML($html);
        // $pdf->Output($pdfFilePath, "D");
        // exit();
        redirect("baak");
    }
    function deletepmdk($id){              
        $where = array(
            'no' => $id       
        );
        $this->m_registrasi->delete_data($where,'tbl_catar_2021_pmdk');       
        redirect("baak");
        // $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
        //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        //         <h4><i class="icon fa fa-check"></i> Alert!</h4>
        //        Delete Kriteria Berhasil.
        //       </div>');
    }
    function rekap_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_pmdk');
        $this->load->view('baak/rekap_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     function rekap_peserta_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_peserta_pmdk');
        $this->load->view('baak/rekap_peserta_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
     function rekap_targas_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_targas_pmdk');
        $this->load->view('baak/rekap_targas_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_tkd_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_tkd_pmdk');
        $this->load->view('baak/rekap_tkd_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_psykotest_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_psykotest_pmdk');
        $this->load->view('baak/rekap_psykotest_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_pantukir_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_pantukir_pmdk');
        $this->load->view('baak/rekap_pantukir_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_seleksi_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_seleksi_pmdk');
        $this->load->view('baak/rekap_seleksi_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_kesehatan_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_kesehatan_pmdk');
        $this->load->view('baak/rekap_kesehatan_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_samapta_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_samapta_pmdk');
        $this->load->view('baak/rekap_samapta_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_wawancara_pmdk(){
        $this->load->view('baak/header_pmdk');
        $this->load->view('baak/rekap_wawancara_pmdk');
        $this->load->view('baak/rekap_wawancara_exl_pmdk');
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    function rekap_pdf_daftarhadirpeserta_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;
       

        //pdf
        $pdfFilePath="daftar_hadir_catar_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->load();
        
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }   
    function rekap_pdf_daftarpeserta_pmdk(){
       $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
       
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
       $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;
        
       
        //pdf
        $pdfFilePath="daftar_catar_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_peserta_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('P');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }  
     function rekap_pdf_targas_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;
        
        //pdf
        $pdfFilePath="daftar_targas_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_targas_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }        
     function rekap_pdf_tkd_pmdk(){
       $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
       
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;
        
    
        //pdf
        $pdfFilePath="daftar_tkd_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_tkd_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }      
     function rekap_pdf_psykotest_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
       
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;
        
      
        //pdf
        $pdfFilePath="daftar_psykotest_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_psykotest_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }     
     function rekap_pdf_pantukir_pmdk(){
       $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
       $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;
        

        //pdf
        $pdfFilePath="daftar_pantukir_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_pantukir_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }  
     function rekap_pdf_seleksi_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );

        $jurusan = $this->jurusan($prodi);;
        $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;
        
    
        //pdf
        $pdfFilePath="daftar_seleksi_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_seleksi_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->loadf();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }               
     function rekap_pdf_kesehatan_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;
        
        //pdf
        $pdfFilePath="daftar_kesehatan_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_kesehatan_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->loadf();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }         
     function rekap_pdf_samapta_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;
    

        //pdf
        $pdfFilePath="daftar_samapta_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_samapta_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->loadf();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }        
     function rekap_pdf_wawancara_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
         $tgl = $this->input->post('tgl');
         $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
       
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

        //pdf
        $pdfFilePath="daftar_wawancara_".$jurusan."_pmdk.pdf";
        $html=$this->load->view('baak/rekap_ctk_wawancara_pmdk',$data, TRUE);
        $pdf = $this->m_pdf->loadf();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "D");
        exit();
    
    }
    function rekap_exl_daftarhadirpeserta_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_daftar_hadir_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_exl_pmdk',$data);   
    }                   
     function rekap_exl_daftarpeserta_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
       
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
       $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

   
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_peserta_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_peserta_exl_pmdk',$data);   
    }                 
    function rekap_exl_targas_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_targas_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_targas_exl_pmdk',$data);   
    }  
    function rekap_exl_tkd_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        
 $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_tkd_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_tkd_exl_pmdk',$data);   
    } 
    function rekap_exl_samapta_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        $jurusan = $this->jurusan($prodi);;
        $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

       
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_samapta_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_samapta_exl_pmdk',$data);   
    }      
    function rekap_exl_wawancara_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        $jurusan = $this->jurusan($prodi);;
        $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_wawancara_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_wawancara_exl_pmdk',$data);   
    } 
    function rekap_exl_psykotest_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        $jurusan = $this->jurusan($prodi);;
        $data['jurusan'] = $jurusan;
       $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

    
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_psykotest_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_psykotest_exl_pmdk',$data);   
    }   
    function rekap_exl_kesehatan_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        $jurusan = $this->jurusan($prodi);;
        $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_kesehatan_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_kesehatan_exl_pmdk',$data);   
    }  
    function rekap_exl_pantukir_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        $jurusan = $this->jurusan($prodi);;
        $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

    
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_pantukir_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_pantukir_exl_pmdk',$data);   
    }   
    function rekap_exl_seleksi_pmdk(){
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $prodi = $this->input->post('prodi');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $date = str_replace('/', '-', $tgl);
        //echo date('Y-m-d', strtotime($date));

        $where = array(
            'prodi' => $prodi,
            'gelombang' => $gelombang,
            'jk' => $jk
        );
        $jurusan = $this->jurusan($prodi);;
 $data['jurusan'] = $jurusan;
        $data['catar'] = $this->m_registrasi->get_data($where,"tbl_catar_2021_pmdk")->result();
        $data['prodi'] = $prodi;
        $data['jk'] = $jk;
        $data['tgl'] = $date;
        $ta=$this->m_registrasi->get_data_gelombang($where2);
        $data['ta'] = $ta;

    
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=".$jurusan."_seleksi_excel_pmdk.xls");

        $this->load->view('baak/rekap_ctk_seleksi_exl_pmdk',$data);   
    }


    ////////////////////////////////////////// seleksi 2024 /////////////////////////////////////////////////////
    public function getdataeditseleksigdr1($no)
    {
        # code...
        // Ambil data berdasarkan ID dari model Anda
        $data = $this->m_registrasi->get_data_edit_gdr1($no); // Gantilah 'get_data_by_id' dengan metode yang sesuai dalam model Anda

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
        $this->load->view('baak/header');
        $this->load->view('baak/seleksigd',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/seleksigd_js');
    }
     public function getdataeditseleksi($no)
    {
        # code...
        // Ambil data berdasarkan ID dari model Anda
        $data = $this->m_registrasi->get_data_edit_gdr1($no); // Gantilah 'get_data_by_id' dengan metode yang sesuai dalam model Anda

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
        $this->load->view('baak/header');
        $this->load->view('baak/seleksi',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/seleksi_js');
    }
    public function seleksi2()
    {
        # code...
        // $data['catar'] = $this->m_registrasi->get_data_all('')->result();
        $this->load->view('baak/header');
        $this->load->view('baak/seleksi',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/seleksi_js');
    }
     function prosesseleksi($id)
    {
        # code...
        $where = array(
            'tbl_catar_2024.no' => $id       
        );
        $data['catar'] = $this->m_registrasi->get_data_prosesseleksi2024($where)->result();

        $this->load->view('baak/header');
        $this->load->view('baak/prosesseleksi',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/prosesseleksi_js');
    }
     function prosesseleksip()
    {
        # code...
        $id_seleksi = $this->input->post('id_seleksi');

        $no = $this->input->post('no');
        $gelombang = $this->input->post('gelombang');
        $prodi = $this->input->post('prodi');
        $thn_pel=$this->input->post('thn_pel');
        $hasil=$this->input->post('hasil');


        $data = array(
            'no' => $no,
            'gelombang' => $gelombang,
            'prodi' => $prodi,
            'tgl_byr' => $tgl_byr,
            'thn_pel' => $thn_pel,
            'hasil' => $hasil
            );

        // $this->m_registrasi->update_data($where,$data,'tbl_catar_2021_validasi');
        $this->m_registrasi->input_data($data,'tbl_catar_hasil_seleksi_2024');

        $where = array(
            'id_seleksi' => $id_seleksi       
        );
        $data = array(
            'cek' => 'sudah',
            );
        $this->m_registrasi->update_data($where,$data,'tbl_seleksi_20242');

        redirect("baak/home");

    }

    ////////////////////////////////////////// .seleksi 2024 /////////////////////////////////////////////////////
    ///////////////////////////////////////// Referral 2024 /////////////////////////////////////////////////////
    public function referral()
    {
        # code...
        $data['ref'] = $this->m_registrasi->get_data_all('tbl_ref')->result();
        $this->load->view('baak/header');
        $this->load->view('baak/referral',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/referral_js');
    }
      public function getdataeditreferral($no)
    {
        # code...
        // Ambil data berdasarkan ID dari model Anda
        $data = $this->m_registrasi->get_data_edit_ref($no); // Gantilah 'get_data_by_id' dengan metode yang sesuai dalam model Anda

        // Konversi data ke format JSON dan kirimkan ke view
        echo json_encode($data);
    }
    public function referral_add()
    {
        # code...
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $referral = $this->input->post('referral');
        $password = $this->input->post('password');
        $aktif = $this->input->post('aktif');
        $tipe = $this->input->post('tipe');

        $where = "ref LIKE '%" . $referral . "%'";

        $cek = $this->m_registrasi->get_data($where, 'tbl_ref');

        if ($cek > 0) {
            # code...
             redirect("baak/referral?pesan=error");
        }else{
             $this->m_registrasi->input_data($data,'tbl_ref');
             redirect("baak/referral?pesan=success");
        }

    }


    ///////////////////////////////////////// .Referral 2024 /////////////////////////////////////////////////////
    ///////////////////// notifikasi seleksi /////////////////////////////
     public function getNotifikasi() {

        $data['notifikasi'] = $this->m_registrasi->getNotifikasiseleksi();
         // Ubah hasil ke format JSON
        $json_data = json_encode($data['notifikasi']);

        // Tampilkan data JSON
        echo $json_data;
    }
    ///////////////////// .notifikasi pembayaran ////////////////////////////
    ///////////////////////////////////////////////////////summary 2024///////////////////////////////////////////
     public function getnamaprovinsi_2024($id)
    {
        # code...
        $where = array('id_wil' => $id);
        $get = $this->m_registrasi->get_data($where,'tbl_propinsi')->result();
        foreach ($get as $key) {
            # code...
            $nama = $key->nm_wil;
        }
        return $nama;
    }
      public function getnamakabkota_2024($id)
    {
        # code...
        $where = array('id_wil' => $id);
        $get = $this->m_registrasi->get_data($where,'tbl_kabkota')->result();
        foreach ($get as $key) {
            # code...
            $nama = $key->nm_wil;
        }
        return $nama;
    }
     public function get_summary_kabkota_2024()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_kabkota_2024()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2024_kabkota',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }
     public function get_summary_prov_2024()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2024()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2024_prov',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }
     public function get_summary_sekolah_2024()
    {
        # code...
        $data['bau'] = $this;

         //get sma
        $w_d3 = array('tbl_catar_2024.kategori_sek' => 'D3');
        $data['stat_d3'] = $this->m_registrasi->get_data_statistic_sekolah_2024($w_d3)->result();

        //get sma
        $w_sma = array('tbl_catar_2024.kategori_sek' => 'SMA');
        $data['stat_sma'] = $this->m_registrasi->get_data_statistic_sekolah_2024($w_sma)->result();

        //get smk
        $w_smk = array('tbl_catar_2024.kategori_sek' => 'SMK');
        $data['stat_smk'] = $this->m_registrasi->get_data_statistic_sekolah_2024($w_smk)->result();

        //get ma
        $w_ma = array('tbl_catar_2024.kategori_sek' => 'MA');
        $data['stat_ma'] = $this->m_registrasi->get_data_statistic_sekolah_2024($w_ma)->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2024_sekolah',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }

     public function get_summary_sumber_2024_send($sumber)
    {
        # code...
        $where = array('informasi' => $sumber);
        // get data all
        $data= $this->m_registrasi->get_data_statistic_sumber_all_2024()->result();
        foreach ($data as $key) {
            # code...
            $all = $key->informasi;
        }
        //get data where
        $data2= $this->m_registrasi->get_data_statistic_sumber_where_2024($where)->result();
        foreach ($data2 as $key) {
            # code...
            $whr = $key->informasi;
        }
        $send = ($whr/$all)*100;
        return $send;

    }
    public function get_summary_sumber_2024()
    {
        # code...
        $data['bau'] = $this;
        $this->load->view('baak/header');
        $this->load->view('baak/summary_2024_sumber',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/summary_2024_sumber_js',$data);

    }
            ///////////////////////////////////////////////////////summary 2023///////////////////////////////////////////
     public function getnamaprovinsi_2023($id)
    {
        # code...
        $where = array('id_wil' => $id);
        $get = $this->m_registrasi->get_data($where,'tbl_propinsi')->result();
        foreach ($get as $key) {
            # code...
            $nama = $key->nm_wil;
        }
        return $nama;
    }
      public function getnamakabkota_2023($id)
    {
        # code...
        $where = array('id_wil' => $id);
        $get = $this->m_registrasi->get_data($where,'tbl_kabkota')->result();
        foreach ($get as $key) {
            # code...
            $nama = $key->nm_wil;
        }
        return $nama;
    }
     public function get_summary_kabkota_2023()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_kabkota_2023()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2023_kabkota',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }
     public function get_summary_prov_2023()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2023()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2023_prov',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }
     public function get_summary_sekolah_2023()
    {
        # code...
        $data['bau'] = $this;

         //get sma
        $w_d3 = array('tbl_catar_2023.kategori_sek' => 'D3');
        $data['stat_d3'] = $this->m_registrasi->get_data_statistic_sekolah_2023($w_d3)->result();

        //get sma
        $w_sma = array('tbl_catar_2023.kategori_sek' => 'SMA');
        $data['stat_sma'] = $this->m_registrasi->get_data_statistic_sekolah_2023($w_sma)->result();

        //get smk
        $w_smk = array('tbl_catar_2023.kategori_sek' => 'SMK');
        $data['stat_smk'] = $this->m_registrasi->get_data_statistic_sekolah_2023($w_smk)->result();

        //get ma
        $w_ma = array('tbl_catar_2023.kategori_sek' => 'MA');
        $data['stat_ma'] = $this->m_registrasi->get_data_statistic_sekolah_2023($w_ma)->result();

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2023_sekolah',$data);
        $this->load->view('bau/footer');
        $this->load->view('baak/footer_js');

    }

     public function get_summary_sumber_2023_send($sumber)
    {
        # code...
        $where = array('informasi' => $sumber);
        // get data all
        $data= $this->m_registrasi->get_data_statistic_sumber_all_2023()->result();
        foreach ($data as $key) {
            # code...
            $all = $key->informasi;
        }
        //get data where
        $data2= $this->m_registrasi->get_data_statistic_sumber_where_2023($where)->result();
        foreach ($data2 as $key) {
            # code...
            $whr = $key->informasi;
        }
        $send = ($whr/$all)*100;
        return $send;

    }
    public function get_summary_sumber_2023()
    {
        # code...
        $data['bau'] = $this;
        $this->load->view('baak/header');
        $this->load->view('baak/summary_2023_sumber',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/summary_2023_sumber_js',$data);

    }

        ///////////////////////////////////////////////////////summary 2022///////////////////////////////////////////
     public function getnamaprovinsi_2022($id)
    {
        # code...
        $where = array('id_wil' => $id);
        $get = $this->m_registrasi->get_data($where,'tbl_propinsi')->result();
        foreach ($get as $key) {
            # code...
            $nama = $key->nm_wil;
        }
        return $nama;
    }
      public function getnamakabkota_2022($id)
    {
        # code...
        $where = array('id_wil' => $id);
        $get = $this->m_registrasi->get_data($where,'tbl_kabkota')->result();
        foreach ($get as $key) {
            # code...
            $nama = $key->nm_wil;
        }
        return $nama;
    }
     public function get_summary_kabkota_2022()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_kabkota_2022()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2022_kabkota',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }
     public function get_summary_prov_2022()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2022()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2022_prov',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }
     public function get_summary_sekolah_2022()
    {
        # code...
        $data['bau'] = $this;

         //get sma
        $w_d3 = array('tbl_catar_2022.kategori_sek' => 'D3');
        $data['stat_d3'] = $this->m_registrasi->get_data_statistic_sekolah_2022($w_d3)->result();

        //get sma
        $w_sma = array('tbl_catar_2022.kategori_sek' => 'SMA');
        $data['stat_sma'] = $this->m_registrasi->get_data_statistic_sekolah_2022($w_sma)->result();

        //get smk
        $w_smk = array('tbl_catar_2022.kategori_sek' => 'SMK');
        $data['stat_smk'] = $this->m_registrasi->get_data_statistic_sekolah_2022($w_smk)->result();

        //get ma
        $w_ma = array('tbl_catar_2022.kategori_sek' => 'MA');
        $data['stat_ma'] = $this->m_registrasi->get_data_statistic_sekolah_2022($w_ma)->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2022_sekolah',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }

     public function get_summary_sumber_2022_send($sumber)
    {
        # code...
        $where = array('informasi' => $sumber);
        // get data all
        $data= $this->m_registrasi->get_data_statistic_sumber_all_2022()->result();
        foreach ($data as $key) {
            # code...
            $all = $key->informasi;
        }
        //get data where
        $data2= $this->m_registrasi->get_data_statistic_sumber_where_2022($where)->result();
        foreach ($data2 as $key) {
            # code...
            $whr = $key->informasi;
        }
        $send = ($whr/$all)*100;
        return $send;

    }
    public function get_summary_sumber_2022()
    {
        # code...
        $data['bau'] = $this;
        $this->load->view('baak/header');
        $this->load->view('baak/summary_2022_sumber',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/summary_2022_sumber_js',$data);

    }

    ///////////////////////////////////////////////////////summary 2021///////////////////////////////////////////
    public function getnamaprovinsi_2021($id)
    {
        # code...
        $where = array('id_provinsi' => $id);
        $get = $this->m_registrasi->get_data($where,'tbl_provinsi')->result();
        foreach ($get as $key) {
            # code...
            $nama = $key->provinsi;
        }
        return $nama;
    }
    public function get_summary_prov_2021()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2021()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2021_prov',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }
    public function get_summary_prov_detail_2021($id)
    {
        # code...
        $where = array('provinsi' => $id);
        $data['stat'] = $this->m_registrasi->get_data_join_where_2021($where)->result();
        $this->load->view('baak/header');
        $this->load->view('baak/summary_2021_detail_prov',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
    }
    public function get_summary_ktkb_2021()
    {
        # code...
        // $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_ktkb_2021()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2021_ktkb',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }
    public function get_summary_sekolah_2021()
    {
        # code...
        $data['bau'] = $this;
        //get sma
        $w_sma = array('tbl_catar_2021.kategori_sek' => 'SMA');
        $data['stat_sma'] = $this->m_registrasi->get_data_statistic_sekolah_2021($w_sma)->result();

        //get smk
        $w_smk = array('tbl_catar_2021.kategori_sek' => 'SMK');
        $data['stat_smk'] = $this->m_registrasi->get_data_statistic_sekolah_2021($w_smk)->result();

        //get ma
        $w_ma = array('tbl_catar_2021.kategori_sek' => 'MA');
        $data['stat_ma'] = $this->m_registrasi->get_data_statistic_sekolah_2021($w_ma)->result();

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2021_sekolah',$data);
        $this->load->view('bau/footer');
        $this->load->view('baak/footer_js');

    }
    public function get_summary_sumber_2021_send($sumber)
    {
        # code...
        $where = array('informasi' => $sumber);
        // get data all
        $data= $this->m_registrasi->get_data_statistic_sumber_all_2021()->result();
        foreach ($data as $key) {
            # code...
            $all = $key->informasi;
        }
        //get data where
        $data2= $this->m_registrasi->get_data_statistic_sumber_where_2021($where)->result();
        foreach ($data2 as $key) {
            # code...
            $whr = $key->informasi;
        }
        $send = ($whr/$all)*100;
        return $send;

    }
    public function get_summary_sumber_2021()
    {
        # code...
        $data['bau'] = $this;
        $this->load->view('baak/header');
        $this->load->view('baak/summary_2021_sumber',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/summary_2021_sumber_js',$data);

    }

    /////////////////////////////////////////////////summary 2020///////////////////////////////////////////
    public function get_summary_sekolah_2020()
    {
        # code...
        $data['bau'] = $this;
        //get sma
        $w_sma = array('tbl_catar.kategori_sek' => 'SMA');
        $data['stat_sma'] = $this->m_registrasi->get_data_statistic_sekolah_2020($w_sma)->result();

        //get smk
        $w_smk = array('tbl_catar.kategori_sek' => 'SMK');
        $data['stat_smk'] = $this->m_registrasi->get_data_statistic_sekolah_2020($w_smk)->result();

        //get ma
        $w_ma = array('tbl_catar.kategori_sek' => 'MA');
        $data['stat_ma'] = $this->m_registrasi->get_data_statistic_sekolah_2020($w_ma)->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2020_sekolah',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');

    }
     public function get_summary_sumber_2020_send($sumber)
    {
        # code...
        $where = array('informasi' => $sumber);
        // get data all
        $data= $this->m_registrasi->get_data_statistic_sumber_all_2020()->result();
        foreach ($data as $key) {
            # code...
            $all = $key->informasi;
        }
        //get data where
        $data2= $this->m_registrasi->get_data_statistic_sumber_where_2020($where)->result();
        foreach ($data2 as $key) {
            # code...
            $whr = $key->informasi;
        }
        $send = ($whr/$all)*100;
        return $send;

    }
    public function get_summary_sumber_2020()
    {
        # code...
        $data['bau'] = $this;
        $this->load->view('baak/header');
        $this->load->view('baak/summary_2020_sumber',$data);
        $this->load->view('baak/footer');
        $this->load->view('baak/footer_js');
        $this->load->view('baak/summary_2020_sumber_js',$data);

    }

}
  

/* End of file bau.php */
/* Location: ./application/controllers/bau.php */