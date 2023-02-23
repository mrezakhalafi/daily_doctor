<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistikPasien extends CI_Controller {

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

	$dokter = $this->session->userdata('id');

	$query = $this->db->query("SELECT * FROM tb_antrian WHERE id_dokter = '".$dokter."'");
	$data['jum_antrian'] = $query->num_rows();

	$this->load->view('templates/header',$data);
	$this->load->view('Dokter/statistikpasien',$data);
	$this->load->view('templates/footer');
	}
}