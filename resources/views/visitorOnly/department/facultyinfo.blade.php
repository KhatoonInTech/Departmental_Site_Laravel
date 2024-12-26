@extends('layouts.facultyinfolayout')

@section('title', 'Faculty of CPE - Department of Computer Engineering | BZU Multan')

@section('meta-description',
    'Meet our distinguished faculty members at the Department of Computer Engineering,
    Bahauddin Zakariya University, Multan. Our team includes experienced professors and researchers dedicated to academic
    excellence.')
@section('meta-keywords',
    'BZU Faculty Members, Computer Engineering Professors, Academic Staff, Research Faculty,
    Department Head, Student Advisor')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center text-title mb-10"><strong><b>Our Prestigious Faculty Gallery</b></strong></h1>

        <div class="row g-4">
            @foreach ($facultyMembers as $faculty)
                @if ($faculty->id == 1)
                    <!-- Department Head -->
                    <div class="col-md-12 mb-4">
                        <div class="footer-card p-4">
                            <div class="row align-items-center">
                                <div class="col-md-2 text-center">
                                    @if ($faculty->picture_url)
                                        <div class=" mb-2 d-flex align-items-center justify-content-center mx-auto" style="width: 120px; height: 120px; padding-left: 5px; padding-right: 10px">
                                            <img src="{{ $faculty->picture_url }}" alt="{{ $faculty->Name }}"
                                                class=" d-block"
                                                style="width: 120px; height: 120px;  object-fit:fill; object-position: center; ">
                                        </div>
                                    @else
                                        <div class="developer-theme  mb-3 d-flex align-items-center justify-content-center mx-auto" style="width: 120px; height: 120px; padding-left: 5px; padding-right: 10px"
                                        style="width: 180px; height: 150px;  object-fit:fill; object-position: center; ">
                                        <i class="fas fa-user-graduate fa-2x"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-10">
                                    <h5 class="text-alert"><b>Head Of Department</b></h5>
                                    <h2 class="text-info">{{ $faculty->Name }}</h2>
                                    <p class="mb-2">{{ $faculty->Position }}</p>                                    
                                </div>
                                
                                <button class="btn btn-custom" style="width=170px;padding=10px" onclick='openFacultyModal(@json($faculty))'>
                                    View Profile <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Other Faculty Members -->
                    <div class="col-md-6">
                        <div class="admin-card p-4 h-100">
                            <div class="row align-items-center">
                                <div class="col-md-2 text-center">
                                    @if ($faculty->picture_url)
                                        <div class=" mb-2 d-flex align-items-center justify-content-center mx-auto" style="width: 120px; height: 120px; padding-left: 5px; padding-right: 10px">
                                            <img src="{{ $faculty->picture_url }}" alt="{{ $faculty->Name }}"
                                                class=" d-block"
                                                style="width: 120px; height: 120px;  object-fit:fill; object-position: center; ">
                                        </div>
                                    @else
                                        <div class="developer-theme  mb-3 d-flex align-items-center justify-content-center mx-auto" style="width: 120px; height: 120px; padding-left: 5px; padding-right: 10px"
                                        style="width: 180px; height: 150px;  object-fit:fill; object-position: center; ">
                                        <i class="fas fa-user-graduate fa-2x"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-10" style="padding-left: 70px">
                                    <h5 class="text-alert">
                                        <b>
                                            @if ( $faculty->Other_Information == 'Incharge Examination')
                                                Incharge Examination
                                            @elseif($faculty->Other_Information == 'OBE In-charge')
                                                OBE In-charge
                                            @elseif($faculty->Other_Information == 'Director Student Affairs (DSA)')
                                                Director Student Affairs (DSA)
                                            @else
                                                Faculty Member
                                            @endif
                                        </b>
                                    </h5>
                                    <p>{{ $faculty->Position }}</p>

                                </div>
                                <h2 class="text-info"><br>{{ $faculty->Name }}</h2>
                                <button class="btn btn-custom btn-profile mt-2"
                                    onclick='openFacultyModal(@json($faculty))'>
                                    View Profile <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Add custom styles specific to faculty page -->
    <style>
        .admin-card {
            background: linear-gradient(to right, rgba(82, 1, 47, 0.9), rgba(3, 39, 78, 0.9));
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .admin-card:hover {
            transform: translateY(-5px);
        }

        .developer-theme {
            background: linear-gradient(to right,
                    rgba(139, 152, 139, 0.9),
                    rgba(82, 149, 250, 0.9));
            color: white;
        }

        .text-alert {
            color: #52d8ac;
        }

        .text-info {
            color: #f4f3ed !important;
        }

        .btn-profile {
            background-color: #c22311;
            border-color: #e74c3c;
            color: #f4f3ed;
        }

        .btn-profile:hover {
            background-color: #ae1c0c;
            border-color: #c0392b;
            color: #f4f3ed;
        }

        .btn-custom:hover  {
            background-color: #291003;
            border-color: #4ffcff;
            color: #f4f3ed;
        }

        .btn-custom{
            background-color: #791800;
            border-color: #ece939;
            color: #f4f3ed;
        }

        a {
            color: #94f000;
            text-decoration:double;
            align-items: center;
        }

        a:hover {
            text-decoration: wavy;
            color: #00cccc;
        }
    </style>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
@endpush
