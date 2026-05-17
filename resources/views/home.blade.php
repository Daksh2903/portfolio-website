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
                     class="img-fluid rounded-circle shadow-lg"
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