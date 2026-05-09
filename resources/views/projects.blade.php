@extends('layout')

@section('content')

<div class="container py-5">

    <h1 class="text-center fw-bold mb-5 text-info">
        My Projects
    </h1>

    <div class="row g-4">

        <!-- Project 1 -->
        <div class="col-md-6" data-aos="fade-up">

            <div class="card bg-dark text-white border-0 shadow-lg h-100">

                <img src="{{ asset('Images/projects/portfolio.png') }}"
                     class="card-img-top"
                     alt="Portfolio Project">

                <div class="card-body">

                    <h3 class="card-title">
                        Portfolio Website
                    </h3>

                    <p class="card-text text-light">
                        A modern personal portfolio website built using Laravel
                        to showcase projects, achievements, and technical skills.
                    </p>

                    <!-- Tech Badges -->
                    <div class="mb-3">

                        <span class="badge bg-info text-dark me-2">
                            Laravel
                        </span>

                        <span class="badge bg-secondary me-2">
                            PHP
                        </span>

                        <span class="badge bg-primary me-2">
                            Bootstrap
                        </span>

                    </div>

                    <!-- Buttons -->
                    <a href="https://github.com/Daksh2903/portfolio-website"
                       class="btn btn-info me-2"
                       target="_blank">

                        GitHub

                    </a>

                </div>

            </div>

        </div>


        <!-- Project 2 -->
        <div class="col-md-6" data-aos="zoom-in">

            <div class="card bg-dark text-white border-0 shadow-lg h-100">

                <img src="{{ asset('Images/projects/student-system.png') }}"
                     class="card-img-top"
                     alt="Student System">

                <div class="card-body">

                    <h3 class="card-title">
                        Student Management System
                    </h3>

                    <p class="card-text text-light">
                        A CRUD-based student management system for handling
                        student records using PHP and MySQL.
                    </p>

                    <!-- Tech Badges -->
                    <div class="mb-3">

                        <span class="badge bg-warning text-dark me-2">
                            PHP
                        </span>

                        <span class="badge bg-success me-2">
                            MySQL
                        </span>

                        <span class="badge bg-primary me-2">
                            Bootstrap
                        </span>

                    </div>

                    <!-- Buttons -->
                    <a href="#"
                       class="btn btn-info me-2">

                        GitHub

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection