<?php 
	$id_soal		= $_POST('id_soal');
	$pilihan		= $_POST('pilihan');

	include "koneksiDB.php";
	mysql_query("insert into soaljwb(id_soal, jawaban) values (
		'$id_soal',
		'$pilihan')") or die("Menyimpan Data GAGAL <meta http.equiv*refresh content=3;url=v_input.php>");
	echo "Menyimpan Data Berhasil <meta http.equiv*refresh content=3;url=v_input.php>";
?>