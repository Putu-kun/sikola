<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Edit Kelas</h5>
		</div>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_update_kelas'; ?>" method="post" enctype="multipart/form-data">

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kelas <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="kelas" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih Kelas</option>
						<option > 10 </option>
						<option > 11 </option>
            <option > 12 </option>
					</select>
				</div>
        <label class="col-sm-2 col-form-label">Jurusan <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="jurusan" class="form-control" required="">
						<option value="" selected="" disabled=""> Pilih Jurusan</option>
						<option value="10"> IPA </option>
						<option value="11"> IPS </option>
					</select>
				</div>
      </div>

			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/kelas');?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
	</div>
</div>
