<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jabatan = $this->input->post('jabatan');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() != false){
			$where = array('username' => $username, 'password' => md5($password) );

			$data = $this->m_login->edit_data($where, 'users');
			$d = $this->m_login->edit_data($where, 'users')->row();
			$cek = $data->num_rows();

			if($cek > 0){
				$session = array(

					'id' => $d->noindex,
					'nama' => $d->nama,
					'jabatan' => $d->jabatan,

					'id' => $d->noindex, 
					'nama' => $d->nama, 
					'jabatan' => $d->jabatan, 

					'status' => 'login');
				$this->session->set_userdata($session);
				$this->load->view('v_home');

			}else{
				$this->session->set_flashdata('alert', 'Login gagal! Username atau password salah.');
				$this->load->view('v_login');
			}

		}else{
			$this->session->set_flashdata('alert', 'Anda Belum mengisi Username atau Password');
			$this->load->view('v_login');
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php'));
	}
}
