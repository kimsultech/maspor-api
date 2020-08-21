<?php
	
	include "koneksi.php";
	
  $id = $_GET['idpv'];

	//creating a query
	$stmt = $con->prepare("SELECT nik,nama,tgl_pengaduan,isi_laporan,foto,status,foto_profile FROM pengaduan INNER JOIN masyarakat USING (nik) WHERE id_pengaduan  = '$id';");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($idnik, $nama, $tgl, $isilaporan, $foto, $status, $fotop);
	
	$viewpengaduan = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['id_nik'] = $idnik; 
		$temp['nama'] = $nama; 
		$temp['tgl_pengaduan'] = $tgl; 
		$temp['isi_laporan'] = $isilaporan; 
   $temp['foto'] = $foto; 
    $temp['status'] = $status; 
   $temp['fotop'] = $fotop; 
		array_push($viewpengaduan, $temp);
	}
	
	//displaying the result in json format
	echo json_encode($viewpengaduan);