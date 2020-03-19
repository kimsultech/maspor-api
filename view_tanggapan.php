<?php
	
	include "koneksi.php";
	
  $id = $_GET['idpvt'];

	//creating a query
	$stmt = $con->prepare("SELECT id_tanggapan,id_pengaduan,tgl_tanggapan,tanggapan,id_petugas,nama_petugas FROM tanggapan INNER JOIN petugas USING (id_petugas) WHERE id_pengaduan  = '$id';");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($idtanggapan, $idpengaduan, $tgl, $tanggapan, $idpetugas, $nama);
	
	$viewtanggapan = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['id_tanggapan'] = $idtanggapan; 
		$temp['id_pengaduan'] = $idpengaduan; 
		$temp['tgl_tanggapan'] = $tgl; 
		$temp['tanggapan'] = $tanggapan; 
   $temp['id_petugas'] = $idpetugas; 
    $temp['nama_petugas'] = $nama; 
		array_push($viewtanggapan, $temp);
	}
	
	//displaying the result in json format
	echo json_encode($viewtanggapan);