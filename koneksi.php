<?php

	$server		= "localhost"; //sesuaikan dengan nama server
	$user		= "root"; //sesuaikan username
	$password	= ""; //sesuaikan password
	$database	= "pengaduan_masyarakat"; //sesuaikan target databese
	

	$con = mysqli_connect($server, $user, $password, $database);
		if (mysqli_connect_errno()) {
	echo "Gagal terhubung ke Server Database: " . mysqli_connect_error();
	}

?>