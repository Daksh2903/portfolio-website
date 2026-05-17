@extends('admin.layout')

@section('content')

<h1 class="text-info fw-bold mb-5">
    Add Achievement
</h1>

<div class="card glass-about p-5 shadow-lg border-0">

    <form action="/admin/achievements/store"
          method="POST">

        @csrf

        <!-- Title -->
        <div class="mb-4">

            <label class="form-label text-light">
                Achievement Title
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


        <button type="submit"
                class="btn btn-info">

            Add Achievement

        </button>

    </form>

</div>

@endsection