<?php
	
	include "koneksi.php";
	
  $id = $_GET['idp'];

	//creating a query
	$stmt = $con->prepare("SELECT id_petugas, nama_petugas, username, telp ,level, foto_petugas  FROM petugas WHERE id_petugas  = '$id';");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($id_petugas, $nama, $username, $telp, $tipe, $fotopetugas);
	
	$profile_petugas = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['id_petugas'] = $id_petugas; 
		$temp['nama'] = $nama; 
		$temp['username'] = $username; 
		$temp['telp'] = $telp; 
  $temp['tipe'] = $tipe;
  $temp['fotopetugas'] = $fotopetugas; 
		array_push($profile_petugas, $temp);
	}
	
	//displaying the result in json format
	echo json_encode($profile_petugas);