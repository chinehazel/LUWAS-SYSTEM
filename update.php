<?php 
// Establish database connection
$con = mysqli_connect("localhost", "root", "", "webbbb");
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Handle form submission
if(isset($_POST['update'])) {
    // Sanitize and retrieve form data
    $user_id = $_POST['user_id'];
    $full_name = $_POST['full_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $ssn = $_POST['ssn'];
    $address =$_POST['address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $marital_status = $_POST['marital_status'];
    $dependent_full_name =$_POST['dependent_full_name'];
    $dependent_date_of_birth =$_POST['dependent_date_of_birth'];
    $dependent_ssn = $_POST['dependent_ssn'];
    $employer_name = $_POST['employer_name'];
    $job_title = $_POST['job_title'];
    $employment_status =$_POST['employment_status'];
    $current_medications =$_POST['current_medications'];
    $primary_care_physician = $_POST['primary_care_physician'];
    $medical_history = $_POST['medical_history'];
    $existing_insurance_details = $_POST['existing_insurance_details'];
    $plan_selection = $_POST['plan_selection'];
    $payment_method = $_POST['payment_method'];
    $bank_account_details = $_POST['bank_account_details'];
    $card_number = $_POST['card_number'];
    $card_expiration_date =$_POST['card_expiration_date'];
    $card_cvv =$_POST['card_cvv'];
    $signature = $_POST['signature'];
    $signature_date = $_POST['signature_date'];

    // Update query
    $query = "UPDATE `users` SET 
               full_name='$full_name', 
                date_of_birth='$date_of_birth', 
                ssn='$ssn', 
                address='$address', 
                phone_number='$phone_number', 
                email='$email', 
                marital_status='$marital_status', 
                dependent_full_name='$dependent_full_name', 
                dependent_date_of_birth='$dependent_date_of_birth', 
                dependent_ssn='$dependent_ssn', 
                employer_name='$employer_name', 
                job_title='$job_title', 
                employment_status='$employment_status', 
                current_medications='$current_medications', 
                primary_care_physician='$primary_care_physician', 
                medical_history='$medical_history', 
                existing_insurance_details='$existing_insurance_details', 
                plan_selection='$plan_selection', 
                payment_method='$payment_method', 
                bank_account_details='$bank_account_details', 
                card_number='$card_number', 
                card_expiration_date='$card_expiration_date', 
                card_cvv='$card_cvv', 
                signature='$signature', 
                signature_date='$signature_date' 
            WHERE user_id='$user_id'";
    
    // Execute the update query
    $query_run = mysqli_query($con, $query);

    // Check if the query was successful
    if($query_run) {
        echo '<script type="text/javascript"> alert("Data Updated")</script>'; 
    } else {
        echo '<script type="text/javascript"> alert("Failed to update data")</script>'; 
    }
}
?>
