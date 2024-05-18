<!DOCTYPE html>
<html>
<head>
    <title>My Personal Website</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stylefirst.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
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



    <section class="section">
        <div class="section__container">
            <div class="content">
               
                <h1 class="title">
                    Your Flexible  <span> Safety-Net Health Service<br /></span> 
                </h1>
                <p class="description">
                    Obtain a health service above standards with accessible information and user-friendly system
                </p>
                <div class="action__btns">
                    <button class="explore" onclick="window.location.href='logS.php';">Get Started</button>
                </div>
            </div>
            <div class="image">
                <img src="img/first.png" alt="Profile">
            </div>  
        </div>
    </section>
    <section class="mission-vision-section">
        <div class="section__containerr">
            <div class="image-container">
                <img src="img/first1.jpg" alt="Mission and Vision">
            </div>
            <div class="text-containerr">
                <div class="mission">
                    <h2>Why Use Luwas?</h2>
                    <p>The platform will include features such as real-time availability, virtual consultations, and automated appointment scheduling, making the entire process more streamlined and user-friendly.</p>
                    <p>Our system will introduce automated appointment scheduling, leveraging advanced algorithms to match user preferences with available slots, thereby simplifying the booking process and minimizing wait times. These features collectively enhance the user experience, making healthcare more accessible, convenient, and user-friendly.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="features-section">
    <h2 class="section-title">What We Offer</h2>
    <div class="section__container">
        <div class="feature-box">
            <div class="image-container">
                <img src="img/cd.png" alt="Feature 1">
            </div>
            <div class="text-container">
                <h3>Digital Health Insurance Card</h3>
                <p>Accessible anytime, anywhere, this feature simplifies the administrative aspects of healthcare, ensuring convenience and peace of mind.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="image-container">
                <img src="img/ab.jpg" alt="Feature 3">
            </div>
            <div class="text-container">
                <h3>Automated Appointment Scheduling</h3>
                <p>Our automated appointment scheduling system streamlines the scheduling process, matching your preferences with available slots for a hassle-free experience.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="image-container">
                <img src="img/aas.jpg" alt="Feature 4">
            </div>
            <div class="text-container">
                <h3>Future Innovations with IoT and Embedded Technologies</h3>
                <p>Explore upcoming features such as remote health monitoring, smart device integration, and personalized treatment recommendations.</p>
            </div>
        </div>
    </div>
</section>



<section class="video-section">
    <div class="video-container">
        <!-- Placeholder video embed -->
        <video controls>
        <source src="img/vid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="description-container">
        <h2>Discover Luwas</h2>
        <p>Learn more about our services and how we can help you with your healthcare needs.</p>
        <button class="join-now"onclick="window.location.href='logS.php';">Be a Member Now</button>
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