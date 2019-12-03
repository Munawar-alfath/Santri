	<html>
<head>
	<title>Mata pelajaran</title>
</head>
	<body>
	<?php
	include 'koneksi.php';
	$ID  = $_GET['id'];
	$sql = "select * from matapelajaran where id= $ID";
	$result = mysqli_query($connect,$sql);
	$row	= mysqli_fetch_assoc($result);
	?>
	<form action="proses_edit.php" method="$POST">
	 <input type="hidden" name="id" value="<?php echo $ID; ?>">
	 Mata pelajran : <br>
	 <input type="text" name="mapel" value="<?php echo $row['mapel'];?>"><br>
	 <input type="submit" value="Submit">
	 </form>
	</body>
</html>
