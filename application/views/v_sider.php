 <div class="bg-light border-right" id="sidebar-wrapper">
 	<div class="sidebar-heading">
    <img src="<?php echo base_url()?>img/7.png" alt="logo" height="28" width="28">&nbsp;

    <?php echo $this->session->userdata("jabatan"); ?>

     <br>


 	</div>
 	<div class="list-group list-group-flush">
 		<?php
    if ($this->session->userdata("jabatan") == 'Kepala Sekolah') {
  ?>
    <a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
    <a href="<?php echo base_url('index.php/profilkepsek');?>" class="list-group-item list-group-item-action bg-light">Profil</a>
    <a href="<?php echo base_url('index.php/profilkepsek/kepseksiswa');?>" class="list-group-item list-group-item-action bg-light">Data Siswa</a>
    <a href="<?php echo base_url('index.php/profilkepsek/kepsekguru');?>" class="list-group-item list-group-item-action bg-light">Data Guru</a>

  <?php
}elseif ($this->session->userdata("jabatan") == 'Guru') {
 		?>
 			<a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
      <a href="<?php echo base_url('index.php/profilguru/profilguru');?>" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="<?php echo base_url('index.php/profilguru');?>" class="list-group-item list-group-item-action bg-light">Mata Pelajaran</a>
			<a href="<?php echo base_url('index.php/profilguru/absen');?>" class="list-group-item list-group-item-action bg-light">Absensi Siswa</a>
 		<?php
  }elseif ($this->session->userdata("jabatan")=='Tata Usaha') {
 		?>
 			<a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
       <a href="<?php echo base_url('index.php/welcome/profiltu');?>" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="<?php echo base_url('index.php/welcome/datasiswa');?>" class="list-group-item list-group-item-action bg-light">Data Siswa</a>
      <a href="<?php echo base_url('index.php/welcome/dataortu');?>" class="list-group-item list-group-item-action bg-light">Data Orang Tua</a>
      <a href="<?php echo base_url('index.php/welcome/dataguru');?>" class="list-group-item list-group-item-action bg-light">Data Guru</a>
      <a href="<?php echo base_url('index.php/welcome/kelas');?>" class="list-group-item list-group-item-action bg-light">Kelas</a>
      <a href="<?php echo base_url('index.php/welcome/datanilai');?>" class="list-group-item list-group-item-action bg-light">Nilai</a>
      <a href="<?php echo base_url('index.php/welcome/soal');?>" class="list-group-item list-group-item-action bg-light">Soal</a>
      <a href="<?php echo base_url('index.php/welcome/datamapel');?>" class="list-group-item list-group-item-action bg-light">Mata Pelajaran</a>
      <?php
   }elseif ($this->session->userdata("jabatan")=='Siswa') {
      ?>
      <a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light" span class="glyphicon glyphicon-envelope">Beranda</a>
       <a href="<?php echo base_url('index.php/welcome/profilsiswa');?>" class="list-group-item list-group-item-action bg-light">Profil</a>
      <a href="<?php echo base_url('index.php/welcome/absensiswa');?>" class="list-group-item list-group-item-action bg-light">Absen</a>
      <a href="<?php echo base_url('index.php/welcome/nilaisiswa');?>" class="list-group-item list-group-item-action bg-light">Nilai</a>

      <a href="#" class="list-group-item list-group-item-action bg-light nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ujian Online </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item list-group-item list-group-item-action bg-light" href="<?php echo base_url('index.php/welcome/mauuts');?>">Ujian Tengah Semester</a>
                <a class="dropdown-item list-group-item list-group-item-action bg-light" href="<?php echo base_url('index.php/welcome/mauuas');?>">Ujian Akhir Semester</a>
              </div>
      <?php
    }elseif ($this->session->userdata("jabatan")=='Orang Tua') {
   		?>
      <a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
       <a href="<?php echo base_url('index.php/profilortu');?>" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="<?php echo base_url('index.php/kanak');?>" class="list-group-item list-group-item-action bg-light">Absensi Anak</a>
      <a href="<?php echo base_url('index.php/raport');?>" class="list-group-item list-group-item-action bg-light">Nilai Anak</a>




 		<?php
 			}else{
 		?>
 			<a href="<?php echo base_url('index.php');?>" class="list-group-item list-group-item-action bg-light">Beranda</a>
       <a href="<?php echo base_url('index.php/welcome/profilortu');?>" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Profil</a>
	 		<a href="#" class="list-group-item list-group-item-action bg-light">Perkembangan Anak</a>


 		<?php
 			}
 		?>

 		<a href="<?php echo base_url('index.php/login/logout'); ?>" class="list-group-item list-group-item-action bg-light">Logout</a>
 	</div>
 </div>
