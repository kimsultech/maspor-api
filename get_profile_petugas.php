<?php
	
	include "koneksi.php";
	
  $id = $_GET['idp'];

	//creating a query
	$stmt = $con->prepare("SELECT id_petugas, nama_petugas, username, telp ,level  FROM petugas WHERE username  = '$id';");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($id_petugas, $nama, $username, $telp, $tipe);
	
	$profile_petugas = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['id_petugas'] = $id_petugas; 
		$temp['nama'] = $nama; 
		$temp['username'] = $username; 
		$temp['telp'] = $telp; 
  $temp['tipe'] = $tipe; 
		array_push($profile_petugas, $temp);
	}
	
	//displaying the result in json format
	echo json_encode($profile_petugas);