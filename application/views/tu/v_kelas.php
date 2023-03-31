<div class="col-md-12">
  <div class="container-fluid">
    <div class="card-body">
      <table width="100%">
        <tr>
          <td width="50%" align="left">
            <h5 class="card-title mb-4">Data Kelas</h5>
          </td>
          <td>
            <div align="right">
              <a href="<?php echo base_url('index.php/welcome/tambahkelas');?>"  class="btn btn-primary btn-sm">Tambah</a>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <table class="table table-bordered table-striped" id="datatable" >

      <thead>
        <tr>
          <th >NO</th>
          <th >Kode Kelas</th>
          <th >KELAS</th>
          <th >KETERANGAN</th>
        </tr>
      </thead>
        <tbody>
          <?php $no=1;?>
          <?php foreach ($kelas as $kelas): ?>
            <tr>
                <?php
                  $urut = substr($kelas->kd_kelas, 5);
                ?>
                <td><?php echo $no++; ?></td>
                <td><?php echo $kelas->kd_kelas ?> </td>
                <td><?php echo $kelas->kelas ?> <?php echo $kelas->jurusan ?> <?php echo $urut;?></td>
                <td>
                  <?php echo anchor('welcome/edit/'.$kelas->noindex,'Edit'); ?> |
                   <?php echo anchor('welcome/hapus_kelas/'.$kelas->noindex,'Hapus'); ?>
                </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
 </div>
</div>
