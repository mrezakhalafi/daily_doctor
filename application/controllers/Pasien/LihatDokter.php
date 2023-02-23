<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LihatDokter extends CI_Controller {

public function index(){

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
	$this->db->from('tb_dokter');
	$data['dokter'] = $this->db->get()->result_array();

	$this->load->view('templates/header', $data);
	$this->load->view('Pasien/LihatDokter', $data);
	$this->load->view('templates/footer');
	}
}