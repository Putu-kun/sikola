<!-- <style>
div.scrollmenu {

  overflow: auto;
  white-space: nowrap;
  position:
}

div.scrollmenu a {
  display: inline-block;
  text-align: center;
  text-decoration: none;
}

div.scrollmenu a:hover {
  text-decoration: underline;
}
</style> -->


<div class="col-md-12">
  <div class="container-fluid">
    <div class="card-body">
      <table width="100%">
        <tr>
          <td width="50%" align="left">
            <h5 class="card-title mb-4">Data Siswa</h5>
          </td>
          <td>
            <div align="right">
              <a href="<?php echo base_url('index.php/welcome/tambahsiswa');?>"  class="btn btn-primary btn-sm">Tambah</a>
            </div>
          </td>
        </tr>
      </table>
    </div>

    <div class="scrollmenu">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">KELAS <small class="text-danger">*</small></label>
        <div class="col-sm-4">
          <select name="kelas" class="form-control" required="">
           <option value="" selected="" disabled=""> Pilih kelas </option>
           <?php
           foreach ($kelas as $key => $value) {
            echo "<option value=".$value->kelas.">" . $value->kelas . ' ' . "</option>";
          }
          ?>
        </select>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table" id="datatable" >
        <thead>
          <tr>
            <th >NO</th>
            <th >KODE SISWA</th>
            <th >KELAS</th>
            <th >TAHUN MASUK</th>
            <th >NISN</th>
            <th >NAMA</th>
            <th >ALAMAT</th>
            <th >TEMPAT LAHIR</th>
            <th >TANGGAL LAHIR</th>
            <th >KEWARGANEGARAAN</th>
            <th >JENIS KELAMIN</th>
            <th >AGAMA</th>
            <th >NO HP</th>
            <th >EMAIL</th>
            <th >NAMA AYAH</th>
            <th >KETERANGAN</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1;?>
          <?php foreach ($siswa as $siswa): ?>
            <tr>
              <?php
                $urutan = substr($siswa->kd_kelas, 4);
              ?>
              <td><?php echo $no++; ?></td>
              <td><?php echo $siswa->kd_siswa ?> </td>
              <td><?php echo $siswa->kelas ?> <?php echo $siswa->jurusan ?> <?php echo $urutan ?> </td>
              <td><?php echo $siswa->thnmasuk ?> </td>
              <td><?php echo $siswa->nisn ?> </td>
              <td><?php echo $siswa->nm_siswa ?> </td>
              <td><?php echo $siswa->alamat_siswa ?> </td>
              <td><?php echo $siswa->tmp_lhr ?> </td>
              <td><?php echo $siswa->tgl_lhr ?> </td>
              <td><?php echo $siswa->kewarganegaraan ?> </td>
              <td><?php echo $siswa->jk ?> </td>
              <td><?php echo $siswa->agama ?> </td>
              <td><?php echo $siswa->hp ?> </td>
              <td><?php echo $siswa->email ?> </td>
              <td><?php echo $siswa->nm_ayah ?> </td>
              <td>
                <?php echo anchor('welcome/edit_siswa/'.$siswa->noindex,'Edit'); ?> |
                <?php echo anchor('welcome/hapus_data_siswa/'.$siswa->noindex,'Hapus'); ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <br><br><br><br><br><br><br><br>
  </div>
</div>
