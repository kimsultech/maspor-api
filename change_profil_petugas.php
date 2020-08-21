<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$id = $_POST['id_app'];
		$nama = $_POST['namaubah_app'];
	 $telp = $_POST['telpubah_app'];
 

  $sql2 = "UPDATE petugas SET nama_petugas='$nama',telp='$telp' WHERE id_petugas=$id";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql2)) {

			echo 'Profil berhasil diubah';
		}else{
			echo 'Gagal mengubah Profil ' .mysqli_error($con);
		}

  
		
		mysqli_close($con);
	}
?>