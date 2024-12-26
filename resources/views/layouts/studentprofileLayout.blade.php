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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- External CSS Libraries -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            padding: 20px;
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

        .text-title1{
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
    </style>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar d-flex flex-column">
                    <div class="sidebar-top">

                        <h4>Welcome, {{ $student->Name }}</h4>
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

                        <a href="{{ route('student.profile', ['Roll_No' => $student->Roll_No]) }}"
                            class="@if (request()->routeIs('student.profile')) active @endif">
                            <i class="fas fa-user me-2"></i> Profile
                        </a>

                        <a href="{{ route('STD.liveannouncements',['ID'=>$student->Roll_No]) }}" class="@if (request()->routeIs('liveannouncements')) active @endif">
                            <i class="fas fa-bullhorn me-2"></i> Announcements
                        </a>

                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" id="homeDropdown" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-chart-bar"></i> Evaluation & Grading
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                                <li><a class="dropdown-item"
                                        href="{{ route('student.result', ['Roll_No' => $student->Roll_No, 'Semester' => 1]) }}">Semester
                                        1 | Result</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('student.result', ['Roll_No' => $student->Roll_No, 'Semester' => 2]) }}">Semester
                                        2 | Result</a></li>
                            </ul>
                        </div>
                        <a href="{{ route('fee.record',['ID'=>$student->Roll_No]) }}" class="@if (request()->routeIs('liveannouncements')) active @endif">
                            <i class="fas fa-coins me-2"></i> Fee Record
                        </a>
                    </div>
                    <div class="sidebar-bottom mt-auto">
                        <hr>
                        <a href="{{ route('index') }}" role="button" class="btn btn-custom text-warning">
                            <i class="fas fa-sign-out me-2"></i>Log Out
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <h1 class="text-center text-title2 mb-4"><strong>Student Portal</strong></h1>

                <main>
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
            </div>
        </div>
    </div>
    @include('layouts.footer')

     <!-- Edit Modal -->
     <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editForm"
                    action="{{ route('student.profile.edit', ['Roll_No' =>$student->Roll_No]) }}"
                    method="POST" enctype="multipart/form-data"> @csrf
                    <div class="modal-header">
                        <h3 class="modal-title" id="editModalLabel">Edit Field</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="field_name" id="fieldName">
                        <div class="mb-3" id="fieldInputContainer">
                            <!-- Input will be dynamically inserted here -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editModal = document.getElementById('editModal');
            const fieldNameInput = document.getElementById('fieldName');
            const fieldInputContainer = document.getElementById('fieldInputContainer');
            const modalTitle = document.getElementById('editModalLabel');

            editModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const field = button.getAttribute('data-field');
                const current = button.getAttribute('data-current');
                const title = button.getAttribute('data-title');

                modalTitle.textContent = title;
                fieldNameInput.value = field;
                fieldInputContainer.innerHTML = '';

                // Create appropriate input based on field type
                let input;
                if (field === 'picture_url' || field === 'cv_resume_url') {
                    input = `<label class="form-label text-warning">Upload File</label>
                        <input type="file" class="form-control" name="file" required>
                        <small class="text-muted">
                            ${field === 'picture_url' ? 
                                'Accepted formats: jpg, jpeg, png. Max size: 2MB' : 
                                'Accepted formats: pdf, doc, docx. Max size: 5MB'}
                        </small>`;
                } else if (field.includes('Interests') || field.includes('Information')) {
                    input = `<label class="form-label text-warning">${title}</label>
                        <textarea class="form-control" name="value" rows="3" required>${current}</textarea>`;
                } else {
                    input = `<label class="form-label text-warning">${title}</label>
                        <input type="${field.includes('url') ? 'url' : 'text'}" 
                               class="form-control" 
                               name="value" 
                               placeholder="${current}" 
                               required>`;
                }

                fieldInputContainer.innerHTML = input;
            });
        });
    </script>
</body>
</html>
