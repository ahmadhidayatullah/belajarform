<?php
include "koneksi.php";
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$q = "INSERT INTO `article` VALUES('','".$judul."','".$isi."')";
$q2 = mysql_query($q);
if($q2){
	echo "berhasil masuk";
} else {
	echo "gagal";
}

?>