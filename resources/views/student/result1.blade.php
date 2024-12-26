@extends('layouts.studentprofileLayout')

@section('title', 'Student Profile - ' . $student->Name)

@section('content')
    <div class="container" style="margin-top:50px">
        <h1 class=" text-center text-title1  "><strong>EXAMINATION RESULTS</strong></h1>
        <h6 class=" text-center text-title2  "><strong>DEPARTMENT OF COMPUTER ENGINEERING
            
            <br>Bahauddin Zakariya University, Multan </strong></h6>
           
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
                
            </div>

            <!-- Profile Details -->
            <div class="col-md-8">
                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Name:</strong> {{ $student->Name }} </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Roll Number:</strong> {{ $student->Roll_No }}</p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Session:</strong> {{ $student->Session }} </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong> Semester:</strong> {{ $student->Current_Semester }}</p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>GPA:</strong> {{ $student->GPA_1 }}</p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>CGPA:</strong> {{ $student->CGPA }}</p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Status:</strong>Pass</p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Failed Courses:</strong> {{ $student->Fail_1 }}</p>
                </div>

               
                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Your Semester Result:</strong>
                       
                            <a href="{{ asset('storage/student/document/Result_1.pdf') }}" target="_blank">Download Your Result</a>
                      
                        
                    </p>
                </div>
            </div>
        </div>

        <hr>

        
    </div>


@endsection