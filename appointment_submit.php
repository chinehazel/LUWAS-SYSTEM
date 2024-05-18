 <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data from $_POST array
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $doctor = $_POST['doctor'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // Database connection details
    $servername = "localhost"; // Server name (usually 'localhost')
    $username = "root"; // Database username
    $password = ""; // Database password
    $dbname = "appointment2"; // Database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement with placeholders
    $sql = "INSERT INTO users (name, email, phone, location, doctor, service, date, time, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("sssssssss", $name, $email, $phone, $location, $doctor, $service, $date, $time, $message);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Booking submitted successfully!";
    } else {
        // Log the error message
        error_log("Error inserting data: " . $stmt->error);
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();

    // Close connection
    $conn->close();
} else {
    // Display an error message if the form is not submitted
    echo "Error: Form data not received.";
}
?>