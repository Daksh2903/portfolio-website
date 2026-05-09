@extends('layout')

@section('content')

<h1 class="text-center mb-4">My Projects</h1>

<div class="row">

    <!-- Project 1 -->
    <div class="col-md-6 mb-4">
        <div class="card shadow">

            <img src="{{ asset('images/projects/portfolio.png') }}"
                 class="card-img-top"
                 alt="Portfolio Project">

            <div class="card-body">

                <h4>Portfolio Website</h4>

                <p>
                    A personal portfolio website built using Laravel to showcase
                    my projects, skills, and achievements.
                </p>

                <p><strong>Tech Used:</strong> Laravel, HTML, CSS</p>

                <a href="#" class="btn btn-dark">
                    View GitHub
                </a>

            </div>
        </div>
    </div>


    <!-- Project 2 -->
    <div class="col-md-6 mb-4">
        <div class="card shadow">

            <img src="{{ asset('images/projects/student-system.png') }}"
                 class="card-img-top"
                 alt="Student Management System">

            <div class="card-body">

                <h4>Student Management System</h4>

                <p>
                    A system to manage student records including add,
                    update, delete, and search operations.
                </p>

                <p><strong>Tech Used:</strong> PHP, MySQL</p>

                <a href="#" class="btn btn-dark">
                    View GitHub
                </a>

            </div>
        </div>
    </div>

</div>

@endsection