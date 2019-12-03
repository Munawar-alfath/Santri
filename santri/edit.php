	<html>
<head>
	<title>Edit Data</title>
</head>
	<body>
	<?php
	include 'koneksi.php';
	$ID  = $_GET['id'];
	$sql = "select * from usman where id= $ID";
	$result = mysqli_query($connect,$sql);
	$row	= mysqli_fetch_assoc($result);
	?>
	<from action="proses_edit.php" method="POST">
	 <input type="hidden" name="id" value="<?php echo $ID; ?>">
	 NAMA : <br>
	 <input type="text" name="name" value="<?php echo $row['nama'];?>"><br>
	 Email : <br>
	 <input type="email" name="email" value="<?php echo $row['email'];?>"><br>
	 Password : <br>
	 <input type="password" name="password" value="<?php echo $row['password'];?>"><br>
	 Tanggal Lahir : <br>
	 <input type="date" name="date" value="<?php echo $row['date'];?>"><br>
	 
	 <input type="submit" value="submit">
	 </from>
	</body>
</html>
