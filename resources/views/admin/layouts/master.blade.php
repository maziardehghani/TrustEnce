<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبور وبسایت Trustence </title>

    <!-- Bootstrap 5 RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Vazir Font -->
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
</head>


<body class="light-mode">

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container-fluid">
        <button class="btn btn-outline-light me-3" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>
        <a class="navbar-brand" href="dashboard.html">
            <i class="bi bi-hospital me-2"></i>
            داشبور وبسایت Trustence
        </a>

        <div class="navbar-nav me-auto">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle me-1"></i>
                    کاربر
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>پروفایل</a></li>
                    <li><a class="dropdown-item" href="settings.html"><i class="bi bi-gear me-2"></i>تنظیمات</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>خروج</a></li>
                </ul>
            </div>
            <button class="btn btn-outline-light ms-2" id="themeToggle">
                <i class="bi bi-sun-fill" id="themeIcon"></i>
            </button>
        </div>
    </div>
</nav>


<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.projects.index')}}">
                            <i class="bi bi-house-door me-2"></i>
                            پروژه ها
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.medias.index')}}">
                            <i class="bi bi-house-door me-2"></i>
                            رسانه ها
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.teams.index')}}">
                            <i class="bi bi-house-door me-2"></i>
                            تیم ها
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.requests.index')}}">
                            <i class="bi bi-house-door me-2"></i>
                            درخواست ها
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/js/script.js')}}"></script>
</body>


</html>
