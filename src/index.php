<?php
// including the database connection file
include_once("config.php");
// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM usuario ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>
<a href="login/index.php">Area de Administracion</a><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Id</td>
		<td>Nombre</td>
		<td>Password</td>
		<td>Email</td>
		<td>Update</td>
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['nombre']."</td>";
		echo "<td>".$res['password']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
		<a href=\"delete.php?id=$res[id]\" 
		onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	mysqli_close($msqli);
	?>
	</table>
</body>
</html>