<div class="col-md-12">
  <div class="container-fluid">
    <div class="card-body">
      <table width="100%">
        <tr>
          <td width="50%" align="left">
            <h5 class="card-title mb-4">Data Kehadiran Siswa</h5>
          </td>
        </tr>
      </table>
    </div>
    <pre>
      NISN    :986262624
      Nama    : <?php echo $this->session->userdata("nama"); ?>

      Kelas   :12 IPA 3
    </pre>
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="datatable" >

        <thead>
          <tr>
            <th >NO</th>
            <th >KODE MAPEL</th>
            <th >MATA PELAJARAN</th>
            <th >TANGGAL</th>
            <th >JAM</th>
            <th >KEHADIRAN</th>
          </tr>
        </thead>
        <tbody>

            <tr>
                <td>1 </td>
                <td>2 </td>
                <td>Matematika </td>
                <td>07 Juli 2021 </td>
                <td>12.00</td>
                <td>Hadir</td>
            </tr>
        </tbody>
      </table>
    </div>
 </div>
</div>
