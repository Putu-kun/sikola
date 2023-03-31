<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SIKOLA</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">


	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>

</head>

<body>

	<div class="d-flex" id="wrapper">
		<div id="page-content-wrapper">

			<div class="kotak_login">
				<center> <img src="<?php echo base_url('img/7.png');?>" width="100px"> </center>
				<center> <p class="tulisan_login">Silahkan Login</p> </center>

				<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert alert-danger alert-danger'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
				}else if($_GET['pesan'] == "logout"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-success'>";
						echo $this->session->flashdata('Anda Telah Logout');
						echo "</div>";
					}
					//echo "<div class='alert alert-success'>Anda telah logout.</div>";
				}else if($_GET['pesan'] == "belumlogin"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-primary'>";
						echo $this->session->flashdata('alert');
						echo "</div>";
					}
					//echo "<div class='alert alert-primary'>Silahkan login dulu.</div>";
				}
			}else{
				if($this->session->flashdata())
				{
					echo "<div class='alert alert-danger alert-message'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
				}
			}
		?>

				<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">

					<div>
					<label>Username</label>
					<input type="text" name="username" class="form_login" placeholder="Username atau Id ..">
					<?php echo form_error('username'); ?>
					</div>

					<div>
					<label>Password</label>
					<input type="password" name="password" class="form_login" placeholder="Password ..">
					<?php echo form_error('password'); ?>
					</div>

					<div>
					<label>Jabatan</label>

					<select name="jabatan" class="form_login" required="">
						<option value="" selected="" disabled=""> Pilih Jabatan </option>
						<option value="kepsek"> Kepala Sekolah </option>
						<option value="guru"> Guru </option>
						<option value="tu"> Tata Usaha </option>
						<option value="siswa"> Siswa </option>
						<option value="ortu"> Orang Tua </option>
					</select>
					<?php echo form_error('jabatan'); ?>
					</div>

					<input type="submit" value="Login" class="tombol_login">
					<br/>

				</form>

			</div>

		</div>
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<script type="text/javascript">
	$('.alert-message').alert().delay(3000).slideUp('slow');
</script>

		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
	</div>

</body>

</html>
