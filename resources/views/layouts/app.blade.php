<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IKEA @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('template/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('template/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">

    <style>
        .input-group {
            position: relative;
        }

        .input-group a {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 10;
            height: 100%;
            display: flex;
            align-items: center;
            padding: 0 0.5rem;
            cursor: pointer;
        }

        .input-group a i {
            color: #6c757d;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg pt-4">
            <a class="navbar-brand font-weight-bold text-secondary" href="#">IKEA </a>
            <div class="ml-auto" id="navbarNav">
                <ul class="navbar-nav d-flex flex-row ml-auto">
                    @if (Auth::user())
                        <li class="nav-item">
                            <a class="nav-link mr-2" href="#">
                                <i class="fas fa-user fa-lg text-secondary"></i>
                            </a>
                        </li>
                    @else
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{ route('user.login') }}"><i
                                    class="fas fa-user fa-lg text-secondary"></i></a>
                        </li>
                    @endif


                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart fa-lg text-secondary"></i></a>
                    </li>

                    @auth
                        {{-- @if (Auth::user()->hasRole('user'))
                            <li class="nav-item">
                                <a class="nav-link mr-2" href="#">
                                    <i class="fas fa-home fa-lg text-secondary"></i> Beranda
                                </a>
                            </li>
                        @endif --}}

                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="nav-link" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-lg text-secondary"></i>
                            </a>
                        </li>

                    @endauth
                </ul>
            </div>
        </nav>
    </div>
    <!-- /.navbar -->

    <!-- Content -->
    <div class="container p-4">
        @yield('content')
    </div>
    <!-- /.content -->

    @yield('script')

    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('template/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('template/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('template/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('template/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('template/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('template/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.js') }}"></script>
</body>

</html>
