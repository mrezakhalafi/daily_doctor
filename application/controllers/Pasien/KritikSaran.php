<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KritikSaran extends CI_Controller {

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

	$this->load->view('templates/header', $data);
	$this->load->view('pasien/kritiksaran',$data);
	$this->load->view('templates/footer');

	}
	public function TambahKritik(){

	$data = [
		'id_pasien' => $this->input->post('id_pasien'),
		'umur' => $this->input->post('umur'),
		'kritik' => $this->input->post('kritik'),
		'id_dokter' => $this->input->post('id_dokter'),
		'rating' => $this->input->post('rating')
	];
	$this->db->insert('tb_kritik',$data);
	redirect('dashboard');
}
}