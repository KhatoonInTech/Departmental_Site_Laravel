{{-- Determine the layout based on the role --}}
@php
    $layout = 'layouts.app'; // Default layout
    if ($Role == 'student') {
        $layout = 'layouts.studentprofileLayout';
    } elseif ($Role == 'FACULTY') {
        $layout = 'layouts.FacultySidebar';
    } elseif ($Role=='ADMIN' ||$Role=='admin') {
        $layout = 'layouts.adminProfilelayout';
    }
@endphp

{{-- Extend the determined layout --}}
@extends($layout)



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0 text-title1">Administrative Announcements</h1>
                    </div>

                    <div class="card-body">
                      
                        <!-- Create New Post Area -->
                        @if ($Role=='ADMIN' ||$Role=='admin')
                            <div class="mb-4">
                                <h6>Create New Announcement</h6>
                                <form action="{{ route('admin.createannouncement') }}" method="POST">
                                    @csrf
                                    <textarea name="announcement_content" class="form-control mb-3" rows="4"
                                        placeholder="Write your announcement here..."></textarea>
                                    <button type="submit" class="btn btn-primary">Post Announcement</button>
                                </form>
                            </div>
                            <hr>
                        @endif
                        <!-- Live Announcements -->
                        @forelse($liveAnnouncements as $announcement)
                            <div class="announcement-card mb-4 border rounded p-4">
                                <div class="announcement-card mb-4 border rounded p-4">
                                    <div class="announcement-content" id="current-post">
                                        <p>{!! $announcement->PostContent !!}
                                        </p>
                                        <hr>
                                        <p><strong>Best regards,</strong><br>Administration Department of Computer
                                            Engineering</p>
                                    </div>

                                    {{-- DELETE BUTTON --}}
                                    @if ($Role=='ADMIN' ||$Role=='admin')
                                        <div class="action-buttons mt-3">
                                            <form action="{{ route('admin.deleteannouncement', $announcement->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            @empty
                                <p class="text-center">No live announcements to show.</p>
                        @endforelse
                        <br><br>
                        <p class="text-center" style="font-size:0.5rem; margin-bottom:0.5rem">©️Admin Block | Department of
                            Computer Engineering</p>
                        <p class="text-center"style="font-size:0.5rem; margin-top:0.5rem">Bahauddin Zakariya University
                            Multan</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
