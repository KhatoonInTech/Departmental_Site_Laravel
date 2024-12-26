@extends('layouts.DataViewlayout')

@section('content')
    <div class="container mt-4 data-card p-1">

        <h2 class="text-center text-title2 mb-4">
            <span class="fa fa-user-tie text-title1"></span>
            <span class="fa fa-chalkboard-teacher text-title1"></span>
            &nbsp
            Admin Data Management &nbsp
            <button type="button" class="btn btn-custom text-warning" data-bs-toggle="modal" data-bs-target="#adminModal">
                Add Admins
            </button>
        </h2>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Faculty ID</th>
                        <th>Position</th>
                        <th>Qualification</th>
                        <th>Research Interests</th>
                        <th>Other Information</th>
                        <th>Profile Picture</th>
                        <th>CV/Resume</th>
                        <th>Email</th>
                        <th>LinkedIn URL</th>
                        <th>Facebook URL</th>
                        <th>Twitter URL</th>
                        <th>Google Scholar URL</th>
                        <th>ResearchGate URL</th>
                        <th>ORCID URL</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($admin->isEmpty())
                        <p class="text-center">No data to show.</p>
                    @else
                        @foreach ($admin as $member)
                            <tr>
                                <td>{{ $member->Name }}</td>
                                <td>{{ $member->ROLE }}</td>
                                <td>{{ $member->Faculty_ID }}</td>
                                <td>{{ $member->Position }}</td>
                                <td>{{ $member->Qualification }}</td>
                                <td>{{ $member->Research_Interests }}</td>
                                <td>{{ $member->Other_Information }}</td>
                                <td><img src="{{ asset($member->picture_url) }}" alt="Profile Picture" width="50"
                                        height="50"></td>
                                <td><a href="{{ asset($member->cv_resume_url) }}" target="_blank">View CV/Resume</a></td>
                                <td>{{ $member->email }}</td>
                                <td><a href="{{ $member->linkedin_url }}" target="_blank">{{ $member->linkedin_url }}</a>
                                </td>
                                <td><a href="{{ $member->facebook_url }}" target="_blank">{{ $member->facebook_url }}</a>
                                </td>
                                <td><a href="{{ $member->twitter_url }}" target="_blank">{{ $member->twitter_url }}</a>
                                </td>
                                <td><a href="{{ $member->google_scholar_url }}"
                                        target="_blank">{{ $member->google_scholar_url }}</a></td>
                                <td><a href="{{ $member->researchgate_url }}"
                                        target="_blank">{{ $member->researchgate_url }}</a></td>
                                <td><a href="{{ $member->orcid_url }}" target="_blank">{{ $member->orcid_url }}</a></td>

                                <!-- Actions Dropdown -->
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-custom dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <!-- Add other edit options as needed -->
                                            @foreach (['Name', 'ROLE', 'Faculty_ID', 'Position', 'Qualification', 'Research Interests', 'Other_Information', 'picture_url', 'cv_resume_url', 'email', 'linkedin_url', 'facebook_url', 'twitter_url', 'google_scholar_url', 'researchgate_url', 'orcid_url'] as $field)
                                                <li>
                                                    <button class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#editModal"
                                                        data-field="{{ strtolower(str_replace(' ', '_', $field)) }}"
                                                        data-current="{{ $member->{$field} ?? '' }}"
                                                        data-facultyID="{{ $member->Faculty_ID }}"
                                                        data-title="Edit {{ $field }}">
                                                        {{ $field }}
                                                    </button>
                                                </li>
                                            @endforeach
                                            <!-- Add file upload options -->
                                            <li><button class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" data-field="picture_url" data-current=""
                                                    data-title="Update Profile Picture">Profile Picture</button></li>
                                            <li><button class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" data-field="cv_resume_url" data-current=""
                                                    data-title="Update CV/Resume">CV/Resume</button></li>

                                        </ul>
                                    </div>
                                    <div style="margin-top:7%">
                                        <button class="btn btn-primary " style="padding:2px, color:#FFFFF"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-id="{{ $member->Faculty_ID }}" data-context="admin"
                                            data-name="{{ $member->Name }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>


    </div>

