<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Faculty Members | Department of Computer Engineering | BZU Multan')</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Meet our distinguished faculty members at the Department of Computer Engineering, BZU Multan.">
    <meta name="keywords" content="BZU Faculty, Computer Engineering Professors, Academic Staff, Research Faculty">

    <!-- External CSS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background-color: #1e1e1e;
            color: #f4f3ed;
            background-image: linear-gradient(to right,
                    rgba(168, 181, 168, 0.6),
                    rgba(85, 216, 172, 0.5));
        }



        /* Modal Base Styles */
        .modal-content {
            background: linear-gradient(rgba(82, 1, 47, 0.95), rgba(3, 39, 78, 0.95));
            border: 2px solid #00ff9d;
            box-shadow: 0 0 20px rgba(0, 255, 157, 0.5);
            color: #f4f3ed;
            font-family: 'Press Start 2P', cursive;
        }

        /* Modal Header */
        .modal-header {
            border-bottom: 2px solid rgba(0, 255, 157, 0.3);
            padding: 1.5rem;
        }

        .modal-header .modal-title {
            color: #00ff9d;
            font-family: 'Helvetica Neue';
            text-transform: uppercase;
            font-size: 1.2rem;
            text-shadow: 2px 2px 4px rgba(0, 255, 157, 0.5);
        }

        .modal-header .btn-close {
            color: #00ff9d;
            text-shadow: none;
            opacity: 0.8;
        }

        /* Modal Body */
        .modal-body {
            padding: 2rem;
            background: rgba(0, 0, 0, 0.1);
        }

        .modal-body h3 {
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, #7fffd4, #f4ab6a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }

        .modal-body h2 {
            font-size: 1.4rem;
            margin: 1.5rem 0;
            background: linear-gradient(to right, #ff00ff, #00ff9d);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }

        .modal-body p {
            font-family: 'Courier New', monospace;
            color: #ffffff;
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
            text-shadow: 0 0 10px rgba(0, 255, 157, 0.5);
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid rgba(0, 255, 157, 0.2);
            padding-bottom: 0.5rem;
        }

        .modal-body p strong {
            color: #00ff9d;
        }

        /* Modal Footer */
        .modal-footer {
            border-top: 2px solid rgba(0, 255, 157, 0.3);
            padding: 1.5rem;
            font-family: 'Helvetica Neue';
        }

        /* Button Styles */

        .btn-custom:hover {
            background-color: #291003;
            border-color: #4ffcff;
            color: #f4f3ed;
        }

        .btn-custom {
            background-color: #791800;
            border-color: #ece939;
            color: #f4f3ed;
        }

        a {
            color: #94f000;
            text-decoration: double;
            align-items: center;
        }

        a:hover {
            text-decoration: wavy;
            color: #00cccc;
        }

        /* Utility Classes */
        .text-warning {
            color: #ffff00 !important;
            text-shadow: 0 0 10px rgba(255, 255, 0, 0.5);
        }

        .text-danger {
            color: #ff6600 !important;
            text-shadow: 0 0 10px rgba(255, 0, 102, 0.5);
        }

        .text-highlight {
            font-size: 2.5rem;
            font-family: 'Franklin Gothic Medium', Haettenschweiler, 'Arial Narrow Bold', Arial, sans-serif;
            margin: 1.5rem 0;
            background: linear-gradient(to left, #4cf703, #03caac);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .text-info {
            font-family: 'Arial Narrow Bold', 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .text-alert {
            color: #52d8ac;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .logout-btn {
                padding: 6px 12px;
                font-size: 1.9rem;
            }

            .modal-body h3 {
                font-size: 0.7rem;
            }

            .modal-body h2 {
                font-size: 0.9rem;
            }

            .modal-body p {
                font-size: 0.7rem;
            }

            .btn-custom {
                padding: 0.6rem 1rem;
                font-size: 0.7rem;
            }
        }

        .social-links a {
            color: #f4f3ed;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #52d8ac;
        }
    </style>
    @yield('styles')
</head>

<body>
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

    @include('layouts.footer')

    <!-- Modal Template -->
    <div class="modal fade" id="facultyModal" tabindex="-1" aria-labelledby="facultyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="facultyModalLabel">Faculty Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img id="modal-faculty-image" src="" alt="Faculty Member"
                                class="img-fluid rounded-circle mb-3" style="max-width: 200px;">
                        </div>
                        <div class="col-md-8">
                            <div class="faculty-details">
                                <h3 class="text-center text-info impact"><strong>
                                        BAHAUDDIN ZAKARIYA UNIVERSITY, Multan<br>
                                        DEPARTMENT OF COMPUTER ENGINEERING
                                    </strong></h3>
                                <div class="mt-4">
                                    <p><strong>Name:</strong> <span id="modal-faculty-name"></span></p>
                                    <p><strong>Position:</strong> <span id="modal-faculty-position"></span></p>
                                    <p><strong>Qualification:</strong> <span id="modal-faculty-qualification"></span></p>
                                    <p><strong>Research Interests:</strong> <span id="modal-faculty-interests"></span></p>
                                    <p><strong>Other Information:</strong> <span id="modal-faculty-other"></span></p>
                                </div>
                                <div class="mt-4">
                                    <p>Connect:</p>
                                    <div class="social-links">
                                        <div id="modal-faculty-email"></div>
                                        <div id="modal-faculty-socials"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a id="modal-faculty-cv" href="" target="_blank" class="btn btn-custom me-2">Download CV</a>
                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- External JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script>
        function openFacultyModal(faculty) {
            $('#modal-faculty-image').attr('src', faculty.picture_url || '/assets/images/default-profile.png');
            $('#modal-faculty-name').text(faculty.Name);
            $('#modal-faculty-position').text(faculty.Position);
            $('#modal-faculty-qualification').text(faculty.Qualification);
            $('#modal-faculty-interests').text(faculty['Research Interests'] || 'Not specified');
            $('#modal-faculty-other').text(faculty['Other Information:'] || 'Not specified');

            // Email
            if (faculty.email) {
                $('#modal-faculty-email').html(`
                    <a href="mailto:${faculty.email}" class="btn btn-custom mb-2">
                        <i class="fas fa-envelope me-2"></i>Email
                    </a>
                `);
            }

            // Social links
            let socialsHtml = '';
            if (faculty.linkedin_url) {
                socialsHtml += `<a href="${faculty.linkedin_url}" target="_blank" class="btn btn-custom me-2 mb-2">
                    <i class="fab fa-linkedin me-2"></i>LinkedIn
                </a>`;
            }
            if (faculty.google_scholar_url) {
                socialsHtml += `<a href="${faculty.google_scholar_url}" target="_blank" class="btn btn-custom me-2 mb-2">
                    <i class="fas fa-graduation-cap me-2"></i>Google Scholar
                </a>`;
            }
            if (faculty.researchgate_url) {
                socialsHtml += `<a href="${faculty.researchgate_url}" target="_blank" class="btn btn-custom me-2 mb-2">
                    <i class="fas fa-flask me-2"></i>ResearchGate
                </a>`;
            }
            if (faculty.orcid_url) {
                socialsHtml += `<a href="${faculty.orcid_url}" target="_blank" class="btn btn-custom me-2 mb-2">
                    <i class="fas fa-id-card me-2"></i>ORCID
                </a>`;
            }
            $('#modal-faculty-socials').html(socialsHtml);

            // CV
            if (faculty.cv_resume_url) {
                $('#modal-faculty-cv').attr('href', faculty.cv_resume_url).show();
            } else {
                $('#modal-faculty-cv').hide();
            }

            $('#facultyModal').modal('show');
        }
    </script>

    @yield('scripts')
</body>

</html>
