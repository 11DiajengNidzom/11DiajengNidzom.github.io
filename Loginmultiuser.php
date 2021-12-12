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

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == '1'){
        echo "Anda berhasil login. Silahkan menuju ";?>
        <a href="homeadmin.php">Halaman HOME</a>
        <?php
    } else if ($row['level'] == '2'){
        echo "Anda berhasil login. Silahkan menuju ";?>
        <a href="register.php">Halaman HOME</a>
        <?php
    } 
    else {
        echo "Anda gagal login. Silahkan ";?>
        <a href="index.php">Login kembali</a>
        <?php
        echo mysqli_error($conn);
    }
?>