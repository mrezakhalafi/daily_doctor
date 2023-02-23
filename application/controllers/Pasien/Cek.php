<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek extends CI_Controller {

public function index(){

$output = '';
				 if($this->input->post('postaction') == "cek"){

				$this->db->from('tb_antrian');
				$this->db->where('id_dokter',$this->input->post('query'));                      
				$query = $this->db->count_all_results();

				echo $query;

				 }
}
}