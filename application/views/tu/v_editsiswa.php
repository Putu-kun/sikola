<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Edit Siswa</h5>
		</div>
		<?php foreach($siswa as $si){ ?>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_update_siswa'; ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $si->noindex ?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode siswa <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="kodesiswa" readonly="" value="<?php echo $si->kd_siswa;?>">
				</div>
				<label class="col-sm-2 col-form-label">Nama Siswa <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nama" required="" value="<?php echo $si->nm_siswa;?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KELAS <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="kelas" class="form-control" required="">
						<option value="<?php echo $si->kelas;?> <?php echo $si->jurusan ?>" selected="" disabled=""> <?php echo $si->kelas;?> </option>
						<?php
						foreach ($kelas as $key => $value) {
							$urut = substr($value->kd_kelas, 5);
							echo "<option value=".$value->kd_kelas.">" . $value->kelas . ' ' . $value->jurusan . ' '  . $urut .  "</option>";
						}
						?>
					</select>
				</div>
				<label class="col-sm-2 col-form-label">Nama Orang Tua <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nmayh" required="" value="<?php echo $si->nm_ayah;?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NISN </label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="nisn" value="<?php echo $si->nisn;?>">
				</div>
         <label class="col-sm-2 col-form-label">Jenis Kelamin <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="jk" class="form-control" required="">
						<?php
							if ($si->jk == 'L') {
						?>
							<option value="L"> Laki-Laki</option>
							<option value="P"> Perempuan </option>
						<?php
							} else {
						?>
							<option value="P"> Perempuan </option>
							<option value="L"> Laki-Laki</option>
						<?php
							}
						?>
					</select>
				</div>
			</div>

			<div class="form-group row">
        <label class="col-sm-2 col-form-label">E-Mail </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="email" value="<?php echo $si->email;?>">
				</div>
        <label class="col-sm-2 col-form-label"> Tempat Lahir </label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="tmplahr" value="<?php echo $si->tmp_lhr;?>">
				</div>
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir </label>
				<div class="col-sm-4">
					<!-- <input type="text" class="form-control"  name="email" > -->
					<input type="text" class="form-control datepicker" id="datepicker" name="tgllahr" value="<?php echo $si->tgl_lhr;?>">
				</div>
				<label class="col-sm-2 col-form-label"> No HP </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nohp" value="<?php echo $si->hp;?>">
				</div>
			</div>

      <div class="form-group row">
       <label class="col-sm-2 col-form-label">Alamat </label>
				<div class="col-sm-4">
					<textarea name="alamat" class="form-control" > <?php echo $si->alamat_siswa;?></textarea>
				</div>
          <label class="col-sm-2 col-form-label">Agama <small class="text-danger">*</small></label>
        <div class="col-sm-4">
        <select name="agama" class="form-control" required="">
          <option> <?php echo $si->agama;?> </option>
          <option > Islam </option>
          <option > Kristen </option>
          <option > Protestan </option>
          <option > Hindhu </option>
          <option > Budha </option>
        </select>
        </div>
      </div>

      <div class="form-group row">
          <label class="col-sm-2 col-form-label">Kewarganegaraan <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="warganegara" class="form-control" required="">
						<option> <?php echo $si->kewarganegaraan;?> </option>
						<option > WNI </option>
						<option > WNA </option>
					</select>
				</div>
			</div>

			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/datasiswa');?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
		<?php } ?>
	</div>
</div>
