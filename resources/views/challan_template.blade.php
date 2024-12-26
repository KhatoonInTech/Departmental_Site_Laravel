<!DOCTYPE html>
<html>

<head>
    <style>
        @page {
            size: A4 landscape;
            margin: 10mm;
        }

        body {
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .main-table {
            width: 100%;
            table-layout: fixed;
        }

        .main-table td {
            width: 70%;
            padding: 5px;
            vertical-align: top;
        }

        .challan-box {
            border: 1px solid #000;
            padding: 8px;
        }

        .logo {
            width: 40px;
            height: 40px;
        }

        .university-name {
            font-size: 10px;
            font-weight: bold;
        }

        .bank-info,
        .student-info {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 5px;
            font-size: 9px;
        }

        .bank-info th,
        .bank-info td,
        .student-info th,
        .student-info td {
            border: 1px solid #000;
            padding: 2px;
        }

        .fee-title {
            text-align: center;
            font-weight: bold;
            font-size: 10px;
            margin: 5px 0;
        }

        .copy-type {
            text-align: center;
            font-weight: bold;
            font-size: 10px;
            margin: 5px 0;
        }

        .qr-code img {
            width: 40px;
            height: 40px;
        }

        .signatures {
            margin-top: 5px;
            font-size: 9px;
        }

        .signatures table {
            width: 100%;
        }

        .signatures td {
            width: 50%;
            text-align: center;
        }

        p {
            font-size: 9px;
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <table class="main-table">
        <tr>
            @php
                $challan_No = time() . rand(100, 999);
            @endphp
            @foreach (['Bank', 'BZU', 'Department', 'Student'] as $copyType)
                <td>
                    <div class="challan-box">
                        <table class="bank-info">
                            <tr>
                                <th><img src="{{ public_path('images/logo.png') }}" alt="BZU Logo" class="logo"></th>
                                <td>
                                    <div class="university-name">Bahauddin Zakariya University Multan</div>
                                </td>
                            </tr>
                            <tr>
                                <th>Challan No.</th>
                                <td>{{ $challan_No ?? '1734287841311' }}</td>
                            </tr>
                            <tr>
                                <th>HBL</th>
                                <td>0042-79920666-03</td>
                            </tr>
                            <tr>
                                <th>Bank Alflah</th>
                                <td>MFBZU</td>
                            </tr>
                            <tr>
                                <th>NBP</th>
                                <td>4168894299</td>
                            </tr>
                            <tr>
                                <th>UBL</th>
                                <td>273089498</td>
                            </tr>
                        </table>

                        <div class="fee-title">BZU REGULAR FEE (MORNING)</div>
                        <div class="copy-type">{{ $copyType }} Copy</div>

                        <table class="student-info">
                            <tr>
                                <th>Issue Date</th>
                                <td>{{ $issue_date ?? '20-7-2024' }}</td>
                            </tr>
                            <tr>
                                <th>CNIC:</th>
                                <td>{{ $cnic ?? '36302-0000000-0' }}</td>
                            </tr>
                            <tr>
                                <th>Student Name</th>
                                <td>{{ $name ?? 'Student Name' }}</td>
                            </tr>
                            <tr>
                                <th>F. Name</th>
                                <td>{{ $father_name ?? 'Father Name' }}</td>
                            </tr>
                            <tr>
                                <th>Student ID</th>
                                <td>{{ $id ?? '42355' }}</td> <!-- Ensure this variable is defined -->
                            </tr>
                        </table>
                        <table class="student-info">

                            <!-- Roll No and Section -->
                            <tr>
                                <th>Roll No.</th>
                                <td>{{ $roll_no ?? 'CPE-23-01' }}</td> <!-- Corrected closing tag -->
                                <th>Section</th> <!-- Corrected closing tag -->
                                <td>A</td><!-- Corrected closing tag -->
                            </tr>

                        </table>

                        <!-- Fee Title -->
                        <div class="fee-title">B.Sc Computer Engineering (Morning)</div>

                        <!-- Student Info -->
                        <table class="student-info">
                            <!-- Reg No and D.Code -->
                            <tr>
                                <th>Reg. No.</th>
                                <td>{{ $reg_no ?? '1' }}</td><!-- Corrected closing tag -->
                                <th>D.Code</th><!-- Corrected closing tag -->
                                <td>11-047-001-001</td><!-- Corrected closing tag -->
                            </tr>

                            <!-- Semester and Session -->
                            <tr>
                                <th>Semester</th><!-- Corrected closing tag -->
                                <td>{{ $semester ?? '3' }}</td><!-- Corrected closing tag -->
                                <th>Session</th><!-- Corrected closing tag -->
                                <td>{{ $session ?? '2023-27' }}</td><!-- Corrected closing tag -->
                            </tr>

                        </table>

                        <!-- Fee Details -->
                        <table class="student-info">
                            <!-- Fee Details Header -->
                            <tr><th>Detail of Fee</th><th>Rs.</th></tr>

                            <!-- Total Fee & Dues -->
                            <tr><th>Total Fee & Dues</th><td>{{ $fee_amount ?? '50795' }}</td></tr>

                            <!-- Late Fee -->
                            <tr><th>Late Fee (if any)</th><td>0</td></tr>

                        </table>

                        <!-- Amount in Words -->
                        <p><strong>Amount in Words:</strong> {{ $fee_words ?? 'FIFTY THOUSANDS AND SEVEN HUNDRED AND NINTY FIVE' }}</p>

                        <!-- QR Code Section -->
                        <div class="qr-code">
                            <img src="{{ public_path('images/qr.png') }}" alt="QR Code">
                        </div>

                        <!-- Validity of Challan -->
                        <p>This Challan is Valid upto {{ $deadline ?? '20-08-2024' }}</p>

                        <!-- Signatures Section -->
                        <table class="signatures">
                            <!-- Signature Rows -->
                            <tr><td><b>Sign.Officer</b></td><td><b>Sign.Cashier</b></td></tr>

                        </table>

                    </div><!-- End of challan-box -->

                </td><!-- End of copy type cell -->

                @endforeach
                </tr><!-- End of main row -->

    </table><!-- End of main table -->

</body>

</html>

