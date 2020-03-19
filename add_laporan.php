<?php


	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$tgl_pengaduan = $_POST['tgl_pengaduan_app'];
		$nik = $_POST['nik_app'];
		$isi_laporan = $_POST['isi_laporan_app'];
  $status = $_POST['status'];

		$foto = $_POST['foto_app'];
		$foto_file = $_POST['foto_file_app'];
		$fotoex = "$foto.jpg";
		$FotoPath = "image/$foto.jpg";
 
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO pengaduan (id_pengaduan,tgl_pengaduan,nik,isi_laporan,foto,status) VALUES (null,'$tgl_pengaduan','$nik','$isi_laporan','$fotoex','$status')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)) {
 file_put_contents($FotoPath,base64_decode($foto_file));
			echo 'Laporan Terkirim';
		}else{
			echo 'Gagal mengirimkan Laporan ' .mysqli_error($con);
		}
		
		mysqli_close($con);
	}
?>