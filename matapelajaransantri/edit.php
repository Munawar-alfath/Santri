<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		include 'koneksi.php';
	?>
		<form action="edit_proccess.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			<table class="adding">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td>
						<select name="sans">
							<?php 
								$sql="SELECT id,name FROM santri";
								$result=mysqli_query($connect,$sql);
								while($row = mysqli_fetch_assoc($result)){
								?>
							<option value="<?php echo $row['id']; ?>">
								<?php echo $row['name']; ?>
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
								include 'create_table.php';
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
				<tr><td colspan="3"><label>
					<input type="submit">
					</label>
				</tr></td>
			</table>
		</form>
</body>
</html>
