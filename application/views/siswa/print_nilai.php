<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
.table-data{
	width: 100%;
	border-collapse: collapse;
}

.table-data tr th,
.table-data tr td{
	border:1px solid black;
	font-size: 10pt;
}


    p {
        font-size: 13px;

    }

    .a {position: relative;  display: inline-block; font-family: Magneto; color:    #696969; }

     h3 { line-height:0px;  }

     .d {line-height: 14px;}

     hr { line-height: 24px; }

</style>


 <div class="container-fluid">

 <div class="container-fluid">

  <br>
   <center><img src="<?php echo base_url()?>img/7.png" width="70px" align="left"/><h3>&nbsp;SMAS SANDIKTA BEKASI</h3> <p class="d">&nbsp;JL. RAYA HANKAM NO.208 Kec. Jatirahayu Kota Bekasi Prov. Jawa Barat 17423 <br><br>Telp.(021) 846 65 69, e-mail : smasandikta.bekasi@yahoo.com</p> </center><hr  >
   <br>


  <br><h3>Nilai Ujian Siswa</h3><br>
        <div align="center" class="jumbotron" >

   <div align="left">

<caption class="title">

<pre>		 					NISN	:
        	 					Nama	: <?php echo $this->session->userdata("nama"); ?>

        	 					Kelas	:
        </pre></caption>

   <div class="container-fluid">
		<table class="table-data">

        <center>
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
</center>
      </div>
    </div>
</div>
</div>
</tbody>
</table>
</div>
</div>
</div>


	<pre>
	<p>Kategori Nilai :
a. Sangat Baik	= 85 -100
b. Baik		= 70 - 85
c. Cukup	= 55 - 70
d. Kurang	= 0 - 55</p> </pre>

    <center> <p>Security Print Key :</p> <img src="<?php echo base_url()?>img/barcode2.png" width="100px"><br><br>
    <p ><i>(Pengolahan Data Nilai Ujian Siswa Menggunakan Web Ini adalah sah)</i></p></center>
<br>

<div><hr class="a" width="70%" align="left"><img src="<?php echo base_url()?>img/persis.jpg" width="50px" class="a"><div class="a">E-Learning</div><hr class="a" width="7%" align="left">

<br><br><br>
</div>
</div>

<script type="text/javascript">
	window.print();
</script>

</body>
</html>
