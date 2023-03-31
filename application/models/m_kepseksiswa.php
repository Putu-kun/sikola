<?php

class M_kepseksiswa extends CI_Model{

	private $_table = "siswa";
	private $table = "kelas";

  // function index(){

	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function input_data($data,$table)
    {
    	$this->db->insert($table,$data);
    }

    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);

	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);

	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);

	}

	function cek_kode($where,$table){
		return $this->db->get_where($table,$where);
	}

	function findKelas($where,$table){
		return $this->db->get_where($table,$where);

	}
}
