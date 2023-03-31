<?php 
		include 'koneksi.php';
		?>
 <div class="container-fluid">
  <br><h3>Ujian Akhir Semester</h3><br>

  <caption class="title">
		Disini adalah tempat siswa melakukan ujian akhir semester. Silahkan klik mulai ujian pada mata pelajaran yang diujikan saat ini.
        <br></caption>

        <div align="center" class="jumbotron" >
   
<div align="left">
   <div class="container-fluid">
		<table class="demo-table responsive" >
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Mata Pelajaran</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Jam</th>
				<th scope="col">Keterangan</th>
			</tr>
		</thead>
		<?php 
			$no = 1;
 
			
				$sql = mysqli_query($koneksi,"select * from mapel where jurusan='IPA' limit 1 ");
			
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nm_mapel']; ?></td>
				<td> </td>
				<td> </td>
				<td><a href="<?php echo base_url('index.php/welcome/soaluas');?>"  class="btn btn-primary">Mulai&nbsp;&nbsp;Ujian </a></td>
			</tr>
            <?php } ?>

<?php 
			$no = 2;
 
			
			$sql = mysqli_query($koneksi,"select * from mapel where jurusan='IPA' limit 1,10 ");
			
			
			while($data = mysqli_fetch_array($sql)){
			?>
            <tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nm_mapel']; ?></td>
				<td> </td>
				<td> </td>
				<td><a href="#"  class="btn btn-primary">Belum Ujian</a></td>
			</tr>
<?php } ?>
			</table>
      </div>
    </div>


</div>
</div>