@extends('layouts.DataViewlayout')

@section('content')
    <section class=" data-card p-1">
        <h2 class="text-center text-title2 mb-4">
            <span class="fa fa-coins fa-2x text-title1"></span>
            &nbsp Student Fee Management &nbsp
        </h2>

        <div class="table-responsive">
            <table class="table table-hover">
                <!-- Table headers remain the same -->
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>CNIC</th>
                        <th>Roll No</th>
                        <th>Reg No</th>
                        <th>Session</th>
                        <th>Admission Challan</th>
                        @for ($i = 1; $i <= 8; $i++)
                            <th>Semester {{ $i }} Challan</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @if ($student->isEmpty())
                        <p class="text-center">No data to show.</p>
                    @else
                        @foreach ($student as $std)
                            <tr>
                                <td>{{ $std->Name }}</td>
                                <td>{{ $std->fatherName }}</td>
                                <td>{{ $std->CNIC }}</td>
                                <td>{{ $std->Roll_No }}</td>
                                <td>{{ $std->Reg_No }}</td>
                                <td>{{ $std->Session }}</td>

                                <!-- Admission Challan -->
                                <td>
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-primary {{ $std->Admission_Challan_Draft ? 'disabled' : '' }}"
                                            @if (!$std->Admission_Challan_Draft) onclick="setupGenerateModal('{{ $std->id }}', '{{ $std->CNIC }}', '{{ $std->Name }}', 
                                                    '{{ $std->fatherName }}', '{{ $std->Roll_No }}', '{{ $std->Reg_No }}', 
                                                    '{{ $std->Session }}', 'admission')"
                                                data-bs-toggle="modal"
                                                data-bs-target="#generateChallanModal"
                                            @else
                                                onclick="alert('Challan already exists')" @endif>
                                            Generate
                                        </button>

                                        <button type="button" class="btn btn-sm btn-info"
                                            @if ($std->Admission_Challan_Draft) onclick="window.location.href='{{ $std->Admission_Challan_Draft }}'"
                                            @else
                                                onclick="alert('Generate Challan First')" @endif>
                                            View
                                        </button>

                                        <button type="button" class="btn btn-sm btn-danger"
                                            @if ($std->Admission_Challan_Draft) onclick="setupDeleteModal('{{ $std->id }}', 'admission')"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteChallanModal"
                                            @else
                                                onclick="alert('Generate Challan First')" @endif>
                                            Delete
                                        </button>

                                        <button type="button" class="btn btn-sm btn-success"
                                            @if ($std->Admission_Challan_Paid) onclick="openPaidChallanModal('{{ $std->id }}', 'Admission_Challan_Status', '{{ $std->Admission_Challan_Paid }}')"
                                        @else
                                            onclick="alert('{{ $std->Name }} has not yet uploaded the paid challan')" @endif>
                                            Verify
                                            @if ($std->Admission_Challan_Paid)
                                                @php $statusField = 'Admission_Challan_Status' @endphp
                                                @if ($std->$statusField)
                                                    <span
                                                        class="badge bg-{{ $std->$statusField === 'Approved' ? 'success' : 'danger' }}">
                                                        {{ $std->$statusField }}
                                                    </span>
                                                @endif
                                            @endif
                                        </button>
                                    </div>
                                </td>

                                <!-- Semester Challans -->
                                @for ($i = 1; $i <= 8; $i++)
                                    @php
                                        $draftField = "Semester_{$i}_Draft";
                                        $paidField = "Semester_{$i}_Paid";
                                        $statusField = "Semester_{$i}_Status";
                                    @endphp
                                    <td>
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-sm btn-primary {{ $std->$draftField ? 'disabled' : '' }}"
                                                @if (!$std->$draftField) onclick="setupGenerateModal('{{ $std->id }}', '{{ $std->CNIC }}', '{{ $std->Name }}', 
                                                        '{{ $std->fatherName }}', '{{ $std->Roll_No }}', '{{ $std->Reg_No }}', 
                                                        '{{ $std->Session }}', '{{ $i }}')"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#generateChallanModal"
                                                @else
                                                    onclick="alert('Challan already exists')" @endif>
                                                Generate
                                            </button>

                                            <button type="button" class="btn btn-sm btn-info"
                                                @if ($std->$draftField) onclick="window.location.href='{{ $std->$draftField }}'"
                                                @else
                                                    onclick="alert('Generate Challan First')" @endif>
                                                View
                                            </button>

                                            <button type="button" class="btn btn-sm btn-danger"
                                                @if ($std->$draftField) onclick="setupDeleteModal('{{ $std->id }}', '{{ $i }}')"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteChallanModal"
                                                @else
                                                    onclick="alert('Generate Challan First')" @endif>
                                                Delete
                                            </button>

                                            <button type="button" class="btn btn-sm btn-success"
                                                @if ($std->$paidField) onclick="openPaidChallanModal('{{ $std->id }}', '{{ $paidField }}', '{{ $std->$statusField }}')"
                                            @else
                                                onclick="alert('{{ $std->Name }} has not yet uploaded the paid challan')" @endif>
                                                Verify


                                                @if ($std->$statusField)
                                                    <span
                                                        class="badge bg-{{ $std->$statusField === 'Approved' ? 'success' : 'danger' }}">
                                                        {{ $std->$statusField }}
                                                    </span>
                                                @endif
                                            </button>
                                        </div>
                                    </td>
                                @endfor
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>

