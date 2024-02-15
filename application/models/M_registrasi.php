<?php 
/**
* 
*/
class m_registrasi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function get_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function get_data_all($table){
		return $this->db->get($table);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function get_data_gelombang($where){		
		   $this->db->select('gelombang');
		   $this->db->from('tbl_gelombang');
	       $this->db->where($where);
	return $this->db->get()->row('gelombang');

	}
	function get_data_tahun($where){		
		   $this->db->select('tahun');
		   $this->db->from('tbl_gelombang');
	       $this->db->where($where);
	return $this->db->get()->row('tahun');

	}
	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function get_kabkota($id){
        $hasil=$this->db->query("SELECT * FROM tbl_kabkota WHERE id_induk_wil='$id'");
        return $hasil->result();
    }
	function get_data_ta($where){		
		   $this->db->select('ta');
		   $this->db->from('tbl_gelombang');
	       $this->db->where($where);
	return $this->db->get()->row('ta');
	}
	//////////////////// for login referral ////////////////////////////////////////////////////
	function get_user_by_refcode($table,$where)
	{
    // $this->db->where($where);
    // $query = $this->db->get('tbl_ref');
	$query = $this->db->get_where($table,$where);
    return $query->row_array();
	}
//////////////////// .for login referral ////////////////////////////////////////////////////

	///////////////////////// untuk cek user/////////////////////////////////////////////////
	public function cek_user($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('tbl_catar_2024'); // Gantilah dengan nama tabel yang sesuai

        if ($query->num_rows() > 0) {
            return false; // Username sudah digunakan
        } else {
            return true; // Username tersedia
        }
    }
	///////////////////////// .untuk cek user/////////////////////////////////////////////////
	///////////////////////// cek notifikasi bayar/////////////////////////////////////////////////

