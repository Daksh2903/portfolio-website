@extends('layout')

@section('content')

<div class="container py-5">

    <h1 class="text-info fw-bold mb-5">
        Admin Dashboard
    </h1>

    <div class="row g-4">

        <!-- Messages -->
        <div class="col-md-4" data-aos="fade-up">

            <div class="card glass-about p-4 shadow-lg text-center h-100">

                <h3 class="text-info mb-3">
                    Messages
                </h3>

                <p class="text-light mb-4">

                    Manage contact form submissions.

                </p>

                <a href="/messages"
                   class="btn btn-info">

                    Open

                </a>

            </div>

        </div>


        <!-- Projects -->
        <div class="col-md-4" data-aos="zoom-in">

            <div class="card glass-about p-4 shadow-lg text-center h-100">

                <h3 class="text-info mb-3">
                    Projects
                </h3>

                <p class="text-light mb-4">

                    Manage portfolio projects.

                </p>

                <a href="#"
                   class="btn btn-info">

                    Coming Soon

                </a>

            </div>

        </div>


        <!-- Achievements -->
        <div class="col-md-4" data-aos="fade-left">

            <div class="card glass-about p-4 shadow-lg text-center h-100">

                <h3 class="text-info mb-3">
                    Achievements
                </h3>

                <p class="text-light mb-4">

                    Manage achievements section.

                </p>

                <a href="#"
                   class="btn btn-info">

                    Coming Soon

                </a>

            </div>

        </div>

    </div>

</div>

@endsection