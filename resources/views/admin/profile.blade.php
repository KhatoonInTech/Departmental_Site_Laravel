@extends('layouts.adminProfilelayout')

@section('title', 'Admin Profile - ' . $faculty->Name)

@section('content')
    <div class="container " style="margin-top:50px">

        <h3 class="text-center text-title1 mb-4"><strong>{{ $faculty->Name }}'s Profile</strong></h3>
        <hr>
     
        <div class="row" style="margin-top:50px">
            <!-- Profile Picture -->
            <div class="col-md-4 text-center position-relative">
                @if ($faculty->picture_url)
                    <img src="{{ asset($faculty->picture_url) }}" alt="Profile Picture of {{ $faculty->Name }}"
                        class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover;">
                @else
                    <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center"
                        style="width: 200px; height: 200px;">
                        <i class="fas fa-user fa-5x text-white"></i>
                    </div>
                @endif
                <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal" data-bs-target="#editModal"
                    data-field="picture_url" data-current="" data-title="Update Profile Picture">
                    <i class="fas fa-edit"></i>
                </button>
            </div>

            <!-- Profile Details -->
            <div class="col-md-8">
                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Name:</strong> {{ $faculty->Name }}
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="Name" data-current="{{ $faculty->Name }}"
                            data-title="Update Name">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>

                <div class="password-container">
                    <span class="credentials-label">Credentials:</span>
                    <div class="password-wrapper">
                        <div id="passwordLabel">******</div>
                        <i class="fa fa-eye eye-icon" id="togglePassword"></i>
                    </div>
                </div>
            
                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Position:</strong> {{ $faculty->Position }}
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="Position" data-current="{{ $faculty->Position }}"
                            data-title="Update Position">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Qualification:</strong> {{ $faculty->Qualification }}
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="Qualification"
                            data-current="{{ $faculty->Qualification }}" data-title="Update Qualification">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Research Interests:</strong> {{ $faculty->{'Research Interests'} }}
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="Research Interests"
                            data-current="{{ $faculty->{'Research Interests'} }}" data-title="Update Research Interests">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>Other Information:</strong> {{ $faculty->{'Other_Information'} }}
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="Other_Information"
                            data-current="{{ $faculty->{'Other_Information'} }}" data-title="Update Other Information">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>

                <div class="mb-3 position-relative">
                    <p class="mb-2"><strong>CV/Resume:</strong>
                        @if ($faculty->cv_resume_url)
                            <a href="{{ asset($faculty->cv_resume_url) }}" target="_blank">Download CV/Resume</a>
                        @else
                            Not uploaded
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="cv_resume_url" data-current=""
                            data-title="Update CV/Resume">
                            <i class="fas fa-edit"></i>
                        </button>
                    </p>
                </div>
            </div>

        </div>

        <hr>

        <!-- Social Links -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Contact & Social Links</h3>
                <ul class="list-unstyled">
                    <li class="mb-2 d-flex align-items-center">
                        <strong>Email:</strong>
                        <a href="mailto:{{ $faculty->email }}">{{ $faculty->email }}</a>

                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="email" data-current="{{ $faculty->email }}"
                            data-title="Edit Email">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <strong>LinkedIn:</strong>
                        @if ($faculty->linkedin_url)
                            <a href="{{ $faculty->linkedin_url }}" target="_blank">LinkedIn
                                Profile</a>
                        @else
                            <span class="ms-1">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="linkedin_url"
                            data-current="{{ $faculty->linkedin_url }}" data-title="Edit LinkedIn Url">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>Facebook:</strong>
                        @if ($faculty->facebook_url)
                            <a href="{{ $faculty->facebook_url }}" target="_blank">Facebook
                                Profile</a>
                        @else
                            <span class="ms-1">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="facebook_url"
                            data-current="{{ $faculty->facebook_url }}" data-title="Edit Facebook Url">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>Twitter:</strong>
                        @if ($faculty->twitter_url)
                            <a href="{{ $faculty->twitter_url }}" target="_blank">Twitter
                                Profile</a>
                        @else
                            <span class="ms-1">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="twitter_url"
                            data-current="{{ $faculty->twitter_url }}" data-title="Edit Twitter Url">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>Google Scholar:</strong>
                        @if ($faculty->google_scholar_url)
                            <a href="{{ $faculty->google_scholar_url }}" target="_blank">Google Scholar</a>
                        @else
                            <span class="ms-1">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="google_scholar_url"
                            data-current="google_scholar_url }}" data-title="Edit Google Scholar Url">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>ResearchGate:</strong>
                        @if ($faculty->researchgate_url)
                            <a href="{{ $faculty->researchgate_url }}" target="_blank">ResearchGate Profile</a>
                        @else
                            <span class="ms-1">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="researchgate_url"
                            data-current="{{ $faculty->researchgate_url }}" data-title="Edit Researchgate Url">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>

                    <li class="mb-2 d-flex align-items-center">
                        <strong>ORCID:</strong>
                        @if ($faculty->orcid_url)
                            <a href="{{ $faculty->orcid_url }}" target="_blank">ORCID
                                Profile</a>
                        @else
                            <span class="ms-1">Not provided</span>
                        @endif
                        <button class="btn btn-sm btn-link text-primary ms-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" data-field="orcid_url" data-current="{{ $faculty->orcid_url }}"
                            data-title="Edit Orcid Url">
                            <i class="fas fa-edit"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>


@endsection
 <!-- Edit Modal -->
 <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editForm"
                action="{{ route('admin.profile.edit', ['faculty_ID' => $faculty->Faculty_ID]) }}"
                method="POST" enctype="multipart/form-data"> @csrf
                <div class="modal-header">
                    <h3 class="modal-title" id="editModalLabel">Edit Field</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="field_name" id="fieldName">
                    <div class="mb-3" id="fieldInputContainer">
                        <!-- Input will be dynamically inserted here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editModal = document.getElementById('editModal');
        const fieldNameInput = document.getElementById('fieldName');
        const fieldInputContainer = document.getElementById('fieldInputContainer');
        const modalTitle = document.getElementById('editModalLabel');

        editModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const field = button.getAttribute('data-field');
            const current = button.getAttribute('data-current');
            const title = button.getAttribute('data-title');

            modalTitle.textContent = title;
            fieldNameInput.value = field;
            fieldInputContainer.innerHTML = '';

            // Create appropriate input based on field type
            let input;
            if (field === 'picture_url' || field === 'cv_resume_url') {
                input = `<label class="form-label text-warning">Upload File</label>
                    <input type="file" class="form-control" name="file" required>
                    <small class="text-muted">
                        ${field === 'picture_url' ? 
                            'Accepted formats: jpg, jpeg, png. Max size: 2MB' : 
                            'Accepted formats: pdf, doc, docx. Max size: 5MB'}
                    </small>`;
            } else if (field.includes('Interests') || field.includes('Information')) {
                input = `<label class="form-label text-warning">${title}</label>
                    <textarea class="form-control" name="value" rows="3" required>${current}</textarea>`;
            } else {
                input = `<label class="form-label text-warning">${title}</label>
                    <input type="${field.includes('url') ? 'url' : 'text'}" 
                           class="form-control" 
                           name="value" 
                           placeholder="${current}" 
                           required>`;
            }

            fieldInputContainer.innerHTML = input;
        });
    });
</script>