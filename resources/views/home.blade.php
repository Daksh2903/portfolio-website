@extends('layout')

@section('content')

<div class="container-fluid bg-dark text-white min-vh-100 d-flex align-items-center">

    <div class="container">

        <div class="row align-items-center">

            <!-- Left Side -->
            <div class="col-md-6" data-aos="fade-right">

                <h5 class="text-info mb-3">
                    Welcome To My Portfolio
                </h5>

                <h1 class="display-3 fw-bold">
                    Hi, I'm Daksh Patel
                </h1>

                <h2 class="text-info mb-4">
                    <span id="typing"></span>
                </h2>

                <p class="lead text-light">
                    Passionate about building modern web applications
                    using Laravel, PHP, MySQL, and JavaScript.
                </p>

                <div class="row mt-4 g-3">

                    <div class="col-4">

                        <div class="card bg-dark border-info text-center p-3">

                            <h3 class="text-info fw-bold">
                                5+
                            </h3>

                            <small>Projects</small>

                        </div>

                    </div>

                    <div class="col-4">

                        <div class="card bg-dark border-info text-center p-3">

                            <h3 class="text-info fw-bold">
                                6+
                            </h3>

                            <small>Technologies</small>

                        </div>

                    </div>

                    <div class="col-4">

                        <div class="card bg-dark border-info text-center p-3">

                            <h3 class="text-info fw-bold">
                                1+
                            </h3>

                            <small>Hackathons</small>

                        </div>

                    </div>

                </div>

                <div class="mt-4">

                    <a href="#projects" class="btn btn-info btn-lg me-3">
                        View Projects
                    </a>

                    <a href="{{ asset('resume/VAC2.pdf') }}"
                       class="btn btn-outline-light btn-lg"
                       download>
                       Download Resume
                    </a>

                </div>

            </div>


            <!-- Right Side -->
            <div class="col-md-6 text-center" data-aos="fade-left">

                <img src="{{ asset('Images/Profile.jpeg') }}"
                     alt="Profile"
                     class="img-fluid rounded-circle shadow-lg profile-image"
                     width="350">

            </div>

        </div>

    </div>

</div>

<!-- About Section -->
<section id="about" class="py-5">

    <div class="container">

        <h1 class="text-center text-info fw-bold mb-5">
            About Me
        </h1>

        <div class="card glass-about p-5 shadow-lg">

            <p class="text-light fs-5 lh-lg">

                Hello! I am
                <span class="text-info fw-bold">
                    Daksh Patel
                </span>,

                a passionate Laravel developer focused
                on building modern and scalable web applications.

                <br><br>

                I enjoy working with Laravel, PHP,
                MySQL, JavaScript, and modern UI design.

            </p>

        </div>

    </div>

</section>

<!-- Skills Section -->
<section id="skills" class="py-5">

    <div class="container">

        <h1 class="text-center text-info fw-bold mb-5">
            My Skills
        </h1>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="skill-card p-4 text-center">

                    <i class="fab fa-laravel skill-icon mb-3"></i>

                    <h4>Laravel</h4>

                    <p class="text-light">
                        Backend development and CRUD applications.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="skill-card p-4 text-center">

                    <i class="fab fa-php skill-icon mb-3"></i>

                    <h4>PHP</h4>

                    <p class="text-light">
                        Server-side programming and web applications.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="skill-card p-4 text-center">

                    <i class="fas fa-database skill-icon mb-3"></i>

                    <h4>MySQL</h4>

                    <p class="text-light">
                        Database design and management.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="skill-card p-4 text-center">

                    <i class="fab fa-js skill-icon mb-3"></i>

                    <h4>JavaScript</h4>

                    <p class="text-light">
                        Interactive and dynamic user interfaces.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="skill-card p-4 text-center">

                    <i class="fab fa-bootstrap skill-icon mb-3"></i>

                    <h4>Bootstrap</h4>

                    <p class="text-light">
                        Responsive and modern UI design.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="skill-card p-4 text-center">

                    <i class="fab fa-github skill-icon mb-3"></i>

                    <h4>Git & GitHub</h4>

                    <p class="text-light">
                        Version control and collaboration.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Timeline Section -->
