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
    <div align="right">
      <a href="<?php echo base_url('index.php/welcome/soaltambah/'.$id);?>"  class="btn btn-primary btn-sm">Tambah</a>
    </div>
    
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="datatable" >

        <thead>
          <tr>
            <th >NO</th>
            <th >SOAL</th>
            <th >A</th>
            <th >B</th>
            <th >C</th>
            <th >D</th>
            <th >JAWABAN</th>
            <th >GAMBAR</th>
            <th >KETERANGAN</th>
          </tr>
        </thead>
        <tbody>
          <?php $no =1;?>
           <?php foreach ($soal as $soal): ?>
            <tr>
                <td> <?php echo $no++ ;?>
                <td> <?php echo $soal->soal;?></td>
                <td> <?php echo $soal->a;?></td>
                <td> <?php echo $soal->b;?></td>
                <td> <?php echo $soal->c;?></td>
                <td> <?php echo $soal->d;?></td>
                <td> <?php echo $soal->kunci;?></td>
                <td> <?php echo $soal->gambar;?></td>
                <td> <?php echo $soal->aktif;?></td>
                
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
