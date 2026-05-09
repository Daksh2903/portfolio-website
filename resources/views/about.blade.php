@extends('layout')

@section('content')

<h1 class="text-center mb-4">About Me</h1>

<div class="card p-5 shadow-lg glass-about">

    <p class="text-light fs-5 lh-lg">

    Hello! I am <span class="text-info fw-bold">Daksh Patel</span>,
    a Computer Science student passionate about web development
    and learning modern technologies like Laravel and PHP.

    <br><br>

    I enjoy building clean, functional, and user-friendly web applications.
    Currently, I am focusing on improving my backend development skills
    using Laravel.

    </p>

</div>


<!-- Education Section -->

<h1 class="mt-5 mb-4">
    Education
</h1>

<div class="card p-4 glass-about shadow-lg">

    <p class="text-light fs-5 mb-0">

        Bachelor of Science in Information Technology
        <span class="text-info">
            (Currently Pursuing)
        </span>

    </p>

</div>


<!-- Skills Section -->

<h1 class="mt-5 mb-4">
    Technical Skills
</h1>

<div class="row g-4">

    <div class="col-md-4">
        <div class="card glass-about p-3 text-center">
            <h5 class="text-info">HTML</h5>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card glass-about p-3 text-center">
            <h5 class="text-info">CSS</h5>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card glass-about p-3 text-center">
            <h5 class="text-info">JavaScript</h5>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card glass-about p-3 text-center">
            <h5 class="text-info">PHP</h5>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card glass-about p-3 text-center">
            <h5 class="text-info">Laravel</h5>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card glass-about p-3 text-center">
            <h5 class="text-info">MySQL</h5>
        </div>
    </div>

</div>


<!-- Career Goal Section -->

<h1 class="mt-5 mb-4">
    Career Goal
</h1>

<div class="card p-5 shadow-lg glass-about">

    <p class="text-light fs-5 lh-lg mb-0">

        My goal is to become a skilled Full Stack Developer
        and build modern, scalable, and user-friendly web applications.

        <br><br>

        I am continuously improving my backend development skills
        using Laravel, PHP, and MySQL while also exploring modern
        frontend technologies.

    </p>

</div>

@endsection