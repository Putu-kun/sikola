<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Tambah Nilai</h5>
		</div>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_tambah_nilai'; ?>" method="post" enctype="multipart/form-data">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nilai Tugas </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Nilai Tugas" name="nilai_tgs" >
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nilai UTS </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Nilai UTS" name="nilai_uts" >
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nilai UAS</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Nilai UAS" name="nilai_uas" >
				</div>
			</div>


			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/datanilai');?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
	</div>
</div>
