<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

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
            <?php
            // Include database connection
            include_once "app.php";

            // Fetch users from the database
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($user = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $user['user_id'] . '</td>';
                    echo '<td>' . $user['full_name'] . '</td>';
                    echo '<td>' . $user['date_of_birth'] . '</td>';
                    echo '<td>' . $user['ssn'] . '</td>';
                    echo '<td>' . $user['address'] . '</td>';
                    echo '<td>' . $user['phone_number'] . '</td>';
                    echo '<td>' . $user['email'] . '</td>';
                    echo '<td>' . $user['marital_status'] . '</td>';
                    echo '<td>' . $user['dependent_full_name'] . '</td>';
                    echo '<td>' . $user['dependent_date_of_birth'] . '</td>';
                    echo '<td>' . $user['dependent_ssn'] . '</td>';
                    echo '<td>' . $user['employer_name'] . '</td>';
                    echo '<td>' . $user['job_title'] . '</td>';
                    echo '<td>' . $user['employment_status'] . '</td>';
                    echo '<td>' . $user['current_medications'] . '</td>';
                    echo '<td>' . $user['primary_care_physician'] . '</td>';
                    echo '<td>' . $user['medical_history'] . '</td>';
                    echo '<td>' . $user['existing_insurance_details'] . '</td>';
                    echo '<td>' . $user['plan_selection'] . '</td>';
                    echo '<td>' . $user['payment_method'] . '</td>';
                    echo '<td>' . $user['bank_account_details'] . '</td>';
                    echo '<td>' . $user['card_number'] . '</td>';
                    echo '<td>' . $user['card_expiration_date'] . '</td>';
                    echo '<td>' . $user['card_cvv'] . '</td>';
                    echo '<td>' . $user['signature'] . '</td>';
                    echo '<td>' . $user['signature_date'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="25">No users found</td></tr>';
            }

            // Close database connection
            mysqli_close($conn);
            ?>
        </tbody>
    </table>

</body>
</html>
