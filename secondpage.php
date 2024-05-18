<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="secondpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<nav>
    <div class="nav__content">
        <div class="logo">
            <a href="#">
                <img src="img/logofirst.png" alt="Logo" class="logo-image">
                Luwas
            </a>
        </div>
        <label for="check" class="checkbox">
            <i class="ri-menu-line"></i>
        </label>
        <input type="checkbox" name="check" id="check">
        <ul>
            <li><a href="secondpage.php">Home</a></li>
            <li><a href="about2.php">About Us</a></li>
            <li><a href="blog2.php">Blogs</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div> 
</nav>

<header>
    <div class="header-content">
        <h2>"We'll paint your path to health</h2>
        <div class="line"></div>
        <h1>With the vibrant hues of vitality."</h1>
    </div>
</header>

<main>
    <section class="events">
        <div class="title">
            <h1>Don't Miss Out</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="./img/ab.jpg" alt="Book Appointment">
                <h4>Book Appointment Form</h4>
                <p>Quickly fill in your details and select your preferred date and time to secure your appointment. A hassle-free booking experience, allowing you to manage your appointments efficiently.</p>
                <a href="appointment.php" class="btn">Book Now</a>
            </div>
            <div class="col">
                <img src="./img/cd.png" alt="Luwas Registration Form">
                <h4>Luwas Registration Form</h4>
                <p>The Luwas Registration Form makes insurance enrollment quick and efficient, capturing all necessary personal and policy information for a seamless registration process.</p>
                <a href="indexreg.php" class="btn">Fill Up Now</a>
            </div>
        </div>
    </section>

    <section class="explore">
        <div class="explore-content">
            <h1>How does LUWAS contribute to closing healthcare gaps?</h1>
            <div class="line"></div>
            <p>LUWAS bridges the gap in healthcare, especially for underprivileged or distant people, by offering real-time access to medical specialists and expediting the patient-provider match process. By guaranteeing that no one goes without the necessary medical care...</p>
            <a href="blog.php" class="ctn">Read More</a>
        </div>
    </section>

    <section class="tours">
        <div class="row">
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="./img/s1.jpg" alt="Tour Image 1">
                    <img src="./img/s2.jpg" alt="Tour Image 2">
                    <img src="./img/s3.jpg" alt="Tour Image 3">
                    <img src="./img/s4.jpg" alt="Tour Image 4">
                </div>
            </div>
            <div class="col content-col">
                <h1>Future Innovations</h1>
                <p>In today's fast-paced world, convenience and efficiency are key, especially when it comes to healthcare. Luwas is an innovative system designed to streamline healthcare services through a seamless blend of technology and collaboration. By integrating insurance, online appointment bookings, and partnerships with clinics, Luwas is transforming the patient experience. But that's just the beginning. Let's delve into the future innovations that Luwas is bringing to the table with IoT (Internet of Things) and embedded technologies.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        
        <p>&copy; 2024 Luwas</p>
    </footer>

    <script>
        const menuBtn = document.querySelector('.menu-btn');
        const navLinks = document.querySelector('.nav-links');

        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-menu');
        });
    </script>

</body>
</html>
