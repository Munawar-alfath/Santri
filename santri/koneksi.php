<?php
$servername = "localhost";
$username   = "root";
$password   = "1";
$dbname			= "santri";
$connect = mysqli_connect($servername, $username, $password, $dbname);
if (!$connect) {
	die("conekction failed:" . mysqli_connect_error());}
$sql = "CREATE TABLE usman(
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
date DATE
)";
mysqli_query($connect, $sql);
?>
