<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryKonsultasi extends CI_Controller {

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

	$this->db->select("tb_antrian.*,tb_dokter.nama,tb_dokter.jk,tb_dokter.spesialis");
	$this->db->from('tb_antrian');
			$this->db->where("id_pasien",$this->session->userdata('id'));
	$this->db->where('status',3);
	$this->db->join('tb_dokter','tb_antrian.id_dokter = tb_dokter.id');
	$data['antrian'] = $this->db->get()->result_array();


	$query = $this->db->query('SELECT * FROM tb_dokter');
	$data['jum_dokter'] = $query->num_rows();

	$this->load->view('templates/header',$data);
	$this->load->view('Pasien/historykonsultasi',$data);
	$this->load->view('templates/footer');
	
		}
	}