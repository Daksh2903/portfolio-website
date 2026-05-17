@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-5">

    <h1 class="text-info fw-bold">
        Manage Achievements
    </h1>

    <a href="/admin/achievements/create"
       class="btn btn-info">

        Add Achievement

    </a>

</div>


<div class="row g-4">

    @foreach($achievements as $achievement)

    <div class="col-md-6">

        <div class="card glass-about p-4 shadow-lg border-0 h-100">

            <h3 class="text-info mb-3">
                {{ $achievement->title }}
            </h3>

            <p class="text-light">
                {{ $achievement->description }}
            </p>


            <div class="mt-3 d-flex gap-2">

                <!-- Edit -->
                <a href="/admin/achievements/edit/{{ $achievement->id }}"
                   class="btn btn-warning">

                    Edit

                </a>


                <!-- Delete -->
                <form action="/admin/achievements/delete/{{ $achievement->id }}"
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

@endsection