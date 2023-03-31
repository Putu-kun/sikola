<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Tambah Siswa</h5>
		</div>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_tambah_siswa'; ?>" method="post" enctype="multipart/form-data">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KELAS <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="kelas" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih kelas </option>
						<?php
						foreach ($kelas as $key => $value) {
							$urut = substr($value->kd_kelas, 5);
							echo "<option value=".$value->kd_kelas.">" . $value->kelas . ' ' . $value->jurusan . ' '  . $urut .  "</option>";
						}
						?>
					</select>
				</div>
				<label class="col-sm-2 col-form-label">Agama <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="agama" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih Agama</option>
						<option > Islam </option>
						<option > Kristen </option>
						<option > Protestan </option>
						<option > Hindhu </option>
						<option > Budha </option>
					</select>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun Masuk <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control datepicker2" id="datepicker2"  name="thnmasuk" required="">
				</div>
				<label class="col-sm-2 col-form-label">NISN<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Masukan NISN Siswa" name="nisn" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Masukan Nama Siswa" name="nm_siswa" required="">
				</div>
				<label class="col-sm-2 col-form-label">Alamat <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<textarea name="alamat_siswa" class="form-control" placeholder="Masukan Alamat" required=""></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Tempat Lahir <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="tmp_lhr" required="">
				</div>
				<label class="col-sm-2 col-form-label">Tanggal Lahir <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control datepicker" placeholder="Masukan (yyyy-mm-dd)" id="datepicker" name="tgl_lhr" >
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kewarganegaraan <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="kewarganegaraan" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih Warganegara</option>
						<option > WNI </option>
						<option > WNA </option>
					</select>
				</div>
				<label class="col-sm-2 col-form-label">Jenis Kelamin <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="jk" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih Jenis Kelamin</option>
						<option value="L"> Laki-Laki</option>
						<option value="P"> Perempuan </option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> No HP <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Masukan No HP" name="hp" required="">
				</div>
				<label class="col-sm-2 col-form-label">E-Mail </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="email">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nama Ayah <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Masukan Nama Ayah" name="nm_ayah">
				</div>
				<label class="col-sm-2 col-form-label"> Foto Siswa </label>
				<div class="col-sm-4">
					<input type="file" class="btn btn-success mr-2" placeholder="Masukan Foto Siswa" name="foto">
				</div>
			</div>

			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/datasiswa');?>" class="btn btn-danger">Batal</a>
			</div>

		</form>
	</div>
</div>
