<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarAntrian extends CI_Controller {

public function index(){
	$this->db->select("*");
	$this->db->from('tb_dokter');
	$data['dokter'] = $this->db->get()->result_array();

	if($this->session->userdata('role')==1){
		$this->db->select("*");
		$this->db->from("tb_dokter");
		$this->db->where("email",$this->session->userdata('email'));
		$data['user'] = $this->db->get()->row_array();
	}elseif($this->session->userdata('role')==2){
		$this->db->select("*");
		$this->db->from("tb_user");
		$this->db->where("email",$this->session->userdata('email'));
		$data['user'] = $this->db->get()->row_array();
	}
	
	$query = $this->db->query('SELECT * FROM tb_dokter');
	$data['jum_dokter'] = $query->num_rows();

	$this->db->select("*");
	$this->db->from("tb_antrian");
	$data['antrian'] = $this->db->get()->result_array();

	$this->load->view('templates/header', $data);
	$this->load->view('pasien/daftarantrian',$data);
	$this->load->view('templates/footer');
	}

public function TambahAntrian(){

	$data = [
		'id_dokter' => $this->input->post('id_dokter'),
		'id_pasien' => $this->input->post('id_pasien'),
		'antrian' => $this->input->post('hasil'),
		'keluhan' => $this->input->post('keluhan'),
		'tanggal' => $this->input->post('tanggal')
	];
	$this->db->insert('tb_antrian',$data);
	redirect('pasien/antriansaya');
}

public function cek(){

	$output = '';
				 if($this->input->post('postaction') == "id_prov"){

				 $data['coba1'] = $this->db->get_where('tb_kab',['id_provinsi' => $this->input->post('query')])->result_array();
				  $output .= '<option value="">Pilih Kabupaten</option>';

				  
				 }
}

}