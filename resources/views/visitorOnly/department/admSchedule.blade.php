@extends('layouts.app')

@section('title', 'Admission Schedule - Department of Computer Engineering | BZU Multan')

@section('meta-description',
    'Check the admission schedule for the BS and BS (5th Semester) programs offered by the
    Department of Computer Engineering at Bahauddin Zakariya University, Multan.')
@section('meta-keywords',
    'BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend
    Program')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center text-title mb-10"><strong><b>Academic Calender:<br>ADMISSION SCHEDULE 2024-25</b></strong>
        </h1>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h3 class="pixelated-font mb-4"><i class="fas fa-sun me-2"></i>Morning Program</h3>
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Last date for receipt of application</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">15-08-2023</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Merit list No.1 of selected Candidates</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">17-08-2023</span>
                        </li>
                        <!-- Add more list items for other dates -->
                    </ol>
                    <div class="mt-3 fw-bold text-center">
                        <i class="fas fa-calendar-check me-2"></i>Class Work starts: 15-09-2023
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h3 class="pixelated-font mb-4"><i class="fas fa-moon me-2"></i>Evening Program</h3>
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Last date for receipt of applications</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">15-08-2023</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Merit list No.1 of selected candidates</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">06-09-2023</span>
                        </li>
                        <!-- Add more list items for other dates -->
                    </ol>
                    <div class="mt-3 fw-bold text-center">
                        <i class="fas fa-exclamation-circle me-2"></i>Note: Admissions announced in various disciplines as
                        advertised by BZU
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="admin-card p-4">
                    <h3 class="pixelated-font mb-4"><i class="fas fa-info-circle me-2"></i>Important Information</h3>
                    <p>Lists of selected candidates will be displayed on the admission portal and the Notice Board of
                        concerned Department/Institute/Centre/Constituent Colleges on the date announced in the admission
                        schedule. The candidates are, therefore, advised to see the Notice Board of the respective
                        Department/Institute/Centre/Constituent Colleges for information regarding provisional
                        admission/withdrawal or cancellation of admission in a Department/Institute/Centre/Constituent
                        College.</p>
                    <p class="mb-0">Candidates will not be informed individually about their provisional
                        admission/withdrawal or cancellation of admission and the University, therefore, will not accept any
                        responsibility in this regard.</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
@endpush
