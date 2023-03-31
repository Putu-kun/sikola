<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Tambah Orang Tua</h5>
		</div>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_tambah_ortu'; ?>" method="post" enctype="multipart/form-data">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun Masuk <small class="text-danger">*</small></label>
				<div class="col-sm-4">
				<input type="text" class="form-control datepicker2" id="datepicker2"  name="thnmasuk" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Orang Tua<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Masukan Kode Ortu" name="kd_ortu" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">kode Siswa <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Masukan Kode Siswa" name="kd_siswa" required="">
				</div>
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Masukan NIK Ortu" name="nik" required="">
				</div>
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Orang Tua <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Masukan Nama Ortu" name="nm_ortu" required="">
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
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">E-Mail </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="email">
				</div>
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir orang Tua<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control datepicker" placeholder="Masukan (yyyy-mm-dd)" id="datepicker" name="tgl_lhr" >
				</div>
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label"> Tempat Lahir Orang Tua <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="tmp_lhr" required="">
				</div>
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir<small class="text-danger">*</small></label>
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
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label"> No HP <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Masukan No HP" name="hp" required="">
				</div>
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Pekerjaan Ortu" name="pekerjaan" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat <small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<textarea name="alamat" class="form-control" placeholder="Alamat" required=""></textarea>
				</div>
			</div>

			<div class="form-group row">
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
				<label class="col-sm-2 col-form-label"> Penghasilan<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Penghasilan ortu" name="penghasilan" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Foto</label>
				<div class="col-sm-4">
					<input type="file" class="btn btn-success mr-2" placeholder="Masukan Foto Ortu" name="fotoortu">
				</div>
			</div>

			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/dataortu');?>" class="btn btn-danger">Batal</a>
			</div>

		</form>
	</div>
</div>
