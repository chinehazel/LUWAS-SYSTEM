// Get references to the form and relevant elements
const bookingForm = document.getElementById('booking-form');
const locationSelect = document.getElementById('location');
const doctorSelect = document.getElementById('doctor');
const serviceRadios = document.querySelectorAll('input[name="service"]');
const dateInput = document.getElementById('date');
const timeInput = document.getElementById('time');
const messageInput = document.getElementById('message');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const confirmationMessage = document.getElementById('confirmation-message');

// Predefined list of doctors based on locations
const doctorsByLocation = {
  location1: ['Dr. Smith', 'Dr. Johnson'],
  location2: ['Dr. Brown', 'Dr. Lee'],
  location3: ['Dr. Taylor', 'Dr. Anderson']
};

// Add event listeners
locationSelect.addEventListener('change', updateDoctorOptions);
serviceRadios.forEach(radio => radio.addEventListener('change', updateConfirmation));
dateInput.addEventListener('change', updateConfirmation);
timeInput.addEventListener('change', updateConfirmation);
messageInput.addEventListener('input', updateConfirmation);
nameInput.addEventListener('input', updateConfirmation); // Listen for name input changes
emailInput.addEventListener('input', updateConfirmation); // Listen for email input changes
phoneInput.addEventListener('input', updateConfirmation); // Listen for phone input changes
bookingForm.addEventListener('submit', handleFormSubmit);

// Function to update the doctor options based on the selected location
function updateDoctorOptions() {
  const selectedLocation = locationSelect.value;
  doctorSelect.innerHTML = '<option value="">Select Doctor</option>'; // Clear previous options

  if (selectedLocation && doctorsByLocation[selectedLocation]) {
    doctorsByLocation[selectedLocation].forEach(doctor => {
      const option = document.createElement('option');
      option.value = doctor;
      option.textContent = doctor;
      doctorSelect.appendChild(option);
    });
  }

  updateConfirmation(); // Update confirmation section to reflect changes
}

// Function to update the confirmation section with the user's selections
function updateConfirmation() {
  const selectedLocation = locationSelect.options[locationSelect.selectedIndex]?.text || 'N/A';
  const selectedDoctor = doctorSelect.options[doctorSelect.selectedIndex]?.text || 'N/A';
  const selectedService = Array.from(serviceRadios).find(radio => radio.checked)?.nextElementSibling.textContent || 'N/A';
  const selectedDate = dateInput.value || 'N/A';
  const selectedTime = timeInput.value || 'N/A';
  const selectedMessage = messageInput.value || 'N/A';
  const selectedName = nameInput.value || 'N/A'; // Get the entered name
  const selectedEmail = emailInput.value || 'N/A'; // Get the entered email
  const selectedPhone = phoneInput.value || 'N/A'; // Get the entered phone number

  document.getElementById('selected-location').textContent = selectedLocation;
  document.getElementById('selected-doctor').textContent = selectedDoctor;
  document.getElementById('selected-service').textContent = selectedService;
  document.getElementById('selected-date').textContent = selectedDate;
  document.getElementById('selected-time').textContent = selectedTime;
  document.getElementById('selected-message').textContent = selectedMessage;
  document.getElementById('selected-name').textContent = selectedName; // Update name in confirmation
  document.getElementById('selected-email').textContent = selectedEmail; // Update email in confirmation
  document.getElementById('selected-phone').textContent = selectedPhone; // Update phone in confirmation
}

// Function to handle form submission
// Function to handle form submission
function handleFormSubmit(event) {
  event.preventDefault(); // Prevent default form submission

  // Get the form data
  const formData = new FormData(bookingForm);

  // Send form data to the PHP script
  fetch('appointment_submit.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    console.log(data);
    // Show the confirmation message
    confirmationMessage.classList.remove('hidden');
    // Reset the form after successful submission
    bookingForm.reset();
    updateConfirmation(); // Update the confirmation section with cleared values
  })
  .catch(error => {
    console.error('Error:', error);
  });
}


// Initialize the doctor options when the page loads
updateDoctorOptions();
