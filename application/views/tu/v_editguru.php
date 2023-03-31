<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Edit Guru</h5>
		</div>
		<?php foreach($guru as $u){ ?>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_update_guru'; ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $u->noindex ?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Guru <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="kode" readonly="" value="<?php echo $u->kd_guru;?>">
				</div>
				<label class="col-sm-2 col-form-label">Nama Guru <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nama" required="" value="<?php echo $u->nm_guru;?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nip" value="<?php echo $u->nip;?>">
				</div>
				<label class="col-sm-2 col-form-label">NUPTK<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nuptk" required="" value="<?php echo $u->nuptk;?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Tempat Lahir </label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="tmptlahir" value="<?php echo $u->tmp_lhr;?>">
				</div>
				<label class="col-sm-2 col-form-label">Tanggal Lahir </label>
				<div class="col-sm-4">
					<!-- <input type="text" class="form-control"  name="email" > -->
					<input type="text" class="form-control datepicker" id="datepicker" name="tgllahir" value="<?php echo $u->tgl_lhr;?>">
				</div>
			</div>
			<div class="form-group row">

				<label class="col-sm-2 col-form-label">Pendidikan <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="pendidikan" class="form-control" required="">
						<option><?php echo $u->pendidikan;?></option>
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
					<input type="text" name="jusrusan" class="form-control" value="<?php echo $u->jurusan;?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat </label>
				<div class="col-sm-4">
					<textarea name="alamat" class="form-control" > <?php echo $u->alamat;?></textarea>
				</div>
				<label class="col-sm-2 col-form-label">Kewarganegaraan <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="warganegara" class="form-control" required="">
						<option> <?php echo $u->kewarganegaraan;?> </option>
						<option > WNI </option>
						<option > WNA </option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> No HP </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nohp" value="<?php echo $u->hp;?>">
				</div>
				<label class="col-sm-2 col-form-label">E-Mail </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="email" value="<?php echo $u->email;?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="jk" class="form-control" required="">
						<?php
							if ($u->jk == 'L') {
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
				<label class="col-sm-2 col-form-label">Agama <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="agama" class="form-control" required="">
						<option> <?php echo $u->agama;?> </option>
						<option > Islam </option>
						<option > Kristen </option>
						<option > Protestan </option>
						<option > Hindhu </option>
						<option > Budha </option>

					</select>
				</div>
			</div>

			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/dataguru');?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
		<?php } ?>
	</div>
</div>
