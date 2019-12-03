<?php
include 'create_table.php';
$ID = $_POST['id'];
$santri_id = $_POST['sans'];
$mapel_id = $_POST['mapel_id'];
$nilai_num = $_POST['nilai_num'];

$sql = "UPDATE mapel_santri SET santri_id = '$santri_id', mapel_id = '$mapel_id', nilai_num = '$nilai_num' WHERE id = '$ID'";

mysqli_query($connect,$sql);
header('location:index.php');

?
