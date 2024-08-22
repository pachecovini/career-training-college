<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Training College</title>
    <meta name="description"
        content="Career Training College provides top-notch career training services. Explore our list of members and join our community.">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('index.css') }}">
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

    <main>
        <!-- All Members Section -->
        <section class="list">
            <h2>List of Members</h2>
            <div class="topnav">
                <input type="text" placeholder="Search..">
                <button aria-label="Search">
                    <img src="{{ asset('images/search.png') }}" alt="Search Icon">
                </button>

            </div>

            <!-- List -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Professional Summary</th>
                            @if (Auth::check() & Auth::User()->isAdmin)
                                <th>Section</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->fullName }}</td>
                                <td>{{ $member->age }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->phone }}</td>
                                <td>{{ $member->address }}</td>
                                <td>{{ $member->professionalsummary }}</td>
                                @if (Auth::check() && Auth::User()->isAdmin)
                                    <td>
                                        <a href="{{ $member->id }}/edit" aria-label="Edit">
                                            <img src="{{ asset('images/edit.png') }}" alt="Edit Icon">
                                        </a>
                                        <form action="{{ $member->id }}/delete" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this item?')">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" aria-label="Delete">
                                                <img src="{{ asset('images/delete.png') }}" alt="Delete Icon">
                                            </button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>

                </table>
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
