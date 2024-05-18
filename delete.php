
<?php
$con = mysqli_connect("localhost", "root", "", "webbbb") or die(mysqli_error($con));

if(isset($_POST['delete'])) {
    $Id = $_POST['user_id'];

    // Delete query
    $query = "DELETE FROM `users` WHERE user_id='$Id'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        echo '<script type="text/javascript"> alert("User deleted successfully")</script>'; 
    } else {
        echo '<script type="text/javascript"> alert("Error deleting user")</script>'; 
    }
}
?>