@endsection

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h3 class="modal-title" id="editModalLabel">Edit Field</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="field_name" id="fieldName">
                    <input type="hidden" name="faculty_id" id="facultyId">

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
        const editForm = document.getElementById('editForm');
        const fieldNameInput = document.getElementById('fieldName');
        const facultyIdInput = document.getElementById('facultyId');
        const fieldInputContainer = document.getElementById('fieldInputContainer');
        const modalTitle = document.getElementById('editModalLabel');

        editModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            if (!button) return;

            // Get data attributes
            const facultyId = button.getAttribute('data-facultyID');
            const fieldName = button.getAttribute('data-field');
            const current = button.getAttribute('data-current');
            const title = button.getAttribute('data-title');

            // Update form action with the dynamic route
            const routeUrl = "{{ route('faculty.profile.edit', ['faculty_ID' => ':facultyId']) }}";
            const finalUrl = routeUrl.replace(':facultyId', facultyId);
            editForm.action = finalUrl;

            // Update modal elements
            modalTitle.textContent = title || `Edit ${fieldName.replace('_', ' ')}`;
            fieldNameInput.value = fieldName;
            facultyIdInput.value = facultyId;

            // Clear previous input
            fieldInputContainer.innerHTML = '';

            // Create appropriate input based on field type
            let inputHTML;
            switch (fieldName) {
                case 'picture_url':
                    inputHTML = `
                    <label class="form-label text-warning">Upload Profile Picture</label>
                    <input type="file" class="form-control" name="file" accept="image/jpeg,image/png,image/jpg" required>
                    <small class="text-muted">Accepted formats: jpg, jpeg, png. Max size: 2MB</small>`;
                    break;

                case 'cv_resume_url':
                    inputHTML = `
                    <label class="form-label text-warning">Upload CV/Resume</label>
                    <input type="file" class="form-control" name="file" accept=".pdf,.doc,.docx" required>
                    <small class="text-muted">Accepted formats: pdf, doc, docx. Max size: 5MB</small>`;
                    break;

                case 'research_interests':
                case 'other_information':
                    inputHTML = `
                    <label class="form-label text-warning">${title || fieldName.replace('_', ' ')}</label>
                    <textarea class="form-control" name="value" rows="3" required>${current || ''}</textarea>`;
                    break;

                case 'linkedin_url':
                case 'facebook_url':
                case 'twitter_url':
                case 'google_scholar_url':
                case 'researchgate_url':
                case 'orcid_url':
                    inputHTML = `
                    <label class="form-label text-warning">${title || fieldName.replace('_', ' ')}</label>
                    <input type="url" 
                           class="form-control" 
                           name="value" 
                           value="${current || ''}" 
                           placeholder="https://" 
                           required>`;
                    break;

                case 'role':
                    inputHTML = `
                    <label class="form-label text-warning">Role</label>
                    <select class="form-control" name="value" required>
                        <option value="">Select Role</option>
                        <option value="Professor" ${current === 'Professor' ? 'selected' : ''}>Professor</option>
                        <option value="Associate Professor" ${current === 'Associate Professor' ? 'selected' : ''}>Associate Professor</option>
                        <option value="Assistant Professor" ${current === 'Assistant Professor' ? 'selected' : ''}>Assistant Professor</option>
                        <option value="Lecturer" ${current === 'Lecturer' ? 'selected' : ''}>Lecturer</option>
                    </select>`;
                    break;

                case 'position':
                    inputHTML = `
                    <label class="form-label text-warning">Position</label>
                    <select class="form-control" name="value" required>
                        <option value="">Select Position</option>
                        <option value="Head of Department" ${current === 'Head of Department' ? 'selected' : ''}>Head of Department</option>
                        <option value="Faculty Member" ${current === 'Faculty Member' ? 'selected' : ''}>Faculty Member</option>
                    </select>`;
                    break;

                case 'email':
                    inputHTML = `
                    <label class="form-label text-warning">Email Address</label>
                    <input type="email" 
                           class="form-control" 
                           name="value" 
                           value="${current || ''}" 
                           required>`;
                    break;

                default:
                    inputHTML = `
                    <label class="form-label text-warning">${title || fieldName.replace('_', ' ')}</label>
                    <input type="text" 
                           class="form-control" 
                           name="value" 
                           value="${current || ''}" 
                           required>`;
            }

            fieldInputContainer.innerHTML = inputHTML;
        });

        // Form validation and submission
        editForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            const fieldType = formData.get('field_name');

            // Validation for specific fields
            if (fieldType === 'picture_url') {
                const file = formData.get('file');
                if (file && file.size > 2 * 1024 * 1024) { // 2MB
                    alert('Profile picture must be less than 2MB');
                    return;
                }
            } else if (fieldType === 'cv_resume_url') {
                const file = formData.get('file');
                if (file && file.size > 5 * 1024 * 1024) { // 5MB
                    alert('CV/Resume must be less than 5MB');
                    return;
                }
            } else if (fieldType === 'email') {
                const email = formData.get('value');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    alert('Please enter a valid email address');
                    return;
                }
            }

            // Submit form
            this.submit();
        });
    });
