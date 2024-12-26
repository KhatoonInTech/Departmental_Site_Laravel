<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Department of Computer Engineering | BZU Multan')</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Discover the Department of Computer Engineering at BZU Multan. Established in 2004, offering PEC-accredited programs in Computer Engineering. Learn about our cutting-edge curriculum and facilities.">
    <meta name="keywords"
        content="BZU Computer Engineering, PEC Accredited, Computer Hardware, Software Engineering, Robotics, Embedded Systems, Computer Vision">


</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-3" style="margin-top:10%; padding-left:-70px ; margin-left:0%">
                @include('layouts.adminSidebarlayout')
            </div>
            <div class="col-md-9">

                <h1 class="text-center text-title2 mb-4"><strong>Administration Portal</strong></h1>
                <hr>
                <main>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('content')
                </main>
            </div>
        </div>
        <br><br>
        <p class="text-center" style="font-size:0.5rem; margin-bottom:0.5rem">©️Admin Block | Department of Computer
            Engineering</p>
        <p class="text-center" style="font-size:0.5rem; margin-top:0.5rem">Bahauddin Zakariya University Multan</p>
        @include('layouts.footer')

    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editForm" action="{{ route('admin.profile.edit', ['faculty_ID' => $faculty->Faculty_ID]) }}"
                    method="POST" enctype="multipart/form-data"> @csrf
                    <div class="modal-header">
                        <h3 class="modal-title" id="editModalLabel">Edit Field</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
</body>

</html>
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

<script>
    const passwordLabel = document.getElementById('passwordLabel');
    const togglePassword = document.getElementById('togglePassword');
    const actualPassword = "{{ $faculty->Faculty_ID }}";

    function showPassword() {
        passwordLabel.textContent = actualPassword;
        togglePassword.classList.remove('fa-eye');
        togglePassword.classList.add('fa-eye-slash');
    }

    function hidePassword() {
        passwordLabel.textContent = "******";
        togglePassword.classList.remove('fa-eye-slash');
        togglePassword.classList.add('fa-eye');
    }

    togglePassword.addEventListener('mousedown', showPassword);
    togglePassword.addEventListener('mouseup', hidePassword);
    togglePassword.addEventListener('mouseleave', hidePassword);

    // Touch device support
    togglePassword.addEventListener('touchstart', showPassword);
    togglePassword.addEventListener('touchend', hidePassword);
</script>


<script>
    function handlePageChange() {
        const pageSelector = document.getElementById('pageSelector');
        const sectionSelector = document.getElementById('sectionSelector');
        
        // Get selected page
        const selectedPage = pageSelector.value;
    
        // Show/hide sections based on selected page
        const options = sectionSelector.querySelectorAll('optgroup');
        
        options.forEach(optGroup => {
            if (optGroup.getAttribute('data-page') === selectedPage) {
                optGroup.style.display = 'block'; // Show relevant sections
            } else {
                optGroup.style.display = 'none'; // Hide irrelevant sections
            }
        });
    
        // Reset section selection
        sectionSelector.value = '';
    }
    
    // Initial call to set up the section selector based on the default page selection
    handlePageChange();
</script>