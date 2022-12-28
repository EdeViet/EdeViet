<?php
 $dbhost = '103.18.6.166';
 $dbuser = 'u5lz3t7f_edeviet';
 $dbpass = 'Ede^_Viet@13#01';
 $db = 'u5lz3t7f_danhsachtu';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn); 


$conn->query("set names 'utf8'");

date_default_timezone_set('Asia/Ho_Chi_Minh');

$day = date("d");
$month = date("m");
$year = date("Y");
$time = date("H:i:s");
$hour = date("H");

if (!$conn) {
	echo "Kết nối tới Database lỗi!";
 }
?>