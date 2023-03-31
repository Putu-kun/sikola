<div class="col-md-12">
	<div class="container-fluid">
		<div class="card-body">
			<h5 class="card-title mb-4">Form Edit Orang Tua</h5>
		</div>
		<?php foreach($ortu as $ot){ ?>
		<form class="forms-sample" action="<?php echo base_url().'index.php/welcome/aksi_update_ortu'; ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $ot->noindex ?>">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Orang Tua <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="kodeortu" readonly="" value="<?php echo $ot->kd_ortu;?>">
				</div>
				<label class="col-sm-2 col-form-label">Kode Siswa <small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="kodesiswa" required="" value="<?php echo $ot->kd_siswa;?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Orang Tua<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nmayh" value="<?php echo $ot->nm_ortu;?>">
				</div>
				<label class="col-sm-2 col-form-label">Nama Siswa<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="nmsiswa" required="" value="<?php echo $ot->nm_siswa;?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK </label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="nikayh" value="<?php echo $ot->nik;?>">
				</div>
        <label class="col-sm-2 col-form-label">Kewarganegaraan </label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="warganegara" value="<?php echo $ot->kewarganegaraan;?>">
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
        <label class="col-sm-2 col-form-label">E-Mail </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="email" value="<?php echo $ot->email_ortu;?>">
				</div>
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label"> Tempat Lahir </label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="tmplhrayh" value="<?php echo $ot->tmp_lhr;?>">
				</div>
				<label class="col-sm-2 col-form-label">Tanggal Lahir </label>
				<div class="col-sm-4">
					<!-- <input type="text" class="form-control"  name="email" > -->
					<input type="text" class="form-control datepicker" id="datepicker" name="tgllhrayh" value="<?php echo $ot->tgl_lhr;?>">
				</div>
			</div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir<small class="text-danger">*</small></label>
				<div class="col-sm-4">
					<select name="pendayh" class="form-control" required="">
						<option><?php echo $ot->pendidikan;?></option>
						<option > SMA </option>
						<option > D3 </option>
						<option > D4 </option>
						<option > S1 </option>
						<option > S2 </option>
						<option > S3 </option>
					</select>
				</div>
        <label class="col-sm-2 col-form-label"> No HP </label>
				<div class="col-sm-4">
					<input type="text" class="form-control"  name="noayh" value="<?php echo $ot->hp;?>">
				</div>
      </div>

      <div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan </label>
				<div class="col-sm-4">
					<textarea name="pekerjaanayh" class="form-control" > <?php echo $ot->pekerjaan;?></textarea>
				</div>
          <label class="col-sm-2 col-form-label">Alamat </label>
				<div class="col-sm-4">
					<textarea name="alamatayh" class="form-control" > <?php echo $ot->alamat;?></textarea>
				</div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Agama <small class="text-danger">*</small></label>
        <div class="col-sm-4">
        <select name="agamaayh" class="form-control" required="">
          <option> <?php echo $ot->agama;?> </option>
          <option > Islam </option>
          <option > Kristen </option>
          <option > Protestan </option>
          <option > Hindhu </option>
          <option > Budha </option>
        </select>
        </div>
        <label class="col-sm-2 col-form-label">Penghasilan </label>
				<div class="col-sm-4">
					<input type="text" name="hasilan" class="form-control" value="<?php echo $ot->penghasilan;?>">
				</div>
			</div>

			<div class="ibox-footer text-right">
				<button type="submit" class="btn btn-success mr-2">Simpan</button>
				<a href="<?php echo base_url('index.php/welcome/dataortu');?>" class="btn btn-danger">Batal</a>
			</div>
		</form>
		<?php } ?>
	</div>
</div>
