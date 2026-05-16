@extends('layout')

@section('content')

<div class="container py-5">

    <h1 class="text-info fw-bold mb-5">
        Edit Project
    </h1>

    <div class="card glass-about p-5 shadow-lg">

        <form action="{{ route('projects.update', $project->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-4">

                <label class="form-label text-light">
                    Project Title
                </label>

                <input type="text"
                       name="title"
                       class="form-control"
                       value="{{ $project->title }}"
                       required>

            </div>


            <!-- Description -->
            <div class="mb-4">

                <label class="form-label text-light">
                    Description
                </label>

                <textarea name="description"
                          rows="5"
                          class="form-control"
                          required>{{ $project->description }}</textarea>

            </div>


            <!-- Technologies -->
            <div class="mb-4">

                <label class="form-label text-light">
                    Technologies
                </label>

                <input type="text"
                       name="technologies"
                       class="form-control"
                       value="{{ $project->technologies }}">

            </div>


            <!-- GitHub -->
            <div class="mb-4">

                <label class="form-label text-light">
                    GitHub Link
                </label>

                <input type="text"
                       name="github_link"
                       class="form-control"
                       value="{{ $project->github_link }}">

            </div>


            <button type="submit"
                    class="btn btn-info">

                Update Project

            </button>

        </form>

    </div>

</div>

@endsection