@extends('admin.layout')

@section('content')

<div class="container py-5">

    <h1 class="text-info fw-bold mb-5">
        Add New Project
    </h1>

    <div class="card glass-about p-5 shadow-lg">

        <form action="/admin/projects/store"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <!-- Title -->
            <div class="mb-4">

                <label class="form-label text-light">
                    Project Title
                </label>

                <input type="text"
                       name="title"
                       class="form-control"
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
                          required></textarea>

            </div>


            <!-- Technologies -->
            <div class="mb-4">

                <label class="form-label text-light">
                    Technologies
                </label>

                <input type="text"
                       name="technologies"
                       class="form-control"
                       placeholder="Laravel, PHP, MySQL">

            </div>


            <!-- GitHub Link -->
            <div class="mb-4">

                <label class="form-label text-light">
                    GitHub Link
                </label>

                <input type="text"
                       name="github_link"
                       class="form-control">

            </div>

            <!-- Project Image -->
            <div class="mb-4">

                <label class="form-label text-light">
                    Project Image
                </label>

                <input type="file"
                    name="image"
                    class="form-control">

            </div>
            
            <!-- Submit -->
            <button type="submit"
                    class="btn btn-info">

                Add Project

            </button>

        </form>

    </div>

</div>

@endsection