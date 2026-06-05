@extends('admin.layout')

@section('content')

<h1 class="text-info fw-bold mb-5">
    Edit Achievement
</h1>

<div class="card glass-about p-5 shadow-lg border-0">

    <form action="/admin/achievements/update/{{ $achievement->id }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-4">

            <label class="form-label text-light">
                Achievement Title
            </label>

            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $achievement->title }}"
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
                      required>{{ $achievement->description }}</textarea>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Achievement Date
            </label>

            <input type="date"
                name="achievement_date"
                value="{{ $achievement->achievement_date }}"
                class="form-control">

        </div>

        @if($achievement->image)

        <img src="{{ asset('uploads/achievements/' . $achievement->image) }}"
            class="img-fluid rounded mb-3"
            width="250">

        @endif

        <div class="mb-3">

            <label class="form-label">
                Change Certificate Image
            </label>

            <input type="file"
                name="image"
                class="form-control">

        </div>


        <button type="submit"
                class="btn btn-info">

            Update Achievement

        </button>

    </form>

</div>

@endsection