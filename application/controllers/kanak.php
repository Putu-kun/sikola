<?php

class Kanak extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_kanak');

	}

	 public function index()
	{
        // load view admin/overview.php
        $data['konten']='ortu/v_kanak';
        $this->load->view('ortu/v_ortu',$data);
	}

}
