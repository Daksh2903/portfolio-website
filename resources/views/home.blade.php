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

                    <a href="/projects" class="btn btn-info btn-lg me-3">
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