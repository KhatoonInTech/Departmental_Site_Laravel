@extends('layouts.portalLayout')

@section('title', 'Portal Login - Department of Computer Engineering | BZU Multan')

@section('meta-description',
    'Department of Computer Engineering at Bahauddin Zakariya University, Multan.')
@section('meta-keywords',
    'BZU Admission Schedule, Computer Engineering Admission, BS Program, Evening Program, Weekend
    Program')

@section('content')
    <div class="container mt-6">
        <h1 class="text-center text-title mb-10"><strong><b>Portal Access</b></strong></h1>
        <p class="text-center mb-10">Please enter the correct information to access your Portal !</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <div class="row g-4">
            <div class="col-md-12">
                <div class="admin-card p-4 h-100">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="developer-theme rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 150px; height: 150px; margin-bottom:30%">
                                <i class="fas fa-users text-black fa-6x"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h1 class="text-center mb-4">Portal Login</h1>
                            <p class="text-center" style="font-size:0.7rem; margin-top:0rem;margin-bottom:0.5rem">🚫Don't share your credentials with anyone.</p>

                            <form id="loginForm" method="POST" action="{{ route('PortalLogin.post') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="fullname" class="text-warning">Full Name:</label>
                                    <input type="text" class="form-control" name="fullname"
                                        placeholder="Enter your Full Name as per registered." required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email" class="text-warning">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter your Email as per registered." required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Role" class="text-warning">Role:</label>
                                    <select id="Role" class="form-control" name="Role" required>
                                        <option value="" disabled selected>Choose the Role for Portal</option>
                                        <option value="student">Student</option>
                                        <option value="faculty">Faculty</option>
                                        <option value="community">Community</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="ID" class="text-warning">
                                        Student/Faculty/Admin ID:
                                    </label>
                                    <input type="ID" class="form-control" id="ID" name="ID"
                                        pattern="CPE-\d{2}-\d{2}"
                                        placeholder="Enter your ID for the selected Role as per registered." required>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="checkbox" class="form-check-input text-info" id="rememberMe"
                                        name="rememberMe">
                                    <label class="form-check-label text-info" for="rememberMe">Remember me</label>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="checkbox" class="form-check-input text-info" id="terms" name="terms"
                                        required>
                                    <label class="form-check-label text-info" for="terms">I agree to the <a
                                            href="{{ route('Terms & Conditions') }}" class="text-info text-warning">Terms &
                                            Conditions</a>
                                        and <a href="{{ route('PRIVACY_POLICY') }}" class="text-warning text-info">privacy
                                            policy</a></label>
                                </div>
                                <div class="form-btn mb-3">
                                    <button type="submit" class="btn btn-custom logout-btn w-100" value="Register"
                                        name="submit">
                                        <i class="fas fa-sign-in-alt me-2"></i> Continue to My Portal
                                    </button>
                                </div>

                            </form>
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
