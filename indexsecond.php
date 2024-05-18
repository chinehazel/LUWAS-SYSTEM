<?php 
session_start();

include("app.php");

// Adding a new user
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["submit"])) { // Add check for POST method and form submit button
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    if (!empty($name) && !empty($email) && !empty($age)) {
        $query = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";
        if (mysqli_query($con, $query)) {
            // Redirect after successful insert
            header("Location: ".$_SERVER['PHP_SELF']); // Redirect to the same page
            exit(); // Ensure that code execution stops after redirection
        } else {
            echo "<script type='text/javascript'> alert('Failed to register user')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Please enter valid info')</script>";
    }
}

// Fetching all users
$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple-web-app</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>User Management</h1>
<div class="container">
    <div class="column">
        <form method="POST">
            <h3>Add User Form</h3>
            <!-- Form for adding a new user -->
            <label>Name: <input type="text" name="name" required></label>
            <label>Email: <input type="email" name="email" required></label>
            <label>Age: <input type="number" name="age" required></label>
            <button type="submit" name="submit">Add User</button>
        </form>
    </div>

    <!-- Update Form -->
    <div class="column">
        <form action="update.php" method="POST"> <!-- Specify the correct URL for form submission -->
            <h3>Update Form</h3>
            <label>Id: <input type="text" name="Id" required></label>
            <label>Name: <input type="text" name="name" required></label>
            <label>Email: <input type="text" name="email" required></label>
            <label>Age: <input type="text" name="age" required></label>
            <button type="submit" name="update">Update User</button> <!-- Give a unique name to the submit button -->
        </form>
    </div>

    <!-- Delete Form -->
    <div class="column">
        <form method="POST" action="delete.php">
            <h3>Delete Form</h3>
            <!-- Form for deleting a user -->
            <label>ID of User to be Deleted: <input type="text" name="Id" required></label> <!-- Changed from 'id' to 'Id' -->
            <button type="submit" name="delete">Delete User</button>
        </form>
    </div>
</div>

<br>

<!-- Users Table -->
<table id="users-table" class="column-span">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['Id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['age']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
