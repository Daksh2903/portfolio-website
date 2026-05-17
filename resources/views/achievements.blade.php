@extends('layout')

@section('content')

<div class="container py-5">

    <h1 class="text-center fw-bold mb-5 text-info">
        Achievements
    </h1>

    <div class="row g-4">

        @foreach($achievements as $achievement)

        <div class="col-md-6" data-aos="fade-up">

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

@endsection