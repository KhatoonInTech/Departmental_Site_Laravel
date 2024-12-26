@extends('layouts.DataViewlayout')

@section('content')
    <div class="container mt-4 data-card p-4">
        <h2 class="text-center text-title2 mb-4">
            <span class="fas fa-globe-africa text-title1"></span> 
            &nbsp
            Visitor Data Management
            &nbsp
        </h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>auth_source</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($visitor->isEmpty())
                    <p class="text-center">No data to show.</p>
                @else
                    @foreach ($visitor as $vis)
                        <tr>
                            <td>{{ $vis->name }}</td>
                            <td>{{ $vis->email }}</td>
                            <td>{{ $vis->auth_source }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-custom dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        Edit
                                    </button>
                                    <ul class="dropdown-menu">
                                        @foreach (['name', 'email', 'auth_source'] as $field)
                                            <li>
                                                <button class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#editModal" data-field="{{ strtolower($field) }}"
                                                    data-current="{{ $vis->{$field} ?? '' }}"
                                                    data-email="{{ $vis->email }}"
                                                    data-title="Edit {{ ucfirst($field) }}">
                                                    {{ ucfirst($field) }}
                                                </button>
                                            </li>
                                        @endforeach
                                    </ul>
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
                    <input type="hidden" name="email" id="visitorEmail">

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
        const visitorEmailInput = document.getElementById('visitorEmail');
        const fieldInputContainer = document.getElementById('fieldInputContainer');
        const modalTitle = document.getElementById('editModalLabel');

        editModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            if (!button) return;

            // Get data attributes
            const email = button.getAttribute('data-email');
            const fieldName = button.getAttribute('data-field');
            const current = button.getAttribute('data-current');
            const title = button.getAttribute('data-title');

            // Update form action with the dynamic route
            const routeUrl = "{{ route('visitor.data.edit', ['email' => ':email']) }}";
            const finalUrl = routeUrl.replace(':email', encodeURIComponent(email));
            editForm.action = finalUrl;

            // Update modal elements
            modalTitle.textContent = title || `Edit ${fieldName}`;
            fieldNameInput.value = fieldName;
            visitorEmailInput.value = email;

            // Clear previous input
            fieldInputContainer.innerHTML = '';

            // Create appropriate input based on field type
            let inputHTML;
            switch (fieldName) {
                case 'email':
                    inputHTML = `
                    <label class="form-label text-warning">Email Address</label>
                    <input type="email" 
                           class="form-control" 
                           name="value" 
                           value="${current || ''}" 
                           required>
                    <small class="text-muted">This will be used as your login identifier</small>`;
                    break;

                case 'auth_source':
                    inputHTML = `
                    <label class="form-label text-warning">Authentication Source</label>
                    <select class="form-control" name="value" required>
                        <option value="">Select Auth Source</option>
                        // <option value="local" ${current === 'local' ? 'selected' : ''}>Local</option>
                        <option value="google" ${current === 'google' ? 'selected' : ''}>Google</option>
                        <option value="microsoft" ${current === 'linkedin' ? 'selected' : ''}>LinkedIn</option>
                    </select>`;
                    break;

                case 'name':
                    inputHTML = `
                    <label class="form-label text-warning">Name</label>
                    <input type="text" 
                           class="form-control" 
                           name="value" 
                           value="${current || ''}" 
                           required>`;
                    break;

                default:
                    inputHTML = `
                    <label class="form-label text-warning">${title || fieldName}</label>
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
            const value = formData.get('value');

            // Field-specific validation
            if (fieldType === 'email') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    alert('Please enter a valid email address');
                    return;
                }
            } else if (fieldType === 'name') {
                if (value.trim().length < 2) {
                    alert('Name must be at least 2 characters long');
                    return;
                }
            }

            // Submit form
            this.submit();
        });
    });
</script>
