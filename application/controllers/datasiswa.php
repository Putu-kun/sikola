<?php

class datasiswa extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_datasiswa');

  }
   function aksi_kelas(){
    		$kelas = $this->input->post('kelas');
        $where = array(
    			'kelas' 	=> $kelas
    			);
    		$cek = $this->m_datasiswa->cek_login("siswa",$where)->num_rows();
   }

   public function index()
	{
        // load view admin/overview.php
        $data['konten']='kepsek/v_datasiswa';
        $this->load->view('kepsek/v_kepsek',$data);
	}
}
