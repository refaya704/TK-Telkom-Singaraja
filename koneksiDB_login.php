<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db_name = "pendaftaran";

	$koneksi = mysqli_connect($host, $user, $password, $db_name);
	echo "GAGAL LOG-IN";
	header("location:login.html");

?>
