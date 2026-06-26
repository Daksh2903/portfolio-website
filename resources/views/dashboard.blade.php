@extends('admin.layout')

@section('content')

<h1 class="text-info fw-bold mb-5">
    Admin Dashboard
</h1>

<div class="row g-4">

    <!-- Total Projects -->
    <div class="col-md-4">

        <div class="card glass-about p-5 shadow-lg border-0">

            <i class="fas fa-folder dashboard-icon"></i>

            <h5 class="text-secondary mb-3">
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

            <i class="fas fa-envelope dashboard-icon"></i>

            <h5 class="text-secondary mb-3">
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

            <i class="fas fa-trophy dashboard-icon"></i>

            <h5 class="text-secondary mb-3">
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

<div class="card glass-about p-4 mt-5">

    <h3 class="text-info mb-4">
        Portfolio Overview
    </h3>

    <canvas id="dashboardChart"></canvas>

</div>

<div class="card glass-about dashboard-card p-5 shadow-lg border-0">

    <h3 class="text-info mb-4">
        Portfolio Statistics
    </h3>

    <div style="max-width: 400px; margin:auto;">

        <canvas id="statsChart"></canvas>

    </div>

</div>

<div class="card glass-about p-4 mt-5">

    <h3 class="text-info mb-4">
        Recent Activity
    </h3>

    <div class="mb-4">

        <h5 class="text-warning">
            <i class="fas fa-folder me-2"></i>
            Latest Project
        </h5>

        <p class="text-light">

            {{ $latestProject?->title ?? 'No projects yet' }}

        </p>

    </div>

    <div class="mb-4">

        <h5 class="text-success">
            <i class="fas fa-trophy me-2"></i>
            Latest Achievement
        </h5>

        <p class="text-light">

            {{ $latestAchievement?->title ?? 'No achievements yet' }}

        </p>

    </div>

    <div>

        <h5 class="text-info">
            <i class="fas fa-envelope me-2"></i>
            Latest Message
        </h5>

        <p class="text-light">

            {{ $latestMessage?->name ?? 'No messages yet' }}

        </p>

    </div>

</div>

<div class="card glass-about p-4 mt-5">

    <h3 class="text-info mb-4">
        Admin Profile
    </h3>

    <div class="text-center">

        @if($profile->image)

            <img src="{{ asset('uploads/profile/' . $profile->image) }}"
                 class="rounded-circle shadow mb-3"
                 width="140"
                 height="140"
                 style="object-fit:cover;">

        @endif

        <h3 class="text-info">

            {{ $profile->name }}

        </h3>

        <p class="text-light">

            {{ $profile->title }}

        </p>

        <h5 class="mt-4 text-info">

            Profile Completion

        </h5>

        <div class="progress mb-3" style="height:25px;">

            <div class="progress-bar bg-success"

                role="progressbar"

                style="width: {{ $profileCompletion }}%;">

                {{ $profileCompletion }}%

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

<script>

Chart.register(ChartDataLabels);

const ctx = document.getElementById('dashboardChart');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: [
            'Projects',
            'Messages',
            'Achievements'
        ],

        datasets: [{

            label: 'Total',

            data: [

                {{ $totalProjects }},

                {{ $totalMessages }},

                {{ $totalAchievements }}

            ],

            backgroundColor: [

                '#38bdf8',

                '#22c55e',

                '#f59e0b'

            ],

            borderRadius: 10

        }]

    },

    options: {

        responsive: true,

        plugins: {

            legend: {

                display: false

            },

            datalabels: {

                anchor: 'end',

                align: 'top',

                color: '#ffffff',

                font: {

                    weight: 'bold',

                    size: 14

                }

            }

        },

        scales: {

            y: {

                beginAtZero: true,

                ticks: {

                    color: '#ffffff'

                },

                grid: {

                    color: 'rgba(255,255,255,0.1)'

                }

            },

            x: {

                ticks: {

                    color: '#ffffff'

                },

                grid: {

                    display: false

                }

            }

        }

    }

});

const statsCtx = document.getElementById('statsChart');

new Chart(statsCtx, {

    type: 'doughnut',

    data: {

        labels: [
            'Projects',
            'Messages',
            'Achievements'
        ],

        datasets: [{

            data: [

                {{ $totalProjects }},

                {{ $totalMessages }},

                {{ $totalAchievements }}

            ],

            backgroundColor: [

                '#38bdf8',
                '#22c55e',
                '#f59e0b'

            ],

            borderWidth: 0

        }]

    },

    options: {

        responsive: true,

    plugins: {

        legend: {

            position: 'bottom',

            labels: {

                color: '#ffffff',

                padding: 20

            }

        },

        datalabels: {

            color: '#ffffff',

            font: {

                weight: 'bold',

                size: 16

            },

            formatter: (value) => value

        }

    }
    }

});

</script>

@endsection