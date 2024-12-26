<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Department of Computer Engineering | BZU Multan</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords"
        content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #1e1e1e;
            color: #f4f3ed;
            background-image: linear-gradient(to right,
                    rgba(168, 181, 168, 0.6),
                    rgba(85, 216, 172, 0.5));
        }

        

        .navbar {
            background: linear-gradient(to left,
                    rgba(231, 240, 231, 1),
                    rgb(73, 130, 216));
        }

        .dropdown-menu {
            background: linear-gradient(to right,
                    rgba(160, 239, 241, 0.6),
                    rgba(240, 185, 165, 0.8));
        }

        .dropdown-menu:hover {
            background: linear-gradient(to right,
                    rgba(94, 246, 249, 1),
                    rgba(245, 128, 85, 1));
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #000000 !important;
            font-weight: medium;

        }

        .navbar-nav {
            margin-top: -15px;
            display: flex;
            align-items: center;
            gap: 0;
        }

        #mainMenuNavbar .nav-link {
            padding: 8px 10px !important;
            line-height: 1.2;
        }

        #mainMenuNavbar .dropdown-menu {
            margin-top: 0;
        }

        .site-header h5,
        .site-header p {
            color: #000000;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            margin-left: auto;
            margin-right: auto;
            line-height: 0.8;
            text-shadow: 2px 1px 1px rgb(217, 222, 211);
        }

        h1,
        h2 {
            background-image: linear-gradient(to left, #44f703, #95ca03);
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            font-family: Impact, Courier, 'Arial Narrow Bold';
        }

        .text-highlight {
            font-size: 2rem;
            font-family: 'Franklin Gothic Medium', Haettenschweiler, 'Arial Narrow Bold', Arial, sans-serif;
            margin: 1.5rem 0;
            background: linear-gradient(to left, #b6f703, #03caac);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }

        .navbar-brand img {
            max-width: 130px;
        }

        .log-out-btn {
            padding: 8px 20px;
            font-weight: bold;
            color: #000000;
            background-image: linear-gradient(to left,
                    rgba(82, 83, 82, 2),
                    rgba(16, 76, 167, 2));
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(142, 251, 255, 0.8);
        }

        .log-out-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 6px #03035a;
        }

        @media (max-width: 768px) {
            .site-header h1 {
                font-size: 3.2rem;
            }

            .log-out-btn {
                padding: 6px 12px;
                font-size: 2rem;
            }
        }

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .btn-customm {
            background-color: #101278;
            border-color: #e74c3c;
            color: #101278;
        }

        .btn-customm:hover {
            background-color: #ae1c0c;
            border-color: #c0392b;
            color: #f4f3ed;
        }
    </style>
</head>

<body>
    <!-- Header section with dark text -->
    <header class="site-header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark py-0" id="navbar-main-header">

            <div class="container d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="{{ asset('images/logo.png') }}" class="logo img-fluid"
                            style="width: 65px; height: 65px" alt="BZU Logo">
                        <span class="mx-1">|</span>
                        <img src="{{ asset('images/deplogo.png') }}" class="logo img-fluid"
                            style="width: 60px; height: 60px" alt="BZU Logo">
                    </a>
                    <h5 class="bold mb-4 ms-3"><br>
                        <b><strong>Department Of Computer Engineering</strong></b>

                        <p><i>Bahauddin Zakariya University, Multan</i></p>
                    </h5>
                    </a>
                </div>
                
            </div>

            <div class="container header-nav-container d-flex">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainMenuNavbar">
                    <span class="navbar-toggler-icon"></span>
                    Menu
                </button>

                <div class="collapse navbar-collapse" id="mainMenuNavbar">
                    <ul class="navbar-nav fs-6 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('index') }}">
                                <i class="fa-solid me-2 fa-address-card"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item has-dropdown-menu dropdown">
                            <a class="nav-link active" id="navbarDropdown1" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">
                                <i class="fa-solid me-2 fa-address-card"></i>
                                About BZU
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="{{ route('uni-vision-mission') }}">University Vision
                                        & Mission</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item has-dropdown-menu dropdown">
                            <a class="nav-link active" id="navbarDropdown2" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">
                                <i class="fa-solid me-2 fa-address-card"></i>
                                About<br> Department
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="{{ route('about-cpe') }}">About CPE</a></li>
                                <li><a class="dropdown-item" href="{{ route('dep-vision-mission') }}">Departmental
                                        Vision & Mission</a></li>
                                <li><a class="dropdown-item" href="{{ route('administration') }}">Administration</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('faculty') }}">Faculty Members</a></li>
                                <li><a class="dropdown-item" href="{{ route('programs-offered') }}">Programs Offered</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-dropdown-menu dropdown">
                            <a class="nav-link active" id="navbarDropdown3" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">
                                <i class="fa-solid me-2 fas fa-pen-nib"></i>
                                Exam &<br> Results
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                <li><a class="dropdown-item" href="{{ route('admSchedule') }}">Admission Schedule</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('semSchedule') }}">Semester Schedule</a>
                                </li>
                                {{-- <li><a class="dropdown-item" href="{{ route('all-exam-results') }}" target="_blank">All Examination Results</a></li> --}}
                            </ul>
                        </li>
                        {{-- Profile logins --}}
                        <li class="nav-item has-dropdown-menu dropdown">
                            <a class="nav-link active" id="navbarDropdown4" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">
                                <i class="fa-solid me-2 fa-user-edit"></i>
                                Portals
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                <li>
                                    <a id="VISITOR" class="dropdown-item" href="#"><i
                                            class="fas fa-hotel me-2"></i>
                                        Visitor

                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="ADMIN" href="{{ route('portalLogin') }}" >
                                        <i class="fas fa-user-shield me-2"></i> Admin Portal
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="FACULTY"  href="{{ route('portalLogin') }}" >
                                        <i class="fas fa-chalkboard-teacher me-2"></i> Faculty Portal
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="STUDENT"  href="{{ route('portalLogin') }}" >
                                        <i class="fas fa-user-graduate me-2"></i> Student Portal
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="COMMUNITY"  href="{{ route('portalLogin') }}" >

                                        <i class="fas fa-users me-2"></i> Community Portal
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script>
        document.getElementById("VISITOR").onclick = () => alert("You're already in the Visitor Mode!")
    </script>
    <!-- js/bootstrap script for navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
