<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$id = $_POST['id_app'];
		$new_pw = $_POST['newpw'];
 

  $sql2 = "UPDATE masyarakat SET password='$new_pw' WHERE nik=$id";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql2)) {

			echo 'Kata Sandi di Ubah';
		}else{
			echo 'Gagal mengubah Kata Sandi ' .mysqli_error($con);
		}

  
		
		mysqli_close($con);
	}
?>