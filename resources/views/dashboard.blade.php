@extends('admin.layout')

@section('content')

<h1 class="text-info fw-bold mb-5">
    Admin Dashboard
</h1>

<div class="row g-4">

    <!-- Total Projects -->
    <div class="col-md-4">

        <div class="card glass-about p-5 shadow-lg border-0">

            <h5 class="text-secondary mb-3">
                <i class="fas fa-folder me-2"></i>
                Total Projects
            </h5>

            <h1 class="text-info fw-bold">
                {{ $totalProjects }}
            </h1>

        </div>

    </div>


    <!-- Total Messages -->
    <div class="col-md-4">

        <div class="card glass-about p-5 shadow-lg border-0">

            <h5 class="text-secondary mb-3">
                <i class="fas fa-envelope me-2"></i>
                Total Messages
            </h5>

            <h1 class="text-info fw-bold">
                {{ $totalMessages }}
            </h1>

        </div>

    </div>



    <!-- Total Achievements -->
    <div class="col-md-4">

        <div class="card glass-about p-5 shadow-lg border-0">

            <h5 class="text-secondary mb-3">
                <i class="fas fa-trophy me-2"></i>
                Total Achievements
            </h5>

            <h1 class="text-info fw-bold">
                {{ $totalAchievements }}
            </h1>

        </div>

    </div>

</div>

<!-- Quick Actions -->
<div class="mt-5">

    <h2 class="text-info mb-4">
        Quick Actions
    </h2>

    <div class="row g-3">

        <div class="col-md-4">
            <a href="/admin/projects/create"
            class="btn btn-info w-100">
                Add Project
            </a>
        </div>

        <div class="col-md-4">
            <a href="/admin/projects"
            class="btn btn-warning w-100">
                Manage Projects
            </a>
        </div>

        <div class="col-md-4">
            <a href="/messages"
            class="btn btn-success w-100">
                View Messages
            </a>
        </div>

        <div class="col-md-4">
            <a href="/admin/achievements/create"
            class="btn btn-primary w-100">
                Add Achievement
            </a>
        </div>

        <div class="col-md-4">
            <a href="/admin/achievements"
            class="btn btn-danger w-100">
                Manage Achievements
            </a>
        </div>

    </div>

</div>

@endsection