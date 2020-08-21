<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$id = $_POST['id_app'];

		$foto = $_POST['fotop_app'];
		$foto_file = $_POST['fotop_file_app'];
		$fotoex = "$foto.jpg";
		$FotoPath = "foto/$foto.jpg";
 
		
		//Pembuatan Syntax SQL
		$sql = "UPDATE petugas SET foto_petugas='$fotoex' WHERE id_petugas=$id";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)) {
 file_put_contents($FotoPath,base64_decode($foto_file));
			echo 'Foto Profil berhasil diubah';
		}else{
			echo 'Gagal mengubah Foto Profil ' .mysqli_error($con);
		}
		
		mysqli_close($con);
	}
?>