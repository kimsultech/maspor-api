<?php

	$server		= "localhost"; //sesuaikan dengan nama server
	$user		= "id13887120_maspordb"; //sesuaikan username
	$password	= "QDF#[3l]|kxqBlYh"; //sesuaikan password
	$database	= "id13887120_maspordatabase"; //sesuaikan target databese
	

	$con = mysqli_connect($server, $user, $password, $database);
		if (mysqli_connect_errno()) {
	echo "Gagal terhubung ke Server Database: " . mysqli_connect_error();
	}

?>