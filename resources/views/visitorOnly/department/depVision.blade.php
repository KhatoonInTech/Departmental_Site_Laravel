@extends('layouts.app')

@section('title', 'Vision & Mission - Department of Computer Engineering | BZU Multan')

@section('meta-description', 'Check the admission schedule for the BS and BS (5th Semester) programs offered by the
    Department of Computer Engineering at Bahauddin Zakariya University, Multan.')
@section('meta-keywords', 'BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend
    Program')

@section('content')
<div id="whyus" class="fh5co-hero"
        style="background-image: url('{{ asset('images/depinside.jpg') }}'); background-size:contain; "
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div
                    class="col-md-12 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell">
                        <h3 style="color:rgb(248, 247, 245)" class="text-center">Explore Our Vision & Mission</h3>
                        <h1 style="color:rgb(255, 213, 0)">Department of Computer Engineering</h1>
                        <h4 style="color:rgb(248, 247, 245)">Bahauddin Zakariya University, Multan </h4>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container mt-4" style="margin-top:10%">
    <h1 class="text-center text-title mb-10"><strong><b>Vision & Mission of <br>Department of Computer
                Engineering</b></strong></h1>
    <div class="row g-4 mt-4">
        <div class="col-md-12">
            <div class="admin-card p-4">
                <h2 class="text-highlight">Program Educational Objectives (PEOs)</h2><br>
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="text-info">PEO-1</h4>
                        <p>Have strong competence in computer engineering resulting in successful careers.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-info">PEO-2</h4>
                        <p>Pursuing research and Innovation and being able to provide industrial solutions for
                            engineering and technical problems.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-info">PEO-3</h4>
                        <p>Effective team player with strong communication and upright ethics for social and
                            environmental responsibilities.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-info">PEO-4</h4>
                        <p>Enhancing their professional development and technical knowledge through continuing
                            learning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-md-12">
            <div class="admin-card p-4">
                <h2 class="text-highlight">Mapping of PEOs with University Vision & Mission</h2><br>
                <div class="table-responsive">
                    <table class="table table-bordered uni-mission-table" align="center">
                        <thead>
                            <tr>
                                <th colspan="5" class="text-center">PEOs</th>
                            </tr>
                            <tr>
                                <th>Vision/Mission</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>University Vision</td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td>University Mission</td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"></td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="row g-4 mt-4">
        <div class="col-md-12">
            <div class="admin-card p-4">
                <h2 class="text-highlight">Mapping of PEOs with Department's Vision & Mission</h2><br>
                <div class="table-responsive">
                    <table class="table table-bordered uni-vision-table " align="center">
                        <thead>
                            <tr>
                                <th colspan="5" class="text-center">PEOs</th>
                            </tr>
                            <tr>
                                <th>Vision/Mission</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Department Vision</td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td>Department Mission</td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"></td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                                <td class="text-center"><i class="fas fa-check"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-md-12">
            <div class="admin-card p-4">
                <h2 class="text-highlight">Program Learning Outcomes (PLOs)</h2><br>
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-1</h4>
                        <strong><a class="text-warning">Engineering Knowledge</a></strong> <br><br>An ability to
                        apply knowledge of mathematics, science, engineering fundamentals and an engineering
                        specialization to the solution of complex engineering problems.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-2</h4>
                        <strong><a class="text-warning">Problem Analysis</a></strong><br><br>
                        <p>An ability to identify, formulate, research literature, and analyze complex engineering
                            problems reaching substantiated conclusions using first principles of mathematics,
                            natural sciences and engineering sciences.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-3</h4>
                        <strong><a class="text-warning">Design/Development of Solutions</a></strong> <br><br>
                        <p>An ability to design solutions for complex engineering problems and design systems,
                            components or processes that meet specified needs with appropriate consideration for
                            public health and safety, cultural, societal, and environmental considerations.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-4</h4>
                        <strong><a class="text-warning">Investigation</a></strong><br><br>
                        <p> An ability to investigate complex engineering problems in a methodical way including
                            literature survey, design and conduct of experiments, analysis and interpretation of
                            experimental data, and synthesis of information to derive valid conclusions.</p>

                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-5</h4>
                        <strong><a class="text-warning">Modern Tool Usage</a></strong><br><br>
                        <p>An ability to create, select and apply appropriate techniques, resources, and modern
                            engineering and IT tools, including prediction and modeling, to complex engineering
                            activities, with an understanding of the limitations.</p>

                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-6</h4>
                        <strong><a class="text-warning">The Engineer and Society</a></strong><br><br>
                        <p> An ability to apply reasoning informed by contextual knowledge to assess societal,
                            health, safety, legal and cultural issues and the consequent responsibilities relevant
                            to professional engineering practice and solution to complex engineering problems.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-7</h4>
                        <strong><a class="text-warning">Environment and Sustainability</a></strong><br><br>
                        <p>An ability to understand the impact of professional engineering solutions in societal and
                            environmental contexts and demonstrate knowledge of and need for sustainable
                            development.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-8</h4>
                        <strong><a class="text-warning"> Ethics</a></strong><br><br>
                        <p>Apply ethical principles and commit to professional ethics and responsibilities and norms
                            of engineering practice.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-9</h4>
                        <strong><a class="text-warning">Individual and Teamwork</a></strong><br><br>
                        <p>An ability to work effectively, as an individual or in a team, on multifaceted and /or
                            multidisciplinary settings.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info ">PLO-10</h4>
                        <strong><a class="text-warning">Communication</a></strong><br><br>
                        <p> An ability to communicate effectively, orally as well as in writing, on complex
                            engineering activities with the engineering community and with society at large, such as
                            being able to comprehend and write effective reports and design documentation, make
                            effective presentations, and give and receive clear instructions.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info ">PLO-11</h4>
                        <strong><a class="text-warning">Project Management</a></strong> <br><br>
                        <p>An ability to demonstrate management skills and apply engineering principles to one's own
                            work, as a member and/or leader in a team, to manage projects in a multidisciplinary
                            environment.</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h4 class="text-info">PLO-12</h4>
                        <strong><a class="text-warning">Lifelong Learning</a></strong><br><br>
                        <p>An ability to recognize the importance of, and pursue lifelong learning in the broader
                            context of innovation and technological developments.</p>
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
