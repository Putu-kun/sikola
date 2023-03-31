 <div class="container-fluid">

 <div class="container-fluid">
 	<br>
  <a class="btn btn-info btn-lg" href="<?php echo base_url().'index.php/welcome/print_nilai' ?>">
  <span class="glyphicon glyphicon-print"></span>
Print</a>
  <br>
  <br><br><br>
   <center><img src="<?php echo base_url()?>img/7.png" width="70px" align="left"/><h3>&nbsp;SMAS Sandikta Bekasi</h3> <h7>&nbsp;JL. RAYA HANKAM NO.208  Kec. Jatirahayu Kota Bekasi Prov. Jawa Barat 17423</h7> <br> <h7>Telp.021 846 65 69, e-mail : smasandikta.bekasi@yahoo.com</h7> </center><hr  >
   <br>


  <br><h3>Nilai Ujian Siswa</h3><br>
        <div align="center" class="jumbotron" >

   <div align="left">
   <div class="container-fluid">

		<caption class="title"><pre>
						          NISN	   :
        		                                  Nama	   : <?php echo $this->session->userdata("nama"); ?>

        		                                  kelas    : 12 IPA 3

        </pre></caption>

			<table class="demo-table responsive" >
      <thead>
        <tr>
          <th >NO</th>
          <th >MATA PELAJARAN</th>
          <th >SEMESTER</th>
          <th >NILAI TUGAS</th>
          <th >NILAI UTS</th>
          <th >NILAI UAS</th>

        </tr>
      </thead>
      <tbody>

            <tr>
                <td align="center"> 1 </td>
                <td> Matematika </td>
                <td align="center"> 1 </td>
                <td align="center"> 80 </td>
                <td align="center"> 78 </td>
                <td align="center"> 85 </td>

            </tr>

             <tr>
                <td align="center"> 2 </td>
                <td> Bahasa Inggris </td>
                <td align="center"> 1 </td>
                <td align="center"> 88 </td>
                <td align="center"> 80 </td>
                <td align="center"> 85 </td>

            </tr>

      </tbody>
    </table>

      </div>
    </div>
</div>
</div>
</tbody>
</table>
</div>
</div>
</div>
<style>
    p {
        font-size: 13px;
    }

    .a {position: relative;  display: inline-block; font-family: Magneto; color:    #696969; }

    h3 { line-height:16px;  }

</style>

	<pre>
	<p>        Kategori Nilai :
         a. Sangat Baik  = 85 -100
         b. Baik              = 70 - 85
         c. Cukup           = 55 - 70
         d. Kurang          = 0 - 55</p> </pre>

    <center> <p>Security Print Key :</p> <img src="<?php echo base_url()?>img/barcode2.png" width="100px"><br><br>
    <p ><i>(Pengolahan Data Nilai Ujian Siswa Menggunakan Web Ini adalah sah)</i></p></center>
<br>

<div><hr class="a" width="75%" align="left"><img src="<?php echo base_url()?>img/7.png" width="60px" class="a"><div class="a">E-Learning</div><hr class="a" width="8%" align="left">

<br><br><br>
</div>
</div>
