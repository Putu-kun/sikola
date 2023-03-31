<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Edit TU</h5>
		</div>
		<form class="forms-sample" action="" method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode TU <small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Kode TU" name="kode" required="">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP<small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan NIP TU" name="nip" required="">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama <small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Nama TU" name="nama" required="">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat </label>
				<div class="col-sm-10">
					<textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> No HP </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan No HP" name="nohp" >
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin <small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<select name="jk" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih Jenis Kelamin</option>
						<option value="L"> Laki-Laki</option>
						<option value="P"> Perempuan </option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Tanggal Lahir </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Tanggal Lahir" name="tgl_lhr" >
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Tempat Lahir </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Tempat Lahir" name="tmp_lhr" >
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama <small class="text-danger">*</small></label>
				<div class="col-sm-10">
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
				<div class="col-sm-10">
					<input type="file" class="form-control" placeholder="Masukan No HP" name="nohp">
				</div>
			</div>
			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/profiltu');?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
	</div>
</div>