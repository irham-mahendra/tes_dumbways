<?php  include ("koneksi.php");
	$result = mysqli_query($koneksi, "select * from heroes_tb order by id");
?>

<!DOCTYPE html>
<html>
<head>
	<title>no 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<mark><b>Daftar Hero Nanatsu No Taizai: </b></mark><br><br>
	<table border="1" cellspacing="0" width="50%">
		<tr>
			<td>id</td>
			<td>Nama Hero</td>
			<td>type</td>
			<td>photo</td>
			<td>aksi</td>
		</tr>
		<?php
		while ($heroes_data = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>".$heroes_data['id']."</td>";
					echo "<td>".$heroes_data['name']."</td>";
					echo "<td>".$heroes_data['type_id']."</td>";
					echo "<td>".$heroes_data['photo']."</td>";
					echo "<td><a href='update_heroes.php?id=$heroes_data[id]'>edit</a>
						<a href='delete_heroes.php?id=$heroes_data[id]'>delete</a>
						</td>";
				echo "</tr>";	
		}
		?>

	</table>
	<br><mark>klik <a href="add_hero.php">disini</a> untuk menambah hero</mark>
</body>
</html>