<?php
	$server = "localhost";
	$username = "root";
	$pass = "";
	$db = "db_codeigniterv2";
 
 	error_reporting(E_ALL ^ E_DEPRECATED);
	$koneksi = mysqli_connect($server,$username,$pass,$db) or die (mysqli_error());
	
?>