    public function getNotifikasi() {
        $this->db->select('c.no as nomor, c.nama, c.prodi, c.bukti_bayar');
        $this->db->from('tbl_catar_2024 c');
        $this->db->join('tbl_catar_validasi_2024 v', 'c.no = v.no', 'left');
        $this->db->where('c.bukti_bayar > 0');
        $this->db->where('v.no IS NULL');
        $this->db->order_by('c.no', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

	///////////////////////// .cek notifikasi bayar/////////////////////////////////////////////////
	///////////////////////// cek notifikasi bayar/////////////////////////////////////////////////

    public function getNotifikasi_du() {
        $this->db->select('c.no as nomor, c.nama, c.prodi, c.bukti_bayar_daful');
        $this->db->from('tbl_catar_2024 c');
        $this->db->join('tbl_catar_daful_2024 v', 'c.no = v.no', 'left');
        $this->db->where('c.bukti_bayar_daful > 0');
        $this->db->where('v.no IS NULL');
        $this->db->order_by('c.no', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

	///////////////////////// .cek notifikasi bayar/////////////////////////////////////////////////
	function get_data_wilayah($where){
		$this->db->select('tbl_kabkota.id_wil AS id_kota,
		tbl_kabkota.nm_wil AS kabkota,
		tbl_kabkota.id_induk_wil AS id_prov_ref,
		tbl_propinsi.id_wil AS id_prov,
		tbl_propinsi.nm_wil AS provinsi');
		$this->db->from('tbl_propinsi');
		$this->db->join('tbl_kabkota','tbl_propinsi.id_wil = tbl_kabkota.id_induk_wil','inner');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;		
	}
	function get_data_tgl_seleksi(){
		$this->db->select('id_tgl_seleksi,tgl_seleksi,aktif');
		$this->db->from('tbl_tgl_seleksi');
		$this->db->order_by('id_tgl_seleksi', "desc");
		$query=$this->db->get();
		return $query;		
	}
	function get_data_join_all(){
		$this->db->select('tbl_catar_2024.no,
		tbl_catar_2024.nama,
		tbl_catar_2024.tl,
		tbl_catar_2024.tgl_l,
		tbl_catar_2024.agama,
		tbl_catar_2024.jk,
		tbl_catar_2024.alamat,
		tbl_catar_2024.ktkb,
		tbl_catar_2024.provinsi,
		tbl_catar_2024.telp,
		tbl_catar_2024.kategori_sek,
		tbl_catar_2024.prodi_lama,
		tbl_catar_2024.thn_lulus,
		tbl_catar_2024.asek,
		tbl_catar_2024.alamat_sek,
		tbl_catar_2024.nama_a,
		tbl_catar_2024.nama_i,
		tbl_catar_2024.alamat_ortu,
		tbl_catar_2024.telp_ortu,
		tbl_catar_2024.prodi,
		tbl_catar_2024.gelombang,
		tbl_catar_validasi_2024.val_id,
		tbl_catar_validasi_2024.no,
		tbl_catar_validasi_2024.gelombang,
		tbl_catar_validasi_2024.tgl_byr,
		tbl_catar_validasi_2024.prodi,
		tbl_catar_validasi_2024.no_reg,
		tbl_catar_validasi_2024.jml_byr,
		tbl_catar_validasi_2024.aktif');
		$this->db->from('tbl_catar_2024');
		$this->db->join('tbl_catar_validasi_2024','tbl_catar_validasi_2024.no = tbl_catar_2024.no','inner');
		$query=$this->db->get();
		return $query;
	}
	function get_data_join_all_seleksigd(){
		$this->db->select('tbl_catar_2024.no,
		tbl_catar_2024.nama,
		tbl_catar_2024.tl,
		tbl_catar_2024.tgl_l,
		tbl_catar_2024.agama,
		tbl_catar_2024.jk,
		tbl_catar_2024.alamat,
		tbl_catar_2024.ktkb,
		tbl_catar_2024.provinsi,
		tbl_catar_2024.telp,
		tbl_catar_2024.kategori_sek,
		tbl_catar_2024.prodi_lama,
		tbl_catar_2024.thn_lulus,
		tbl_catar_2024.asek,
		tbl_catar_2024.alamat_sek,
		tbl_catar_2024.nama_a,
		tbl_catar_2024.nama_i,
		tbl_catar_2024.alamat_ortu,
		tbl_catar_2024.telp_ortu,
		tbl_catar_2024.prodi,
		tbl_catar_2024.gelombang,
		tbl_catar_validasi_2024.val_id,
		tbl_catar_validasi_2024.no,
		tbl_catar_validasi_2024.gelombang,
		tbl_catar_validasi_2024.tgl_byr,
		tbl_catar_validasi_2024.prodi,
		tbl_catar_validasi_2024.no_reg,
		tbl_catar_validasi_2024.jml_byr,
		tbl_catar_validasi_2024.aktif,
		tbl_seleksi_2024.id_link,
		tbl_seleksi_2024.no,
		tbl_seleksi_2024.link_ktp,
		tbl_seleksi_2024.link_ijasah,
		tbl_seleksi_2024.link_rapor,
		tbl_seleksi_2024.link_kesehatan,
		tbl_seleksi_2024.link_supersehat,
		tbl_seleksi_2024.link_prestasi,
		tbl_seleksi_2024.link_video_pushup,
		tbl_seleksi_2024.link_video_shitup,
		tbl_seleksi_2024.link_video_pullup,
		tbl_seleksi_2024.link_video_shuttle');
		
		$this->db->from('tbl_catar_2024');
		$this->db->join('tbl_catar_validasi_2024','tbl_catar_validasi_2024.no = tbl_catar_2024.no','inner');
		$query=$this->db->get();
		return $query;
	}
	function get_data_join_where($where){
		$this->db->select('tbl_catar_2024.no,
		tbl_catar_2024.nama,
		tbl_catar_2024.tl,
		tbl_catar_2024.tgl_l,
		tbl_catar_2024.agama,
		tbl_catar_2024.jk,
		tbl_catar_2024.alamat,
		tbl_catar_2024.ktkb,
		tbl_catar_2024.provinsi,
		tbl_catar_2024.telp,
		tbl_catar_2024.kategori_sek,
		tbl_catar_2024.prodi_lama,
		tbl_catar_2024.thn_lulus,
		tbl_catar_2024.asek,
		tbl_catar_2024.alamat_sek,
		tbl_catar_2024.nama_a,
		tbl_catar_2024.nama_i,
		tbl_catar_2024.alamat_ortu,
		tbl_catar_2024.telp_ortu,
		tbl_catar_2024.prodi,
		tbl_catar_2024.jalur,
		tbl_catar_2024.gelombang,
		tbl_catar_2024.id_tgl_seleksi,
		tbl_catar_validasi_2024.val_id,
		tbl_catar_validasi_2024.no,
		tbl_catar_validasi_2024.gelombang,
		tbl_catar_validasi_2024.tgl_byr,
		tbl_catar_validasi_2024.no_reg,
		tbl_catar_validasi_2024.jml_byr,
		tbl_catar_validasi_2024.aktif as aktif,
		tbl_catar_validasi_2024.thn_pel as thn_pel');
		$this->db->from('tbl_catar_2024');
		$this->db->join('tbl_catar_validasi_2024','tbl_catar_validasi_2024.no = tbl_catar_2024.no','inner');
		$this->db->where($where);
		$this->db->order_by('tbl_catar_validasi_2024.no', "asc");
		$query=$this->db->get();
		return $query;
	}

		function get_data_join_where_tpa($where){
		$this->db->select('tbl_catar_2023.no,
		tbl_catar_2023.nama,
		tbl_catar_2023.tl,
		tbl_catar_2023.tgl_l,
		tbl_catar_2023.agama,
		tbl_catar_2023.jk,
		tbl_catar_2023.alamat,
		tbl_catar_2023.ktkb,
		tbl_catar_2023.provinsi,
		tbl_catar_2023.telp,
		tbl_catar_2023.kategori_sek,
		tbl_catar_2023.prodi_lama,
		tbl_catar_2023.thn_lulus,
		tbl_catar_2023.asek,
		tbl_catar_2023.alamat_sek,
		tbl_catar_2023.nama_a,
		tbl_catar_2023.nama_i,
		tbl_catar_2023.alamat_ortu,
		tbl_catar_2023.telp_ortu,
		tbl_catar_2023.prodi,
		tbl_catar_2023.kelas,
		tbl_catar_2023.gelombang,
		tbl_catar_validasi_2023.val_id,
		tbl_catar_validasi_2023.no,
		tbl_catar_validasi_2023.gelombang,
		tbl_catar_validasi_2023.tgl_byr,
		tbl_catar_validasi_2023.prodi,
		tbl_catar_validasi_2023.no_reg,
		tbl_catar_validasi_2023.jml_byr,
		tbl_catar_validasi_2023.aktif as aktif,
		tbl_catar_validasi_2023.thn_pel as thn_pel,
		tbl_seleksi_tpa.hasil_tpa as hasil_tpa');
		$this->db->from('tbl_catar_2023');
		$this->db->join('tbl_catar_validasi_2023','tbl_catar_validasi_2023.no = tbl_catar_2023.no','inner');
		$this->db->join('tbl_seleksi_tpa','tbl_catar_validasi_2023.no = tbl_seleksi_tpa.no','left');
		$this->db->where($where);
		$this->db->order_by('tbl_catar_validasi_2023.no_reg', "asc");
		$query=$this->db->get();
		return $query;
		
	}

	function get_data_join_where_2023($where){
		$this->db->select('tbl_catar_2023.no,
		tbl_catar_2023.nama,
		tbl_catar_2023.tl,
		tbl_catar_2023.tgl_l,
		tbl_catar_2023.agama,
		tbl_catar_2023.jk,
		tbl_catar_2023.alamat,
		tbl_catar_2023.ktkb,
		tbl_catar_2023.provinsi,
		tbl_catar_2023.telp,
		tbl_catar_2023.kategori_sek,
		tbl_catar_2023.prodi_lama,
		tbl_catar_2023.thn_lulus,
		tbl_catar_2023.asek,
		tbl_catar_2023.alamat_sek,
		tbl_catar_2023.nama_a,
		tbl_catar_2023.nama_i,
		tbl_catar_2023.alamat_ortu,
		tbl_catar_2023.telp_ortu,
		tbl_catar_2023.prodi,
		tbl_catar_2023.kelas,
		tbl_catar_2023.gelombang,
		tbl_catar_2023.id_tgl_seleksi,
		tbl_catar_validasi_2023.val_id,
		tbl_catar_validasi_2023.no,
		tbl_catar_validasi_2023.gelombang,
		tbl_catar_validasi_2023.tgl_byr,
		tbl_catar_validasi_2023.prodi,
		tbl_catar_validasi_2023.no_reg,
		tbl_catar_validasi_2023.jml_byr,
		tbl_catar_validasi_2023.aktif as aktif,
		tbl_catar_validasi_2023.thn_pel as thn_pel');
		$this->db->from('tbl_catar_2023');
		$this->db->join('tbl_catar_validasi_2023','tbl_catar_validasi_2023.no = tbl_catar_2023.no','inner');
		$this->db->where($where);
		$this->db->order_by('tbl_catar_validasi_2023.no', "asc");
		$query=$this->db->get();
		return $query;
	}

	function get_data_join_where_2022($where){
		$this->db->select('tbl_catar_2022.no,
		tbl_catar_2022.nama,
		tbl_catar_2022.tl,
		tbl_catar_2022.tgl_l,
		tbl_catar_2022.agama,
		tbl_catar_2022.jk,
		tbl_catar_2022.alamat,
		tbl_catar_2022.ktkb,
		tbl_catar_2022.provinsi,
		tbl_catar_2022.telp,
		tbl_catar_2022.kategori_sek,
		tbl_catar_2022.prodi_lama,
		tbl_catar_2022.thn_lulus,
		tbl_catar_2022.asek,
		tbl_catar_2022.alamat_sek,
		tbl_catar_2022.nama_a,
		tbl_catar_2022.nama_i,
		tbl_catar_2022.alamat_ortu,
		tbl_catar_2022.telp_ortu,
		tbl_catar_2022.prodi,
		tbl_catar_2022.kelas,
		tbl_catar_2022.gelombang,
		tbl_catar_validasi_2022.val_id,
		tbl_catar_validasi_2022.no,
		tbl_catar_validasi_2022.gelombang,
		tbl_catar_validasi_2022.tgl_byr,
		tbl_catar_validasi_2022.prodi,
		tbl_catar_validasi_2022.no_reg,
		tbl_catar_validasi_2022.jml_byr,
		tbl_catar_validasi_2022.aktif as aktif,
		tbl_catar_validasi_2022.thn_pel as thn_pel');
		$this->db->from('tbl_catar_2022');
		$this->db->join('tbl_catar_validasi_2022','tbl_catar_validasi_2022.no = tbl_catar_2022.no','inner');
		$this->db->where($where);
		$this->db->order_by('tbl_catar_validasi_2022.no_reg', "asc");
		$query=$this->db->get();
		return $query;

		
	}
	function get_data_join_where_2021($where){
		$this->db->select('tbl_catar_2021.no,
		tbl_catar_2021.nama,
		tbl_catar_2021.tl,
		tbl_catar_2021.tgl_l,
		tbl_catar_2021.agama,
		tbl_catar_2021.jk,
		tbl_catar_2021.alamat,
		tbl_catar_2021.ktkb,
		tbl_catar_2021.provinsi,
		tbl_catar_2021.telp,
		tbl_catar_2021.kategori_sek,
		tbl_catar_2021.prodi_lama,
		tbl_catar_2021.thn_lulus,
		tbl_catar_2021.asek,
		tbl_catar_2021.alamat_sek,
		tbl_catar_2021.nama_a,
		tbl_catar_2021.nama_i,
		tbl_catar_2021.alamat_ortu,
		tbl_catar_2021.telp_ortu,
		tbl_catar_2021.prodi,
		tbl_catar_2021.kelas,
		tbl_catar_2021.gelombang,
		tbl_catar_validasi_2021.val_id,
		tbl_catar_validasi_2021.no,
		tbl_catar_validasi_2021.gelombang,
		tbl_catar_validasi_2021.tgl_byr,
		tbl_catar_validasi_2021.prodi,
		tbl_catar_validasi_2021.no_reg,
		tbl_catar_validasi_2021.jml_byr,
		tbl_catar_validasi_2021.aktif as aktif,
		tbl_catar_validasi_2021.thn_pel as thn_pel');
		$this->db->from('tbl_catar_2021');
		$this->db->join('tbl_catar_validasi_2021','tbl_catar_validasi_2021.no = tbl_catar_2021.no','inner');
		$this->db->where($where);
		$this->db->order_by('tbl_catar_validasi_2021.no_reg', "asc");
		$query=$this->db->get();
		return $query;

		
	}

	function get_data_join_where_row($where){
		$this->db->select('tbl_catar_2024.no,
		tbl_catar_2024.nama,
		tbl_catar_2024.tl,
		tbl_catar_2024.tgl_l,
		tbl_catar_2024.agama,
		tbl_catar_2024.jk,
		tbl_catar_2024.alamat,
		tbl_catar_2024.ktkb,
		tbl_catar_2024.provinsi,
		tbl_catar_2024.telp,
		tbl_catar_2024.kategori_sek,
		tbl_catar_2024.prodi_lama,
		tbl_catar_2024.thn_lulus,
		tbl_catar_2024.asek,
		tbl_catar_2024.alamat_sek,
		tbl_catar_2024.nama_a,
		tbl_catar_2024.nama_i,
		tbl_catar_2024.alamat_ortu,
		tbl_catar_2024.telp_ortu,
		tbl_catar_2024.prodi,
		tbl_catar_2024.jalur,
		tbl_catar_2024.gelombang,
		tbl_catar_validasi_2024.val_id,
		tbl_catar_validasi_2024.no,
		tbl_catar_validasi_2024.gelombang,
		tbl_catar_validasi_2024.tgl_byr,
		tbl_catar_validasi_2024.prodi,
		tbl_catar_validasi_2024.no_reg,
		tbl_catar_validasi_2024.jml_byr,
		tbl_catar_validasi_2024.aktif as aktif,
		tbl_catar_validasi_2024.thn_pel as thn_pel');
		$this->db->from('tbl_catar_2024');
		$this->db->join('tbl_catar_validasi_2024','tbl_catar_validasi_2024.no = tbl_catar_2024.no','inner');
		$this->db->where($where);
		// $this->db->order_by('tbl_catar_validasi_2021.no_reg', "asc");
		$query=$this->db->get();
		return $query;

		
	}
	function get_data_test_samapta($where){
		$this->db->select('
		tbl_seleksi_samapta.id_ssmp AS id_ssmp,
		tbl_seleksi_samapta.lari AS lari,
		tbl_seleksi_samapta.push_up AS push_up,
		tbl_seleksi_samapta.pull_up AS pull_up,
		tbl_seleksi_samapta.suttle_run AS suttle_run,
		tbl_seleksi_samapta.petugas AS petugas,
		tbl_seleksi_samapta.time AS waktu,
		tbl_catar_2023.nama AS nama,
		tbl_catar_2023.no AS no,
		tbl_catar_2023.prodi AS prodi');
		$this->db->from('tbl_catar_2023');
		$this->db->join('tbl_catar_validasi_2023','tbl_catar_2023.no = tbl_catar_validasi_2023.no','inner');
		$this->db->join('tbl_seleksi_samapta','tbl_catar_validasi_2023.no = tbl_seleksi_samapta.no','inner');
		$this->db->where($where);
		// $this->db->order_by('tbl_catar_validasi_2021.no_reg', "asc");
		$query=$this->db->get();
		return $query;		
	}
	function get_data_test_wawancara($where){
		$this->db->select('
		tbl_seleksi_wawancara.id_sw AS id_sw,
		tbl_seleksi_wawancara.hasil_wwncra AS hasil_wwncara,
		tbl_seleksi_wawancara.ket AS ket,
		tbl_seleksi_wawancara.petugas AS petugas,
		tbl_seleksi_wawancara.`time` AS `time`,
		tbl_catar_2023.nama AS nama,
		tbl_catar_2023.prodi AS prodi,
		tbl_catar_2023.no AS no');
		$this->db->from('tbl_catar_2023');
		$this->db->join('tbl_catar_validasi_2023','tbl_catar_2023.no = tbl_catar_validasi_2023.no','inner');
		$this->db->join('tbl_seleksi_wawancara','tbl_catar_validasi_2023.no = tbl_seleksi_wawancara.no','inner');
		$this->db->where($where);
		// $this->db->order_by('tbl_catar_validasi_2021.no_reg', "asc");
		$query=$this->db->get();
		return $query;		
	}
	function get_data_test_tpa($where){
		$this->db->select('
		tbl_seleksi_tpa.id_stpa AS id_stpa,
		tbl_seleksi_tpa.hasil_tpa AS hasil_tpa,
		tbl_seleksi_tpa.petugas AS petugas,
		tbl_seleksi_tpa.`time` AS `time`,
		tbl_catar_2023.nama AS nama,
		tbl_catar_2023.prodi AS prodi,
		tbl_catar_2023.no AS no');
		$this->db->from('tbl_catar_2023');
		$this->db->join('tbl_catar_validasi_2023','tbl_catar_2023.no = tbl_catar_validasi_2023.no','inner');
		$this->db->join('tbl_seleksi_tpa','tbl_catar_validasi_2023.no = tbl_seleksi_tpa.no','inner');
		$this->db->where($where);
		// $this->db->order_by('tbl_catar_validasi_2021.no_reg', "asc");
		$query=$this->db->get();
		return $query;		
	}

	function get_data_edit_gdr1($id)
    {
        // Gantilah 'nama_tabel' dengan nama tabel yang sesuai dalam database Anda
	     $this->db->select('tbl_seleksi_2024.id_link as id_link,
	     	tbl_seleksi_2024.no as no,
	     	tbl_seleksi_2024.link_ktp as link_ktp,
	     	tbl_seleksi_2024.link_ijasah as link_ijasah,
	     	tbl_seleksi_2024.link_rapor as link_rapor,
	     	tbl_seleksi_2024.link_kesehatan as link_kesehatan,
	     	tbl_seleksi_2024.link_supersehat as link_supersehat,
	     	tbl_seleksi_2024.link_prestasi as link_prestasi,
	     	tbl_seleksi_2024.link_video_pushup as link_video_pushup,
	     	tbl_seleksi_2024.link_video_shitup as link_video_shitup,
	     	tbl_seleksi_2024.link_video_pullup as link_video_pullup,
	     	tbl_seleksi_2024.link_video_shuttle as link_video_shuttle,
	     	tbl_catar_2024.nama,
			');

	     $this->db->from('tbl_seleksi_2024');
	     $this->db->join('tbl_catar_2024','tbl_seleksi_2024.no = tbl_catar_2024.no','left');
        $this->db->where('tbl_seleksi_2024.no', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
    function get_data_edit_gdr1_samapta($id)
    {
        // Gantilah 'nama_tabel' dengan nama tabel yang sesuai dalam database Anda
	     $this->db->select('tbl_seleksi_2024.id_link as id_link,
	     	tbl_seleksi_2024.no as no,
	     	tbl_seleksi_2024.link_ktp as link_ktp,
	     	tbl_seleksi_2024.link_ijasah as link_ijasah,
	     	tbl_seleksi_2024.link_rapor as link_rapor,
	     	tbl_seleksi_2024.link_kesehatan as link_kesehatan,
	     	tbl_seleksi_2024.link_supersehat as link_supersehat,
	     	tbl_seleksi_2024.link_prestasi as link_prestasi,
	     	tbl_seleksi_2024.link_video_pushup as link_video_pushup,
	     	tbl_seleksi_2024.link_video_shitup as link_video_shitup,
	     	tbl_seleksi_2024.link_video_pullup as link_video_pullup,
	     	tbl_seleksi_2024.link_video_shuttle as link_video_shuttle,
	     	tbl_catar_2024.nama,
	     	tbl_catar_2024.no,
	     	tbl_seleksi_samapta_2024.sit_up,
			tbl_seleksi_samapta_2024.push_up,
			tbl_seleksi_samapta_2024.pull_up,
			tbl_seleksi_samapta_2024.lari,
			tbl_seleksi_samapta_2024.id_ssmp,
			');

	     $this->db->from('tbl_seleksi_2024');
	     $this->db->join('tbl_catar_2024','tbl_seleksi_2024.no = tbl_catar_2024.no','left');
	     $this->db->join('tbl_seleksi_samapta_2024','tbl_catar_2024.no = tbl_seleksi_samapta_2024.no','left');
        $this->db->where('tbl_seleksi_2024.no', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
    function get_data_rekap_samapta($where)
    {
        // Gantilah 'nama_tabel' dengan nama tabel yang sesuai dalam database Anda
	     $this->db->select('tbl_seleksi_2024.id_link as id_link,
            tbl_seleksi_2024.no as no,
            tbl_seleksi_2024.link_ktp as link_ktp,
            tbl_seleksi_2024.link_ijasah as link_ijasah,
            tbl_seleksi_2024.link_rapor as link_rapor,
            tbl_seleksi_2024.link_kesehatan as link_kesehatan,
            tbl_seleksi_2024.link_supersehat as link_supersehat,
            tbl_seleksi_2024.link_prestasi as link_prestasi,
            tbl_seleksi_2024.link_video_pushup as link_video_pushup,
            tbl_seleksi_2024.link_video_shitup as link_video_shitup,
            tbl_seleksi_2024.link_video_pullup as link_video_pullup,
            tbl_seleksi_2024.link_video_shuttle as link_video_shuttle,
            tbl_catar_2024.nama,
            tbl_catar_2024.no,
            tbl_catar_2024.jk,
            tbl_seleksi_samapta_2024.sit_up,
            tbl_seleksi_samapta_2024.push_up,
            tbl_seleksi_samapta_2024.pull_up,
            tbl_seleksi_samapta_2024.lari,
            tbl_seleksi_samapta_2024.id_ssmp');

        $this->db->from('tbl_seleksi_2024');
        $this->db->join('tbl_catar_2024', 'tbl_seleksi_2024.no = tbl_catar_2024.no', 'left');
        $this->db->join('tbl_seleksi_samapta_2024', 'tbl_catar_2024.no = tbl_seleksi_samapta_2024.no', 'left');
        $this->db->where($where);
        $query = $this->db->get();

        return $query->result();
    }
    function get_data_rekap_ukurpakaian($where)
    {
        // Gantilah 'nama_tabel' dengan nama tabel yang sesuai dalam database Anda
	     $this->db->select('tbl_ukurpakaian.jk_pakaian,
	     	tbl_ukurpakaian.ukuran_sepatu,
	     	tbl_ukurpakaian.topipet,
	     	tbl_ukurpakaian.seragam_pdl,
	     	tbl_ukurpakaian.training_pack,
	     	tbl_ukurpakaian.wearpack,
	     	tbl_ukurpakaian.kaos_or,
	     	tbl_ukurpakaian.baju_renang,
	     	tbl_ukurpakaian.dogi,
	     	tbl_ukurpakaian.pdhpdub_kemeja,
	     	tbl_ukurpakaian.pdhpdub_celana,
	     	tbl_ukurpakaian.jaspdpm,
	     	tbl_ukurpakaian.ukuran_sepatu_lainnya,
	     	tbl_ukurpakaian.seragam_pdl_lainnya,
	     	tbl_ukurpakaian.training_pack_lainnya,
	     	tbl_ukurpakaian.wearpack_lainnya,
	     	tbl_ukurpakaian.kaos_or_lainnya,
	     	tbl_ukurpakaian.baju_renang_lainnya,
	     	tbl_ukurpakaian.pdhpdub_kemeja_lainnya,
	     	tbl_ukurpakaian.pdhpdub_celana_lainny,
	     	tbl_ukurpakaian.jaspdpm_lainnya,
            tbl_catar_2024.nama,
            tbl_catar_2024.prodi as prodi,
            tbl_catar_2024.no,
            tbl_catar_2024.jk');

        $this->db->from('tbl_catar_2024');
        $this->db->join('tbl_ukurpakaian', 'tbl_catar_2024.no = tbl_ukurpakaian.no', 'left');
        $this->db->join('tbl_catar_daful_2024', 'tbl_catar_daful_2024.no = tbl_ukurpakaian.no', 'left');
        $this->db->where($where);
        $query = $this->db->get();

        return $query;
    }
  
	////////////////////summary 2023///////////////////////////////////////////////////////////////////////////
	function get_data_statistic_kabkota_2023(){
		$this->db->select('tbl_catar_2023.ktkb as id_provinsi,
		Count(tbl_catar_2023.no) as jml_pendaftar');
		$this->db->from('tbl_catar_2023');
		$this->db->join('tbl_catar_validasi_2023','tbl_catar_2023.no = tbl_catar_validasi_2023.no','inner');
		$this->db->group_by('tbl_catar_2023.ktkb');
		$this->db->order_by('count(tbl_catar_2023.no)', 'DESC');
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_prov_2023(){
		$this->db->select('tbl_catar_2023.provinsi as id_provinsi,
		Count(tbl_catar_2023.no) as jml_pendaftar');
		$this->db->from('tbl_catar_2023');
		$this->db->join('tbl_catar_validasi_2023','tbl_catar_2023.no = tbl_catar_validasi_2023.no','inner');
		$this->db->group_by('tbl_catar_2023.provinsi');
		$this->db->order_by('count(tbl_catar_2023.no)', 'DESC');
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sekolah_2023($where){
		$this->db->select('tbl_catar_2023.asek as asal_sekolah,
		Count(tbl_catar_2023.asek) as jml_pendaftar,
		tbl_catar_2023.provinsi as id_provinsi,
		tbl_catar_2023.alamat_sek as almt_sek,
		tbl_catar_2023.ktkb as kotakab');
		$this->db->from('tbl_catar_2023');
		$this->db->join('tbl_catar_validasi_2023','tbl_catar_2023.no = tbl_catar_validasi_2023.no','inner');
		$this->db->group_by('tbl_catar_2023.asek');
		$this->db->order_by('Count(tbl_catar_2023.asek)', 'DESC');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sumber_all_2023(){
		$this->db->select('Count(tbl_catar_2023.informasi) as informasi');
		$this->db->from('tbl_catar_2023');
		// $this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sumber_where_2023($where){
		$this->db->select('Count(tbl_catar_2023.informasi) as informasi ');
		$this->db->from('tbl_catar_2023');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	////////////////////summary 2022///////////////////////////////////////////////////////////////////////////
	function get_data_statistic_kabkota_2022(){
		$this->db->select('tbl_catar_2022.ktkb as id_provinsi,
		Count(tbl_catar_2022.no) as jml_pendaftar');
		$this->db->from('tbl_catar_2022');
		$this->db->join('tbl_catar_validasi_2022','tbl_catar_2022.no = tbl_catar_validasi_2022.no','inner');
		$this->db->group_by('tbl_catar_2022.ktkb');
		$this->db->order_by('count(tbl_catar_2022.no)', 'DESC');
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_prov_2022(){
		$this->db->select('tbl_catar_2022.provinsi as id_provinsi,
		Count(tbl_catar_2022.no) as jml_pendaftar');
		$this->db->from('tbl_catar_2022');
		$this->db->join('tbl_catar_validasi_2022','tbl_catar_2022.no = tbl_catar_validasi_2022.no','inner');
		$this->db->group_by('tbl_catar_2022.provinsi');
		$this->db->order_by('count(tbl_catar_2022.no)', 'DESC');
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sekolah_2022($where){
		$this->db->select('tbl_catar_2022.asek as asal_sekolah,
		Count(tbl_catar_2022.asek) as jml_pendaftar,
		tbl_catar_2022.provinsi as id_provinsi,
		tbl_catar_2022.alamat_sek as almt_sek,
		tbl_catar_2022.ktkb as kotakab');
		$this->db->from('tbl_catar_2022');
		$this->db->join('tbl_catar_validasi_2022','tbl_catar_2022.no = tbl_catar_validasi_2022.no','inner');
		$this->db->group_by('tbl_catar_2022.asek');
		$this->db->order_by('Count(tbl_catar_2022.asek)', 'DESC');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sumber_all_2022(){
		$this->db->select('Count(tbl_catar_2022.informasi) as informasi');
		$this->db->from('tbl_catar_2022');
		// $this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sumber_where_2022($where){
		$this->db->select('Count(tbl_catar_2022.informasi) as informasi ');
		$this->db->from('tbl_catar_2022');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}

	////////////////////summary 2021///////////////////////////////////////////////////////////////////////////
	// function get_data_statistic_prov_2021_old(){
	// 	$this->db->select('tbl_catar_2021.provinsi,
	// 	tbl_provinsi.id_provinsi as id_provinsi,
	// 	tbl_provinsi.provinsi as nama_provinsi,
	// 	count(no) as jml_pendaftar');
	// 	$this->db->from('tbl_catar_2021');
	// 	$this->db->join('tbl_provinsi','tbl_catar_2021.provinsi = tbl_provinsi.id_provinsi','inner');
	// 	$this->db->join('tbl_catar_validasi_2021','tbl_catar_2021.no = tbl_catar_validasi_2021.no','inner');
	// 	$this->db->group_by('tbl_catar_2021.provinsi');
	// 	$this->db->order_by('count(*)', 'DESC');
	// 	$query=$this->db->get();
	// 	return $query;
	// }

	function get_data_statistic_prov_2021(){
		$this->db->select('tbl_catar_2021.provinsi as id_provinsi,
		Count(tbl_catar_2021.no) as jml_pendaftar');
		$this->db->from('tbl_catar_2021');
		$this->db->join('tbl_catar_validasi_2021','tbl_catar_2021.no = tbl_catar_validasi_2021.no','inner');
		$this->db->group_by('tbl_catar_2021.provinsi');
		$this->db->order_by('count(tbl_catar_2021.no)', 'DESC');
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_ktkb_2021(){
		$this->db->select('tbl_catar_2021.ktkb as ktkb,
		Count(tbl_catar_2021.no) as jml_pendaftar');
		$this->db->from('tbl_catar_2021');
		$this->db->join('tbl_catar_validasi_2021','tbl_catar_2021.no = tbl_catar_validasi_2021.no','inner');
		$this->db->group_by('tbl_catar_2021.ktkb');
		$this->db->order_by('count(tbl_catar_2021.no)', 'DESC');
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sekolah_2021($where){
		$this->db->select('tbl_catar_2021.asek as asal_sekolah,
		Count(tbl_catar_2021.asek) as jml_pendaftar,
		tbl_catar_2021.provinsi as id_provinsi,
		tbl_catar_2021.alamat_sek as almt_sek,
		tbl_catar_2021.ktkb as kotakab');
		$this->db->from('tbl_catar_2021');
		$this->db->join('tbl_catar_validasi_2021','tbl_catar_2021.no = tbl_catar_validasi_2021.no','inner');
		$this->db->group_by('tbl_catar_2021.asek');
		$this->db->order_by('Count(tbl_catar_2021.asek)', 'DESC');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sumber_all_2021(){
		$this->db->select('Count(tbl_catar_2021.informasi) as informasi');
		$this->db->from('tbl_catar_2021');
		// $this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sumber_where_2021($where){
		$this->db->select('Count(tbl_catar_2021.informasi) as informasi ');
		$this->db->from('tbl_catar_2021');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	
	/////////////////////////////////////summary 2020/////////////////////////////////////////////////////////////////
	function get_data_statistic_sekolah_2020($where){
		$this->db->select('tbl_catar.asek as asal_sekolah,
		Count(tbl_catar.asek) as jml_pendaftar,
		tbl_catar.provinsi as id_provinsi,
		tbl_catar.alamat_sek as almt_sek,
		tbl_catar.ktkb as kotakab');
		$this->db->from('tbl_catar');
		$this->db->join('tbl_catar_validasi','tbl_catar.no = tbl_catar_validasi.no','inner');
		$this->db->group_by('tbl_catar.asek');
		$this->db->order_by('Count(tbl_catar.asek)', 'DESC');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sumber_all_2020(){
		$this->db->select('Count(tbl_catar.informasi) as informasi');
		$this->db->from('tbl_catar');
		// $this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	function get_data_statistic_sumber_where_2020($where){
		$this->db->select('Count(tbl_catar.informasi) as informasi ');
		$this->db->from('tbl_catar');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}

}




 ?>