<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

public function index(){
	$this->load->view('register');
	}
public function daftar(){

	$data = [
		"nama" => $this->input->post('nama', true),
		"jk" => $this->input->post('jk'),
		"tgl_lahir" => $this->input->post('tgl_lahir', true),
		"username" => $this->input->post('username', true),
		"email" => $this->input->post('email', true),
		"password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
		"alamat" => $this->input->post('alamat', true),
		"role" => 2
	];
		$this->db->insert('tb_user',$data);
		redirect('login');
}

}