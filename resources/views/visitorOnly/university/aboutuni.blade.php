@extends('layouts.app')

@section('title', 'University in a Glimpse | BZU Multan')

@section('meta-description',
    'Check the admission schedule for the BS and BS (5th Semester) programs offered by the
    Department of Computer Engineering at Bahauddin Zakariya University, Multan.')
@section('meta-keywords',
    'BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend
    Program')

@section('content')
    <div class="fh5co-hero" style="background-image: url('{{ asset('images/bzu.jpg') }}'); background-size:cover; "
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12 text-center fh5co-table">
                    <div class="fh5co-intro text-center" style="align-items: center; display:flex;">
                        <h3 style="color:rgb(248, 247, 245)" class="text-center">Welcome to the </h3>
                        <h1 style="color:rgb(255, 213, 0)">Bahauddin Zakariya University, Multan</h1>
                        <h4 style="color:rgb(248, 247, 245)">Explore Our Vision & Mission</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-4">
            {{-- History Section --}}
            <div class="col-md-12">
                <div class="admin-card p-4">
                    <h1 class="text-highlight mb-4">{!! $contents['history']->Title !!}</h1>
                    {!! $contents['history']->Body !!}
                </div>
            </div>
    
            {{-- Objectives Section --}}
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h2 class="text-info pixelated-font">{!! $contents['objectives']->Title !!}</h2>
                    {!! $contents['objectives']->Body !!}
                </div>
            </div>
    
            {{-- Goals Section --}}
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h2 class="text-info pixelated-font">{!! $contents['goals']->Title !!}</h2>
                    {!! $contents['goals']->Body !!}
                </div>
            </div>
    
            {{-- Vision Section --}}
            <div class="col-md-6">
                <div class="admin-card p-4 h-100">
                    <h2 class="text-info pixelated-font mb-4">{!! $contents['vision']->Title !!}</h2>
                    {!! $contents['vision']->Body !!}
                </div>
            </div>
    
            {{-- Mission Section --}}
            <div class="col-md-6">
                <div class="admin-card p-4 h-80">
                    <h3 class="text-info pixelated-font mb-4">{!! $contents['mission']->Title !!}</h3>
                    {!! $contents['mission']->Body !!}
                </div>
            </div>
    
            {{-- VC Message Section --}}
            <div class="col-md-12">
                <div class="admin-card p-4" style="padding-top: 0; padding-bottom:0">
                    <section class="section dsa-message" style="padding-top: 0; padding-bottom:0">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5" style="margin-top:10%">
                                    <div class="dsa-info">
                                        @if($contents['vc_message']->picture_url)
                                            <img src="{{ $contents['vc_message']->picture_url }}" alt="VC| BZU" class="img-fluid">
                                        @endif
                                        <h5>Prof. Dr. Muhammad Zubair Iqbal</h5>
                                        <p>The Vice Chancellor, Bahauddin Zakariya University Multan</p>
                                        @if($contents['vc_message']->Link)
                                            <a href="{{ $contents['vc_message']->Link }}" class="btn btn-custom text-warning">
                                                {{ $contents['vc_message']->Link_text ?? 'Contact VC' }}
                                                <i class="fas fa-arrow-right ms-2"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-7"><br>
                                    <h2>{!! $contents['vc_message']->Title !!}</h2>
                                    {!! $contents['vc_message']->Body !!}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .dsa-message {
        display: flex;
        align-items: center;
        justify-content: space-between;
        text-align: right;
        margin-top: -120px;
        margin-bottom: -120px
    }

    .dsa-message img {
        max-width: 400px;
        margin-left: -10px;
        /* Adjusted size */
        max-height: 100px;
        border-radius: 10px;
        /* Optional styling */
    }

    .dsa-info {
        text-align: left;
        /* Align text to the right */
        margin-top: 10px;
        /* Space between image and text */
    }
</style>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
@endpush
