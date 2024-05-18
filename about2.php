<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about1.css">
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



    <div class="container">
        <h1>About Us</h1>
        <section class="mission-vision">
            <h2>Our Mission &amp; Vision</h2>
            <p>Our mission is to provide affordable, high-quality healthcare services to all community members, regardless of socio-economic status or demographic background, ensuring everyone has the opportunity to thrive. Our vision is to leverage technology to enhance the effectiveness and accuracy of our services for every individual.</p>
        </section>
    </div>


    <section class="features-section">
    <h2 class="section-title">Our Team</h2>
    <div class="section__container">
        <div class="feature-box">
            <div class="image-container">
                <img src="img/p1.jpg" alt="Feature 1">
            </div>
            <div class="text-container">
                <h3>Neil Gapito</h3>
                <p>The visionary behind Luwas, driving its creation and development. As the founder and leader, he oversees strategic planning and paperwork, committed to making healthcare accessible to all.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="image-container">
                <img src="img/p2.jpg" alt="Feature 3">
            </div>
            <div class="text-container">
                <h3>Ai </h3>
                <p>Tirelessly gathering insights to shape Luwas's direction. Her analytical skills and dedication ensure our solutions align with the latest advancements in healthcare technology.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="image-container">
                <img src="img/p3.jpg" alt="Feature 4">
            </div>
            <div class="text-container">
                <h3>Chine Hudaya</h3>
                <p>The technical backbone of Luwas, crafting both its front-end and back-end. She ensures our system is user-friendly, secure, and efficient, seamlessly blending technology with healthcare services..</p>
            </div>
        </div>
    </div>
</section>

<script>
        const menuBtn = document.querySelector('.menu-btn');
        const navLinks = document.querySelector('.nav-links');

        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-menu');
        });
    </script>



<footer class="footer">
        <p>&copy; 2024 Luwas</p>
    </footer>

</body>
</html>