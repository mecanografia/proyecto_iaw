<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		// updating the table
		$stmt = mysqli_prepare($mysqli, "UPDATE users SET name=?,age=?,email=? WHERE id=?");
		mysqli_stmt_bind_param($stmt, "sisi", $name, $age, $email, $id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_free_result($stmt);
		mysqli_stmt_close($stmt);
		// redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>

<?php
// getting id from url
$id = $_GET['id'];
// selecting data associated with this particular id
$stmt = mysqli_prepare($mysqli, "SELECT name, age, email FROM users WHERE id=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $name, $age, $email);
mysqli_stmt_fetch($stmt);
mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);
mysqli_close($mysli);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>