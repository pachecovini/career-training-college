<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Member - Career Training College</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('createMember.css') }}">
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

    <!-- Container for Form -->
    <div class="create-member-container">
        <h2 class="form-title">Create a New Member</h2>
        <form class="create-member-form" action="/members/add" method="POST">
            @csrf
            @method('POST')

            <div class="input-field">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName">
            </div>
            <div class="input-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="input-field">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="input-field">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="input-field">
                <label for="age">Age</label>
                <input type="text" id="age" name="age">
            </div>
            <div class="input-field">
                <label for="professionalsummary">Professional Summary</label>
                <textarea id="professionalsummary" name="professionalsummary" rows="5"></textarea>
            </div>

            <!-- Wrapper for Submit Button -->
            <div class="submit-wrapper">
                <input id="member-submit" type="submit" value="Submit">
            </div>
        </form>
    </div>

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
