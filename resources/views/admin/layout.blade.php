<!DOCTYPE html>
<html>

<head>

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        body{
            background: #0f172a;
            color: white;
            font-family: Poppins, sans-serif;
        }

        .sidebar{

            width: 260px;

            height: 100vh;

            position: fixed;

            background: rgba(255,255,255,0.05);

            backdrop-filter: blur(10px);

            padding: 30px;

            border-right: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar a{

            display: block;

            color: white;

            text-decoration: none;

            padding: 12px 15px;

            margin-bottom: 10px;

            border-radius: 10px;

            transition: 0.3s;
        }

        .sidebar a:hover{

            background: rgba(255,255,255,0.1);

            color: #38bdf8;
        }

        .main-content{

            margin-left: 280px;

            padding: 40px;
        }

        .glass-about{

            background: rgba(255,255,255,0.08);

            backdrop-filter: blur(12px);

            border: 1px solid rgba(255,255,255,0.1);

            border-radius: 20px;

        }

        .card{

            transition: all 0.3s ease;

        }

        .card:hover{

            transform: translateY(-5px);

        }

        .achievement-image{

            width: 100%;

            height: 220px;

            object-fit: cover;

            border-radius: 12px;

        }

    </style>

</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <h2 class="text-info mb-5">
            Admin Panel
        </h2>

        <a href="/dashboard">
            <i class="fas fa-chart-line me-2"></i>
            Dashboard
        </a>

        <a href="/admin/projects">
            <i class="fas fa-folder me-2"></i>
            Projects
        </a>

        <a href="/admin/achievements">
            <i class="fas fa-trophy me-2"></i>
            Achievements
        </a>

        <a href="/messages">
            <i class="fas fa-envelope me-2"></i>
            Messages
        </a>

        <a href="/">
            <i class="fas fa-globe me-2"></i>
            Visit Website
        </a>

    </div>


    <!-- Main Content -->
    <div class="main-content">

        @yield('content')

    </div>

</body>

</html>