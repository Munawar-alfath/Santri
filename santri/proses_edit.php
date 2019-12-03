<?php
include 'koneksi.php';
$ID = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$date = $_POST['date'];

$sql = "UPDATE usman SET nama ='$nama', email = '$email', password = '$password', date = '$date' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
