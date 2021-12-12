<html>
<head>
	<title>Edit Product</title>
</head>
<style>
	Body  { background-image:  url(images/bg5.jpg); 
    width: 100%;
    min-height: 100vh; 
    background-position: center;
    background-size: cover;}
</style>
<body>
		<?php
			include "config.php";
			$id = $_GET['id'];
			$query = "SELECT * FROM Users WHERE id='$id'";
			$result = mysqli_query($conn, $query);
		?>
		<table>
			<form method="GET" action="prosesEdit.php">
			<?php
				while($row=mysqli_fetch_array($result)){
			?>
			<tr>
				<td> ID </td>
				<td> <input type="number" name="id" value="<?php echo $row['id'];?>" readonly></td>
			</tr>
			<tr>
				<td> Username </td>
				<td> <input type="text" name="username" value="<?php echo $row['username'];?>"></td>
			</tr>
			<tr>
				<td> Email </td>
				<td> <input type="email" name="email" value="<?php echo $row['email'];?>"></td>
			</tr>
			<tr>
				<td> Password </td>
				<td> <input type="password" name="password" value="<?php echo $row['password'];?>"></td>
			</tr>
			<tr>
				<td> <input type="submit" name="edit" value="Edit Data"></td>
			</tr>
			<?php
				}
			?>
			</form>
		</table>
	</body>
</html>