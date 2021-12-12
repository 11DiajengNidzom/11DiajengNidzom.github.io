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
	
	$sql= "DELETE FROM users WHERE id='$id'";
	
	if (mysqli_query($conn, $sql)){
		echo "Data berhasil dihapus";
	?>
		<a href="homeadmin.php"> Lihat Data </a>
	<?php
	}
	else{
		echo "Data gagal dihapus".mysqli_connect_error();
	}
	mysqli_close($conn);
?>
			
			