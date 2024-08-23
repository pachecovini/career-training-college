<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Career Training College</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="{{ asset('aboutUs.css') }}">
</head>

<body>

    <header>
        <!-- Navigation Bar -->
        <nav>
            <div class="bg-div">
                <img class="logo-img" src="{{ asset('images/logo.png') }}" alt="Career Training College Logo">
                <span class="logo-text">CAREER TRAINING COLLEGE</span>
                <a href="/logout" aria-label="Logout">
                    <img class="login-icon" src="{{ asset('images/logout.png') }}" alt="Logout Icon">
                </a>
            </div>
            <ul>
                <li><a href="/index">Home</a></li>
                <li><a href="/about">About Us</a></li>
                @if (Auth::check() & Auth::User()->isAdmin)
                    <li><a href="/createmember">Create Member</a></li>
                @endif
                <li><a href="/events">Events</a></li>
            </ul>
        </nav>
    </header>

    <!-- Container -->
    <div class="container">
        <!-- About Section -->
        <section class="about-section">
            <h1>About Us</h1>
            <p>Welcome to the Career Training College!</p>

            <p>At Career Training College, we are committed to empowering individuals with the skills and knowledge
                necessary to excel in today's competitive job market. As an approved provider of the government's
                ICT50220
                Diploma of Information Technology course through Jobs and Skills WA, we offer comprehensive training
                programs that are designed to meet the needs of both students and employers.</p>

            <h2>Our Mission</h2>
            <p>Our mission is to provide high-quality, accessible education that prepares our students for successful
                careers in the information technology sector. Through our Job Ready Program, we conduct numerous events
                every month, helping our students gain practical experience and enhance their employability.</p>

            <h2>What We Do</h2>
            <p>We take pride in our hands-on approach to education. Our events are a key part of the learning
                experience,
                allowing students to apply what they've learned in a real-world setting. To streamline the management of
                these events, we have developed the Career Training College Event Team Management Website. This platform
                allows our event managers to efficiently track active participants and keep them informed about upcoming
                events.</p>

            <h2>Why Choose Us?</h2>
            <p>- <strong>Government-Approved Programs:</strong> We are an authorized provider of the ICT50220 Diploma of
                Information Technology.</p>
            <p>- <strong>Experienced Instructors:</strong> Our instructors are industry professionals with extensive
                experience in the IT field.</p>
            <p>- <strong>Practical Learning:</strong> Our events and workshops are designed to give students hands-on
                experience that they can apply in their careers.</p>
            <p>- <strong>Comprehensive Support:</strong> We offer ongoing support to our students, ensuring they have
                the
                resources they need to succeed.</p>

            <img src="images/training.png" alt="About Image" class="about-image">

            <div class="other-contacts">
                <h3>Contact Us</h3>
                <p>Email: <a href="mailto:info@careertrainingcollege.com">info@careertrainingcollege.com</a></p>
                <p>Follow us on social media:</p>
                <ul class="social-links">
                    <li><a href="#"><img src="{{ asset('images/facebook.png') }}" alt="Facebook icon">
                            Facebook</a></li>
                    <li><a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram icon">
                            Instagram</a></li>
                    <li><a href="#"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn icon">
                            LinkedIn</a></li>
                    <li><a href="#"><img src="{{ asset('images/twitter.png') }}" alt="Twitter icon"> Twitter</a>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Google Maps Embed -->
        <div class="map-container">
            <h3>Our Location</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6771.224003692138!2d115.86454927497068!3d-31.944289821968493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a52a4b6095db%3A0xdfe4712a1ea419c8!2sNational%20Institute%20of%20Technology!5e0!3m2!1sen!2sau!4v1724208540372!5m2!1sen!2sau"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div> <!-- End of the container -->

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <img src="{{ asset('images/logo.png') }}" alt="Footer Logo" class="footer-logo">
                <p class="footer-text">CAREER TRAINING COLLEGE</p>
            </div>
            <div class="footer-right">
                <div class="social-media">
                    <div class="icons">
                        <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/facebook-white.png') }}" alt="Facebook icon">
                        </a>
                        <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/instagram-white.png') }}" alt="Instagram icon">
                        </a>
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/linkedin-white.png') }}" alt="LinkedIn icon">
                        </a>
                        <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/twitter-white.png') }}" alt="Twitter icon">
                        </a>
                    </div>
                </div>
            </div>
            <div id="copyrights" class="footer-copyright">
                <p>&copy; 2024 Career Training College Ltd. All rights reserved. Terms and conditions, features,
                    support, pricing, and service options are subject to change without notice.</p>
            </div>
        </div>
    </footer>


</body>

</html>
