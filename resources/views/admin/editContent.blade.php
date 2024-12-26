@extends('layouts.adminProfilelayout')

@section('content')
    <section class="container data-card p-1">

        <h2 class="text-center text-title2 mb-4">
            <span class="fa fa-edit text-title1"></span>
            &nbsp Edit Website Content &nbsp

        </h2>
       

        <div class=" card mb-4">
            <div class="card-body">

                <!-- Edit Form -->
                <form id="contentForm" action="{{ route('admin.content.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <!-- Page and Section Selection -->
                    <div class="row mb-6">
                        <div class="col-md-6">
                            <label for="pageSelector" class="form-label"> Page *</label>
                            <select class="form-select" id="pageSelector" name="Page" onchange="handlePageChange()" required>
                                <option value="" disabled selected>Select a page</option>
                                <option value="welcome">Welcome</option>
                                <option value="about-cpe">About CPE</option>
                                <option value="AboutUni">About University</option>
                                <option value="Programs">Programs</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="sectionSelector" class="form-label">Section *</label>
                            <select class="form-select" id="sectionSelector" name="Section" required>
                                <!-- Predefined sections -->
                                <optgroup label="Welcome" data-page="welcome">
                                    <option value="" disabled selected>Select a section</option>
                                    <option value="chairman-message">Chairman Message</option>
                                    <option value="dsa-message">DSA Message</option>
                                    <option value="events">Events</option>
                                    <option value="news">News</option>
                                </optgroup>
                                <optgroup label="About CPE" data-page="about-cpe">
                                    <option value="" disabled selected>Select a section</option>
                                    <option value="introduction">Introduction</option>
                                    <option value="achievements">Achievements</option>
                                    <option value="impact">Impact</option>
                                    <option value="programs">Programs</option>
                                    <option value="facilities">Facilities</option>
                                </optgroup>
                                <optgroup label="About University" data-page="AboutUni">
                                    <option value="" disabled selected>Select a section</option>
                                    <option value="history">History</option>
                                    <option value="objectives">Objectives</option>
                                    <option value="goals">Goals</option>
                                    <option value="vision">Vision</option>
                                    <option value="mission">Mission</option>
                                    <option value="vc_message">VC Message</option>
                                </optgroup>
                                <optgroup label="Programs" data-page="Programs">
                                    <option value="" disabled selected>Select a section</option>
                                    <option value="bsc_computer_engineering">BSc Computer Engineering</option>
                                    <option value="msc_computer_engineering">MSc Computer Engineering</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="title" class="form-label">Title (optional)</label>
                        <input type="text" class="form-control" id="title" name="Title" >
                    </div>

                    <div class="col-md-12">
                        <label for="body" class="form-label">Body Content (optional)</label>
                        <textarea class="form-control" id="body" name="Body" rows="6"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="link" class="form-label">Link (optional)</label>
                        <input type="url" class="form-control" id="link" name="Link">
                    </div>

                    <div class="col-md-12">
                        <label for="newImage" class="form-label">Upload New Image (optional)</label>
                        <input type="file" class="form-control" id="picture_url" name="picture_url" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary text-warning">Update Content</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


