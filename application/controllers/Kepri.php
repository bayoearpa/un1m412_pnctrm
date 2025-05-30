<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kepri extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url().'welcome?pesan=belumlogin');
		}
        $this->load->model('m_registrasi');
        $this->load->helper('url');
        $this->load->library('m_pdf');
    }
    function index() {
        $where2= array(
            'id_gelombang' => '1',  
        );
        $gelombang=$this->m_registrasi->get_data_gelombang($where2);
        $where = array(
            'gelombang' => $gelombang,
            'provinsi' => '310000'      
        );
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
        // $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2022')->result();
        // $data['catar'] = $this->m_registrasi->get_data_all('tbl_catar_2021')->result(); 
        $this->load->view('kepri/header');
        $this->load->view('kepri/index',$data);
        $this->load->view('kepri/footer');
    }
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'administrasi?pesan=logout');
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
    function validasi($id)
    {
        # code...
        $where = array(
            'tbl_catar_2023.no' => $id       
        );
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
        // $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();

        // $this->db->select('aktif');
        // $this->db->from('tbl_catar_2021_validasi');
        // $this->db->where($where);
        // $data['aktif'] =  $this->db->get()->result()->row('aktif');

        // $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2021')->result();
        $this->load->view('kepri/header');
        $this->load->view('kepri/validasi',$data);
        $this->load->view('kepri/footer');
    }
    function validasia()
    {
        # code...
        $id = $this->input->post('id');
        $no = $this->input->post('no');
        $gelombang = $this->input->post('gelombang');
        $tgl_byr = $this->input->post('tgl_byr');
        $prodi = $this->input->post('prodi');
        $jml_byr = $this->input->post('jml_byr');
        $thn_pel=$this->input->post('thn_pel');

        $cekReg=$this->m_registrasi->get_data(array('prodi'=>$prodi,'gelombang'=>$gelombang),'tbl_catar_validasi_2022')->num_rows();
        $this->db->select_max('no_reg');
        $this->db->where(array('prodi'=>$prodi,'thn_pel'=>$thn_pel));
        $cekReg = $this->db->get('tbl_catar_validasi_2023');
            foreach($cekReg->result() as $row)
        {
            $selNoReg = $row->no_reg;
        }

        $no_reg=$selNoReg+1;
        $aktif="1";
        
        // $where = array(
        //     'val_id' => $id       
        // );
        // $data = array(
        //     'tgl_byr' => $tgl_byr,
        //     'jml_byr' => $jml_byr,
        //     'aktif' => $aktif
        //     );

        $data = array(
            'no' => $no,
            'gelombang' => $gelombang,
            'prodi' => $prodi,
            'no_reg' => $no_reg,
            'tgl_byr' => $tgl_byr,
            'jml_byr' => $jml_byr,
            'aktif' => $aktif,
            'thn_pel' => $thn_pel
            );

        // $this->m_registrasi->update_data($where,$data,'tbl_catar_2021_validasi');
        $this->m_registrasi->input_data($data,'tbl_catar_validasi_2023');
        $lastid = $this->db->insert_id();

        $where = array('val_id' => $lastid);
        $data['validasi'] = $this->m_registrasi->get_data($where,'tbl_catar_validasi_2023')->result();
        $where2 = array('no' => $no);
        $data['catar'] = $this->m_registrasi->get_data($where2,'tbl_catar_2023')->result();

        $this->load->view('kepri/cetak',$data);

    }
    /////////////////////////////////////////////////////// rekap validasi ///////////////////////////////////////
     public function rekap_validasi()
    {
        # code...
        $this->load->view('kepri/header');
        $this->load->view('kepri/rekap_validasi');
        $this->load->view('kepri/footer');
    }
    public function rekap_validasip()
    {
        # code...
        $prodi      = $this->input->post('prodi');
        $gelombang  = $this->input->post('gelombang');
        if ($prodi == 0) {
             # code...
            $where = array(
            'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_2023.provinsi' => '310000'
            // 'prodi'     => $prodi,                 
             );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['label'] = "by Gelombang";
            $this->load->view('kepri/header');
            $this->load->view('kepri/rekap_validasi');
            $this->load->view('kepri/rekap_validasip',$data);
            $this->load->view('kepri/footer');
         }elseif ($gelombang == null) {
             # code...
             $where = array(
            // 'gelombang' => $gelombang,
            'tbl_catar_2023.prodi'     => $prodi,
            'tbl_catar_2023.provinsi' => '310000'                 
             );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['label'] = "by Prodi";
            $this->load->view('kepri/header');
            $this->load->view('kepri/rekap_validasi');
            $this->load->view('kepri/rekap_validasip',$data);
            $this->load->view('kepri/footer');
         }else{
            $where = array(
            'tbl_catar_2023.gelombang' => $gelombang,
            'tbl_catar_2023.prodi'     => $prodi,
            'tbl_catar_2023.provinsi' => '310000'                 
            );
            $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();
            $data['label'] = "by Prodi & Gelombang";
            $this->load->view('kepri/header');
            $this->load->view('kepri/rekap_validasi');
            $this->load->view('kepri/rekap_validasip',$data);
            $this->load->view('kepri/footer');
         } 
        
    }
    public function edit()
    {
        # code...
        $this->load->view('kepri/header');
        $this->load->view('kepri/edit');
        $this->load->view('kepri/footer');
    }
    public function edit_cari()
    {
        # code...
        $data['kepri'] = $this;
        $prodi = $this->input->post('no');
        $where = array(
            'no' => $prodi,                
        );
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2023')->result();
        $data['cek_validasi'] = $this->m_registrasi->get_data($where,'tbl_catar_validasi_2023')->result();            

        $this->load->view('kepri/header');
        $this->load->view('kepri/edit');
        $this->load->view('kepri/edit_cari',$data);
        $this->load->view('kepri/footer');
    }
    public function editp()
    {
        # code...
        $data['kepri'] = $this;
        $where = array(
                'no'   => $this->input->post('no'),
        );
        $prodi = $this->input->post('prodi');
        $data = array(
            'prodi' => $prodi,
        );

        $cek = $this->m_registrasi->get_data($where,'tbl_catar_validasi_2023')->result();
        foreach ($cek as $key) {
            # code...
            $val_id = $key->val_id;
        }
        $where2 = array(
                'val_id'   => $val_id,
        );
        if ($cek > 0) {
            # code...
            $this->m_registrasi->update_data($where2,$data,'tbl_catar_validasi_2023');
            $this->m_registrasi->update_data($where,$data,'tbl_catar_2023');
        }else{
            $this->m_registrasi->update_data($where,$data,'tbl_catar_2023');
        }

        if ($this->db->affected_rows() != 1) {
            $this->session->set_flashdata('error', ' Edit data gagal.');
            $this->load->view('kepri/header');
            $this->load->view('kepri/edit');
            $this->load->view('kepri/footer');
        } else {
            $this->session->set_flashdata('success', ' Edit data berhasil.');
            $this->load->view('kepri/header');
            $this->load->view('kepri/edit');
            $this->load->view('kepri/footer');
        }
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
        $data['kepri'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_kabkota_2023()->result();

        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2023_kabkota',$data);
        $this->load->view('kepri/footer');

    }
     public function get_summary_prov_2023()
    {
        # code...
        $data['kepri'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2023()->result();

        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2023_prov',$data);
        $this->load->view('kepri/footer');

    }
     public function get_summary_sekolah_2023()
    {
        # code...
        $data['kepri'] = $this;

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

        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2023_sekolah',$data);
        $this->load->view('kepri/footer');

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
        $data['kepri'] = $this;
        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2023_sumber',$data);
        $this->load->view('kepri/footer');
        $this->load->view('kepri/summary_2023_sumber_js',$data);

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
        $data['kepri'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_kabkota_2022()->result();

        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2022_kabkota',$data);
        $this->load->view('kepri/footer');

    }
     public function get_summary_prov_2022()
    {
        # code...
        $data['kepri'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2022()->result();

        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2022_prov',$data);
        $this->load->view('kepri/footer');

    }
     public function get_summary_sekolah_2022()
    {
        # code...
        $data['kepri'] = $this;

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

        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2022_sekolah',$data);
        $this->load->view('kepri/footer');

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
        $data['kepri'] = $this;
        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2022_sumber',$data);
        $this->load->view('kepri/footer');
        $this->load->view('kepri/summary_2022_sumber_js',$data);

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
        $data['kepri'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2021()->result();

        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2021_prov',$data);
        $this->load->view('kepri/footer');

    }
    public function get_summary_prov_detail_2021($id)
    {
        # code...
        $where = array('provinsi' => $id);
        $data['stat'] = $this->m_registrasi->get_data_join_where_2021($where)->result();
        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2021_detail_prov',$data);
        $this->load->view('kepri/footer');
    }
     public function get_summary_ktkb_2021()
    {
        # code...
        // $data['kepri'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_ktkb_2021()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2021_ktkb',$data);
        $this->load->view('baak/footer');

    }
    public function get_summary_sekolah_2021()
    {
        # code...
        $data['kepri'] = $this;
        //get sma
        $w_sma = array('tbl_catar_2021.kategori_sek' => 'SMA');
        $data['stat_sma'] = $this->m_registrasi->get_data_statistic_sekolah_2021($w_sma)->result();

        //get smk
        $w_smk = array('tbl_catar_2021.kategori_sek' => 'SMK');
        $data['stat_smk'] = $this->m_registrasi->get_data_statistic_sekolah_2021($w_smk)->result();

        //get ma
        $w_ma = array('tbl_catar_2021.kategori_sek' => 'MA');
        $data['stat_ma'] = $this->m_registrasi->get_data_statistic_sekolah_2021($w_ma)->result();

        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2021_sekolah',$data);
        $this->load->view('kepri/footer');

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
        $data['kepri'] = $this;
        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2021_sumber',$data);
        $this->load->view('kepri/footer');
        $this->load->view('kepri/summary_2021_sumber_js',$data);

    }

    /////////////////////////////////////////////////summary 2020///////////////////////////////////////////
    public function get_summary_sekolah_2020()
    {
        # code...
        $data['kepri'] = $this;
        //get sma
        $w_sma = array('tbl_catar.kategori_sek' => 'SMA');
        $data['stat_sma'] = $this->m_registrasi->get_data_statistic_sekolah_2020($w_sma)->result();

        //get smk
        $w_smk = array('tbl_catar.kategori_sek' => 'SMK');
        $data['stat_smk'] = $this->m_registrasi->get_data_statistic_sekolah_2020($w_smk)->result();

        //get ma
        $w_ma = array('tbl_catar.kategori_sek' => 'MA');
        $data['stat_ma'] = $this->m_registrasi->get_data_statistic_sekolah_2020($w_ma)->result();

        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2020_sekolah',$data);
        $this->load->view('kepri/footer');

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
        $data['kepri'] = $this;
        $this->load->view('kepri/header');
        $this->load->view('kepri/summary_2020_sumber',$data);
        $this->load->view('kepri/footer');
        $this->load->view('kepri/summary_2020_sumber_js',$data);

    }
   
}
        

/* End of file kepri.php */
/* Location: ./application/controllers/kepri.php */