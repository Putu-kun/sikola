<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Tambah Nilai</h5>
		</div>
    <?php foreach($nilai as $ni){ ?>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_update_nilai'; ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" class="form-control" name="id" value="<?php echo $ni->noindex;?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nilai Tugas </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nilai_tgs" value="<?php echo $ni->nilai_tgs;?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nilai UTS </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nilai_uts" value="<?php echo $ni->nilai_uts;?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Nilai UAS</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nilai_uas" value="<?php echo $ni->nilai_uas;?>">
				</div>
			</div>


			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/datanilai');?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
    <?php } ?>
	</div>
</div>
