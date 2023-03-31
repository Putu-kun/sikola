<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Tambah Soal </h5>
		</div>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_soal_tambah'; ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" class="form-control" name="soal_id" required="" value="<?php echo $id;?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">SOAL <small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<textarea name="soal" class="form-control" placeholder="Soal" required=""></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">A<small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Pilihan A" name="a" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">B <small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Pilihan B" name="b" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">C <small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Pilihan C" name="c" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">D<small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Pilihan D" name="d" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">JAWABAN<small class="text-danger">*</small></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Masukan Kunci Jawaban A, B, C, D" name="jawaban" required="">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> GAMBAR</label>
				<div class="col-sm-10">
					<input type="file" class="" placeholder="Masukan Gambar Jika Ada" name="gambar">
				</div>
			</div>

			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/tambahsoal/'.$id);?>" class="btn btn-danger">Batal</a>
			</div>

		</form>
	</div>
</div>
