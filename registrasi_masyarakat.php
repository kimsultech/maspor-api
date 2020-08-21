<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nik = $_POST['nik_app'];
		$nama = $_POST['nama_app'];
		$username = $_POST['username_app'];
  $password = $_POST['password_app'];
  $telp = $_POST['telp_app'];

		$foto = $_POST['foto_profile_app'];
 
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO masyarakat (nik,nama,username, password,telp,foto_profile) VALUES ('$nik','$nama','$username','$password','$telp','$foto')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)) {

			echo 'Pendaftaran Berhasil, Silahkan Login';
		}else{
			echo 'Pendaftaran Gagal' .mysqli_error($con);
		}
		
		mysqli_close($con);
	}
?>