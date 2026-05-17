@extends('layout')

@section('content')

<div class="container py-5">

    <h1 class="text-center fw-bold mb-5 text-info">
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

@endsection