<?php

class Absensisiswa extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_absensiswa');

	}

	function index(){
		$this->load->view('guru/v_absensisiswa');
	}
}
