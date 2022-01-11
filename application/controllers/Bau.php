<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bau extends CI_Controller {

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
            'gelombang' => $gelombang       
        );
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2022')->result();
        // $data['catar'] = $this->m_registrasi->get_data_all('tbl_catar_2021')->result(); 
        $this->load->view('bau/header');
        $this->load->view('bau/index',$data);
        $this->load->view('bau/footer');
    }
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'administrasi?pesan=logout');
	}
    function validasi($id)
    {
        # code...
        $where = array(
            'tbl_catar_2022.no' => $id       
        );
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2022')->result();
        // $data['catar'] = $this->m_registrasi->get_data_join_where($where)->result();

        // $this->db->select('aktif');
        // $this->db->from('tbl_catar_2021_validasi');
        // $this->db->where($where);
        // $data['aktif'] =  $this->db->get()->result()->row('aktif');

        // $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2021')->result();
        $this->load->view('bau/header');
        $this->load->view('bau/validasi',$data);
        $this->load->view('bau/footer');
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
        $cekReg = $this->db->get('tbl_catar_validasi_2022');
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
        $this->m_registrasi->input_data($data,'tbl_catar_validasi_2022');
        $lastid = $this->db->insert_id();

        $where = array('val_id' => $lastid);
        $data['validasi'] = $this->m_registrasi->get_data($where,'tbl_catar_validasi_2022')->result();
        $where2 = array('no' => $no);
        $data['catar'] = $this->m_registrasi->get_data($where2,'tbl_catar_2021')->result();

        $this->load->view('bau/cetak',$data);

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

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2022_sekolah',$data);
        $this->load->view('bau/footer');

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
        $this->load->view('bau/header');
        $this->load->view('bau/summary_2022_sumber',$data);
        $this->load->view('bau/footer');
        $this->load->view('bau/summary_2022_sumber_js',$data);

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

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2021_prov',$data);
        $this->load->view('bau/footer');

    }
    public function get_summary_prov_detail_2021($id)
    {
        # code...
        $where = array('provinsi' => $id);
        $data['stat'] = $this->m_registrasi->get_data_join_where_2021($where)->result();
        $this->load->view('bau/header');
        $this->load->view('bau/summary_2021_detail_prov',$data);
        $this->load->view('bau/footer');
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
        $this->load->view('bau/header');
        $this->load->view('bau/summary_2021_sumber',$data);
        $this->load->view('bau/footer');
        $this->load->view('bau/summary_2021_sumber_js',$data);

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

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2020_sekolah',$data);
        $this->load->view('bau/footer');

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
        $this->load->view('bau/header');
        $this->load->view('bau/summary_2020_sumber',$data);
        $this->load->view('bau/footer');
        $this->load->view('bau/summary_2020_sumber_js',$data);

    }
   
}
        

/* End of file bau.php */
/* Location: ./application/controllers/bau.php */