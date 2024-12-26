@extends('layouts.FacultySidebar')

@section('content')
    <div class="container mt-5">
        <div class="container" style="margin-top:50px">
            <h1 class=" text-center text-title1  "><strong>Assessment & Evaluation Center</strong></h1>
            <h4 class=" text-center text-title2  "><strong>DEPARTMENT OF COMPUTER ENGINEERING

                    <br>Bahauddin Zakariya University, Multan </strong></h4>

            <hr>
           
            <form action="{{ route('faculty.result.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="courseName" class="form-label">Course Title</label>
                    <input type="text" class="form-control" id="courseName" name="courseName"
                        placeholder="Circuit Analysis" required>
                </div>

                <div class="mb-3">
                    <label for="courseCode" class="form-label">Course Code</label>
                    <input type="text" class="form-control" id="courseCode" name="courseCode" placeholder="CPE-121T"
                        required>
                </div>

                <div class="mb-3">
                    <label for="Semester" class="form-label">Semester</label>
                    <input type="number" class="form-control" id="Semester" name="Semester" placeholder="3"
                        pattern="\d{1}" required>
                </div>

                <div class="mb-3">
                    <label for="Session" class="form-label">Session</label>
                    <input type="ID" class="form-control" id="Session" name="Session" placeholder="2023-27"
                        pattern="\d{4}-\d{2}" required>
                </div>

                <div class="mb-3">
                    <label for="assessmentType" class="form-label">Assessment Type</label>
                    <select class="form-select" id="assessmentType" name="assessmentType" required>
                        <option value="">Select Assessment Type</option>
                        <option value="Mid">Mid Exam</option>
                        <option value="Final">Final Exams</option>
                        <option value="Quiz">Sessional Marks (Quiz)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="totalMarks" class="form-label">Total Marks</label>
                    <input type="number" class="form-control" id="totalMarks" name="totalMarks" placeholder="50" required>
                </div>

                <div class="mb-3">
                    <label for="remarks" class="form-label">Remarks</label>
                    <textarea class="form-control" id="remarks" name="remarks" rows="3"
                        placeholder="Students performed exceptionally well" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="resultFile" class="form-label">Upload Result File</label>
                    <input type="file" class="form-control" id="resultFile" name="resultFile"
                        placeholder="Keep the file below 5MBs" required>
                </div>
                <input type="hidden" name="faculty_id" value="{{ $faculty->Faculty_ID }}">
                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="declaration" name="declaration" required>
                        <label class="form-check-label" for="declaration">
                            I hereby declare that I have maintained complete transparency in evaluating and uploading these
                            results,
                            and the marks have been awarded fairly to all students.
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Results</button>
            </form>
        </div>
    @endsection

    @section('scripts')
        <script>
            document.getElementById('resultFile').addEventListener('change', function() {
                if (this.files[0].size > 5242880) {
                    alert('File size should not exceed 5MB');
                    this.value = '';
                }
            });
        </script>
    @endsection
