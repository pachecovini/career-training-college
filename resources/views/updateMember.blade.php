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

    <div class="create-member-container">
        <form class="create-member-form" action="/{{ $member->id }}/update" method="POST">
            @csrf
            @method('POST')

            <div class="form-title">Update Member</div>

            <div class="input-field">
                <label>Full Name</label>
                <input type="text" name="fullName" value="{{ $member->fullName }}">
            </div>
            <div class="input-field">
                <label>Email</label>
                <input type="email" name="email" value="{{ $member->email }}">
            </div>
            <div class="input-field">
                <label>Phone</label>
                <input type="text" name="phone" value="{{ $member->phone }}">
            </div>
            <div class="input-field">
                <label>Address</label>
                <input type="text" name="address" value="{{ $member->address }}">
            </div>
            <div class="input-field">
                <label>Age</label>
                <input type="text" name="age" value="{{ $member->age }}">
            </div>
            <div class="input-field">
                <label>Professional Summary</label>
                <textarea name="professionalsummary" rows="5">{{ $member->professionalsummary }}</textarea>
            </div>
            <div class="submit-wrapper">
                <input id="member-submit" type="submit" value="Update Member">
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
