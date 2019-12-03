<html>
	<head>
		 <title>Latihan</title>
	</head>
	<body>
		<a href="tambah.php">Tambah data</a>
		<br>
		<br>
		<table border="1" cellpadding="10">
		 <tr>
		  <td>NO</td>
		  <td>Nama</td>
		  <td>Mapel</td>
		  <td>Nilai angka</td>
		  <td>Nilai huruf</td>
		  <td></td>
		 </tr>
		 <?php
		 include 'koneksi.php';
		 $nomor =1;
		 $sql		="SELECT * FROM mapel_santri";
		 $result = mysqli_query($connect,$sql);
		 if( mysqli_num_rows($result)>0 ){
		 while ($row = mysqli_fetch_assoc($result)){
		 echo "
		 <tr>
		 	<td>".$nomor++."</td>
		 	<td>".$row['nama']."</td>
		 	<td>".$row['mapel']."</td>
		 	<td>".$row['nilai_angka']."</td>
		 	<td>".$row['nilai_huruf']."</td>
		 	<td>
		 		<a href='edit.php?id=".$row['id']."'>Edit</a>
		 		<a href='delete.php?id=".$row['id']."'onclick='javascript:return confirm(\"apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
		 	</td>
		 </tr>
		 	";
		 	}
		 }
		 ?>	
		</table>
	</body>
</html>		 
