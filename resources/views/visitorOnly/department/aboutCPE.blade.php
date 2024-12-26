@extends('layouts.app')

@section('title', 'About CPE - Department of Computer Engineering | BZU Multan')

@section('meta-description',
    'Check the admission schedule for the BS and BS (5th Semester) programs offered by the
    Department of Computer Engineering at Bahauddin Zakariya University, Multan.')
@section('meta-keywords',
    'BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend
    Program')

@section('content')
    <div id="whyus" class="fh5co-hero"
        style="background-image: url('{{ asset('images/deppic.jpeg') }}'); background-size:contain; "
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div
                    class="col-md-12 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h3 style="color:rgb(248, 247, 245)" class="text-center">Welcome to</h3>
                        <h1 style="color:rgb(255, 213, 0)">Department of Computer Engineering</h1>
                        <h4 style="color:rgb(248, 247, 245)">Bahauddin Zakariya University, Multan </h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row g-4">
            <!-- Introduction Section -->
            <div class="col-md-12">
                <div class="admin-card p-4">
                    <h2 class="text-info mb-4">{{ $contents['introduction']->Title ?? 'Our Journey' }}</h2>
                    {!! $contents['introduction']->Body ?? '' !!}
                </div>
            </div>

            <!-- Digital Revolution Section -->
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h3 class="text-info text-warning">{!! $contents['achievements']->Title ?? '' !!}</h3>
                    {!! $contents['achievements']->Body ?? '' !!}
                    @if ($contents['achievements']->Link)
                        <a href="{{ $contents['achievements']->Link }}" class="btn btn-custom mt-3">
                            {{ $contents['achievements']->Link_text }}
                        </a>
                    @endif
                </div>
            </div>

            <!-- Impact Section -->
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h3 class="text-info text-warning">{!! $contents['impact']->Title ?? '' !!}</h3>
                    {!! $contents['impact']->Body ?? '' !!}
                    @if ($contents['impact']->Link)
                        <a href="{{ $contents['impact']->Link }}" class="btn btn-custom mt-3">
                            {{ $contents['impact']->Link_text }}
                        </a>
                    @endif
                </div>
            </div>

            <!-- Programs Section -->
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h3 class="text-info text-warning">{!! $contents['programs']->Title ?? '' !!}</h3>
                    {!! $contents['programs']->Body ?? '' !!}
                    @if ($contents['programs']->Link)
                        <a href="{{ $contents['programs']->Link }}" class="btn btn-custom mt-3">
                            {{ $contents['programs']->Link_text }}
                        </a>
                    @endif
                </div>
            </div>

            <!-- Facilities Section -->
            <div class="col-md-6">
                <div class="admin-card p-4">
                    <h3 class="text-info text-warning">{!! $contents['facilities']->Title ?? '' !!}</h3>
                    {!! $contents['facilities']->Body ?? '' !!}
                    @if ($contents['facilities']->Link)
                        <a href="{{ $contents['facilities']->Link }}" class="btn btn-custom mt-3">
                            {{ $contents['facilities']->Link_text }}
                        </a>
                    @endif
                </div>
            </div>

            <!-- Specializations Section -->
            <div class="col-md-12">
                <div class="admin-card p-4">
                    <h3 class="text-info mb-4">Our Specializations</h3><br>
                    <div class="row" align='center'>
                        <div class="col-md-5 mb-2">
                            <h4><i class="fas fa-microchip"></i> Integrated Circuits</h4>
                        </div>
                        <div class="col-md-5 mb-2">
                            <h4><i class="fas fa-cogs"></i> Embedded Systems</h4>
                        </div>
                        <div class="col-md-5 mb-2">
                            <h4><i class="fas fa-eye"></i> Computer Vision</h4>
                        </div>
                        <div class="col-md-5 mb-2">
                            <h4><i class="fas fa-server"></i> Computer Systems Architecture</h4>
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