<section id="journey" class="py-5">

    <div class="container">

        <h1 class="text-center text-info fw-bold mb-5">
            My Journey
        </h1>

        <div class="card glass-about p-5 shadow-lg">

            <div class="timeline">

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <h4 class="text-info">2024</h4>

                    <p class="text-light">
                        Started learning Web Development and programming fundamentals.
                    </p>

                </div>

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <h4 class="text-info">2025</h4>

                    <p class="text-light">
                        Learned PHP, MySQL, Bootstrap and started building projects.
                    </p>

                </div>

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <h4 class="text-info">2026</h4>

                    <p class="text-light">
                        Built a dynamic Laravel Portfolio CMS with Admin Dashboard, CRUD and Image Uploads.
                    </p>

                </div>

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <h4 class="text-info">2026</h4>

                    <p class="text-light">
                        Participated in Scetathon and advanced from 130+ teams to the next round.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Projects Section -->
<section id="projects" class="py-5">

    <div class="container">

        <h1 class="text-center text-info fw-bold mb-5">
            My Projects
        </h1>

        <div class="row g-4">

            @foreach($projects as $project)

            <div class="col-md-6" data-aos="fade-up">

                <div class="card glass-about p-4 shadow-lg h-100">

                    @if($project->image)

                    <img src="{{ asset('uploads/projects/' . $project->image) }}"
                         class="img-fluid rounded mb-4"
                         alt="Project Image">

                    @endif

                    <h3 class="text-info mb-3">
                        {{ $project->title }}
                    </h3>

                    <p class="text-light">
                        {{ $project->description }}
                    </p>

                    <div class="mb-3">

                        <span class="badge bg-info text-dark">

                            {{ $project->technologies }}

                        </span>

                    </div>

                    @if($project->github_link)

                    <a href="{{ $project->github_link }}"
                       target="_blank"
                       class="btn btn-info">

                        GitHub

                    </a>

                    @endif

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- Achievements Section -->
<section id="achievements" class="py-5">

    <div class="container">

        <h1 class="text-center text-info fw-bold mb-5">
            Achievements
        </h1>

        <div class="row g-4">

            @foreach($achievements as $achievement)

            <div class="col-md-6" data-aos="zoom-in">

                <div class="card glass-about p-5 shadow-lg h-100">

                    <h3 class="text-info mb-4">
                        {{ $achievement->title }}
                    </h3>

                    <p class="text-light fs-5 lh-lg">

                        {{ $achievement->description }}

                    </p>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- Contact Section -->
<section id="contact" class="py-5 mb-5">

    <div class="container">

        <h1 class="text-center text-info fw-bold mb-5">
            Contact Me
        </h1>

        <div class="card glass-about p-5 shadow-lg">

            <form action="/contact" method="POST">

                @csrf

                <!-- Name -->
                <div class="mb-4">

                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Your Name"
                           required>

                </div>


                <!-- Email -->
                <div class="mb-4">

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Your Email"
                           required>

                </div>


                <!-- Message -->
                <div class="mb-4">

                    <textarea name="message"
                              rows="5"
                              class="form-control"
                              placeholder="Your Message"
                              required></textarea>

                </div>


                <!-- Submit -->
                <button type="submit"
                        class="btn btn-info">

                    Send Message

                </button>

            </form>

        </div>

    </div>

</section>

<script>

document.addEventListener("DOMContentLoaded", function () {

    var typed = new Typed("#typing", {

        strings: [
            "Laravel Developer",
            "Full Stack Developer",
            "Backend Developer",
            "PHP Developer"
        ],

        typeSpeed: 60,
        backSpeed: 40,
        loop: true

    });

});

</script>

@endsection