<div class="col-md-12">
  <div class="container-fluid">
    <div class="card-body">
      <table width="100%">
        <tr>
          <td width="50%" align="left">
            <h5 class="card-title mb-4">SOAL UJIAN</h5>
          </td>
          <td>
          </td>
        </tr>
      </table>
    </div>
    <form action="<?php echo base_url().'index.php/welcome/soal'; ?>"  method="post">
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
        <label class="col-sm-2 col-form-label">SOAL <small class="text-danger">*</small></label>
        <div class="col-sm-4">
          <select name="soal" class="form-control" required="">
            <option value="" selected="" disabled=""> Pilih ujian </option>
            <option value="uts"> UTS </option>
            <option value="uas"> UAS </option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label"> <small class="text-danger">*</small></label>
        <button type="submit" value="Cari" class="btn btn-primary"> Cari </button>
      </div>
    </form>
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="datatable" >

        <thead>
          <tr>
            <th >MATA PELAJARAN</th>
            <th ></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($soal as $soal): ?>
            <tr>
                <td><?php echo $soal->nm_mapel;?> </td>
                <td>
                 <?php echo anchor('welcome/tambahsoal/'.$soal->noindex,'Edit'); ?> |
                </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
 </div>
</div>
