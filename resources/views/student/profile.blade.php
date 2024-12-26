@extends('layouts.studentprofileLayout')

@section('title', 'Student Profile - ' . $student->Name)

@section('content')
    <div class="container" style="margin-top:50px">
        <h1 class="text-center mb-4"><strong>{{ $student->Name }}'s Profile</strong></h1>
        <hr>
        
        <div class="row" style="margin-top:50px">

            <!-- Profile Picture -->
            <div class="col-md-4 text-center position-relative">
                @if ($student->picture_url)
                    <img src="{{ asset($student->picture_url) }}" alt="Profile Picture of {{ $student->Name }}"
                        class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover;">
                @else
                    <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center"
                        style="width: 200px; height: 200px;">
                        <i class="fas fa-user fa-5x text-white"></i>
                    </div>
                @endif
                <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal" data-bs-target="#editModal"
                    data-field="picture_url" data-current="" data-title="Update Profile Picture">
                    <i class="fas fa-edit"></i>
                </button>
            </div>

            <!-- Profile Details -->
            <div class="col-md-8">
                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Name:</strong> {{ $student->Name }}
                       
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Roll Number:</strong> {{ $student->Roll_No }}
                        
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Session:</strong> {{ $student->Session }}
                       
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Current Semester:</strong> {{ $student->Current_Semester }}
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal" data-bs-target="#editModal"
                            data-field="Current_Semester" data-current="{{ $student->Current_Semester }}"
                            data-title="Update Current Semester">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>CGPA:</strong> {{ $student->CGPA }}
                      
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Interests:</strong> {{ $student->Interests }}
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal" data-bs-target="#editModal"
                            data-field="Interests" data-current="{{ $student->Interests }}" data-title="Update Interests">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Roles:</strong> {{ $student->Roles }}
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal" data-bs-target="#editModal"
                            data-field="Roles" data-current="{{ $student->Roles }}" data-title="Update Roles">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Work Experience:</strong> {{ $student->Work_Experience }}
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal" data-bs-target="#editModal"
                            data-field="Work_Experience" data-current="{{ $student->Work_Experience }}"
                            data-title="Update Work Experience">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>CV/Resume:</strong>
                        @if ($student->cv_resume_url)
                            <a href="{{ asset($student->cv_resume_url) }}" target="_blank">Download CV/Resume</a>
                        @else
                            Not uploaded
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal" data-bs-target="#editModal"
                            data-field="cv_resume_url" data-current="" data-title="Update CV/Resume">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>
            </div>
        </div>

        <hr>

        <!-- Contact & Social Links -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Contact & Social Links</h3>
                <ul class="list-unstyled">
                    <li class="mb-2 d-flex align-items-center">
                        <strong>Email:</strong>
                        <a href="mailto:{{ $student->email }}" class="ms-2">{{ $student->email }}</a>
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="email" data-current="{{ $student->email }}"
                            data-title="Edit Email">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>LinkedIn:</strong>
                        @if ($student->linkedin_url)
                            <a href="{{ $student->linkedin_url }}" target="_blank" class="ms-2">LinkedIn Profile</a>
                        @else
                            <span class="ms-2">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="linkedin_url"
                            data-current="{{ $student->linkedin_url }}" data-title="Edit LinkedIn URL">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>GitHub:</strong>
                        @if ($student->github_url)
                            <a href="{{ $student->github_url }}" target="_blank" class="ms-2">GitHub Profile</a>
                        @else
                            <span class="ms-2">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="github_url"
                            data-current="{{ $student->github_url }}" data-title="Edit GitHub URL">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>Medium:</strong>
                        @if ($student->medium_url)
                            <a href="{{ $student->medium_url }}" target="_blank" class="ms-2">Medium Profile</a>
                        @else
                            <span class="ms-2">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="medium_url"
                            data-current="{{ $student->medium_url }}" data-title="Edit Medium URL">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>Portfolio:</strong>
                        @if ($student->portfolio_url)
                            <a href="{{ $student->portfolio_url }}" target="_blank" class="ms-2">Portfolio Website</a>
                        @else
                            <span class="ms-2">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="portfolio_url"
                            data-current="{{ $student->portfolio_url }}" data-title="Edit Portfolio URL">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>WhatsApp:</strong>
                        @if ($student->whatsapp_url)
                            <a href="{{ $student->whatsapp_url }}" target="_blank" class="ms-2">WhatsApp Contact</a>
                        @else
                            <span class="ms-2">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="whatsapp_url"
                            data-current="{{ $student->whatsapp_url }}" data-title="Edit WhatsApp URL">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <style>
        .rounded-circle {
            border: 2px solid #ddd;
        }

        h1,
        h3 {
            color: #2c3e50;
        }

        a {
            color: #2980b9;
        }

        a:hover {
            text-decoration: underline;
        }

        .ms-2 {
            margin-left: 0.5rem;
        }
    </style>
@endsection