@extends('layouts.landingpage')

@section('title', 'Department of Computer Engineering | BZU Multan')
@section('meta-description',
    'Check the admission schedule for the BS and BS (5th Semester) programs offered by the
    Department of Computer Engineering at Bahauddin Zakariya University, Multan.')
@section('meta-keywords',
    'BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend
    Program')

@section('content')

    <div class="fh5co-hero" style="background-image: url('{{ asset('images/faculties.jpg') }}'); background-size:contain; "
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12 text-center fh5co-table">
                    <div class="fh5co-intro text-center" style="align-items: center; display:flex;">
                        <h3 style="color:rgb(248, 247, 245)" class="text-center">Welcome to the </h3>
                        <h1 style="color:rgb(255, 213, 0)">Department of Computer Engineering</h1>
                        <h4 style="color:rgb(248, 247, 245)">Bahauddin Zakariya University, Multan </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <!-- Start service  -->
    <section id="mu-service" style="display:flex">
        <div class="container" style="z-index:1000;display:flex">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-service-area">
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-book"></span>
                            <h3>University Ranking</h3>
                            <p class="feature-paragraph">Bahauddin Zakariya University, Multan is ranked <b>1st</b> of 6 in
                                Multan, <b>9th</b> of 175 universities in Pakistan, <b>2507th</b> of 14,131 in the World,
                                <b>786th</b> of 5,830 in Asia in 2024.
                            </p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-users"></span>
                            <h3>Subject Ranking</h3>
                            <p class="feature-paragraph">
                                Department of Computer Engineering, BZU is ranked at 39th in Pakistan, 1294th in Asia,
                                2890th in the World Rank in 2024.
                                <br>
                            </p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-table"></span>
                            <h3>100% Placement</h3>
                            <p class="feature-paragraph">Our all graduates are offered jobs by multinational and national
                                organizations and scholarships for the higher studies. </p>
                        </div>
                        <!-- Start single service -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service  -->

   
    <!-- Dynamic Chairman's Message Section -->
    <section class="section chairman-message">
        <div class="container">
            <div class="row">
                @php
                    $chairmanMessage = \App\Models\Content::where('Page', 'Welcome')
                        ->where('Section', 'chairman-message')
                        ->first();
                @endphp
                <div class="col-md-6">
                    <h2>{{ $chairmanMessage->Title }}</h2>
                    <p>{!! $chairmanMessage->Body !!}</p>
                </div>
                <div class="col-md-6 text-right">
                    <img src="{{ $chairmanMessage->picture_url }}" alt="Chairman" class="img-fluid">
                    <div class="chairman-info">
                        <h5>Dr. Muhammad Imran Malik</h5>
                        <p>The Chairman, Department of Computer Engineering, BZU</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic DSA Message Section -->
    <section class="section dsa-message">
        <div class="container">
            <div class="row">
                @php
                    $dsaMessage = \App\Models\Content::where('Page', 'Welcome')
                        ->where('Section', 'dsa-message')
                        ->first();
                @endphp
                <div class="col-md-5 text-left">
                    <img src="{{ $dsaMessage->picture_url }}" alt="DSA" class="img-fluid">
                    <div class="dsa-info">
                        <h5>Engr. Dr.  Shahid Iqbal</h5>
                        <p>The DSA, Department of Computer Engineering, BZU</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <h2>{{ $dsaMessage->Title }}</h2>
                    <p>{!! $dsaMessage->Body !!}</p>
                </div>
            </div>
        </div>
    </section>

<section id="whyus">
    <div id="whyus" class="fh5co-hero"
        style="background-image: url('{{ asset('images/deppic.jpeg') }}'); background-size:contain; " data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h3 style="color:rgb(248, 247, 245)" class="text-center">Why Would You Choose</h3>
                        <h1 style="color:rgb(255, 213, 0)">Department of Computer Engineering</h1>
                        <h4 style="color:rgb(248, 247, 245)">Bahauddin Zakariya University, Multan ?</h4>
                        <a class="btn btn-custom" role="button"
                            style="width=970px; padding=10px; margin-top:20px; margin-bottom:20px;"
                            href="{{ route('about-cpe') }}">
                            Find Out Here <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="margin-top:50px;margin-bottom:70px; text-align:center">
        <div class="container">
            <div class="row">

                <div class="col-md-6">

                    <h3 class="text-center  mb-4">Our Specializations</h3><br>
                    <div class="row">
                        <div class="col-md-5 mb-2">
                            <p><i class="fas fa-microchip"></i> Integrated Circuits</p>
                        </div>
                        <div class="col-md-5 mb-2">
                            <p><i class="fas fa-cogs"></i> Embedded Systems</p>
                        </div>
                        <div class="col-md-5 mb-2">
                            <p><i class="fas fa-eye"></i> Computer Vision</p>
                        </div>
                        <div class="col-md-5 mb-2">
                            <p><i class="fas fa-server"></i> Computer Systems Architecture</p>
                        </div>

                    </div>


                </div>
                <div class="col-md-6">
                    <p>
                        Established in 2004 under the Faculty of Engineering and Technology, the Department of Computer
                        Engineering at Bahauddin Zakariya University, Multan, has been at the forefront of technological
                        education in Pakistan.
                        Our programs are accredited by the Pakistan Engineering Council (PEC), ensuring world-class
                        education standards.
                    </p>
                    <a class="btn btn-custom" role="button"
                        style="width:170px; padding:10px; margin-top:10px; margin-bottom:20px;"
                        href="{{ route('about-cpe') }}">
                        Read More <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Start about us counter -->
        <section id="mu-abtus-counter"
            style="padding-top:30px;padding-bottom:30px; margin-top:30px;margin-bottom:100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-abtus-counter-area">
                            <div class="row">
                                <!-- Start counter item -->
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="mu-abtus-counter-single">
                                        <span class="fa fa-book"></span>
                                        <h4 class="counter">20</h4>
                                        <p>Graduate Students</p>
                                    </div>
                                </div>
                                <!-- End counter item -->
                                <!-- Start counter item -->
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="mu-abtus-counter-single">
                                        <span class="fa fa-users"></span>
                                        <h4 class="counter">800</h4>
                                        <p>Undergraduate Students</p>
                                    </div>
                                </div>
                                <!-- End counter item -->
                                <!-- Start counter item -->
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="mu-abtus-counter-single">
                                        <span class="fa fa-flask"></span>
                                        <h4 class="counter">200</h4>
                                        <p>Publications</p>
                                    </div>
                                </div>
                                <!-- End counter item -->
                                <!-- Start counter item -->
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="mu-abtus-counter-single no-border">
                                        <span class="fa fa-user-secret"></span>
                                        <h4 class="counter">13</h4>
                                        <p>Faculty Strength</p>
                                    </div>
                                </div>
                                <!-- End counter item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about us counter -->
    </div>
</section>


    
     <!-- Dynamic Events Section -->
     <section id="events" class="section">
        <div class="container text-center" style="margin-top:50px; margin-bottom:30px; text-align:center">
            <h1>Our Mega Events</h1>
            <p>We hold the legacy of organizing the best events!</p>
            <div class="row">
                @php
                    $events = \App\Models\Content::where('Page', 'Welcome')
                        ->where('Section', 'events')
                        ->get();
                @endphp
                @foreach($events as $event)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset($event->picture_url) }}" class="card-img-top" alt="{{ $event->Title }}">
                            <div class="card-body">
                                <a href="{{$event->Link}}" class="card-title" style="text-decoration: underline;"><h5 class="card-title">{!! $event->Title !!}</h5></a>
                                <p class="card-text">{!! $event->Body !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

       <!-- Dynamic News Section -->
       <section id="news" class="section">
        <div class="container text-center" style="margin-top:-80px; margin-bottom:30px; text-align:center">
            <h1>Our Latest News</h1>
            <p>Get In Touch with our latest News & Updates!</p>
            <div class="row">
                @php
                    $newsItems = \App\Models\Content::where('Page', 'Welcome')
                        ->where('Section', 'news')
                        ->get();
                @endphp
                @foreach($newsItems as $news)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset($news->picture_url) }}" class="card-img-top" alt="{{ $news->Title }}">
                            <div class="card-body">
                                <a href="{{$news->Link}}" class="card-title" style="text-decoration: underline;"><h5 class="card-title">{!! $news->Title !!}</h5></a>
                              <p class="card-text">{!! $news->Body !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="alumi" class="section ">
        <div class="container text-center" style="margin-top:-80px; margin-bottom:30px; text-align:center">
            <h1>Our Brilliant Talent Gallery</h1>
            <p>Some of our Proud Alumni</p>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/alumi1.png') }}" class="card-img-top" alt="Event 1">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/alumni2.png') }}" class="card-img-top" alt="Event 2">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('images/alumni3.png') }}" class="card-img-top" alt="Event 3">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/alumni4.png') }}" class="card-img-top" alt="Event 1">
                </div>
                <br><br><br>
                <div class="col-md-3">
                    <img src="{{ asset('images/alumni5.png') }}" class="card-img-top" alt="Event 2">
                </div>
                <br><br><br><br>
                <div class="col-md-3">
                    <img src="{{ asset('images/alumni6.png') }}" class="card-img-top" alt="Event 3">
                </div><br><br><br>
                <div class="col-md-3">
                    <img src="{{ asset('images/alumni7.png') }}"  style="max-height:85%" class="card-img-top" alt="Event 3">
                </div><br><br><br>
                <div class="col-md-3">
                    <img src="{{ asset('images/alumni8.png') }}" style="max-height:85%" class="card-img-top" alt="Event 3">
                </div>
            </div>
        </div>

    </section>


@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
@endpush
