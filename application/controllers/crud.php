<?php

class Crud extends CI_Controller{

function __construct(){
parent::__construct();
$this->load->model('m_input');
$this->load->helper('url');

}

function index(){
$data['user'] = $this->m_input->tampil_data()->result();
$this->load->view('siswa/v_tampil',$data);
}

function tambah(){
$this->load->view('siswa/v_input');
}

function aksi(){
$noindex = $this->input->post('noindex');
$pilihan = $this->input->post('pilihan');


$data = array(
'noindex' => $noindex,
'pilihan' => $pilihan,

);
$this->m_input->input_data($data,'user');
redirect('crud/index');
}

}