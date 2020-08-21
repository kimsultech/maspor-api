<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$idpeng = $_POST['id_pengaduan_app'];

		$status = $_POST['status_app'];
 
		
		//Pembuatan Syntax SQL
		$sql = "UPDATE pengaduan SET status='$status' WHERE id_pengaduan=$idpeng";

		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)) {

			echo 'Laporan Pengaduan Selesai';
		}else{
			echo 'terjadi kegagalan ' .mysqli_error($con);
		}

  
		
		mysqli_close($con);
	}
?>