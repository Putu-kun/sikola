<?php

class dataguru extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_dataguru');

  }

   public function index()
	{
        // load view admin/overview.php
        $data['konten']='kepsek/v_dataguru';
        $this->load->view('kepsek/v_kepsek',$data);
	}
}
