
<?php 
session_start();

include("app.php");

// Adding a new user
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["submit"])) { // Add check for POST method and form submit button
    $full_name = $_POST["full_name"];
    $date_of_birth = $_POST["date_of_birth"];
    $ssn = $_POST["ssn"];
    $address = $_POST["address"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $marital_status = $_POST["marital_status"];
    $dependent_full_name = $_POST["dependent_full_name"];
    $dependent_date_of_birth = $_POST["dependent_date_of_birth"];
    $dependent_ssn = $_POST["dependent_ssn"];
    $employer_name = $_POST["employer_name"];
    $job_title = $_POST["job_title"];
    $employment_status = $_POST["employment_status"];
    $current_medications = $_POST["current_medications"];
    $primary_care_physician = $_POST["primary_care_physician"];
    $medical_history = $_POST["medical_history"];
    $existing_insurance_details = $_POST["existing_insurance_details"];
    $plan_selection = $_POST["plan_selection"];
    $payment_method = $_POST["payment_method"];
    $bank_account_details = $_POST["bank_account_details"];
    $card_number = $_POST["card_number"];
    $card_expiration_date = $_POST["card_expiration_date"];
    $card_cvv = $_POST["card_cvv"];
    $signature = $_POST["signature"];
    $signature_date = $_POST["signature_date"];

    if (!empty($full_name) && !empty($date_of_birth) && !empty($ssn) && !empty($address) && !empty($email)) {
        $query = "INSERT INTO users (full_name, date_of_birth, ssn, address, phone_number, email, marital_status, dependent_full_name, dependent_date_of_birth, dependent_ssn, employer_name, job_title, employment_status, current_medications, primary_care_physician, medical_history, existing_insurance_details, plan_selection, payment_method, bank_account_details, card_number, card_expiration_date, card_cvv, signature, signature_date) 
                  VALUES ('$full_name', '$date_of_birth', '$ssn', '$address', '$phone_number', '$email', '$marital_status', '$dependent_full_name', '$dependent_date_of_birth', '$dependent_ssn', '$employer_name', '$job_title', '$employment_status', '$current_medications', '$primary_care_physician', '$medical_history', '$existing_insurance_details', '$plan_selection', '$payment_method', '$bank_account_details', '$card_number', '$card_expiration_date', '$card_cvv', '$signature', '$signature_date')";
        if (mysqli_query($con, $query)) {
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
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
<link rel="stylesheet" type="text/css" href="stylereg.css">
</head>
<body>
<h1>User Management</h1>

<div class="container">
    <div class="add">

        <form method="POST">
            <h3>Add User Form</h3>
            <!-- Form for adding a new user -->
            <label>Full Name: <input type="text" name="full_name" required></label>
            <label>Date of Birth: <input type="date" name="date_of_birth" required></label>
            <label>SSN: <input type="text" name="ssn" required></label>
            <label>Address: <input type="text" name="address" required></label>
            <label>Phone Number: <input type="text" name="phone_number"></label>
            <label>Email: <input type="email" name="email" required></label>
            <label>Marital Status: 
                <select name="marital_status" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </label>
            <label>Dependent Full Name: <input type="text" name="dependent_full_name"></label>
            <label>Dependent Date of Birth: <input type="date" name="dependent_date_of_birth"></label>
            <label>Dependent SSN: <input type="text" name="dependent_ssn"></label>
            <label>Employer Name: <input type="text" name="employer_name"></label>
            <label>Job Title: <input type="text" name="job_title"></label>
            <label>Employment Status: 
                <select name="employment_status" required>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Self-employed">Self-employed</option>
                    <option value="Unemployed">Unemployed</option>
                </select>
            </label>
            <label>Current Medications: <textarea name="current_medications"></textarea></label>
            <label>Primary Care Physician: <input type="text" name="primary_care_physician"></label>
            <label>Medical History: <textarea name="medical_history"></textarea></label>
            <label>Existing Insurance Details: <textarea name="existing_insurance_details"></textarea></label>
            <label>Plan Selection: 
                <select name="plan_selection" required>
                    <option value="HMO">HMO</option>
                    <option value="PPO">PPO</option>
                    <option value="EPO">EPO</option>
                </select>
            </label>
            <label>Payment Method: 
                <select name="payment_method" required>
                    <option value="Bank Account">Bank Account</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                </select>
            </label>
            <label>Bank Account Details: <input type="text" name="bank_account_details"></label>
            <label>Card Number: <input type="text" name="card_number"></label>
            <label>Card Expiration Date: <input type="date" name="card_expiration_date"></label>
            <label>Card CVV: <input type="text" name="card_cvv"></label>
            <label>Signature: <input type="text" name="signature" required></label>
            <label>Signature Date: <input type="date" name="signature_date" required></label>
            <button type="submit" name="submit">Add User</button>
        </form>
    </div>
</div>

<div class="containeredit">

        <div class="edit">
        <form action="update.php" method="POST"> <!-- Specify the correct URL for form submission -->
            <h3>Update Form</h3>
            <label>ID: <input type="text" name="user_id" required></label>
            <label>Full Name: <input type="text" name="full_name" required></label>
            <label>Date of Birth: <input type="date" name="date_of_birth" required></label>
            <label>SSN: <input type="text" name="ssn" required></label>
            <label>Address: <input type="text" name="address" required></label>
            <label>Phone Number: <input type="text" name="phone_number"></label>
            <label>Email: <input type="email" name="email" required></label>
            <label>Marital Status: 
                <select name="marital_status" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </label>
            <label>Dependent Full Name: <input type="text" name="dependent_full_name"></label>
            <label>Dependent Date of Birth: <input type="date" name="dependent_date_of_birth"></label>
            <label>Dependent SSN: <input type="text" name="dependent_ssn"></label>
            <label>Employer Name: <input type="text" name="employer_name"></label>
            <label>Job Title: <input type="text" name="job_title"></label>
            <label>Employment Status: 
                <select name="employment_status" required>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Self-employed">Self-employed</option>
                    <option value="Unemployed">Unemployed</option>
                </select>
            </label>
            <label>Current Medications: <textarea name="current_medications"></textarea></label>
            <label>Primary Care Physician: <input type="text" name="primary_care_physician"></label>
            <label>Medical History: <textarea name="medical_history"></textarea></label>
            <label>Existing Insurance Details: <textarea name="existing_insurance_details"></textarea></label>
            <label>Plan Selection: 
                <select name="plan_selection" required>
                    <option value="HMO">HMO</option>
                    <option value="PPO">PPO</option>
                    <option value="EPO">EPO</option>
                </select>
            </label>
            <label>Payment Method: 
                <select name="payment_method" required>
                    <option value="Bank Account">Bank Account</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                </select>
            </label>
            <label>Bank Account Details: <input type="text" name="bank_account_details"></label>
            <label>Card Number: <input type="text" name="card_number"></label>
            <label>Card Expiration Date: <input type="date" name="card_expiration_date"></label>
            <label>Card CVV: <input type="text" name="card_cvv"></label>
            <label>Signature: <input type="text" name="signature" required></label>
            <label>Signature Date: <input type="date" name="signature_date" required></label>
            <button type="submit" name="update">Update User</button>
        </form>
    </div>
</div>


  
<div class="containerdelete">

<div class="delete">
        <form method="POST" action="delete.php">
            <h3>Delete Form</h3>
            <!-- Form for deleting a user -->
            <label>ID of User to be Deleted: <input type="text" name="user_id" required></label> <!-- Changed from 'id' to 'Id' -->
            <button type="submit" name="delete">Delete User</button>
        </form>
    </div>
</div>

  




<!-- Users Table -->
<table id="users-table" class="column-span">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>SSN</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Marital Status</th>
            <th>Dependent Full Name</th>
            <th>Dependent Date of Birth</th>
            <th>Dependent SSN</th>
            <th>Employer Name</th>
            <th>Job Title</th>
            <th>Employment Status</th>
            <th>Current Medications</th>
            <th>Primary Care Physician</th>
            <th>Medical History</th>
            <th>Existing Insurance Details</th>
            <th>Plan Selection</th>
            <th>Payment Method</th>
            <th>Bank Account Details</th>
            <th>Card Number</th>
            <th>Card Expiration Date</th>
            <th>Card CVV</th>
            <th>Signature</th>
            <th>Signature Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['user_id']; ?></td>
                <td><?php echo $user['full_name']; ?></td>
                <td><?php echo $user['date_of_birth']; ?></td>
                <td><?php echo $user['ssn']; ?></td>
                <td><?php echo $user['address']; ?></td>
                <td><?php echo $user['phone_number']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['marital_status']; ?></td>
                <td><?php echo $user['dependent_full_name']; ?></td>
                <td><?php echo $user['dependent_date_of_birth']; ?></td>
                <td><?php echo $user['dependent_ssn']; ?></td>
                <td><?php echo $user['employer_name']; ?></td>
                <td><?php echo $user['job_title']; ?></td>
                <td><?php echo $user['employment_status']; ?></td>
                <td><?php echo $user['current_medications']; ?></td>
                <td><?php echo $user['primary_care_physician']; ?></td>
                <td><?php echo $user['medical_history']; ?></td>
                <td><?php echo $user['existing_insurance_details']; ?></td>
                <td><?php echo $user['plan_selection']; ?></td>
                <td><?php echo $user['payment_method']; ?></td>
                <td><?php echo $user['bank_account_details']; ?></td>
                <td><?php echo $user['card_number']; ?></td>
                <td><?php echo $user['card_expiration_date']; ?></td>
                <td><?php echo $user['card_cvv']; ?></td>
                <td><?php echo $user['signature']; ?></td>
                <td><?php echo $user['signature_date']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
