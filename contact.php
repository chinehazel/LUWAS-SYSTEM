<link rel="stylesheet" type="text/css" href="contact (2).css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link>

<header>
    <!-- Your header content here -->
</header>
<main>
    <h1>Contact Us</h1>
    <p>Please fill out the form below to send me a message.</p>
    <form action="submit-form.php" method="POST">

        <div class="square-background"></div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</main>
<footer>
    <!-- Your footer content here -->
</footer>
</body>
</html>
