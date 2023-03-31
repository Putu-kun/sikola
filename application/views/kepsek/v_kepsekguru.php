<div class="col-md-12">
  <div class="container-fluid">
    <div class="card-body">
      <table width="100%">
        <tr>
          <td width="50%" align="left">
            <h5 class="card-title mb-4">Data Guru</h5>
          </td>
          <td>
          </td>
        </tr>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="datatable" >

        <thead>
          <tr>
            <th >NO</th>
            <th >KODE GURU</th>
            <th >NIP</th>
            <th >NAMA</th>
            <th >ALAMAT</th>
            <th >NO. HP</th>
            <th >JENIS KELAMIN</th>
            <th >AGAMA</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1;?>
          <?php foreach ($guru as $guru): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $guru->kd_guru ?> </td>
                <td><?php echo $guru->nip ?> </td>
                <td><?php echo $guru->nm_guru ?> </td>
                <td><?php echo $guru->alamat ?> </td>
                <td><?php echo $guru->hp ?> </td>
                <td><?php echo $guru->jk ?> </td>
                <td><?php echo $guru->agama ?> </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
 </div>
</div>
