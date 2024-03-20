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
                    $pick = "D4 MPLM";
                break;
                case '10':
                    $pick = "S1 BISNIS DIGITAL";
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
		$data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2024')->result();
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
    public function data_per_periode()
    {
        # code...
        $this->load->view('dekan/header');
        $this->load->view('dekan/data_pendf_per_bln');
        $this->load->view('dekan/footer');
    }
    public function data_per_periodep()
    {
        # code...
        $prodi      = $this->input->post('prodi');
        $gelombang  = $this->input->post('gelombang'); 
        $where = array(
            'gelombang' => $gelombang,
            'prodi'     => $prodi,                 
        );
        $data['catar'] = $this->m_registrasi->get_data($where,'tbl_catar_2024')->result();
        $this->load->view('dekan/header');
        $this->load->view('dekan/data_pendf_per_bln');
        $this->load->view('dekan/data_pendf_per_blnp',$data);
        $this->load->view('dekan/footer');
    }
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

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2024_kabkota',$data);
        $this->load->view('bau/footer');
        $this->load->view('bau/footer_js');

    }
     public function get_summary_prov_2024()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2024()->result();

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2024_prov',$data);
        $this->load->view('bau/footer');
        $this->load->view('bau/footer_js');

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

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2024_sekolah',$data);
        $this->load->view('bau/footer');
        $this->load->view('bau/footer_js');

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
        $this->load->view('bau/header');
        $this->load->view('bau/summary_2024_sumber',$data);
        $this->load->view('bau/footer');
        $this->load->view('bau/footer_js');
        $this->load->view('bau/summary_2024_sumber_js',$data);

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

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2023_kabkota',$data);
        $this->load->view('bau/footer');

    }
     public function get_summary_prov_2023()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2023()->result();

        $this->load->view('bau/header');
        $this->load->view('bau/summary_2023_prov',$data);
        $this->load->view('bau/footer');

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
        $this->load->view('bau/header');
        $this->load->view('bau/summary_2023_sumber',$data);
        $this->load->view('bau/footer');
        $this->load->view('bau/summary_2023_sumber_js',$data);

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

        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2022_kabkota',$data);
        $this->load->view('dekan/footer');

    }
     public function get_summary_prov_2022()
    {
        # code...
        $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_prov_2022()->result();

        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2022_prov',$data);
        $this->load->view('dekan/footer');

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

        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2022_sekolah',$data);
        $this->load->view('dekan/footer');

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
        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2022_sumber',$data);
        $this->load->view('dekan/footer');
        $this->load->view('dekan/summary_2022_sumber_js',$data);

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

        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2021_prov',$data);
        $this->load->view('dekan/footer');

    }
    public function get_summary_prov_detail_2021($id)
    {
        # code...
        $where = array('provinsi' => $id);
        $data['stat'] = $this->m_registrasi->get_data_join_where_2021($where)->result();
        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2021_detail_prov',$data);
        $this->load->view('dekan/footer');
    }
     public function get_summary_ktkb_2021()
    {
        # code...
        // $data['bau'] = $this;
        $data['stat'] = $this->m_registrasi->get_data_statistic_ktkb_2021()->result();

        $this->load->view('baak/header');
        $this->load->view('baak/summary_2021_ktkb',$data);
        $this->load->view('baak/footer');

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

        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2021_sekolah',$data);
        $this->load->view('dekan/footer');

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
        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2021_sumber',$data);
        $this->load->view('dekan/footer');
        $this->load->view('dekan/summary_2021_sumber_js',$data);

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

        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2020_sekolah',$data);
        $this->load->view('dekan/footer');

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
        $this->load->view('dekan/header');
        $this->load->view('dekan/summary_2020_sumber',$data);
        $this->load->view('dekan/footer');
        $this->load->view('dekan/summary_2020_sumber_js',$data);

    }


}

/* End of file dekan.php */
/* Location: ./application/controllers/dekan.php */