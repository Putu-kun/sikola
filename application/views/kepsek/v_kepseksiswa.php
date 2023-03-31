<style>
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
</style>


<div class="col-md-12">
  <div class="container-fluid">
    <div class="card-body">
      <table width="100%">
        <tr>
          <td width="50%" align="left">
            <h5 class="card-title mb-4">Data Siswa</h5>
            <td>
            </td>
          </td>
          <td>
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
          <option value="10ipa"> X IPA  </option>
          <option value="10ips"> X IPS </option>
          <option value="11ipa"> XI IPA </option>
          <option value="11ips"> XI IPS </option>
          <option value="12ipa"> XII IPA </option>
          <option value="12ips"> XII IPS </option>
        </select>
      </div>
    </div>
  <td>
  </td>
    <table class="table table-bordered table-striped" id="datatable" >

      <thead>
        <tr>
          <th >NO</th>
          <th >KODE SISWA</th>
          <th >KELAS</th>
          <th >JURUSAN</th>
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
      </thead>
      <tbody>
        <?php $no=1;?>
        <?php foreach ($siswa as $siswa): ?>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $siswa->kd_siswa ?> </td>
              <td><?php echo $siswa->kelas ?> </td>
              <td><?php echo $siswa->jurusan ?> </td>
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
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
    <br><br><br><br><br><br><br><br>
 </div>
</div>
</div>
