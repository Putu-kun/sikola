<?php

class Matapelajaran extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_matapelajaran');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}

	}

	function index(){
				// load view admin/overview.php
				$data['konten']='guru/v_matapelajaran';
				$this->load->view('guru/v_guru',$data);
	}

}
