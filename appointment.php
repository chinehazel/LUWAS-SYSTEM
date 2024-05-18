<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Page</title>
  <link rel="stylesheet" href="appointment.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery library -->
</head>
<body>
  <div class="container">
    <h1>Book an Appointment</h1>
    <form id="booking-form" method="POST" action="appointment_submit.php">
      <!-- Name and Contact Information -->
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>

      <!-- Location Selection -->
      <div class="form-group">
        <label for="location">Select Location:</label>
        <select id="location" name="location" required>
          <option value="">Select Location</option>
          <option value="location1">Location 1</option>
          <option value="location2">Location 2</option>
          <option value="location3">Location 3</option>
        </select>
      </div>

      <!-- Doctor Selection -->
      <div class="form-group">
        <label for="doctor">Select Doctor:</label>
        <select id="doctor" name="doctor" required>
          <option value="">Select Doctor</option>
          <!-- Doctors will be populated dynamically based on the selected location -->
        </select>
      </div>

      <!-- Service Selection -->
      <div class="form-group">
        <label>Select Service:</label>
        <div class="service-tiles">
          <div class="service-tile">
            <input type="radio" id="service1" name="service" value="service1" required>
            <label for="service1">Service 1</label>
          </div>
          <div class="service-tile">
            <input type="radio" id="service2" name="service" value="service2" required>
            <label for="service2">Service 2</label>
          </div>
          <div class="service-tile">
            <input type="radio" id="service3" name="service" value="service3" required>
            <label for="service3">Service 3</label>
          </div>
        </div>
      </div>

      <!-- Date and Time Picker -->
      <div class="form-group">
        <label for="date">Select Date:</label>
        <input type="date" id="date" name="date" required>
        <label for="time">Select Time:</label>
        <input type="time" id="time" name="time" required>
        <div id="availability-message"></div>
      </div>

      <!-- Patient Message -->
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4"></textarea>
      </div>

      <!-- Confirmation Page -->
      <div class="confirmation">
        <h2>Confirmation</h2>
        <div class="booking-details">
          <p>Name: <span id="selected-name"></span></p>
          <p>Email: <span id="selected-email"></span></p>
          <p>Phone: <span id="selected-phone"></span></p>
          <p>Location: <span id="selected-location"></span></p>
          <p>Doctor: <span id="selected-doctor"></span></p>
          <p>Service: <span id="selected-service"></span></p>
          <p>Date: <span id="selected-date"></span></p>
          <p>Time: <span id="selected-time"></span></p>
          <p>Message: <span id="selected-message"></span></p>
        </div>
        <button type="submit" id="confirm-booking">Confirm Booking</button>

        <div id="confirmation-message" class="hidden">
          <p>Your booking request has been submitted. Please wait for the doctor's or staff's response.</p>
        </div>
        <button type="button" id="back-button">Back</button>
      </div>
    </form>
  </div>

  <script src="appointment.js"></script>
  <script>
    $(document).ready(function(){
      $('#booking-form').submit(function(e){
        e.preventDefault(); // Prevent form submission
        $.ajax({
          url: $(this).attr('action'), // URL to submit the form data
          type: 'POST', // Method to submit data
          data: $(this).serialize(), // Form data to submit
          success: function(response){
            // Show confirmation message
            $('#confirmation-message').removeClass('hidden');
          },
          error: function(xhr, status, error){
            console.error(error); // Log error if any
          }
        });
      });

      $('#back-button').click(function(){
        window.location.href = 'secondpage.php'; // Redirect to secondpage.php
      });
    });
  </script>
</body>
</html>
