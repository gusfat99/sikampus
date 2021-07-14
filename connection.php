<?php 
	//membuat koneksi database mysql
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "sikampus";

	$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// var_dump($connect);
	if(!$connect){
		die("Koneksi dengan database gagal ".mysqli_connect_errno(). " - ". mysqli_connect_error());
	}

	//macam macam dubugging di php
	// var_dump();
	// var_export();
	// print_r();
	// echo 
?>