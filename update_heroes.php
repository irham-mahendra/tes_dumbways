<?php
	include("koneksi.php");

	
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$type_id = $_POST['type_id'];
		$photo = $_POST['photo'];

	
		$result = mysqli_query($koneksi, "update heroes_tb set id='$id', name='$name',
		type_id='$type_id', photo='$photo' where id=$id ");

	
		header("Location: index.php");
	}
?>

<?php
	$id = $_GET['id'];

	$result = mysqli_query($koneksi,"select * from heroes_tb where id=$id");

	while ($heroes_data = mysqli_fetch_array($result)) {
		$id = 	$heroes_data['id'];
		$name = $heroes_data['name'];
		$type_id = $heroes_data['type_id'];
		$photo = $heroes_data['photo'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update heroes</title>
</head>
<body>
	<form name="update_heroes" method="post" action="update_heroes.php">
		<table border="0">
			<tr>
				<td>id</td>
				<td><input type="text" name="id" value=<?php echo $id;?>></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>type</td>
				<td><input type="text" name="type_id" value=<?php echo $type_id;?>></td>
			</tr>
			<tr>
				<td>photo</td>
				<td><input type="file" name="photo" value=<?php echo $photo;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>	
	</form>
	<a href="index.php">kembali</a>

</body>
</html>