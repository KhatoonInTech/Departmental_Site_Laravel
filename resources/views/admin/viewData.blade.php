@extends('layouts.DataViewlayout')

@section('title', 'Department of Computer Engineering | BZU Multan')
@section('meta-description',
    'Check the admission schedule for the BS and BS (5th Semester) programs offered by the
    Department of Computer Engineering at Bahauddin Zakariya University, Multan.')
@section('meta-keywords',
    'BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend
    Program')

@section('content')
<div class="d-flex align-items-center text-center" style="justify-items: center; align-item:center; margin-left:15%">
    <span class="fas fa-tachometer-alt fa-6x text-title2"></span>
        <h1 class="text-center text-title1 mb-4">Departmental Data Dashboard</h1>
</div>
<div class="container mt-4">

    <div class="row g-4">
        <!-- First Row -->
        <div class="col-md-6">
            <div class="data-card p-4 text-black text-center">
                <span class="fa fa-book fs-1"></span>
                <h4 class="counter mt-3 fs-1">{{$visitor}}</h4>
                <p class="fs-5">Visitors</p>
                <a class="btn btn-custom" href="{{ route('vis.viewData', ['ID' => $faculty->Faculty_ID]) }}">View Visitor Data</a>

            </div>
        </div>

        <div class="col-md-6">
            <div class="data-card p-4 text-black text-center">
                <span class="fa fa-users fs-1"></span>
                <h4 class="counter mt-3 fs-1">{{$student}}</h4>
                <p class="fs-5">Student Strength</p>
                <a class="btn btn-custom" href="{{ route('std.viewData', ['ID' => $faculty->Faculty_ID]) }}">
                    View Student Data</a>

            </div>
        </div>

        <!-- Second Row -->
        <div class="col-md-6">
            <div class="data-card p-4 text-black text-center">
                <span class="fa fa-user-tie fs-1"></span>
                <h4 class="counter mt-3 fs-1">{{$admin}}</h4>
                <p class="fs-5">Admin Strength</p>
                <a class="btn btn-custom" href="{{ route('adm.viewData', ['ID' => $faculty->Faculty_ID]) }}">View Admin Data</a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="data-card p-4 text-black text-center">
                <span class="fa fa-chalkboard-teacher fs-1"></span>
                <h4 class="counter mt-3 fs-1">{{$FAC}}</h4>
                <p class="fs-5">Faculty Strength</p>
                <a class="btn btn-custom" href="{{ route('fac.viewData', ['ID' => $faculty->Faculty_ID]) }}">View Faculty Data</a>

            </div>
        </div>
    </div>
</div>
@endsection

