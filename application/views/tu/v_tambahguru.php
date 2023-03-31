<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Tambah Guru</h5>
		</div>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_tambah_guru'; ?>" method="post" enctype="multipart/form-data">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Guru <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nama" required="">
				</div>

				<label class="col-sm-2 col-form-label">Tahun Masuk <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control datepicker2" id="datepicker2"  name="thnmasuk" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nip" required="">
				</div>
				<label class="col-sm-2 col-form-label">NUPTK<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nuptk" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Tempat Lahir </label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="tmptlahir" >
				</div>

				<label class="col-sm-2 col-form-label">Tanggal Lahir </label>
				<div class="col-sm-4">
					<!-- <input type="text" class="form-control"  name="email" > -->
					<input type="text" class="form-control datepicker" id="datepicker" name="tgllahir" >
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="pendidikan" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih Pendidikan</option>
						<option > SMA </option>
						<option > D3 </option>
						<option > D4 </option>
						<option > S1 </option>
						<option > S2 </option>
						<option > S3 </option>
					</select>
				</div>

				<label class="col-sm-2 col-form-label">Jurusan </label>
				<div class="col-sm-4">
					<input type="text" name="jusrusan" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat </label>
				<div class="col-sm-4">
					<textarea name="alamat" class="form-control" ></textarea>
				</div>
				<label class="col-sm-2 col-form-label">Kewarganegaraan <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="warganegara" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih Warganegara</option>
						<option > WNI </option>
						<option > WNA </option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> No HP </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nohp" >
				</div>

				<label class="col-sm-2 col-form-label">E-Mail </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="email" >
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="jk" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih Jenis Kelamin</option>
						<option value="L"> Laki-Laki</option>
						<option value="P"> Perempuan </option>
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
				<label class="col-sm-2 col-form-label"> Foto </label>
				<div class="col-sm-4">
					<input type="file" class="btn btn-success mr-2" placeholder="Masukan Foto" name="gambar">
				</div>
			</div>

			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/dataguru');?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
	</div>
</div>
