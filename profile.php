<?php
	
	include "koneksi.php";

 $id = $_GET['idm'];
	
	//creating a query
	$stmt = $con->prepare("SELECT nik, nama, username, telp FROM masyarakat WHERE nik  = '$id';");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($id_nik, $nama, $username, $telp);
	
	$profile = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['id_nik'] = $id_nik; 
		$temp['nama'] = $nama; 
		$temp['username'] = $username; 
		$temp['telp'] = $telp; 
		array_push($profile, $temp);
	}
	
	//displaying the result in json format
	echo json_encode($profile);