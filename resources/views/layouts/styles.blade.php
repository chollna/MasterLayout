@section('styles')
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
@endsection
