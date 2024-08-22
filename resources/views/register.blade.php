<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Career Training College</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>
    <!-- Main Content -->
    <main>
        <!-- Login Section   -->
        <section class="login-section">
            <div class="login-container">
                <!-- Go Back Button -->
                <a href="/login" class="go-back-button">
                    <img src="{{ asset('images/back-button.png') }}" alt="Go Back" class="go-back-icon">
                </a>

                <h2 class="login-title">Register a New User</h2>

                <form class="login-form" method="POST" action="/validate-register">
                    @csrf

                    <div class="input-field">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">
                    </div>

                    <div class="input-field">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                    </div>

                    <div class="input-field">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                    </div>

                    <div class="submit-wrapper">
                        <input type="submit" value="Create Account">
                    </div>
                </form>
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
                        <img src="{{ asset('images/facebook-white.png') }}" alt="Facebook icon">
                        <img src="{{ asset('images/instagram-white.png') }}" alt="Instagram icon">
                        <img src="{{ asset('images/linkedin-white.png') }}" alt="LinkedIn icon">
                        <img src="{{ asset('images/twitter-white.png') }}" alt="Twitter icon">
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
