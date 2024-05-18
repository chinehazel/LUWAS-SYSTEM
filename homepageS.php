<?php
session_start();
include("logSconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepageS.css">
</head>
<body>
    <div class="container">
        <p class="hello-text">
            <?php
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($conn, $query);

                if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo 'Hello ' . $row['firstName'] . ' ' . $row['lastName'] . ' :)';
                }
            }
            ?>
        </p>
        <a href="logoutS.php" class="btn">Proceed</a>
    </div>
</body>
</html>
