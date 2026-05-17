@extends('admin.layout')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-5">

        <h1 class="text-info fw-bold">
            Manage Projects
        </h1>

        <a href="/admin/projects/create"
           class="btn btn-info">

            Add Project

        </a>

    </div>


    <div class="row g-4">

        @foreach($projects as $project)

        <div class="col-md-6">

            <div class="card glass-about p-4 shadow-lg h-100">

                @if($project->image)

                <img src="{{ asset('uploads/projects/' . $project->image) }}"
                    class="img-fluid rounded mb-3"
                    alt="Project Image">

                @endif
                
                <h3 class="text-info mb-3">
                    {{ $project->title }}
                </h3>

                <p class="text-light">
                    {{ $project->description }}
                </p>

                <p class="text-secondary">

                    <strong>Technologies:</strong>

                    {{ $project->technologies }}

                </p>

                <div class="mt-3 d-flex gap-2">

                    <a href="{{ route('projects.edit', $project->id) }}"
                        class="btn btn-warning">

                        Edit

                    </a>

                    <a href="{{ $project->github_link }}"
                        target="_blank"
                        class="btn btn-info">

                            GitHub

                    </a>

                    <form action="/admin/projects/delete/{{ $project->id }}"
                        method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger">

                            Delete

                        </button>

                    </form>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection