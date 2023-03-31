<div class="col-md-12">
  <div class="container-fluid">
    <div class="card-body">
      <table width="100%">
        <tr>
          <td width="50%" align="left">
            <h5 class="card-title mb-4">Absen Siswa</h5>
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
            <th >KODE SISWA</th>
            <th >NAMA</th>
            <th >ABSENSI</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1;?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td>kode</td>
                <td>nama</td>
                <td>
                  <input id="toggle-on" class="toggle-left" name="toggle" value="false" type="radio" checked>
                  <label for="toggle-on" class="tombolbtn">Yes</label>
                  <input id="toggle-off" class="toggle-right" name="toggle" value="true" type="radio">
                  <label for="toggle-off" class="tombolbtn">No</label>
                </td>
            </tr>
            <tr>
                <td><?php echo $no++; ?></td>
                <td>kode</td>
                <td>nama</td>
                <td>
                  <input id="toggle-on" class="toggle-left" name="toggle" value="false" type="radio" checked>
                  <label for="toggle-on" class="tombolbtn">Yes</label>
                  <input id="toggle-off" class="toggle-right" name="toggle" value="true" type="radio">
                  <label for="toggle-off" class="tombolbtn">No</label>
            </tr>
            <tr>
                <td><?php echo $no++; ?></td>
                <td>kode</td>
                <td>nama</td>
                <td>
                  <input id="toggle-on" class="toggle-left" name="toggle" value="false" type="radio" checked>
                  <label for="toggle-on" class="tombolbtn">Yes</label>
                  <input id="toggle-off" class="toggle-right" name="toggle" value="true" type="radio">
                  <label for="toggle-off" class="tombolbtn">No</label>
                  <input type="submit" value="Simpan Absen">
                </td>
            </tr>
        </tbody>
      </table>
    </div>
 </div>
</div>
