<?php
include 'koneksi.php';

$santri_id = $_POST['sans'];
$mapel_id = $_POST['mapel_id'];
$nilai_angka = $_POST['nilai_angka'];

if ($nilai_angka >= 0 && $nilai_angka<=100) {
	$nilai_huruf='A';
}
else {$nilai_huruf = 'X';}
$sql = "INSERT INTO mapel_santri (santri_id,mapel_id,nilai_angka,nilai_huruf) VALUES ('$santri_id','$mapel_id','$nilai_angka,'$nilai_huruf')";
$result = mysqli_query($connect,$sql);
header('location:index.php'); 
