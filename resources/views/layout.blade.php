<!DOCTYPE html>
<html>
<head>
    <title>Daksh Patel Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/">Daksh Patel</a>

        <div>
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                       href="/">
                       Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                       href="/about">
                       About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}"
                       href="/projects">
                       Projects
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('achievements') ? 'active' : '' }}"
                       href="/achievements">
                       Achievements
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                       href="/contact">
                       Contact
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>


<!-- Page Content -->
<div class="container mt-4">
    @yield('content')
</div>


<!-- Footer -->
<footer class="bg-dark text-white text-center mt-5 p-3">
    © 2026 Daksh Patel Portfolio
</footer>


</body>
</html>