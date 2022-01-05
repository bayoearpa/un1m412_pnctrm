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
            'tbl_catar_2021.no' => $id       
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
    
   
}
        

/* End of file bau.php */
/* Location: ./application/controllers/bau.php */