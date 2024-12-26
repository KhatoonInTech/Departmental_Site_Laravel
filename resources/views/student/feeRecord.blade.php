@extends('layouts.studentprofileLayout')

@section('title', 'Student Profile - ' . $student->Name)
@php
    $feeTypes = [
        'Admission_Challan' => 'Admission_Dues',
        'Semester_1' => 'Semester_1_Dues',
        'Semester_2' => 'Semester_2_Dues',
        'Semester_3' => 'Semester_3_Dues',
        'Semester_4' => 'Semester_4_Dues',
        'Semester_5' => 'Semester_5_Dues',
        'Semester_6' => 'Semester_6_Dues',
        'Semester_7' => 'Semester_7_Dues',
        'Semester_8' => 'Semester_8_Dues',
    ];
@endphp
@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Field</th>
                        <th>Value/Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Basic Student Information -->
                    <tr>
                        <td>Name</td>
                        <td>{{ $std->Name }}</td>

                    </tr>
                    <tr>
                        <td>Father Name</td>
                        <td>{{ $std->fatherName }}</td>

                    </tr>
                    <tr>
                        <td>CNIC</td>
                        <td>{{ $std->CNIC }}</td>

                    </tr>
                    <tr>
                        <td>ID</td>
                        <td>{{ $std->id }}</td>

                    </tr>
                    <tr>
                        <td>Roll No</td>
                        <td>{{ $std->Roll_No }}</td>

                    </tr>
                    <tr>
                        <td>Registration No</td>
                        <td>{{ $std->Reg_No }}</td>

                    </tr>
                    <tr>
                        <td>Session</td>
                        <td>{{ $std->Session }}</td>

                    </tr>

                    <!-- Fee Records -->


                    @foreach ($feeTypes as $label => $field)
                        <tr>
                            <td>{{ str_replace('_', ' ', $field) }}</td>
                            <td>
                                <!-- View Challan Button -->
                                <button type="button" class="btn btn-warning"
                                    @if ($std->{$label . '_Draft'}) onclick="window.location.href='{{ $std->{$label . '_Draft'} }}'"
                            @else
                                onclick="alert('Admin has not yet generated your Challan')" @endif>
                                    View/Download
                                </button>

                                <!-- Upload Receipt Button -->
                                <button type="button" class="btn btn-success btn-sm"
                                @if (!$std->{$label . '_Draft'})
                                    onclick="alert('Admin has not yet generated your Challan')"
                                @elseif ($std->{$label . '_Paid'})
                                    onclick="window.location.href='{{ $std->{$label . '_Paid'} }}'"
                                @else
                                    onclick="openUploadReceiptModal('{{ $std->Roll_No }}', '{{ $label }}')"
                                @endif>
                                Upload Receipt
                            </button>
                            </td>
                            <td>{{ $std->{$label . '_Status'} }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<!-- Upload Modal -->
<div class="modal fade" id="uploadReceiptModal" tabindex="-1" aria-labelledby="uploadReceiptModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadReceiptModalLabel">Upload Receipt</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="uploadReceiptForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="rollNo" name="Roll_No">
                    <input type="hidden" id="feeType" name="type">
                    <div class="mb-3">
                        <label class="form-label text-warning">Upload File</label>
                        <input type="file" class="form-control" name="file" required>
                        <small class="text-muted">Please upload a clear image or PDF of your receipt</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>




<script>
function openUploadReceiptModal(rollNo, feeType) {
    const modal = document.getElementById('uploadReceiptModal');
    const form = document.getElementById('uploadReceiptForm');
    
    // Set the hidden input values
    document.getElementById('rollNo').value = rollNo;
    document.getElementById('feeType').value = feeType;
    
    // Set the form action URL
    form.action = `{{ route('upload.receipt') }}`;
    
    // Update modal title
    document.getElementById('uploadReceiptModalLabel').textContent = 
        `Upload ${feeType.replace(/_/g, ' ')} Receipt`;
    
    // Show the modal
    new bootstrap.Modal(modal).show();
}
</script>