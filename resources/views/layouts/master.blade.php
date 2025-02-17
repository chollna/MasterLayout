<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <!-- Base Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        /* General Layout */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
        }
    
        .wrapper {
            display: flex;
            min-height: 100vh;
        }
    
        /* Sidebar Styling */
        .main-sidebar {
            background-color: #2c3e50;
            color: #fff;
            width: 250px;
            transition: all 0.3s ease;
        }
    
        .brand-link {
            background-color: #34495e;
            text-align: center;
            padding: 15px;
            font-size: 20px;
            color: #ecf0f1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    
        .brand-link img {
            width: 30px;
            margin-right: 10px;
        }
    
        .nav-sidebar {
            padding-top: 20px;
        }
    
        .nav-sidebar .nav-item .nav-link {
            color: #ecf0f1;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease, padding-left 0.3s ease;
        }
    
        .nav-sidebar .nav-item .nav-link:hover {
            background-color: #1abc9c;
            padding-left: 30px;
        }
    
        .nav-sidebar .nav-item .nav-link i {
            margin-right: 10px;
        }
    
        /* Content Styling */
        .content-wrapper {
            flex-grow: 1;
            padding: 30px;
            background-color: #fff;
        }
    
        .content-header {
            margin-bottom: 20px;
        }
    
        .content-header h1 {
            font-size: 24px;
            color: #333;
            font-weight: 600;
        }
    
        /* Footer Styling */
        .main-footer {
            background-color: #2c3e50;
            padding: 15px;
            color: #fff;
            text-align: center;
        }
    
        .main-footer b {
            color: #1abc9c;
        }
    
        /* Custom Styles for Active Links */
        .nav-sidebar .nav-item.active .nav-link {
            background-color: #1abc9c;
            font-weight: 600;
        }
    </style>
      
       
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="brand-link">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">MyApp</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-widget="treeview" data-accordion="false">
                        <!-- Dashboard Link -->
                        <li class="nav-item">
                            <a href="{{ url('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- Users Link -->
                        <li class="nav-item">
                            <a href="{{ url('users') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Users</p>
                            </a>
                        </li>

                        <!-- Settings Link -->
                        <li class="nav-item">
                            <a href="{{ url('setting') }}" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>Settings</p>
                            </a>
                        </li>

                        <!-- Logout Link -->
                        <li class="nav-item">
                            {{-- <a href="{{ route('logout') }}" class="nav-link"> --}}
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('page_title', 'Page Title')WEcome dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>My Application &copy; 2025</strong>
        </footer>
    </div>

    <!-- Base Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts') <!-- Custom scripts for specific pages -->
</body>

</html>
