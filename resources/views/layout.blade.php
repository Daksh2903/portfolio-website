<!DOCTYPE html>
<html>
<head>
    <title>Daksh Patel Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
     <style>

        .profile-image{

            animation: float 4s ease-in-out infinite;

        }

        @keyframes float{

            0%{
                transform: translateY(0px);
            }

            50%{
                transform: translateY(-15px);
            }

            100%{
                transform: translateY(0px);
            }

        }

    html{

    scroll-behavior: smooth;

    }

    body{
        background: linear-gradient(
            135deg,
            #0f172a,
            #1e293b,
            #111827
        );

        color: white;
        font-family: 'Poppins', sans-serif;

        min-height: 100vh;
    }

    .glass-navbar{

        background: rgba(15, 23, 42, 0.7);

        backdrop-filter: blur(12px);

        border-bottom: 1px solid rgba(255,255,255,0.1);

        box-shadow: 0 4px 30px rgba(0,0,0,0.2);
    }

    .glass-about{

        background: rgba(255,255,255,0.08) !important;

        backdrop-filter: blur(12px);

        border: 1px solid rgba(255,255,255,0.1);

        border-radius: 20px;
    }

    /* Smooth transition */
    .card{

        transition: all 0.4s ease;

        overflow: hidden;

        border-radius: 20px;

        background: rgba(255,255,255,0.08) !important;

        backdrop-filter: blur(10px);

        border: 1px solid rgba(255,255,255,0.1);
    }

    /* Card Hover Effect */
    .card:hover{
        transform: translateY(-10px);
        box-shadow: 0px 15px 30px rgba(0,0,0,0.5);
    }

    .btn-info{

        background: linear-gradient(
            45deg,
            #38bdf8,
            #0ea5e9
        );

        border: none;

        box-shadow: 0 0 15px rgba(56,189,248,0.4);
    }

    /* Image Hover Zoom */
    .card img{
        transition: transform 0.5s ease;
    }

    .card:hover img{
        transform: scale(1.05);
    }

    /* Button Hover */
    .btn{
        transition: all 0.3s ease;
    }

    .btn:hover{
        transform: scale(1.05);
    }

    /* Navbar Hover */
    .nav-link{
        transition: color 0.3s ease;
    }

    .nav-link:hover{
        color: #38bdf8 !important;
    }

    .timeline{

        position: relative;

        margin: 0 auto;

        max-width: 800px;

    }

    .timeline::before{

        content: '';

        position: absolute;

        left: 20px;

        top: 0;

        width: 3px;

        height: 100%;

        background: #38bdf8;

    }

    .timeline-item{

        position: relative;

        padding-left: 60px;

        margin-bottom: 40px;

    }

    .timeline-dot{

        position: absolute;

        left: 10px;

        top: 5px;

        width: 20px;

        height: 20px;

        background: #38bdf8;

        border-radius: 50%;

        box-shadow: 0 0 15px #38bdf8;

    }

    .skill-card{

        background: rgba(255,255,255,0.05);

        backdrop-filter: blur(10px);

        border: 1px solid rgba(255,255,255,0.1);

        border-radius: 15px;

        transition: all 0.4s ease;

    }

    .skill-card:hover{

        transform: translateY(-8px);

        box-shadow: 0 0 20px rgba(56,189,248,0.4);

    }

    .skill-icon{

        font-size: 40px;

        color: #38bdf8;

    }

    .project-card{

        background: rgba(255,255,255,0.05);

        backdrop-filter: blur(12px);

        border: 1px solid rgba(255,255,255,0.1);

        border-radius: 20px;

        overflow: hidden;

        transition: all 0.4s ease;

    }

    .project-card:hover{

        transform: translateY(-10px);

        box-shadow: 0 0 25px rgba(56,189,248,0.4);

    }

    .project-card img{

        width: 100%;

        height: 180px;

        object-fit: cover;

        border-radius: 15px 15px 0 0;

    }

    .project-card:hover img{

        transform: scale(1.05);

    }

    .tech-badge{

        margin-right: 5px;

        margin-bottom: 5px;

    }

    .achievement-card{

        background: rgba(255,255,255,0.05);

        backdrop-filter: blur(10px);

        border: 1px solid rgba(255,255,255,0.1);

        border-radius: 20px;

        transition: all 0.4s ease;

        height: 100%;

    }

    .achievement-image{

        width: 100%;

        height: 220px;

        object-fit: cover;

        border-radius: 15px;

    }

    .achievement-card p{

        flex-grow: 1;

    }

    .achievement-card:hover{

        transform: translateY(-10px);

        box-shadow: 0 0 25px rgba(56,189,248,0.4);

    }

    .achievement-icon{

        font-size: 50px;

        color: #38bdf8;

    }

    .progress{

        background: rgba(255,255,255,0.1);

        border-radius: 10px;

    }

    .progress-bar{

        border-radius: 10px;

    }

    @media (max-width: 768px){

        .profile-image{

            width: 220px !important;

        }

        .hero-buttons{

            display: flex;

            flex-direction: column;

            gap: 10px;

        }

        .hero-stats h3{

            font-size: 1.4rem;

        }

        .glass-about{

            padding: 25px !important;

        }

        .display-3{

            font-size: 2rem !important;

        }

        .btn-lg{

            padding: 10px 20px;

            font-size: 1rem;

        }

        .min-vh-100{

            min-height: auto !important;

            padding-top: 40px;

            padding-bottom: 40px;

        }

        .card{
            padding: 0.75rem !important;
        }
    }

    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top glass-navbar">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold text-info fs-3" href="/">
            Daksh Patel
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('/') ? 'active text-info fw-bold' : '' }}"
                       href="/">
                       Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('about') ? 'active text-info fw-bold' : '' }}"
                       href="#about">
                       About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="#skills">
                        Skills
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3" href="#journey">
                        Journey
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('projects') ? 'active text-info fw-bold' : '' }}"
                       href="#projects">
                       Projects
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('achievements') ? 'active text-info fw-bold' : '' }}"
                       href="#achievements">
                       Achievements    
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('contact') ? 'active text-info fw-bold' : '' }}"
                       href="#contact">
                       Contact
                    </a>
                </li>

                @auth

                <li class="nav-item">

                    <a class="nav-link px-3 text-warning fw-bold"
                        href="/dashboard">

                        Admin

                    </a>

                </li>

                @endauth

            </ul>

        </div>

    </div>

</nav>

<!-- Page Content -->
<div class="container mt-4">
    @yield('content')

    <footer class="bg-black text-center text-white py-4 mt-5">

    <div class="container">

        <h4 class="text-info mb-3">
            Daksh Patel
        </h4>

        <p class="text-light">
            Laravel & Full Stack Developer
        </p>

        <!-- Social Icons -->
        <div class="mb-3">

            <a href="https://github.com/Daksh2903"
               target="_blank"
               class="text-info fs-3 me-3">

                <i class="fab fa-github"></i>

            </a>

            <a href="#"
               class="text-info fs-3 me-3">

                <i class="fab fa-linkedin"></i>

            </a>

            <a href="mailto:yourmail@gmail.com"
               class="text-info fs-3">

                <i class="fas fa-envelope"></i>

            </a>

        </div>

        <p class="mb-0 text-secondary">
            © 2026 Daksh Patel | Built with Laravel
        </p>

    </div>

    </footer>
</div>




<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>