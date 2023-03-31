<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
		$this->load->model("m_dataguru");
		$this->load->model("m_users");
		$this->load->model("m_soal");
		$this->load->model('m_datasiswa');
		$this->load->model('m_kelas');
		$this->load->model("m_datanilai");
		$this->load->model("m_matapelajaran");
		$this->load->model("m_dataortu");
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("v_home");
	}

	public function profilsiswa()
	{
        // load view admin/overview.php

$id = $this->uri->segment(3);
	$siswa = $this->db->query("SELECT*FROM users u, siswa s  where u.noindex=s.noindex_u ")->result();

	foreach ($siswa as $fields) {
		$data['kd_siswa'] = $fields->kd_siswa;
		$data['nm_siswa'] = $fields->nm_siswa;
		$data['nisn'] = $fields->nisn;
		$data['jurusan'] = $fields->jurusan;
		$data['kewarganegaraan'] = $fields->kewarganegaraan;
		$data['jk'] = $fields->jk;
		$data['tgl_lhr'] = $fields->tgl_lhr;
		$data['tmp_lhr'] = $fields->tmp_lhr;
		$data['email'] = $fields->email;
		$data['kelas'] = $fields->kelas;
		$data['hp'] = $fields->hp;
		$data['alamat_siswa'] = $fields->alamat_siswa;
		$data['agama'] = $fields->agama;
		$data['nm_ayah'] = $fields->nm_ayah;
		$data['thnmasuk'] = $fields->thnmasuk;
		$data['foto'] = $fields->foto;


		$data['id'] = $id;
	}

        $data['konten']='siswa/v_profilsiswa';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function absensiswa()
	{
        // load view admin/overview.php
        $data['konten']='siswa/v_absensiswa';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function contak()
	{
        // load view admin/overview.php
        $data['konten']='siswa/contak';
        $this->load->view('siswa/v_siswa',$data);

	}

	public function contaktu()
	{
        // load view admin/overview.php
        $data['konten']='siswa/contak';
        $this->load->view('tu/v_tu',$data);

	}

	public function contakkepsek()
	{
        // load view admin/overview.php
        $data['konten']='siswa/contak';
        $this->load->view('kepsek/v_kepsek',$data);

	}

	public function contakguru()
	{
        // load view admin/overview.php
        $data['konten']='siswa/contak';
        $this->load->view('guru/v_guru',$data);

	}

	public function contakortu()
	{
        // load view admin/overview.php
        $data['konten']='siswa/contak';
        $this->load->view('ortu/v_ortu',$data);

	}

	public function nilaisiswa()
	{
        // load view admin/overview.php
        $data['konten']='siswa/v_nilaisiswa';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function mauuts()
	{
		$data['konten']='siswa/mauuts';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function mauuas()
	{
		$data['konten']='siswa/mauuas';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function utssiswa()
	{
        // load view admin/overview.php
        $data['konten']='siswa/v_utssiswa';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function utssiswaips()
	{
        // load view admin/overview.php
        $data['konten']='siswa/v_utssiswaips';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function soaluts()
	{
		// load view admin/overview.php

		$data['konten']='siswa/index';
		$this->load->view('siswa/v_siswa',$data);
	}

	public function soaluas()
	{
		// load view admin/overview.php

		$data['konten']='siswa/indexx';
		$this->load->view('siswa/v_siswa',$data);
	}

	public function soaluasips()
	{
		// load view admin/overview.php

		$data['konten']='siswa/soaluasips';
		$this->load->view('siswa/v_siswa',$data);
	}

	public function kunci()
	{
		$data['konten']='siswa/kunci';
		$this->load->view('siswa/v_siswa',$data);
	}


	public function aksi_tambah_soaljwb()
	{
		$id = $this->input->post('id');
		$jawaban = $this->input->post('pilihan');


		$data = array(
				'id_soal' => $id,
				'jawaban' => $jawaban


			);

		$this->load->model('m_datajawab');
		redirect('welcome/kunci');
	}


	public function soalutsips()
	{
        // load view admin/overview.php
        $data['konten']='siswa/soalutsips';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function uassiswa()
	{
        // load view admin/overview.php
        $data['konten']='siswa/v_uassiswa';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function uassiswaips()
	{
        // load view admin/overview.php
        $data['konten']='siswa/v_uassiswaips';
        $this->load->view('siswa/v_siswa',$data);
	}

	public function aksi_tambah_jawaban()
	{

       $this->load->library('dompdf_gen');

       $this->load->view('siswa/printbukti');


       $paper_size = 'A4';
       $orientation = 'potrait';
       $html = $this->output->get_output();

       $this->dompdf->set_paper($paper_size, $orientation);

       $this->dompdf->load_html($html);
       $this->dompdf->render();
       $this->dompdf->stream("print_buktiujian.pdf", array('Attachment'=>0));

}

	public function print_nilai(){

		$this->load->view('siswa/print_nilai' );
	}

	public function aksi_tambah_jawabann()
	{
		 $this->load->library('dompdf_gen');

       $this->load->view('siswa/printbuktii');


       $paper_size = 'A4';
       $orientation = 'potrait';
       $html = $this->output->get_output();

       $this->dompdf->set_paper($paper_size, $orientation);

       $this->dompdf->load_html($html);
       $this->dompdf->render();
       $this->dompdf->stream("print_buktiujian.pdf", array('Attachment'=>0));

	}

	public function datajawab()
	{
        // load view admin/overview.php
        $data['guru'] = $this->m_datajawab->getAll();
        $data['konten']='tu/v_kunci';
        $this->load->view('tu/v_tu',$data);
	}

	public function profiltu()
	{
        // load view admin/overview.php
        $data['konten']='tu/v_profiltu';
        $this->load->view('tu/v_tu',$data);
	}

	public function dataguru()
	{
        // load view admin/overview.php
        $data['guru'] = $this->m_dataguru->getAll();
        $data['konten']='tu/v_dataguru';
        $this->load->view('tu/v_tu',$data);
	}

	public function kelas()
	{
        // load view admin/overview.php
        $data['kelas'] = $this->m_kelas->getAll();
        $data['konten']='tu/v_kelas';
        $this->load->view('tu/v_tu',$data);
	}

	public function tambahkelas()
	{
				// load view admin/overview.php
				$data['konten']='tu/v_tambahkelas';
				$this->load->view('tu/v_tu',$data);
	}

	public function aksi_tambah_kelas()
	{
		$jurusan = $this->input->post('jurusan');
		$kelas = $this->input->post('kelas');

		$where = array(
			'jurusan' => $jurusan,
			'kelas' => $kelas
		);

		if($jurusan == 'IPA'){
			$code_jrs = '10';
		}else{
			$code_jrs = '11';
		}
		$cek = $this->m_kelas->cek_kode($where,'kelas')->num_rows();
		$jum = $cek +1;
 		if ($cek == 0) {
 			$kode = $kelas.$code_jrs.'001';
 		} elseif($cek < 10) { //2-9
 			$kode = $kelas.$code_jrs.'00'.$jum;
 		}elseif($cek < 100) {
 			$kode = $kelas.$code_jrs.'0'.$jum;
 		}
 		else{
 			$kode = $kelas.$code_jrs.$jum;
 		}

		$data = array(
				'jurusan' => $jurusan,
				'kelas' => $kelas,
				'kd_kelas' => $kode
			);
		$this->m_kelas->input_data($data,'kelas');
		redirect('welcome/kelas/'.$kelas);
	}

	public function edit_kelas($id){
		$where = array('noindex' => $id);
		$data['kelas'] = $this->m_kelas->edit_data($where,'kelas')->result();
		// $this->load->view('v_edit',$data);
		$data['konten']='tu/v_editkelas';
		$this->load->view('tu/v_tu',$data);
	}

	public function aksi_update_kelas(){
		$jurusan = $this->input->post('jurusan');
		$kelas = $this->input->post('kelas');

		$data = array(
			'jurusan' => $jurusan,
			'kelas' => $kelas
		);

		$where = array(
			'noindex' => $id
		);

		$this->m_kelas->update_data($where,$data,'kelas');
		redirect('welcome/kelas');
	}

	function hapus_kelas($id){
		$where = array('noindex' => $id);
		$this->m_kelas->hapus_data($where,'kelas');
		redirect('welcome/kelas');
	}

	public function datanilai()
	{
					// load view admin/overview.php
					$kelas = $this->input->post('kelas');
					$soal = $this->input->post('soal');
					$where = array('kd_kelas' => $kelas);
					$data['nilai'] = $this->m_datanilai->findKelas($where,'nilai')->result();

					// $where = array('noindex' => $id);
					// $data['siswa'] = $this->m_datasiswa->edit_data($where,'siswa')->result();


				$data['nilai'] = $this->m_datanilai->getAll();
        $data['konten']='tu/v_datanilai';
        $this->load->view('tu/v_tu',$data);
	}

	public function aksi_tambah_nilai()
	{
		$nilaitgs = $this->input->post('nilai_tgs');
		$nilaiuts = $this->input->post('nilai_uts');
		$nilaiuas = $this->input->post('nilai_uas');

		$data = array(
				'nilai_tgs' => $nilaitgs,
				'nilai_uts' => $nilaiuts,
				'nilai_uas' => $nilaiuas

			);
		$this->m_datanilai->input_data($data,'nilai');
		redirect('welcome/datanilai/'.$nilai);
	}

	public function edit_data_nilai($id){
		$where = array('noindex' => $id);
		$data['nilai'] = $this->m_datanilai->edit_data($where,'nilai')->result();
		// $this->load->view('v_edit',$data);
		$data['konten']='tu/v_editnilai';
		$this->load->view('tu/v_tu',$data);
	}

	public function aksi_update_nilai(){
		$id = $this->input->post('id');
		$tgs = $this->input->post('nilai_tgs');
		$uts = $this->input->post('nilai_uts');
		$uas = $this->input->post('nilai_uas');

		$data = array(
			'nilai_tgs' => $tgs,
			'nilai_uts' => $uts,
			'nilai_uas' => $uas,
		);

		$where = array(
			'noindex' => $id
		);

		$this->m_datanilai->update_data($where,$data,'nilai');
		redirect('welcome/datanilai');
	}

	function hapus_data_nilai($id){
		$where = array('noindex' => $id);
		$this->m_datanillai->hapus_data($where,'nilai');
		redirect('welcome/dataniai');
	}

	public function tambahsiswa()
	{
				// load view admin/overview.php
		$data['kelas']	= $data['kelas'] = $this->m_kelas->getAll();
		$data['konten']='tu/v_tambahsiswa';
		$this->load->view('tu/v_tu',$data);
	}

	public function tambahguru()
	{
				// load view admin/overview.php
				$data['konten']='tu/v_tambahguru';
				$this->load->view('tu/v_tu',$data);
	}

	public function datamapel()
	{
        // load view admin/overview.php
        $data['mapel'] = $this->m_matapelajaran->getAll();
        $data['konten']='tu/v_datamapel';
        $this->load->view('tu/v_tu',$data);
	}

	public function tambahmapel()
	{
				// load view admin/overview.php
				$data['konten']='tu/v_tambahmapel';
				$this->load->view('tu/v_tu',$data);
	}

	public function aksi_tambah_mapel()

	{
			$kdmapel = $this->input->post('kd_mapel');
			$kdguru = $this->input->post('kd_guru');
			$nmmapel = $this->input->post('nm_mapel');
			$file = $this->input->post('dokumen');

			$data = array(
					'kd_mapel' => $kdmapel,
					'kd_guru' => $kdguru,
					'nm_mapel' => $nmmapel,
					'doku'	=> $file

				);
			$this->m_matapelajaran->input_data($data,'mapel');
			redirect('welcome/datamapel/'.$data);
	}


	public function soaltambah($id)
	{
				// load view admin/overview.php
				$data['id'] = $id;
				$data['konten']='tu/v_soaltambah';
				$this->load->view('tu/v_tu',$data);
	}

	public function tambahsoal($id)
	{
		// load view admin/overview.php
		// $where = array('id_soal' => $id);
		$where = array('id_soal' => $id);
		$data['soal'] = $this->m_soal->getSoalbyId($where,'tbl_soal')->result();
		$data['id'] = $id;
		$data['konten']='tu/v_tambahsoal';
		$this->load->view('tu/v_tu',$data);
	}

	public function aksi_soal_tambah()
	{
		$no = $this->input->post('no');
		$idsoal = $this->input->post('id_soal');
		$soal = $this->input->post('soal');
		$a = $this->input->post('a');

		$b = $this->input->post('b');
		$c = $this->input->post('c');
		$d = $this->input->post('d');

		$jawaban = $this->input->post('kunci');
		$gambar = $this->input->post('gambar');

		$data = array(
				'id_soal' => $no,
				'soal' => $soal,
				'a' => $a,

				'b' => $b,
				'c' => $c,
				'd' => $d,

				'kunci' => $jawaban,
				'gambar' => $gambar,
				'id_soal' => $idsoal

			);
		$this->m_soal->input_data($data,'tbl_soal');
		redirect('welcome/soaltambah/'.$idsoal);
	}



	public function edittu()
	{
				// load view admin/overview.php
				$data['konten']='tu/v_edittu';
				$this->load->view('tu/v_tu',$data);
	}

	public function aksi_update_soal(){
			$soal = $this->input->post('soal');
			$jawaban = $this->input->post('jawaban');


			$data = array(
				'soal' => $soal,
				'jawaban' => $jawaban
			);

			$where = array(
				'noindex' => $id
			);

			$this->m_soal->update_data($where,$data,'soal');
			redirect('welcome/soal');
	}

	public function aksi_tambah_guru()
	{
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');

		$nuptk = $this->input->post('nuptk');
		$tmptlahir = $this->input->post('tmptlahir');
		$tgllahir = $this->input->post('tgllahir');

		$pendidikan = $this->input->post('pendidikan');
		$jusrusan = $this->input->post('jusrusan');
		$alamat = $this->input->post('alamat');


		$jk = $this->input->post('jk');
		$nohp = $this->input->post('nohp');
		$email = $this->input->post('email');

		$warganegara = $this->input->post('warganegara');
		$agama = $this->input->post('agama');

		$pecah = explode('-', $this->input->post('thnmasuk'));
		$thn = substr($pecah[0], 2,2);
		//cek data
		$cek = $this->m_dataguru->cek_kode("guru")->num_rows();
		// echo $cek;
		$jum = $cek +1;
 		if ($cek == 0) {
 			$kode = 'GR06'.$thn.'001';
 		} elseif($cek < 10) { //2-9
 			$kode = 'GR06'.$thn.'00'.$jum;
 		}elseif($cek < 100) {
 			$kode = 'GR06'.$thn.'0'.$jum;
 		}
 		else{
 			$kode = 'GR06'.$thn.$jum;
 		}

		$data  = array(
				'kd_guru' => $kode,
				'nip' => $nip,
				'nuptk' => $nuptk,

				'nm_guru' => $nama,
				'kewarganegaraan' => $warganegara,
				'jk' => $jk,

				'tgl_lhr' => $tgllahir,
				'tmp_lhr' => $tmptlahir,
				'pendidikan' => $pendidikan,

				'jurusan' => $jusrusan,
				'hp' => $nohp,
				'alamat' => $alamat,

				'agama' => $agama,
				'email' => $email,
				'thnmasuk' => $this->input->post('thnmasuk')


			);

		$this->m_dataguru->input_data($data,'guru');

		$user = array(
			'username' 	=> $kode,
			'nama'		=> $nama,
			'password'	=> md5('12345'),
			'jabatan'	=> 'guru'
		);
		$this->m_users->input_data($user,'users');
		redirect('welcome/dataguru');
	}

	function hapus_data_guru($id){
		$where = array('noindex' => $id);
		$this->m_dataguru->hapus_data($where,'guru');
		redirect('welcome/dataguru');
	}

	public function edit($id){
		$where = array('noindex' => $id);
		$data['guru'] = $this->m_dataguru->edit_data($where,'guru')->result();
		// $this->load->view('v_edit',$data);
		$data['konten']='tu/v_editguru';
		$this->load->view('tu/v_tu',$data);
	}

	public function aksi_update_guru(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');

		$nuptk = $this->input->post('nuptk');
		$tmptlahir = $this->input->post('tmptlahir');
		$tgllahir = $this->input->post('tgllahir');

		$pendidikan = $this->input->post('pendidikan');
		$jusrusan = $this->input->post('jusrusan');
		$alamat = $this->input->post('alamat');

		$jk = $this->input->post('jk');
		$nohp = $this->input->post('nohp');
		$email = $this->input->post('email');

		$warganegara = $this->input->post('warganegara');
		$agama = $this->input->post('agama');

		$data = array(
			'kd_guru' => $kode,
			'nip' => $nip,
			'nuptk' => $nuptk,

			'nm_guru' => $nama,
			'kewarganegaraan' => $warganegara,
			'jk' => $jk,

			'tgl_lhr' => $tgllahir,
			'tmp_lhr' => $tmptlahir,
			'pendidikan' => $pendidikan,

			'jurusan' => $jusrusan,
			'hp' => $nohp,
			'alamat' => $alamat,

			'agama' => $agama,
			'email' => $email
		);

		$where = array(
			'noindex' => $id
		);

		$this->m_dataguru->update_data($where,$data,'guru');
		redirect('welcome/dataguru');
	}

	public function soal()
	{
		// load view admin/overview.php
		$kelas = $this->input->post('kelas');
		$soal = $this->input->post('soal');
		$where = array('kd_kelas' => $kelas);
		$data['soal'] = $this->m_soal->findKelas($where,'soal')->result();

		// $where = array('noindex' => $id);
		// $data['siswa'] = $this->m_datasiswa->edit_data($where,'siswa')->result();

		$data['kelas'] = $this->m_kelas->getAll();
		$data['konten']='tu/v_soal';
		$this->load->view('tu/v_tu',$data);
	}

	public function aksi_update_profil(){
		$id = $this->input->post('id');
		$tmptlahir = $this->input->post('tmptlahir');
		$tgllahir = $this->input->post('tgllahir');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		$email = $this->input->post('email');

		$data = array(
			'tgl_lhr' => $tgllahir,
			'tmp_lhr' => $tmptlahir,
			'alamat' => $alamat,
			'email' => $email,
			'hp' => $nohp,
		);

		$where = array(
			'noindex' => $id
		);
		$this->m_dataguru->update_data($where,$data,'guru');

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($password != '') {
			$datauser = array(
				'password' => md5($password)
			);

			$where = array(
				'username' => $username
			);
			$this->m_users->update_data($where,$datauser,'users');
		}


		redirect('profilguru');
	}


	public function dataortu()
	{
				// load view admin/overview.php
				$data['ortu'] = $this->m_dataortu->getAll();
				$data['konten']='tu/v_dataortu';
				$this->load->view('tu/v_tu',$data);
	}

	public function aksi_tambah_ortu()
	{

		$kodeayah = $this->input->post('kd_ortu');
		$kodesiswa = $this->input->post('kd_siswa');
		$nmayh = $this->input->post('nm_ortu');
		$nmsiswa = $this->input->post('nm_siswa');
		$nikayh = $this->input->post('nik');

		$warganegara = $this->input->post('kewarganegaraan');
		$jk = $this->input->post('jk');
		$email = $this->input->post('email_ortu');

		$tgllhrayh = $this->input->post('tgl_lhr');
		$tmplhrayh = $this->input->post('tmp_lhr');
		$pendayh = $this->input->post('pendidikan');

		$noayh = $this->input->post('hp');
		$pekerjaanayh = $this->input->post('pekerjaan');
		$almtayh = $this->input->post('alamat');

		$agamaayh = $this->input->post('agama');
		$hasilan = $this->input->post('penghasilan');
		$ftayh = $this->input->post('foto_ortu');

		$pecah = explode('-', $this->input->post('thnmasuk'));
		$thn = substr($pecah[0], 2,2);
		$jurusan = explode($this->input->post('jurusan'));
		//cek data
		$cek = $this->m_dataortu->cek_kode("ortu")->num_rows();
		// echo $cek;
		$jum = $cek +1;
		if ($cek == 0) {
			$kodeayah = '06'.$jurusan.$thn.'001';
		} elseif($cek < 10) { //2-9
			$kodeayah = '06'.$jurusan.$thn.'00'.$jum;
		} elseif($cek < 100) {
			$kodeayah = '06'.$jurusan.$thn.'0'.$jum;
		}
		else{
			$kodeayah = '06'.$jurusan.$thn.$jum;
		}

		// echo $cek;
		$data = array(
			'kd_ortu' => $kodeayah,
			'kd_siswa' => $kodesiswa,
			'nik' => $nikayh,
			'nm_ortu' => $nmayh,

			'kewarganegaraan' => $warganegara,
			'jk' => $jk,
			'email_ortu' => $email,

			'tgl_lhr' => $tgllhrayh,
			'tmp_lhr' => $tmplhrayh,
			'pendidikan' => $pendayh,

			'hp' => $nohp,
			'pekerjaan' => $kerjaayah,
			'alamat' => $almtayh,

			'agama' => $agamaayh,

			'agama' => $agamaayh,
			'penghasilan' => $hasilan,
			'foto' => $ftayh);
	}

	public function edit_ortu($id){
		$where = array('noindex' => $id);
		$data['ortu'] = $this->m_dataortu->edit_data($where,'ortu')->result();
		// $this->load->view('v_edit',$data);
		$data['konten']='tu/v_editortu';
		$this->load->view('tu/v_tu',$data);
	}

	function hapus_data_ortu($id){
		$where = array('noindex' => $id);
		$this->m_dataortu->hapus_data($where,'ortu');
		redirect('welcome/dataortu');
	}

	public function aksi_update_ortu(){
		$id = $this->input->post('id');
		$kodeayah = $this->input->post('kd_ortu');
		$kodesiswa = $this->input->post('kd_siswa');

		$nikayh = $this->input->post('nik');
		$nmayh = $this->input->post('nm_ortu');
		$warganegara = $this->input->post('kewarganegaraan');

		$jk = $this->input->post('jk');
		$email = $this->input->post('email_ortu');
		$pendayh = $this->input->post('pendidikan');

		$noayh = $this->input->post('hp');
		$almtayh = $this->input->post('alamat');
		$agamaayh = $this->input->post('agama');


		// echo $cek;
		$data = array(
			'kd_ortu' => $kodeayah,
			'kd_siswa' => $kodesiswa,
			'nik' => $nikayh,
			'nm_ortu' => $nmayh,

			'kewarganegaraan' => $warganegara,
			'jk' => $jk,
			'email_ortu' => $email,

			'hp' => $nohp,
			'agama' => $agamaayh

		);

		$where = array(
			'noindex' => $id
		);

		$this->m_dataortu->update_data($where,$data,'ortu');
		redirect('welcome/dataortu');
	}

	public function datasiswa()
	{
        // load view admin/overview.php
				$data['siswa'] = $this->m_datasiswa->getAll();
        $data['konten']='tu/v_datasiswa';
        $this->load->view('tu/v_tu',$data);
	}

	public function aksi_tambah_siswa()
	{
		$kelas = $this->input->post('kelas');
		$where = array('kd_kelas' => $kelas);
		$data['siswa'] = $this->m_datasiswa->findKelas($where,'siswa')->result();

		$kodesiswa = $this->input->post('kd_siswa');
		$nisn = $this->input->post('nisn');
		$nama = $this->input->post('nm_siswa');

		$alamat = $this->input->post('alamat_siswa');
		$jk = $this->input->post('jk');
		$tgllahir = $this->input->post('tgl_lhr');

		$tmptlahir = $this->input->post('tmp_lhr');
		$email = $this->input->post('email');

		$kdkelas = $this->input->post('kd_kelas');
		$nohp = $this->input->post('hp');
		$warganegara = $this->input->post('kewarganegaraan');

		$agama = $this->input->post('agama');
		$nmayh = $this->input->post('nm_ayah');

		$kelas = $this->input->post('kelas');
		$thnmasuk = $this->input->post('thnmasuk');


		$kdkelas = substr($kelas, 2,2); // kdoe kelas atau jurusan dlm kode (10)
		$nm_kelas = substr($kelas, 0,2);
		if ($kdkelas == 10) {
			$jurusan = 'IPA';
		} else {
			$jurusan = 'IPS';
		}

		$thn_msuk = substr($thnmasuk, 0,4);
		$thn_msuk_2 = substr($thnmasuk, 2,2);

		// $where = array(
		// 	'jurusan' => $jurusan,
		// 	'thnmasuk' => $thn_msuk
		// );
		$where = "jurusan="."'" .$jurusan. "' "." and year(thnmasuk)=".$thn_msuk;
		$cek = $this->m_datasiswa->cek_kode($where,'siswa')->num_rows();
		$jum = $cek +1;
 		if ($cek == 0) {
 			$kode = '001';
 		} elseif($cek < 10) { //2-9
 			$kode = '00'.$jum;
 		}elseif($cek < 100) {
 			$kode = '0'.$jum;
 		}else{
 			$kode = $jum;
 		}


		$kodesiswa = '06'.$kdkelas.$thn_msuk_2.$kode;

		 $data = array(
		 		'kd_siswa' => $kodesiswa,
		 		'nisn' => $nisn,
		 		'nm_siswa' => $nama,

		 		'kewarganegaraan' => $warganegara,
		 		'jk' => $jk,
		 	  'tgl_lhr' => $tgllahir,

		 		'tmp_lhr' => $tmptlahir,
		 		'email' => $email,
		 		'kelas' => $nm_kelas,


	 	   	'hp' => $nohp,
		 		'alamat_siswa' => $alamat,

		 		'agama' => $agama,
		 		'nm_ayah' => $nmayh,
		 		'jurusan' => $jurusan,
		 		'kd_kelas' =>  $this->input->post('kelas'),
		 		'thnmasuk' => $this->input->post('thnmasuk')

		 	);

		 $this->m_datasiswa->input_data($data,'siswa');


		 $user = array(
 		 		'username' 	=> $kodesiswa,
		 		'nama'		=> $nama,
				'password'	=> md5('123'),
		 		'jabatan'	=> 'siswa'
		 	);
			 $this->m_users->input_data($user,'users');

		 redirect('welcome/datasiswa');
	}

	public function edit_siswa($id){
		$where = array('noindex' => $id);
		$data['siswa'] = $this->m_datasiswa->edit_data($where,'siswa')->result();
	  	// $this->load->view('v_edit',$data);
	  	$data['kelas']	= $data['kelas'] = $this->m_kelas->getAll();
		$data['konten']='tu/v_editsiswa';
		$this->load->view('tu/v_tu',$data);
	}


	function hapus_data_siswa($id){
		$where = array('noindex' => $id);
		$this->m_datasiswa->hapus_data($where,'siswa');
		redirect('welcome/datasiswa');
	}

	public function aksi_update_siswa(){
		$id = $this->input->post('id');
		// $kodesiswa = $this->input->post('kode');
		
		$nisn = $this->input->post('nisn');
		$nama = $this->input->post('nama');

		$warganegara = $this->input->post('warganegara');
		$jk = $this->input->post('jk');
		$tgllahr = $this->input->post('tgllahr');

		$tmplahr = $this->input->post('tmplahr');
		$email = $this->input->post('email');
		$kelas = $this->input->post('kelas');

		$jurusan = $this->input->post('jurusan');
		$nohp = $this->input->post('nohp');
		$alamat = $this->input->post('alamat');

		$agama = $this->input->post('agama');
		$nmayh = $this->input->post('nmayh');
		// $nikayh = $this->input->post('nikayh');

		// $kerjaayh = $this->input->post('kerjaayh');
		// $tgllhrayh = $this->input->post('tgllhrayh');
		// $tmplhrayh = $this->input->post('tmplhrayh');

		// $pendayh = $this->input->post('pendayh');
		// $almtayh = $this->input->post('almtayh');
		// $hasilanayh = $this->input->post('hasilanayh');
		// $agamaayh = $this->input->post('agamaayh');

		$kdkelas = substr($kelas, 2,2); // kdoe kelas atau jurusan dlm kode (10)
		$nm_kelas = substr($kelas, 0,2);
		if ($kdkelas == 10) {
			$jurusan = 'IPA';
		} else {
			$jurusan = 'IPS';
		}

		$data = array(
			// 'kd_siswa' => $kodesiswa,
			
			'nisn' => $nisn,
			'nm_siswa' => $nama,

			'kewarganegaraan' => $warganegara,
			'jk' => $jk,
			'tgl_lhr' => $tgllahr,

			'tmp_lhr' => $tmplahr,
			'email' => $email,
			'kelas' => $kelas,

			'jurusan' => $jurusan,
			'hp' => $nohp,
			'alamat_siswa' => $alamat,

			'agama' => $agama,
			'nm_ayah' => $nmayh
			// 'nik_ayh' => $nikayh,

			// 'pekerjaan_ayh' => $kerjaayh,
			// 'tgl_lhrayh' => $tgllhrayh,
			// 'tmp_lhrayh' => $tmplhrayh,

			// 'pendidikan_ayh' => $pendayh,
			// 'alamat_ayh' => $almtayh,
			// 'penghasilan_ayh' => $hasilanayh,
			// 'agama_ayh' => $agamaayh

		);



		$where = array(
			'noindex' => $id
		);

		$this->m_datasiswa->update_data($where,$data,'siswa');
		redirect('welcome/datasiswa');
	}

}
