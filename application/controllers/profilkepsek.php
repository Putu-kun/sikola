<?php

class Profilkepsek extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_kepseksiswa');
    $this->load->model('m_kepsekguru');

    if($this->session->userdata('status') != "login"){
      redirect(base_url("index.php/login"));
    }

  }


  public function index()
	{
        // load view admin/overview.php
        $data['konten']='kepsek/v_profilkepsek';
        $this->load->view('kepsek/v_kepsek',$data);
	}

  public function kepseksiswa()
  {
        // load view admin/overview.php
        $data['siswa'] = $this->m_kepseksiswa->getAll();
        $data['konten']='kepsek/v_kepseksiswa';
        $this->load->view('kepsek/v_kepsek',$data);
  }
  public function kepsekguru()
	{
        // load view admin/overview.php
        $data['guru'] = $this->m_kepsekguru->getAll();
        $data['konten']='kepsek/v_kepsekguru';
        $this->load->view('kepsek/v_kepsek',$data);
	}

}
