<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$idpeng = $_POST['id_pengaduan_app'];
		$tgltang = $_POST['tgl_tanggapan_app'];
		$tang = $_POST['tanggapan_app'];
  $idpetu = $_POST['id_petugas_app'];

		$status = $_POST['status_app'];
 
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tanggapan (id_tanggapan,id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) VALUES (null,'$idpeng','$tgltang','$tang','$idpetu')";

  $sql2 = "UPDATE pengaduan SET status='$status' WHERE id_pengaduan=$idpeng";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)) {

			echo 'Tanggapan Terkirim';
		}else{
			echo 'Gagal mengirimkan Tanggapan ' .mysqli_error($con);
		}

  

  mysqli_query($con,$sql2);
		
		mysqli_close($con);
	}
?>