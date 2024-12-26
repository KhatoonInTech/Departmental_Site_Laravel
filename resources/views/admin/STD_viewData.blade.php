@extends('layouts.DataViewlayout')

@section('content')
    <section class=" data-card p-1">
        <h2 class="text-center text-title2 mb-4">
            <span class="fa fa-user-graduate text-title1"></span>
            &nbsp Student Data Management &nbsp
            <button type="button" class="btn btn-custom text-warning" data-bs-toggle="modal" data-bs-target="#studentModal">
                Add Students
            </button>
        </h2>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Roll No</th>
                        <th>Session</th>
                        <th>Current Semester</th>
                        <th>CGPA</th>
                        <th>Interests</th>
                        <th>Roles</th>
                        <th>Work Experience</th>
                        <th>Profile Picture</th>
                        <th>CV/Resume</th>
                        <th>Email</th>
                        <th>LinkedIn</th>
                        <th>GitHub</th>
                        <th>Medium</th>
                        <th>Portfolio</th>
                        <th>WhatsApp</th>
                        <th>GPA 1</th>
                        <th>Fail 1</th>
                        <th>GPA 2</th>
                        <th>Fail 2</th>
                        <th>Other GPA/Fail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($student->isEmpty())
                        <p class="text-center">No data to show.</p>
                    @else
                        @foreach ($student as $std)
                            <tr>
                                <td>{{ $std->Name }}</td>
                                <td>{{ $std->Roll_No }}</td>
                                <td>{{ $std->Session }}</td>
                                <td>{{ $std->Current_Semester }}</td>
                                <td>{{ $std->CGPA }}</td>
                                <td>{{ $std->Interests }}</td>
                                <td>{{ $std->Roles }}</td>
                                <td>{{ $std->Work_Experience }}</td>
                                <td><img src="{{ asset($std->picture_url) }}" alt="Profile Picture" width="50"
                                        height="50"></td>
                                <td><a href="{{ asset($std->cv_resume_url) }}" target="_blank">View CV</a></td>
                                <td>{{ $std->email }}</td>
                                <td><a href="{{ $std->linkedin_url }}" target="_blank">{{ $std->linkedin_url }}</a></td>
                                <td><a href="{{ $std->github_url }}" target="_blank">{{ $std->github_url }}</a></td>
                                <td><a href="{{ $std->medium_url }}" target="_blank">{{ $std->medium_url }}</a></td>
                                <td><a href="{{ $std->portfolio_url }}" target="_blank">{{ $std->portfolio_url }}</a></td>
                                <td><a href="{{ $std->whatsapp_url }}" target="_blank">{{ $std->whatsapp_url }}</a></td>
                                <td>{{ $std->GPA_1 }}</td>
                                <td>{{ $std->Fail_1 }}</td>
                                <td>{{ $std->GPA_2 }}</td>
                                <td>{{ $std->Fail_2 }}</td>
                                <td>In Progress</td>
                                <!-- Actions Dropdown -->
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-custom dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown">
                                            Edit
                                        </button>
                                        <ul class="dropdown-menu">
                                            @foreach (['Name', 'Roll_No', 'Session', 'Current_Semester', 'CGPA', 'Interests', 'Roles', 'Work_Experience', 'picture_url', 'cv_resume_url', 'email', 'linkedin_url', 'github_url', 'medium_url', 'portfolio_url', 'whatsapp_url', 'GPA_1', 'Fail_1', 'GPA_2', 'Fail_2', 'GPA_3', 'Fail_3', 'GPA_4', 'Fail_4', 'GPA_5', 'Fail_5', 'GPA_6', 'Fail_6', 'GPA_7', 'Fail_7', 'GPA_8', 'Fail_8'] as $field)
                                                <li>
                                                    <button class="dropdown-item" data-bs-toggle="modal"
                                                        data-rollno="{{ $std->Roll_No }}" data-bs-target="#editModal"
                                                        data-field="{{ strtolower(str_replace(' ', '_', $field)) }}"
                                                        data-current="{{ $std->{$field} ?? '' }}"
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
                                        <button class="btn btn-primary text-warning" style="padding:2px, color:#FFFFF"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-id="{{ $std->Roll_No }}" data-name="{{ $std->Name }}"
                                            data-context="student">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>
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
                    <input type="hidden" name="roll_no" id="roll_no">

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
        const rollNoInput = document.getElementById('roll_no');
        const fieldInputContainer = document.getElementById('fieldInputContainer');
        const modalTitle = document.getElementById('editModalLabel');

        editModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            if (!button) return;

            // Get data attributes
            const rollNo = button.getAttribute('data-rollno');
            const fieldName = button.getAttribute('data-field');
            const current = button.getAttribute('data-current');
            const title = button.getAttribute('data-title');

            // Update form action with the dynamic route
            const routeUrl = "{{ route('student.profile.edit', ['Roll_No' => ':rollNo']) }}";
            const finalUrl = routeUrl.replace(':rollNo', rollNo);
            editForm.action = finalUrl;

            // Update modal elements
            modalTitle.textContent = title || `Edit ${fieldName}`;
            fieldNameInput.value = fieldName;
            rollNoInput.value = rollNo;

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

                case 'Interests':
                case 'Roles':
                case 'Work_Experience':
                    inputHTML = `
                    <label class="form-label text-warning">${title || fieldName.replace('_', ' ')}</label>
                    <textarea class="form-control" name="value" rows="3" required>${current || ''}</textarea>`;
                    break;

                case 'CGPA':
                case 'GPA_1':
                case 'GPA_2':
                case 'GPA_3':
                case 'GPA_4':
                case 'GPA_5':
                case 'GPA_6':
                case 'GPA_7':
                case 'GPA_8':
                    inputHTML = `
                    <label class="form-label text-warning">${title || fieldName.replace('_', ' ')}</label>
                    <input type="number" 
                           class="form-control" 
                           name="value" 
                           step="0.01" 
                           min="0" 
                           max="4" 
                           value="${current || ''}" 
                           required>`;
                    break;

                case 'linkedin_url':
                case 'github_url':
                case 'medium_url':
                case 'portfolio_url':
                case 'whatsapp_url':
                    inputHTML = `
                    <label class="form-label text-warning">${title || fieldName.replace('_', ' ')}</label>
                    <input type="url" 
                           class="form-control" 
                           name="value" 
                           value="${current || ''}" 
                           placeholder="https://" 
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
            }

            // Submit form
            this.submit();
        });
    });
</script>
<!-- ADD Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Add Student Information</h5>
                <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="studentForm" action="{{ route('student.addData') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row g-3">
                        <!-- Personal Information -->
                        <div class="col-md-6">
                            <label for="Name" class="form-label text-warning">Name *</label>
                            <input type="text" class="form-control" id="Name" name="Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="Roll_No" class="form-label text-warning">Roll Number *</label>
                            <input type="text" class="form-control" id="Roll_No" name="Roll_No"  pattern="CPE-\d{2}-\d{2}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label text-warning">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="Session" class="form-label text-warning">Session *</label>
                            <input type="text" class="form-control" id="Session" name="Session" required>
                        </div>
                        <div class="col-md-6">
                            <label for="Current_Semester" class="form-label text-warning">Current Semester *</label>
                            <input type="number" class="form-control" id="Current_Semester" name="Current_Semester"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="CGPA" class="form-label text-warning">CGPA</label>
                            <input type="number" step="0.01" class="form-control" id="CGPA"
                                name="CGPA">
                        </div>

                        <!-- Additional Information -->
                        <div class="col-12">
                            <label for="Interests" class="form-label text-warning">Interests</label>
                            <textarea class="form-control" id="Interests" name="Interests" rows="1"></textarea>
                        </div>

                        <div class="col-12">
                            <label for="Work_Experience" class="form-label text-warning">Work Experience</label>
                            <textarea class="form-control" id="Work_Experience" name="Work_Experience" rows="1"></textarea>
                        </div>

                        <!-- URLs -->
                        <div class="col-md-6">
                            <label for="picture_url" class="form-label text-warning">Picture URL</label>
                            <input type="url" class="form-control" id="picture_url" name="picture_url">
                        </div>
                        <div class="col-md-6">
                            <label for="cv_resume_url" class="form-label text-warning">CV/Resume URL</label>
                            <input type="url" class="form-control" id="cv_resume_url" name="cv_resume_url">
                        </div>

                        <div class="col-md-6">
                            <label for="linkedin_url" class="form-label text-warning">LinkedIn URL</label>
                            <input type="url" class="form-control" id="linkedin_url" name="linkedin_url">
                        </div>
                        <div class="col-md-6">
                            <label for="github_url" class="form-label text-warning">GitHub URL</label>
                            <input type="url" class="form-control" id="github_url" name="github_url">
                        </div>
                        <div class="col-md-6">
                            <label for="medium_url" class="form-label text-warning">Medium URL</label>
                            <input type="url" class="form-control" id="medium_url" name="medium_url">
                        </div>
                        <div class="col-md-6">
                            <label for="portfolio_url" class="form-label text-warning">Portfolio URL</label>
                            <input type="url" class="form-control" id="portfolio_url" name="portfolio_url">
                        </div>
                        <div class="col-md-6">
                            <label for="whatsapp_url" class="form-label text-warning">WhatsApp URL</label>
                            <input type="url" class="form-control" id="whatsapp_url" name="whatsapp_url">
                        </div>

                        <!-- Semester GPAs and Fails -->
                        <div class="col-12">
                            <h5>Semester-wise Performance</h5>
                        </div>
                        @for ($i = 1; $i <= 8; $i++)
                            <div class="col-md-3">
                                <label for="GPA_{{ $i }}" class="form-label text-warning">GPA
                                    {{ $i }}</label>
                                <input type="number" step="0.01" class="form-control"
                                    id="GPA_{{ $i }}" name="GPA_{{ $i }}">
                            </div>
                            <div class="col-md-3">
                                <label for="Fail_{{ $i }}" class="form-label">Fails
                                    {{ $i }}</label>
                                <input type="number" class="form-control" id="Fail_{{ $i }}"
                                    name="Fail_{{ $i }}">
                            </div>
                        @endfor
                    </div>
                    <div class="modal-footer">
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
