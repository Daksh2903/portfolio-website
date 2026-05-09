@extends('layout')

@section('content')

<div class="row align-items-center mb-5">

    <!-- Left Side Text -->
    <div class="col-md-6">

        <h1>Hello, I'm Daksh Patel 👋</h1>

        <h4 class="text-muted">
            Computer Science Student | Laravel Developer
        </h4>

        <p>
            I am passionate about web development and currently learning Laravel.
            I enjoy building clean and functional web applications.
        </p>

        <a href="{{ asset('resume/VAC2.pdf') }}"
            class="btn btn-primary"
            download>
            Download Resume
        </a>

        <a href="/contact" class="btn btn-outline-dark">Contact Me</a>

    </div>

    <!-- Right Side Image -->
    <div class="col-md-6 text-center">

        <img src="{{ asset('images/Profile.jpeg') }}"
             class="img-fluid rounded-circle"
             alt="Profile Photo">

    </div>

</div>


<!-- Skills Section -->

<h2 class="text-center mb-4">My Skills</h2>

<div class="row text-center">

    <div class="col-md-4 mb-3">
        <div class="card shadow">
            <div class="card-body">
                <h5>HTML</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow">
            <div class="card-body">
                <h5>CSS</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow">
            <div class="card-body">
                <h5>JavaScript</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow">
            <div class="card-body">
                <h5>PHP</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow">
            <div class="card-body">
                <h5>Laravel</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow">
            <div class="card-body">
                <h5>SQL</h5>
            </div>
        </div>
    </div>

</div>

@endsection