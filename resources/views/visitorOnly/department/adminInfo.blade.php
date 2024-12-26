@extends('layouts.facultyinfolayout')

@section('title', 'Administration of CPE - Department of Computer Engineering | BZU Multan')

@section('meta-description',
    'Check the admission schedule for the BS and BS (5th Semester) programs offered by the
    Department of Computer Engineering at Bahauddin Zakariya University, Multan.')
@section('meta-keywords',
    'BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend
    Program')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center text-title mb-10"><strong><b>Our Visionary Administration</b></strong></h1>

        <!-- Administration content here -->
        <div class="row g-4">
            @foreach ($facultyMembers as $faculty)
            @if ($faculty->ROLE == 'admin')
                @if ($faculty->id == 1)
                    <!-- Department Head -->
                    <div class="col-md-14 mb-4">
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
                                            {{ $faculty->Other_Information}}
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
                @endif
            @endforeach
        </div>
    </div>

 
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
@endpush
