<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('Admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('Admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('Admin/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('Admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('Admin/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('Admin/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <!-- axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header class="header fixed-top">
    <nav class="navbar navbar-expand-lg">

        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <!-- Navbar Header--><a href="{{route('admin.dashboard')}}" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong
                            class="text-primary">Ali</strong><strong>Karimli</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">A</strong><strong>K</strong></div>
                </a>
                <!-- Sidebar Toggle Btn-->
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>
            <div class="right-menu list-inline no-margin-bottom">
                <div class="list-inline-item"><a id="navbarDropdownMenuLink1" href="/"
                                                 aria-haspopup="true" aria-expanded="false"
                                                 class="nav-link messages-toggle"><i class="icon-email"></i><span
                            class="badge dashbg-1">6</span></a>

                </div>
                <form method="POST" action="{{route('logout')}}" class="list-inline-item logout">
                    @csrf
                    <button id="logout"  class="nav-link"> <span
                            class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>
<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->

    <nav id="sidebar">
        <!-- Sidebar Header--> <br><br><br>
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="" alt="" class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Ali Karimli</h1>
                <p>Web Developer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>

        <ul class="list-unstyled">
            <li><a href="{{route('site')}}"> <i class="fa fa-globe"></i>Web site </a></li>
            <li><a href="{{route('admin.dashboard')}}"> <i class="icon-home"></i>Dashboard </a></li>
            <li><a href="{{route('admin.studios')}}"> <i class="fa fa-newspaper-o"></i>Studios</a></li>
        </ul>

    </nav>

    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <br><br>

        @yield('main')

        <footer class="footer">
            <div class="footer__block block no-margin-bottom">
                <div class="container-fluid text-center">
                    <p class="no-margin-bottom">Design by <a
                            href="{{ route('site') }}">Ali Karimli</a></p>
                </div>
            </div>
        </footer>
    </div>

</div>
<!-- JavaScript files-->
<script src="{{asset('Admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Admin/vendor/popper.js/umd/popper.min.js')}}"></script>
<script src="{{asset('Admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Admin/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('Admin/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('Admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('Admin/js/charts-home.js')}}"></script>
<script src="{{asset('Admin/js/front.js')}}"></script>
</body>
</html>
