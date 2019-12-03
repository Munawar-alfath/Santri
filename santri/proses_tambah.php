<?php
include 'koneksi.php';
$nama		= $_POST['nama'];
$email  = $_POST['email'];
$password = $_POST['password'];
$date = $_POST['date'];

$sql = "INSERT INTO usman (nama, email, password, date) VALUES ('$nama','$email','$password','$date')";
mysqli_query($connect, $sql);

header('location:index.php');
?>
