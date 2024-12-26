<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700" rel="stylesheet">
    
    <!-- Custom Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">



@yield('styles')
</head>

<body>
    <!-- Header Section -->
    @include('layouts.header')

    <!-- Main Content Section -->
    <main class="fh5co-wrap">
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer')

    <!-- Modal for sign-up prompt -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">SignUp Alert</h5>
            </div>
            <div class="modal-body">
                <div class="text-center ">
                    <h2 >Please Sign up to continue</h2>
                    <h6 class="text-info">By Signning Up, you agree to our <a href="{{url('TERMS')}}" class="text-info text-warning">Terms & Conditions</a> and <a href="{{url('PRIVACY_POLICY')}}"  class="text-warning text-info">privacy policy</a> and receiving our <a>Newsletters</a>.</h6>
<br><br>
                    <div class="d-grid gap-2">
                        <a href="{{ route('google.authorize') }}" class="btn btn-custom btn-lg">
                            <i class="fab fa-google"></i>  Continue with Google
                        </a>
                        <a href="{{ route('linkedin.authorize') }}" class="btn btn-custom btn-lg">
                            <i class="fab fa-linkedin"></i>  Continue with LinkedIn
                        </a>
                        <br>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if $signedup is passed
        @isset($signedup)
            let signedup = @json($signedup);
        @else
            let signedup = false; // Default to false if not set
        @endisset
        
        let modalShown = false; // Track if modal has been shown

        if (!signedup) {
            window.addEventListener('scroll', function() {
                // Show modal after scrolling 1000px
                if (window.scrollY > 1000 && !modalShown) {
                    modalShown = true; // Prevent multiple modals from showing
                    var myModal = new bootstrap.Modal(document.getElementById('signupModal'));
                    myModal.show();
                }
            });
        }
    });
</script>

    <!-- External JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
