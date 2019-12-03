<?php
include 'koneksi.php';
$mapel		= $_POST['mapel'];
$sql = "INSERT INTO matapelajaran (mapel) VALUES ('$mapel')";
mysqli_query($connect, $sql);
header('location:index.php');
?>
