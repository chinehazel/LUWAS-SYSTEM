<?php
include 'logSconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['signUp'])) {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashedPassword = md5($password); // You should use password_hash instead

        // Check if email already exists
        $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $checkEmail->bind_param("s", $email);
        $checkEmail->execute();
        $result = $checkEmail->get_result();

        if ($result->num_rows > 0) {
            echo "Email Address Already Exists!";
        } else {
            // Insert new user into the database using prepared statement
            $insertQuery = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
            $insertQuery->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

            if ($insertQuery->execute()) {
                header("Location: logS.php");
                exit();
            } else {
                echo "Error: " . $insertQuery->error;
            }
        }
    }

    if (isset($_POST['signIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashedPassword = md5($password); // You should use password_verify instead

        // Retrieve user from the database using prepared statement
        $sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $sql->bind_param("ss", $email, $hashedPassword);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            header("Location: homepageS.php");
            exit();
        } else {
            echo "Not Found, Incorrect Email or Password";
        }
    }
}
?>
