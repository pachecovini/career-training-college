<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Career Training College</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>

    <!-- Main Content -->
    <main>
        <!-- Login Section -->
        <section class="login-section">
            <div class="login-container">
                <h2 class="login-title">Login</h2>

                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-field">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                    </div>

                    <div class="input-field">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                    </div>

                    <div class="submit-wrapper">
                        <input type="submit" value="Login">
                    </div>

                    <div class="register-link">
                        <p>Don't have an account? <a href="/register">Create one here</a></p>
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
