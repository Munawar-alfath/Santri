<html>
	<head>
		<title>ADD</title>
	</head>
	<body>
	<?php 
		include 'koneksi.php';
	?>
		<form action="proses_tambah.php" method="POST">
			<table class="adding">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td>
						<select name="sans">
							<?php 
								$sql="SELECT id,nama FROM usman";
								$result=mysqli_query($connect,$sql);
								while($row = mysqli_fetch_assoc($result)){
								?>
							<option value="<?php echo $row['id']; ?>">
								<?php echo $row['nama']; ?>
							</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Mapel</td>
					<td>:</td>
					<td>
						<select name="mapel_id">
							<?php 
								$sql1="SELECT id,mapel FROM matapelajaran";
								$result1=mysqli_query($connect,$sql1);
								while($rows = mysqli_fetch_assoc($result1)){
								?>
							<option value="<?php echo $rows['id']; ?>">
								<?php echo $rows['mapel']; ?>
							</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nilai</td>
					<td>:</td>
					<td>
						<input type="number" name="nilai_num">
					</td>
				</tr>
				<tr><td colspan="3">
					<input type="submit" value="submit">
				</tr></td>
			</table>
		</form>
	</body>
</html>
