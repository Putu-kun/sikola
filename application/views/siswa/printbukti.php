<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
    <style type="text/css">
        .table-data{
            width: 100%;
            border-collapse: : collapse;
        }

        .table-data tr th,
        .table-data tr td{
            border:1px solid black;
            font-size: 10pt;
        }
    </style>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
    include "koneksi.php";

       if(isset($_POST['submit'])){
            $pilihan=$_POST["pilihan"];
            $id_soal=$_POST["id"];
            $jumlah=$_POST['jumlah'];

            $score=0;
            $benar=0;
            $salah=0;
            $kosong=0;

            for ($i=0;$i<$jumlah;$i++){
                //id nomor soal
                $nomor=$id_soal[$i];

                //jika user tidak memilih jawaban
                if (empty($pilihan[$nomor])){
                    $kosong++;
                }else{
                    //jawaban dari user
                    $jawaban=$pilihan[$nomor];

                    //cocokan jawaban user dengan jawaban di database
                   $sql = "SELECT * FROM tbl_soal WHERE id_soal='$nomor' AND kunci='$jawaban'";
                    $query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));


                    $cek = mysqli_num_rows($query);

                if($cek){
                    // jika jawaban cocok (benar)
                    $benar++;
                } else {
                    // jika salah
                    $salah++;
                }

            }
                /*RUMUS
                Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan
                hasil= 100 / jumlah soal * jawaban yang benar
                */


                $sql = "SELECT * FROM tbl_soal WHERE aktif='Y'";
                $query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
                $jumlah_soal = mysqli_num_rows($query);
                $score = 20 * $benar;
                $hasil = number_format($score,1);
                $jumlahsalah = $salah+$kosong;
                $jumlahsoal = $salah+$kosong+$benar;
                $nama = $this->session->userdata("nama");
            }
        }

        //Lakukan Penyimpanan Kedalam Database
        ?>

        <div class="container-fluid">
  <br>
   <img src="img/7.png" width="70px" align="left"/><h4>&nbsp;SMAS SANDIKTA Bekasi</h4> <h5>&nbsp;BUKTI UJIAN TENGAH SEMESTER ONLINE</h5><hr  >
   <br><center>Terima Kasih Anda Telah Mengerjakan Soal Ujian Tengah Semester</center><br>

        <div  style="padding: 5px" width="500px" class="jumbotron" >
        <div align="left">

<?php

echo "
<pre>
    <br>
    NISN                    :
    Nama                    : $nama
    Kelas                   :
    Mata Pelajaran          :
    Waktu Ujian             :
    Jumlah Soal             : $jumlahsoal
    Jumlah Jawaban Benar    : $benar
    Jumlah Jawaban Salah    : $salah
    Jumlah Jawaban Kosong   : $kosong
    Jumlah Kesalahan        : $jumlahsalah
    Jumlah Score            : $score
    <br><br><br>
</pre>
 ";?></div>
    </div>
    <style>
    p {
        font-size: 13px;
    }

    .a {position: relative;  display: inline-block; font-family: Magneto; color:    #696969; }

</style>

    <center>Ini Adalah Bukti Bahwa Anda Telah Mengikuti Ujian Tengah Semester Secara Online</center><br><br>
    <center> <img src="img/barcode.png" width="100px"><br><br>
    <p ><i>Security Code : b34f744dSaf0fd53be29c4be681c83b</i></p></center>
<br>
<br><br><br>
<div><hr class="a" width="85%" align="left"><div class="a"> &nbsp;&nbsp;&nbsp;E-Learning</div>

<br><br><br>

</div>
</div>

</body></html>
