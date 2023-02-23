<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function index(){

	$this->db->select("*");
	$this->db->from("tb_user");
	$this->db->where("email",$this->session->userdata('email'));
	$data['user'] = $this->db->get()->row_array();

	$this->db->select("*");
	$this->db->from("tb_dokter");
	$data['dokter'] = $this->db->get()->result_array();

	$query = $this->db->query('SELECT * FROM tb_dokter');
	$data['jum_dokter'] = $query->num_rows();

	$this->load->view('templates/header',$data);
	$this->load->view('admin',$data);
	$this->load->view('templates/footer');
	}

public function hapus($id){
	$this->db->where('id',$id);
	$this->db->delete('tb_dokter');
}

}