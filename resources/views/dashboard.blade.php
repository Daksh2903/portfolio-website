@extends('admin.layout')

@section('content')

<h1 class="text-info fw-bold mb-5">
    Admin Dashboard
</h1>

<div class="row g-4">

    <!-- Total Projects -->
    <div class="col-md-6">

        <div class="card glass-about p-5 shadow-lg border-0">

            <h5 class="text-secondary mb-3">
                Total Projects
            </h5>

            <h1 class="text-info fw-bold">
                {{ $totalProjects }}
            </h1>

        </div>

    </div>


    <!-- Total Messages -->
    <div class="col-md-6">

        <div class="card glass-about p-5 shadow-lg border-0">

            <h5 class="text-secondary mb-3">
                Total Messages
            </h5>

            <h1 class="text-info fw-bold">
                {{ $totalMessages }}
            </h1>

        </div>

    </div>

</div>


<!-- Quick Actions -->
<div class="mt-5">

    <h2 class="text-info mb-4">
        Quick Actions
    </h2>

    <div class="d-flex gap-3 flex-wrap">

        <a href="/admin/projects/create"
           class="btn btn-info">

            Add Project

        </a>

        <a href="/admin/projects"
           class="btn btn-warning">

            Manage Projects

        </a>

        <a href="/messages"
           class="btn btn-success">

            View Messages

        </a>

    </div>

</div>

@endsection