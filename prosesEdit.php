<head>
    <style>
		Body  { background-image:  url(images/bg5.jpg); 
			width: 100%;
			min-height: 100vh; 
			background-position: center;
			background-size: cover;}
    </style>
    </head>
<?php
	include "config.php";
	
	$id = $_GET['id'];
	$username = $_GET['username'];
	$email = $_GET['email'];
	$password = $_GET['password'];

	$sql= "UPDATE Users SET username='$username', email='$email', password='$password'
			WHERE id='$id'";
	
	if (mysqli_query($conn, $sql)){
		echo "Berhasil Update Data";
	?>
		<a href="homeadmin.php"> Lihat Data </a>
	<?php
	}
	else{
		echo "Gagal Update Data".mysqli_connect_error();
	}
	mysqli_close($conn);
?>
			
			