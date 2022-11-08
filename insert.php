<?php
//add dbconnect

include('dbconnect.php');

$nmMenu = $_POST['nama_menu'];
$jmMenu = $_POST['jenis_menu'];
$stsMenu = $_POST['status_menu'];
$hrgMenu = $_POST['harga_menu'];

//query

$query =  "INSERT INTO menu(nama_menu , jenis_menu , status_menu , harga_menu) VALUES('$nmMenu' , '$jmMenu' , '$stsMenu' , '$hrgMenu')";

if (mysqli_query($conn , $query)) {
 # code redicet setelah insert ke index
 header("location:index.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>