@endsection

<!-- Generate Challan Modal -->
<div class="modal fade" id="generateChallanModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generate Challan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('challan.generate') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label text-warning">Fee Amount</label>
                        <input type="number" name="fee_amount" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-warning">Fee in Words</label>
                        <input type="text" name="fee_words" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-warning">Issue Date</label>
                        <input type="date" name="issue_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-warning">Deadline</label>
                        <input type="date" name="deadline" class="form-control" required>
                    </div>
                    <!-- Hidden Fields -->
                    <input type="hidden" name="student_id" id="modalStudentId">
                    <input type="hidden" name="cnic" id="modalCnic">
                    <input type="hidden" name="name" id="modalName">
                    <input type="hidden" name="father_name" id="modalFatherName">
                    <input type="hidden" name="roll_no" id="modalRollNo">
                    <input type="hidden" name="reg_no" id="modalRegNo">
                    <input type="hidden" name="session" id="modalSession">
                    <input type="hidden" name="semester" id="modalSemester">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Generate</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteChallanModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-info">
                Are you sure you want to delete this challan?
            </div>
            <form action="{{ route('challan.delete') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="student_id" id="deleteStudentId">
                <input type="hidden" name="semester" id="deleteSemester">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Paid Challan Verification Modal -->
<div class="modal fade" id="paidChallanModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Verify Paid Challan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <a id="challanLink" href="" target="_blank" class="btn btn-primary mb-3">View Paid
                        Challan</a>
                </div>
                <form id="challanVerificationForm" action="{{ route('challan.verify') }}" method="POST">
                    @csrf
                    <input type="hidden" name="student_id" id="verifyStudentId">
                    <input type="hidden" name="field_name" id="verifyFieldName">
                    <input type="hidden" name="status" id="verifyStatus">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-success" onclick="submitVerification('Approved')">
                            Approve Challan
                        </button>
                        <button type="button" class="btn btn-danger" onclick="submitVerification('Rejected')">
                            Reject Challan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function setupGenerateModal(id, cnic, name, fatherName, rollNo, regNo, session, semester) {
        document.getElementById('modalStudentId').value = id;
        document.getElementById('modalCnic').value = cnic;
        document.getElementById('modalName').value = name;
        document.getElementById('modalFatherName').value = fatherName;
        document.getElementById('modalRollNo').value = rollNo;
        document.getElementById('modalRegNo').value = regNo;
        document.getElementById('modalSession').value = session;
        document.getElementById('modalSemester').value = semester;
    }

    function setupDeleteModal(studentId, semester) {
        document.getElementById('deleteStudentId').value = studentId;
        document.getElementById('deleteSemester').value = semester;
    }

    function openPaidChallanModal(studentId, fieldName, challanUrl) {
        // Set the challan link
        document.getElementById('challanLink').href = challanUrl;

        // Set form values
        document.getElementById('verifyStudentId').value = studentId;
        document.getElementById('verifyFieldName').value = fieldName;

        // Open the modal
        var modal = new bootstrap.Modal(document.getElementById('paidChallanModal'));
        modal.show();
    }

    function submitVerification(status) {
        document.getElementById('verifyStatus').value = status;
        document.getElementById('challanVerificationForm').submit();
    }
</script>
