<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Tambah Mata Pelajaran</h5>
		</div>
		<form class="forms-sample" action="" method="post" enctype="multipart/form-data">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Mapel <small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Kode Mata Pelajaran" name="kode_mapel" required="">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Mapel<small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Nama Mata Pelajaran" name="nm_mapel" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KELAS <small class="text-danger">*</small></label>
					<div class="col-sm-4">
						<select name="kelas" class="form-control" required="">
							<option value="" selected="" disabled=""> Pilih kelas </option>
							<?php
								foreach ($kelas as $key => $value) {
										echo "<option value=".$value->kelas.">" . $value->kelas . ' ' . $value->jurusan . "</option>";
								}
							?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label"> File </label>
					<div class="col-sm-4">
						<input type="file" class="btn btn-success mr-2" placeholder="Masukan File" name="file">
					</div>
				</div>

			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/datamapel');?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
	</div>
</div>
