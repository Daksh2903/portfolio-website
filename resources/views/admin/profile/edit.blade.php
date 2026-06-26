@extends('admin.layout')

@section('content')

<h1 class="text-info fw-bold mb-5">
    Profile Settings
</h1>

<div class="card glass-about p-5 shadow-lg border-0">

    <form action="/admin/profile/update"
      method="POST"
      enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-4">

            <label class="form-label text-light">
                Full Name
            </label>

            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ $profile->name }}">

        </div>

        <div class="mb-4">

            <label class="form-label text-light">
                Professional Title
            </label>

            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $profile->title }}">

        </div>

        <div class="mb-4">

            <label class="form-label text-light">
                Typing Animation Roles
            </label>

            <textarea
                name="typing_roles"
                class="form-control"
                rows="5"
                placeholder="One role per line">{{ $profile->typing_roles }}</textarea>

            <small class="text-secondary">
                Enter one role per line. These will be shown in the homepage typing animation.
            </small>

        </div>

        <div class="mb-4">

            <label class="form-label text-light">
                About Me
            </label>

            <textarea class="form-control"
                      name="about"
                      rows="6">{{ $profile->about }}</textarea>

        </div>

        @if($profile->image)

        <div class="mb-4">

            <img src="{{ asset('uploads/profile/' . $profile->image) }}"
                class="img-fluid rounded"
                width="200">

        </div>

        @endif

        <div class="mb-4">

            <label class="form-label text-light">
                Profile Image
            </label>

            <input type="file"
                name="image"
                class="form-control">

        </div>

        <div class="mb-4">

            <label class="form-label text-light">
                Resume (PDF)
            </label>

            <input type="file"
                name="resume"
                class="form-control"
                accept=".pdf">

        </div>

        @if($profile->resume)

        <div class="mb-4">

            <a href="{{ asset('uploads/resume/' . $profile->resume) }}"
            target="_blank"
            class="btn btn-success">

                View Current Resume

            </a>

        </div>

        @endif


        <button class="btn btn-info">
            Save Profile
        </button>

    </form>

</div>

@endsection