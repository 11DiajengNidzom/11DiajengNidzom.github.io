 <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        Body {
            background-image: url(images/bg5.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Data User</h1><br>
        <table id="User" style="margin-bottom: 100px;">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
            </tr>
            <?php
                include "config.php";

                $query = "SELECT * FROM Users";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $row["id"] ?>
                </td>
                <td>
                    <?php echo $row["username"] ?>
                </td>
                <td>
                    <?php echo $row["password"] ?>
                </td>
                <td>
                    <?php echo $row["email"] ?>
                </td>
                <td>
                    <a href="editForm.php?id=<?php echo $row['id']?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id']?>">Hapus</a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "0 result";
            }
            ?> 
        </table>
        <a href="logout.php" class="btn">Logout</a>
    </div>

</body>