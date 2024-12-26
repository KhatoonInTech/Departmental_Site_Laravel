{{-- Determine the layout based on the role --}}
@php
    $layout = 'layouts.app'; // Default layout
    if ($Role == 'FACULTY') {
        $layout = 'layouts.FacultySidebar';
    } elseif ($Role == 'ADMIN' || $Role == 'admin') {
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
                    @if ($Role == 'ADMIN' || $Role == 'admin')
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="mb-0 text-title1">Pending Announcements</h1>
                        </div>
                    @elseif($Role == 'FACULTY' || $Role == 'faculty')
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="mb-0 text-title1">Notifications</h1>
                        </div>
                    @endif
                    <!-- Create New Post Area -->
                    @if ($Role == 'ADMIN' || $Role == 'admin')
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
                   

                    <!-- Pending Announcements -->
                    @forelse($pendingAnnouncements as $announcement)
                        @if ($Role == 'FACULTY' || ($Role == 'faculty' && $announcement->Faculty_ID == $faculty->Faculty_ID))
                            <div class="announcement-card mb-4 border rounded p-4">
                                <div class="announcement-content" id="current-post">
                                    {!! $announcement->PostContent !!}
                                    <hr>
                                    <p><strong>Best regards,</strong><br>Administration Department of Computer Engineering
                                    </p>
                                </div>
                            @elseif($Role == 'ADMIN' || $Role == 'admin')
                                <div class="announcement-card mb-4 border rounded p-4">
                                    <div class="announcement-content" id="current-post">
                                        {!! $announcement->PostContent !!}
                                        <hr>
                                        <p><strong>Best regards,</strong><br>Administration Department of Computer
                                            Engineering</p>
                                    </div>

                                    <div class="action-buttons mt-3">
                                        <!-- Publish Button -->

                                        <form action="{{ route('admin.postannouncement', $announcement->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Publish</button>
                                        </form>

                                        <!-- Edit Post Button -->
                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editAnnoucementModal" data-id="{{ $announcement->id }}"
                                            data-content="{!! htmlspecialchars($announcement->PostContent) !!}">
                                            
                                            Edit Post
                                        </button>
                                    </div>
                        @endif
                </div>
            @empty
                <p class="text-center">No pending announcements found.</p>
                @endforelse
                <br><br>
                <p class="text-center" style="font-size:0.5rem; margin-bottom:0.5rem">©️Admin Block | Department of
                    Computer Engineering</p>
                <p class="text-center"style="font-size:0.5rem; margin-top:0.5rem">Bahauddin Zakariya University
                    Multan
                </p>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

<!-- Edit Modal -->
<div class="modal fade" id="editAnnoucementModal" tabindex="-1" aria-labelledby="editAnnoucementModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editForm" action="{{ route('admin.updateannouncement') }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editAnnoucementModalLabel">Edit Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="announcementId"> <!-- Hidden input for ID -->

                    <textarea class="form-control" id="editAnnouncementContent" name="content" rows="10" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editAnnoucementModal = document.getElementById('editAnnoucementModal');
        const editTextarea = document.getElementById('editAnnouncementContent');
        const announcementIdInput = document.getElementById('announcementId'); // Get hidden input for ID

        // Event listener for when the modal is shown
        editAnnoucementModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const content = button.getAttribute('data-content'); // Get content from data attribute

            // Decode HTML entities and replace <br> with newlines
        const decodedContent = content
            .replace(/<br\s*\/?>/gi, '\n')  // Replace <br> tags with newlines
            .replace(/<\/?strong>/gi, '')   // Remove <strong> tags
            .replace(/<\/?p>/gi, '')        // Remove <p> tags
            .replace(/<hr\s*\/?>/gi, '\n---\n')  // Replace <hr> with dashed line
            .replace(/\s+/g, ' ')           // Normalize whitespace
            .trim();                        // Remove extra whitespace

        editTextarea.value = decodedContent;
        
            // Add announcement ID to hidden input
            const announcementId = button.getAttribute('data-id');
            announcementIdInput.value = announcementId; // Set hidden input value

            // Optionally, update form action if needed (for RESTful routes)
            const form = document.getElementById('editForm');
            form.action = form.action.replace('/updateannouncement',
                `/announcements/${announcementId}`);
        });
    });
</script>
