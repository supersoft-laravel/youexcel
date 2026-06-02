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
        h2, h3 {
            text-align: center;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #888;
            padding: 6px 8px;
            text-align: left;
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
    </style>
</head>
<body>
    
    <div class="logo">
        <img src="{{ asset('img/Yourexcel-img/excel-logo-new.png') }}" alt="" style="width: 170px;">
    </div>

    <h2>Open Enrollments in Training Calendar</h2>

    @php
        $minDate = $calendars->flatMap(fn($items) => $items->pluck('class_date'))->min();
        $maxDate = $calendars->flatMap(fn($items) => $items->pluck('class_date'))->max();
    @endphp

    <h3>{{ \Carbon\Carbon::parse($minDate)->format('F Y') }} to {{ \Carbon\Carbon::parse($maxDate)->format('F Y') }}</h3>

    <table>
        <thead>
            <tr>
                <th>Program</th>
                <th>Duration</th>
                <th>Demo Date</th>
                <th>Demo Time</th>
                <th>Session Start Date</th>
                <th>Session Time</th>
                <th>Investment in Installment (PKR)</th>
                <th>Investment in Lump Sum (PKR)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($calendars as $month => $items)
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->course_name }}</td>
                        <td>{{ $item->duration }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->d_date)->format('d-M-Y') }}</td>
                        <td>{!! nl2br(e($item->d_timing)) !!}</td>
                        <td>{{ \Carbon\Carbon::parse($item->class_date)->format('d-M-Y') }}</td>
                        <td>{!! nl2br(e($item->class_timing)) !!}</td>
                        <td>{{ $item->course ? $item->course->program_fee : '-'}}</td>
                        <td>{{ $item->course ? $item->course->lump_sum_fee : '-' }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
<script>
    // Automatically open print dialog when page loads
    // window.onload = function() {
    //     window.print();
    // }
</script>
</body>
</html>
