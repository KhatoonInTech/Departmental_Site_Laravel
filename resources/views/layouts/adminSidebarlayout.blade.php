<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Department of Computer Engineering | BZU Multan')</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords"
        content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <!-- Core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        .text-title {
            font-size: 2.5rem;
            font-family: 'Franklin Gothic Medium', Haettenschweiler, 'Arial Narrow Bold', Arial, sans-serif;
            margin: 1.5rem 0;
            background: linear-gradient(to left, #600247, #022879);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }

        .text-title1 {
            font-family: 'Franklin Gothic Medium', Haettenschweiler, 'Arial Narrow Bold', Arial, sans-serif;
            margin: 1.5rem 0;
            background: linear-gradient(to right, #600247, #025312);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }

        .text-title2 {
            font-family: 'Franklin Gothic Medium', Haettenschweiler, 'Arial Narrow Bold', Arial, sans-serif;
            margin: 1.5rem 0;
            background: linear-gradient(to left, #600247, #022879);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }

        .sidebar {
            min-height: 100vh;
            padding: 10px;
            color: #333;
            border-right: 5px solid #cad3dc;
            border-left: 2px solid #dee2e6;
        }


        .sidebar a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s;
        }

        .sidebar a:hover {
            background-color: #f8f9fa;
        }

        .sidebar .active {
            background-image: linear-gradient(to right,
                    rgba(82, 159, 128, 0.7),
                    rgba(32, 118, 155, 0.7));
            border-radius: 4px;
        }

        .dropdown-item {
            position: relative;
            display: flex;
            left: 0;
            color: #8e3030;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 1);
            z-index: 100;
        }


        .sidebar .dropdown-menu {
            margin-left: 20px;
        }

        .sidebar .dropdown-item {
            padding: 8px 20px;
        }

        .sidebar-bottom {
            margin-top: auto;
        }

        .sidebar hr {
            margin: 15px 0;
        }

        .data-card {
            background: linear-gradient(to right, rgba(154, 145, 63, 0.9), rgba(143, 148, 152, 0.9));
            box-shadow: 0 4px 8px rgba(15, 13, 13, 0.9);
            transition: all 0.3s ease;
            color: #f4f3ed;
            margin: -5px 10px -5px 20px;
            border-radius: 25px;
            /* Makes the corners rounded */
        }

        .data-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(15, 13, 13, 0.5);
        }
    </style>
</head>

<body>

    <div class="sidebar d-flex flex-column">
        <div class="sidebar-top">

            <h4>Welcome, {{ $faculty->Name }}</h4>
            <hr>

            <div class="dropdown">
                <a href="#" class="dropdown-toggle" id="homeDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-home me-2"></i> Home
                </a>
                <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                    <li><a class="dropdown-item" href="{{ route('uni-vision-mission') }}">About
                            University</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('about-cpe') }}">About CPE</a></li>
                    <li><a class="dropdown-item" href="{{ route('administration') }}">Admin Info</a></li>
                    <li><a class="dropdown-item" href="{{ route('faculty') }}">Faculty Info</a></li>
                    <li><a class="dropdown-item" href="{{ route('admSchedule') }}">Admission Schedule</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('semSchedule') }}">Semester Schedule</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('programs-offered') }}">Programs Offered</a>
                    </li>
                </ul>
            </div>

            <a href="{{ route('admin.contentEdit', ['ID' => $faculty->Faculty_ID]) }}"
                class="@if (request()->routeIs('admin.contentEdit')) active @endif">
                <i class="fas fa-edit me-2"></i> Edit Website
            </a>

            <a href="{{ route('admin.profile', ['faculty_ID' => $faculty->Faculty_ID]) }}"
                class="@if (request()->routeIs('admin.profile')) active @endif">
                <i class="fas fa-user me-2"></i> Profile
            </a>



            <div class="dropdown">
                <a href="#" class="dropdown-toggle" id="homeDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-bullhorn me-2"></i> Announcements
                </a>
                <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                    <li><a class="dropdown-item"
                            href="{{ route('admin.pendingannouncements', ['ID' => $faculty->Faculty_ID]) }}">
                            Pending Announcements</a></li>
                    <li><a class="dropdown-item"
                            href="{{ route('ADM.liveannouncements', ['ID' => $faculty->Faculty_ID]) }}">
                            Live
                            Announcements</a></li>
                </ul>
            </div>


            <div class="dropdown">
                <a href="#" class="dropdown-toggle" id="homeDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-chart-bar me-2"></i> Data Management
                </a>
                <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                    <li><a class="dropdown-item" href="{{ route('admin.viewData', ['ID' => $faculty->Faculty_ID]) }}">
                            View
                            Data</a></li>
                    <li><a class="dropdown-item" href="{{ route('vis.viewData', ['ID' => $faculty->Faculty_ID]) }}">
                            Visitors Data </a></li>
                    <li><a class="dropdown-item" href="{{ route('std.viewData', ['ID' => $faculty->Faculty_ID]) }}">
                            Student Data </a></li>
                    <li><a class="dropdown-item" href="{{ route('fac.viewData', ['ID' => $faculty->Faculty_ID]) }}">
                            Faculty Data </a></li>
                    <li><a class="dropdown-item" href="{{ route('adm.viewData', ['ID' => $faculty->Faculty_ID]) }}">
                            Admin Data </a></li>
                </ul>
            </div>
        </div>
        <a href="{{ route('fee.management', ['ID' => $faculty->Faculty_ID]) }}"
            class="@if (request()->routeIs('fee.management')) active @endif">
            <i class="fas fa-coins me-2"></i> Finance Management
        </a>
        <div class="sidebar-bottom mt-auto">
            <hr>
            <a href="{{ route('index') }}" role="button" class="btn btn-custom text-warning">
                <i class="fas fa-sign-out me-2"></i>Log Out
            </a>
        </div>
    </div>

    <br><br>
    <p class="text-center" style="font-size:0.5rem; margin-bottom:0.5rem">©️Admin Block | Department of Computer
        Engineering</p>
    <p class="text-center" style="font-size:0.5rem; margin-top:0.5rem">Bahauddin Zakariya University Multan</p>




    @yield('scripts')

</body>

</html>
