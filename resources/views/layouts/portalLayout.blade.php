<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Department of Computer Engineering | BZU Multan')</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords"
        content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">

    <!-- External CSS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .admin-card {
            background: linear-gradient(to right,
                    rgba(78, 32, 3, 1.9),
                    rgba(3, 39, 78, 1.9));
            color: #f4f3ed;
            border: 1px solid #444;
            box-shadow: 0 4px 8px rgba(15, 13, 13, 0.3);
            transition: all 0.3s ease;
        }

        .admin-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(15, 13, 13, 0.5);
        }

        .admin-card p {
            margin: 0;
            /* Remove default margin */
            padding: 0;
            /* Remove default padding */
            font-size:2rem;
        }

        .admin-card h3 {
            line-height: 0.5;
            /* Adjust line height for the designation */
            margin-bottom: 0.5;
            /* Remove space below the designation */
        }

        .admin-card h2 {
            line-height: 1;
            /* Adjust line height for the name */
            margin-top: 0.5;
            /* Remove space above the name */
        }

        .admin-cards {
            background: linear-gradient(to left, rgb(100, 208, 57, 1), rgba(35, 178, 164, 1));
            border: 1px solid #444;
            box-shadow: 0 4px 8px rgba(15, 13, 13, 0.3);
            transition: all 0.3s ease;
        }

        .admin-cards:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(15, 13, 13, 0.5);
        }
    </style>

    @yield('styles')
</head>

<body>
    <!-- Header Section -->
    @include('layouts.header')

    <!-- Main Content Section -->
    <main class="container mt-4">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer')

    <!-- External JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>

</html>