</script>

<!-- Add Modal -->
<div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="adminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModalLabel">Add Faculty Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="adminForm" action="{{ route('admin.addData') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row g-3">
                        <!-- Basic Information -->
                        <div class="col-md-6">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="Name" name="Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="Faculty_ID" class="form-label">Faculty ID</label>
                            <input type="text" class="form-control" id="Faculty_ID" name="Faculty_ID" required>
                        </div>
                        <div class="col-md-6">
                            <label for="Position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="Position" name="Position" required>
                        </div>
                        <div class="col-md-6">
                            <label for="Qualification" class="form-label">Qualification</label>
                            <input type="text" class="form-control" id="Qualification" name="Qualification"
                                required>
                        </div>

                        <!-- Detailed Information -->
                        <div class="col-12">
                            <label for="Research_Interests" class="form-label">Research Interests</label>
                            <textarea class="form-control" id="Research_Interests" name="Research_Interests" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="Other_Information" class="form-label">Other Information</label>
                            <textarea class="form-control" id="Other_Information" name="Other_Information" rows="3"></textarea>
                        </div>

                        <!-- URLs and Contact Information -->
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="picture_url" class="form-label">Profile Picture URL</label>
                            <input type="url" class="form-control" id="picture_url" name="picture_url">
                        </div>
                        <div class="col-md-6">
                            <label for="cv_resume_url" class="form-label">CV/Resume URL</label>
                            <input type="url" class="form-control" id="cv_resume_url" name="cv_resume_url">
                        </div>

                        <!-- Professional Profile URLs -->
                        <div class="col-md-6">
                            <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                            <input type="url" class="form-control" id="linkedin_url" name="linkedin_url">
                        </div>
                        <div class="col-md-6">
                            <label for="facebook_url" class="form-label">Facebook URL</label>
                            <input type="url" class="form-control" id="facebook_url" name="facebook_url">
                        </div>
                        <div class="col-md-6">
                            <label for="twitter_url" class="form-label">Twitter URL</label>
                            <input type="url" class="form-control" id="twitter_url" name="twitter_url">
                        </div>

                        <!-- Academic Profile URLs -->
                        <div class="col-md-6">
                            <label for="google_scholar_url" class="form-label">Google Scholar URL</label>
                            <input type="url" class="form-control" id="google_scholar_url"
                                name="google_scholar_url">
                        </div>
                        <div class="col-md-6">
                            <label for="researchgate_url" class="form-label">ResearchGate URL</label>
                            <input type="url" class="form-control" id="researchgate_url"
                                name="researchgate_url">
                        </div>
                        <div class="col-md-6">
                            <label for="orcid_url" class="form-label">ORCID URL</label>
                            <input type="url" class="form-control" id="orcid_url" name="orcid_url">
                        </div>
                        <button type="submit" class="btn btn-custom logout-btn w-100" value="Register"
                            name="submit">
                            <i class="fas fa-sign-in-alt me-2"></i> Save Data
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
