<?php
$servername = "localhost";
$username   = "root";
$password   = "1";
$dbname			= "santri";
$connect = mysqli_connect($servername, $username, $password, $dbname);
if (!$connect) {
	die("conekction failed:" . mysqli_connect_error());}
$sql = "CREATE TABLE matapelajaran(
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
mapel VARCHAR(30) NOT NULL
)";
mysqli_query($connect, $sql);
?>
