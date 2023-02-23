<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AntrianSaya extends CI_Controller {

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

	$this->db->select("tb_antrian.*,tb_user.nama,tb_user.jk");
	$this->db->from('tb_antrian');
	$this->db->where("id_dokter",$this->session->userdata('id'));
	$this->db->order_by("id", "asc");
	$this->db->join('tb_user','tb_antrian.id_pasien = tb_user.id');
	$data['antrian'] = $this->db->get()->result_array();

	$dokter = $this->session->userdata('id');

	$query = $this->db->query("SELECT * FROM tb_antrian WHERE id_dokter = '".$dokter."'");
	$data['jum_antrian'] = $query->num_rows();

	$this->load->view('templates/header', $data);
	$this->load->view('Dokter/AntrianSaya', $data);
	$this->load->view('templates/footer');
	}

public function konfirmasi($status){

$data = array(
			"status" => "1"
		);
		$this->db->where('id', $status);
		$this->db->update('tb_antrian', $data);

redirect('dokter/antriansaya');
}

public function selesai($status){

$data = array(
			"status" => "3"
		);
		$this->db->where('id', $status);
		$this->db->update('tb_antrian', $data);

redirect('dokter/antriansaya');
}


public function ditolak($status){

$data = array(
			"status" => "2"
		);
		$this->db->where('id', $status);
		$this->db->update('tb_antrian', $data);

redirect('dokter/antriansaya');
}
}