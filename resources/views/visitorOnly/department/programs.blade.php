@extends('layouts.app')

@section('title', 'Programs Offered - Department of Computer Engineering | BZU Multan')

@section('meta-description',
    'Check the admission schedule for the BS and BS (5th Semester) programs offered by the
    Department of Computer Engineering at Bahauddin Zakariya University, Multan.')
@section('meta-keywords',
    'BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend
    Program')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center text-title mb-10"><strong><b>Programs Offered by <br>Department of Computer
                    Engineering</b></strong></h1>


        <!-- B.Sc. Computer Engineering -->
    <div class="row g-4">
        <div class="col-md-12">
            <div class="admin-card p-4">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 100px; height: 100px">
                            <i class="fas fa-graduation-cap fa-5x"></i>
                        </div>
                    </div>
                    <div class="col-md-5" align="center">
                        <h1 class="text-highlight">{{ $bsc->Title ?? 'B.Sc. Computer Engineering' }}</h1>
                        @if($bsc->Body)
                            {!! substr($bsc->Body, 0, strpos($bsc->Body, '</p>') + 4) !!}
                        @endif
                    </div>
                    <div class="col-md-13">
                        <br>
                        @if($bsc->Body)
                            {!! substr($bsc->Body, strpos($bsc->Body, '<h3 class=\'text-info\'>')) !!}
                        @endif
                        @if($bsc->Link)
                            <a href="{{ $bsc->Link }}" class="btn btn-custom mt-3 align-items-center justify-content-center"
                                style="width: 1000px; height: 50px">{{ $bsc->Link_text }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- M.Sc. Computer Engineering -->
    <div class="row g-4 mt-4">
        <div class="col-md-12">
            <div class="admin-card p-4">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 100px; height: 100px;">
                            <i class="fas fa-graduation-cap fa-5x"></i>
                        </div>
                    </div>
                    <div class="col-md-5" align="center">
                        <h1 class="text-highlight">{{ $msc->Title ?? 'M.Sc. Computer Engineering' }}</h1>
                        @if($msc->Body)
                            {!! substr($msc->Body, 0, strpos($msc->Body, '</p>') + 4) !!}
                        @endif
                    </div><br>
                    <div class="col-md-13">
                        <br>
                        @if($msc->Body)
                            {!! substr($msc->Body, strpos($msc->Body, '<h3 class=\'text-info\'>')) !!}
                        @endif
                        @if($msc->Link)
                            <a href="{{ $msc->Link }}" class="btn btn-custom mt-3 align-items-center justify-content-center"
                                style="width: 1000px; height: 50px">{{ $msc->Link_text }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
@endpush
