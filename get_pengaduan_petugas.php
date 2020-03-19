<?php  
 include 'koneksi.php'; 
 $hasil         = mysqli_query($con, "SELECT * FROM pengaduan INNER JOIN masyarakat USING (nik) ORDER BY (tgl_pengaduan) DESC") or die(mysqli_error());
 $json_response = array();
 
if(mysqli_num_rows($hasil)> 0){
 while ($row = mysqli_fetch_array($hasil)) {
     $json_response[] = $row;
 }
 echo json_encode(array('listpengaduanpetugas' => $json_response));
} 
?>