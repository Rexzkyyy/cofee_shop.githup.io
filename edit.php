<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id_menu'];
$nmMenu = $_GET['nama_menu'];
$jmMenu = $_GET['jenis_menu'];
$stsMenu = $_GET['status_menu'];
$hrgMenu = $_GET['harga_menu'];



//query update
$query = "UPDATE menu SET nama_menu='$nmMenu' , jenis_menu='$jmMenu' , status_menu='$stsMenu' , harga_menu='$hrgMenu' WHERE id_menu='$id' ";

if (mysqli_query($conn, $query)) {
 # credirect ke page index
 header("location:index.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>