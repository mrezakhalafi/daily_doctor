<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function index(){
	$this->load->view('login');
	}

public function masuk(){
	$email = $this->input->post('email');
	$password = $this->input->post('password');

	$this->db->select("*");
	$this->db->from('tb_user');
	$this->db->where("email",$email);
	$user = $this->db->get()->row_array();

	$this->db->select("*");
	$this->db->from('tb_dokter');
	$this->db->where("email",$email);
	$dokter = $this->db->get()->row_array();

if($user){
	if(password_verify($password, $user['password'])){
			var_dump("Password benar");
			$data = [
					'nama' => $user['nama'],
					'email' => $user['email'],
					'role' => $user['role'],
					'id' => $user['id'],
					'jk' => $user['jk']
				];
			$this->session->set_userdata($data);
			if($user['role']==0){
				redirect('Admin');
			}else{
			redirect('Dashboard');
		}
	}else{
		echo "<script>alert('Password salah!'); window.location.href='http://localhost/dailydoctor'</script>";
	}
}else{
	echo "<script>alert('Email tidak terdaftar!'); window.location.href='http://localhost/dailydoctor'</script>";
}

if($dokter){
	if(password_verify($password, $dokter['password'])){
			var_dump("Password benar");
			$data = [
					'nama' => $dokter['nama'],
					'email' => $dokter['email'],
					'role' => $dokter['role'],
					'id' => $dokter['id'],
					'jk' => $dokter['jk']
				];
			$this->session->set_userdata($data);
			redirect('Dashboard');
	}else{
		echo "<script>alert('Password salah!'); window.location.href='http://localhost/dailydoctor'</script>";
	}
}else{
	echo "<script>alert('Email tidak terdaftar!'); window.location.href='http://localhost/dailydoctor'</script>";
}



}
}
