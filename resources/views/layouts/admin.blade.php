{{-- Templating --}}
<!DOCTYPE html>
<html lang="">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel 9 | @yield('title')</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">

    @stack('css')
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Aquatic Planning</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Menu') }}
        </div>

        <!-- Nav Item -->
        <li class="nav-item {{ Nav::isRoute('fish-farm.index') }}">
            <a class="nav-link" href="{{ route('fish-farm.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>{{ __('Kebutuhan Perikanan') }}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('fish-farm-sampling.index') }}">
            <a class="nav-link" href="{{ route('fish-farm-sampling.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>{{ __('Kebutuhan Perikanan Per Sampling') }}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('fishTypes.index') }}">
            <a class="nav-link" href="{{ route('fishTypes.index') }}">
                <i class="fas fa-fw fa-folder""></i>
                <span>{{ __('Data Ikan') }}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('fishFoods.index') }}">
            <a class="nav-link" href="{{ route('fishFoods.index') }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>{{ __('Data Pakan') }}</span>
            </a>
        </li>


        <li class="nav-item {{ Nav::isRoute('riwayats.index') }}">
            <a class="nav-link" href="{{ route('riwayats.index') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>{{ __('Riwayat') }}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('riwayat-samplings.index') }}">
            <a class="nav-link" href="{{ route('riwayat-samplings.index') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>{{ __('Riwayat Sampling') }}</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>




            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @stack('notif')
                @yield('main-content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Putra Winly Octavianto 2021 - {{ date('Y') }}</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>


<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
@stack('js')
</body>
</html>
