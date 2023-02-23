<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

public function index(){
	$this->load->view('Auth/forgot');
	}

public function reset(){
	$this->load->view('Auth/reset');
	}
}