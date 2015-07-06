<?php
$host="localhost";
$user="root";
$pass="1234qwer";
$db="berita";
$connect = mysql_connect($host,$user,$pass);
if($connect){
mysql_select_db($db);
} else {
echo "gagal";
}
?>