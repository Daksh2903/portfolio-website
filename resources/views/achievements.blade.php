@extends('layout')

@section('content')

<div class="container py-5">

    <h1 class="text-center text-info fw-bold mb-5">
        Achievements
    </h1>

    <div class="row g-4">

        <!-- Achievement 1 -->
        <div class="col-md-6" data-aos="fade-up">

            <div class="card glass-about p-5 shadow-lg h-100">

                <h3 class="text-info mb-4">
                    Scetathon Finalist
                </h3>

                <p class="text-light fs-5 lh-lg">

                    Selected among 130+ teams in the
                    Scetathon competition organized by
                    SCET College.

                    <br><br>

                    Successfully advanced to the
                    intensive 24-hour development round
                    with my team GreenNode.

                </p>

            </div>

        </div>


        <!-- Achievement 2 -->
        <div class="col-md-6" data-aos="zoom-in">

            <div class="card glass-about p-5 shadow-lg h-100">

                <h3 class="text-info mb-4">
                    Laravel Portfolio Project
                </h3>

                <p class="text-light fs-5 lh-lg">

                    Designed and developed a modern
                    full-stack portfolio website using
                    Laravel, Bootstrap, MySQL, and GitHub.

                    <br><br>

                    Implemented authentication,
                    database integration, animations,
                    and responsive modern UI design.

                </p>

            </div>

        </div>

    </div>

</div>

@endsection