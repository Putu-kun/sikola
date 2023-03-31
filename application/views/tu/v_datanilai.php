<div class="col-md-12">
  <div class="container-fluid">
    <div class="card-body">
      <table width="100%">
        <tr>
          <td width="50%" align="left">
            <h5 class="card-title mb-4">Data Nilai Siswa</h5>
          </td>
          <td>
          </td>
        </tr>
      </table>
    </div>
    <form action="<?php echo base_url().'index.php/welcome/datanilai'; ?>"  method="post">
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
        <label class="col-sm-2 col-form-label"> Pilih Mata Pelajaran <small class="text-danger">*</small></label>
        <div class="col-sm-4">
          <select name="soal" class="form-control" required="">
            <option value="" selected="" disabled=""> Pilih ujian </option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label"> <small class="text-danger">*</small></label>
        <button type="submit" value="Cari" class="btn btn-primary"> Cari </button>
      </div>
    </form>

    <table class="table table-bordered table-striped" id="datatable" >
      <thead>
        <tr>
          <th >NO</th>
          <th >KODE SISWA</th>
          <th >NAMA SISWA</th>
          <th >KELAS</th>
          <th >KODE KELAS</th>
          <th >SEMESTER</th>
          <th >NILAI TUGAS</th>
          <th >NILAI UTS</th>
          <th >NILAI UAS</th>
          <th >KETERANGAN</th>
        </tr>
      </thead>
      <tbody>
          <?php $no=1;?>
          <?php foreach ($nilai as $nilai): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nilai->kd_siswa ?> </td>
                <td><?php echo $nilai->nm_siswa ?> </td>
                <td><?php echo $nilai->kelas ?> </td>
                <td><?php echo $nilai->kd_kelas ?> </td>
                <td><?php echo $nilai->semester ?> </td>
                <td><?php echo $nilai->nilai_tgs ?> </td>
                <td><?php echo $nilai->nilai_uts ?> </td>
                <td><?php echo $nilai->nilai_uas ?> </td>
                <td>
                  <?php echo anchor('welcome/edit_data_nilai/'.$nilai->noindex,'Edit'); ?> |
                   <?php echo anchor('welcome/hapus_data_nilai/'.$nilai->noindex,'Hapus'); ?>
                </td>
            </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
 </div>
</div>
