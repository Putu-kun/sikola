<?php

class Raport extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_kanak');
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}

	}

	 public function index()
	{
        // load view admin/overview.php
        $data['konten']='ortu/v_raport';
        $this->load->view('ortu/v_ortu',$data);
	}
}
