<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Career Training College</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('events.css') }}">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
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

    <!-- Main Content -->
    <main>
        <section class="events-section">
            <h1 class="section-title">Upcoming Events</h1>
            <div class="events-cards">

                <!-- Event Card -->
                <div class="event-card">
                    <img src="{{ asset('images/events.png') }}" alt="Event 1" class="event-image">
                    <div class="event-details">
                        <h2 class="event-title">Career Fair</h2>
                        <p class="event-date">Date: September 15, 2024</p>
                        <p class="event-description">Join us for the annual Career Fair where industry professionals
                            will
                            share insights and network with students.</p>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="event-card">
                    <img src="{{ asset('images/events.png') }}" alt="Event 2" class="event-image">
                    <div class="event-details">
                        <h2 class="event-title">Workshop: Resume Building</h2>
                        <p class="event-date">Date: October 5, 2024</p>
                        <p class="event-description">This workshop will guide you through creating a professional resume
                            that stands out to employers.</p>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="event-card">
                    <img src="{{ asset('images/events.png') }}" alt="Event 3" class="event-image">
                    <div class="event-details">
                        <h2 class="event-title">Interview Preparation Workshop</h2>
                        <p class="event-date">Date: October 20, 2024</p>
                        <p class="event-description">Learn essential tips and strategies for acing your next job
                            interview
                            in this interactive workshop.</p>
                    </div>
                </div>

                <!-- Event Card 4 -->
                <div class="event-card">
                    <img src="{{ asset('images/events.png') }}" alt="Event 4" class="event-image">
                    <div class="event-details">
                        <h2 class="event-title">Networking Event</h2>
                        <p class="event-date">Date: November 3, 2024</p>
                        <p class="event-description">Meet industry professionals and expand your professional network at
                            this exclusive event.</p>
                    </div>
                </div>

                <!-- Event Card 5 -->
                <div class="event-card">
                    <img src="{{ asset('images/events.png') }}" alt="Event 5" class="event-image">
                    <div class="event-details">
                        <h2 class="event-title">Coding Bootcamp</h2>
                        <p class="event-date">Date: November 17, 2024</p>
                        <p class="event-description">Enhance your programming skills in this intensive coding bootcamp,
                            tailored for both beginners and advanced learners.</p>
                    </div>
                </div>

                <!-- Event Card 6 -->
                <div class="event-card">
                    <img src="{{ asset('images/events.png') }}" alt="Event 6" class="event-image">
                    <div class="event-details">
                        <h2 class="event-title">Guest Lecture: Tech Trends</h2>
                        <p class="event-date">Date: December 1, 2024</p>
                        <p class="event-description">Join us for a special guest lecture on the latest trends and future
                            directions in the tech industry.</p>
                    </div>
                </div>

                <!-- Event Card 7 -->
                <div class="event-card">
                    <img src="{{ asset('images/events.png') }}" alt="Event 7" class="event-image">
                    <div class="event-details">
                        <h2 class="event-title">Career Planning Session</h2>
                        <p class="event-date">Date: December 15, 2024</p>
                        <p class="event-description">Plan your career path with expert guidance and personalized advice
                            in
                            this session.</p>
                    </div>
                </div>
            </div>

        </section>
    </main>

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
