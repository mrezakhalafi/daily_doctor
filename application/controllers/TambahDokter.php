<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahDokter extends CI_Controller {

public function index(){
	$this->db->select("*");
	$this->db->from("tb_user");
	$this->db->where("email",$this->session->userdata('email'));
	$data['user'] = $this->db->get()->row_array();
	
	$query = $this->db->query('SELECT * FROM tb_dokter');
	$data['jum_dokter'] = $query->num_rows();

	$this->load->view('templates/header', $data);
	$this->load->view('tambahdokter',$data);
	$this->load->view('templates/footer');
	}

public function tambah(){

	$upload_foto = $_FILES['foto']['name'];
	
	$config = array();
	$config['allowed_types'] = 'jpg|png|pdf|doc';
	$config['max_size'] = '2048';

	$config['upload_path'] = './assets/img/dokter';
	$this->load->library('upload', $config, 'coverupload');
	$this->coverupload->initialize($config);
	$this->coverupload->do_upload('foto');
	$foto = $this->coverupload->data('file_name');


	$data = [
		"nama" => $this->input->post('name'),
		"username" => $this->input->post('username'),
		"email" => $this->input->post('email'),
		"password" => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
		"jk" => $this->input->post('jk'),
		"spesialis" => $this->input->post('spesialis'),
		"alamat" => $this->input->post('alamat'),
		"foto" => $upload_foto,
		"rating" => $this->input->post('rating'),
	];

	$this->db->insert("tb_dokter",$data);
	redirect('admin');
	}
}