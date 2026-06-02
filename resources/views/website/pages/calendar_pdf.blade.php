<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Training Calendar</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 20px;
        }
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #000;
            background: #fff;
            margin: 30px;
        }
        h2, h3, h4 {
            text-align: center;
            margin-bottom: 10px;
        }
        h2{
            font-size: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #888;
            padding: 6px 8px;
            text-align: center;
        }
        th {
            background: #f58333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .logo{
            text-align: center;
        }
        .btn .btn-link {
            cursor: pointer;
            color: #0d6efd;
            line-height: 1.5;
            text-align: center;
            user-select: none;
            text-decoration: underline;
        }
        .footer {
            /*position: fixed;*/
            /*bottom: 10px;*/
            left: 20px;
            right: 20px;
            margin-top: 40px;
            border-top: 1px solid #ccc;
            padding-top: 8px;
            font-size: 11px;
            text-align: center;
            color: #444;
        }
        .footer strong {
            color: #000;
        }
    </style>
</head>
<body>
    
    <div class="logo">
        <img src="{{ asset('img/Yourexcel-img/excel-logo-new.png') }}" alt="" style="width: 170px;">
    </div>

    <h2>Open Enrollments </h2>
    <h4>Schedule 2026</h4>

    <table>
        <thead>
            <tr>
                <th style="text-align: left;">Program</th>
                <th>Duration</th>
                <th>Start Date</th>
                <th>Investment (PKR) </th>
                <th>Program View  </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($calendars as $month => $items)
                @foreach ($items as $item)
                    <tr>
                        <td style="text-align: left;">{{ $item->course_name }}</td>
                        <td>
                            {{ $item->duration }} / {{ $item->course ? $item->course->duration : '-' }} Hours
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($item->class_date)->format('d-M-Y') }}
                        </td>
                        <td>{{ $item->course ? $item->course->lump_sum_fee : '-' }}</td>
                        <td><a class="btn btn-link" href="{{ $item->d_btn }}" target="_blank"><small>View Details</small></a></td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
    <div class="footer">
        <div>
            <strong>Email:</strong> admissions@youexceltraining.com &nbsp; | &nbsp;
            <strong>Phone:</strong> 021-37121738 , 0335-6699331 &nbsp; | &nbsp;
            <strong>Web:</strong> www.youexceltraining.com
        </div>
    </div>
<script>
    // Automatically open print dialog when page loads
    // window.onload = function() {
    //     window.print();
    // }
</script>
</body>
</html>
