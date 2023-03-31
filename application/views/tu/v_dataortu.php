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
            <h5 class="card-title mb-4">Data Orang Tua</h5>
          </td>
          <td>
            <div align="right">
              <a href="<?php echo base_url('index.php/welcome/tambahortu');?>"  class="btn btn-primary btn-sm">Tambah</a>
            </div>
          </td>
        </tr>
      </table>
    </div>

  <td>
  </td>
  <div class="scrollmenu">
    <table class="table table-bordered table-striped" id="datatable" >

      <thead>
        <tr>
          <th> NO</th>
          <th> KODE ORANG TUA</th>
          <th> KODE SISWA</th>
          <th> NAMA ORANG TUA</th>
          <th> NAMA SISWA</th>
          <th> NIK ORANG TUA</th>
          <th> KEWARGANEGARAAN</th>
          <th> JENIS KELAMIN</th>
          <th> EMAIL</th>
          <th> TANGGAL LAHIR</th>
          <th> TEMPAT LAHIR</th>
          <th> PENDIDIKAN</th>
          <th> NO HP</th>
          <th> PEKERJAAN</th>
          <th> ALAMAT</th>
          <th> AGAMA</th>
          <th> PENGHASILAN</th>
          <th> FOTO</th>
          <th> KETERANGAN</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1;?>
        <?php foreach ($ortu as $ortu): ?>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $ortu->kd_ortu ?> </td>
              <td><?php echo $ortu->kd_siswa ?> </td>
              <td><?php echo $ortu->nm_ortu ?> </td>
              <td><?php echo $ortu->nm_siswa ?> </td>
              <td><?php echo $ortu->nik ?> </td>
              <td><?php echo $ortu->kewarganegaraan ?> </td>
              <td><?php echo $ortu->jk ?> </td>
              <td><?php echo $ortu->email_ortu ?> </td>
              <td><?php echo $ortu->tgl_lhr ?> </td>
              <td><?php echo $ortu->tmp_lhr ?> </td>
              <td><?php echo $ortu->pendidikan ?> </td>
              <td><?php echo $ortu->hp ?> </td>
              <td><?php echo $ortu->pekerjaan ?> </td>
              <td><?php echo $ortu->alamat ?> </td>
              <td><?php echo $ortu->agama ?> </td>
              <td><?php echo $ortu->penghasilan ?> </td>
              <td><?php echo $ortu->foto ?> </td>
              <td>
                <?php echo anchor('welcome/edit_ortu/'.$ortu->noindex,'Edit'); ?> |
                <?php echo anchor('welcome/hapus_data_ortu/'.$ortu->noindex,'Hapus'); ?>
              </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <br><br><br><br><br><br><br><br>
 </div>
</div>
</div>
