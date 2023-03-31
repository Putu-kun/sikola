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
            <h5 class="card-title mb-4">Data Mata Pelajaran</h5>
          </td>
          <td>
            <div align="right">
              <a href="<?php echo base_url('index.php/welcome/tambahmapel');?>"  class="btn btn-primary btn-sm">Tambah</a>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <table class="table table-bordered table-striped" id="datatable" >

      <thead>
        <tr>
          <th >NO</th>
          <th >KODE MAPEL</th>
          <th >NAMA MAPEL</th>
          <th >FILE MAPEL</th>
          <th >KETERANGAN</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1;?>
        <?php foreach ($mapel as $m): ?>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $m->kd_mapel ?> </td>
              <td><?php echo $m->nm_mapel ?> </td>
              <td> </td>

              <td>
               <?php echo anchor('welcome/editmapel/'.$m->noindex,'Edit'); ?> |
                <?php echo anchor('welcome/hapus_data_guru/'.$m->noindex,'Hapus'); ?>
              </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
 </div>
</div>
