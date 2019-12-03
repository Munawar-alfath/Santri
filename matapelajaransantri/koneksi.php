<?php
$servername = "localhost";
$username   = "root";
$password   = "1";
$dbname			= "santri";
$connect = mysqli_connect($servername, $username, $password, $dbname);
if (!$connect) {
	die("conekction failed:" . mysqli_connect_error());}
$sql = "CREATE TABLE mapel_santri(
	id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	santri_id INT,
	mapel_id INT,
	nilai_angka INT NOT NULL,
	nilai_huruf VARCHAR(3)
)";
mysqli_query($connect, $sql);
?>
