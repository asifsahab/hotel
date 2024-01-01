<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="icon" href="{{ asset('backend/dist/img/icon22.png') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <ul class="nav nav-pills nav-sidebar ml-auto" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        @if (isset($totalcontact))
                            <span class="badge badge-warning navbar-badge">{{ $totalcontact }}</span>
                        @else
                            <span class="badge badge-warning navbar-badge">0</span>
                        @endif
                    </a>
                    <!-- Add your notification dropdown content here -->
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- Display the first 4 notifications in descending order of creation -->
                        @if (isset($contactdata) && count($contactdata) > 0)
                            @foreach ($contactdata->sortByDesc('created_at')->take(4) as $contact)
                                <div class="dropdown-item">
                                    <a href="{{ route('contact') }}">
                                        <i class="fas fa-envelope mr-2"></i>{{ $contact->name }}
                                        <span
                                            class="float-right text-muted text-md">{{ $contact->created_at->shortRelativeDiffForHumans() }}</span>
                                    </a>
                                </div>
                            @endforeach

                            <!-- Check if there are more than 4 items -->
                            @if (count($contactdata) > 4)
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-item">
                                    <a href="{{ route('contact') }}">See More</a>
                                </div>
                            @endif
                        @else
                            <!-- Display a message if there are no notifications -->
                            <div class="dropdown-item">
                                <span>No notifications available</span>
                            </div>
                        @endif
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off"></i> <!-- Font Awesome power-off icon -->
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
                <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Hotelier</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        @if (Auth::user())
                            <a href="{{ route('home') }}" class="d-block">{{ Auth::user()->name }}</a>
                        @endif
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}"
                                        class="nav-link {{ Route::is('home*') ? 'active' : '' }}">
                                        <p>Home</p>
                                    </a>

                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Pages
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('roomregister') }}" class="nav-link">

                                        <p>Already Booked</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('roomregister') }}" class="nav-link">

                                        <p>New Booking</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('roomregister') }}" class="nav-link">

                                        <p>User Registers</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Room Registration
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('roomregister') }}"
                                        class="nav-link {{ Route::is('roomregister*') ? 'active' : '' }}">

                                        <p>Room</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('roomdata') }}"
                                        class="nav-link {{ Route::is('roomdata*') ? 'active' : '' }}">

                                        <p>Room View</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    City
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('city') }}"
                                        class="nav-link {{ Route::is('city*') ? 'active' : '' }}">

                                        <p>City</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('citydata') }}"
                                        class="nav-link {{ Route::is('citydata*') ? 'active' : '' }}">

                                        <p>City View</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Contact
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">


                                <li class="nav-item">
                                    <a href="{{ route('contactview') }}"
                                        class="nav-link {{ Route::is('contact/view*') ? 'active' : '' }}">

                                        <p>Contact View</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Category
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('category') }}"
                                        class="nav-link {{ Route::is('category*') ? 'active' : '' }}">

                                        <p>Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('categorydata') }}"
                                        class="nav-link {{ Route::is('categorydata*') ? 'active' : '' }}">

                                        <p>Category View</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
