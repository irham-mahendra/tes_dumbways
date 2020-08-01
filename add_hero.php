<!DOCTYPE html>
<html>
<head>
	<title>tambah siswa</title>
</head>
<body>
	<form name="form1" method="post" action="add_hero.php">
		<table>
			<tr>
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type_id"></td>
			</tr>
			<tr>
				<td>photo</td>
				<td><input type="file" name="photo"></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="submit" value="tambah">
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$type_id = $_POST['type_id'];
			$photo = $_POST['photo'];

				include("koneksi.php");
				$result = mysqli_query($koneksi,"insert into heroes_tb(id,name,type_id,photo)values('$id','$name','$type_id','$photo')");	


			 echo "berhasil ditambahkan <a href=index.php>lihat disini</a>";
		}
	?>
</body>
</html>