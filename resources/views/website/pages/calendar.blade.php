<!--================ Start Header Menu Area =================-->
@extends('website.app')


@section('title', 'Data Science Course Karachi | Computerized Accounting')
@section('meta_description', 'Enroll in our Data Science Course Karachi and Computerized Accounting Course Karachi. Gain
    in-demand skills to excel in data analysis and financial management')
@section('meta_keywords', 'Data Science Course Karachi, computerized accounting course karachi')

@section('content')
<style>
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 180px 0 40px 0 !important;
        /*margin-top: 120px;*/
        position: relative !important;
        overflow: hidden !important;
    }

    .section-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgb(48 48 48 / 85%), rgba(0, 40, 104, 0.9)),
            url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .section-content {
        padding: 80px 0;
    }

    .section-title h2 {
        font-weight: 700;
        color: #fff;
        font-size: 2.5rem;
        margin-bottom: 20px;
        position: relative;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ff9800;
        border-radius: 2px;
    }

    .section-title p {
        font-size: 1.1rem;
        max-width: 700px;
        margin: 30px auto 0;
        color: #fff;
        opacity: 0.9;
    }
    :root {
        --gold: #ff9800;
        /*--gold: #c6a12e;*/
        --light-bg: #f3f4f6;
        --soft-border: #e6e6e6;
        --text: #222;
        --muted: #7a7a7a;
    }

    /* ===== Wrapper ===== */
    .calendar-section {
        display: flex;
        justify-content: center;
        padding: 40px 20px;
    }
    .calendar-section .calendar-wrapper {
        max-width: 1300px;
        width: 100%;
    }

    .calendar-section .calendar-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .calendar-section .calendar-header h1 {
        font-size: 42px;
        font-weight: 600;
        color: #222;
    }

    .calendar-section .calendar-header span {
        color: var(--gold);
    }

    /* ===== Main Card ===== */
    .calendar-section .calendar-container {
        background: #fff;
        border-radius: 20px;
        padding: 10px 40px;
        position: relative;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.06);
    }

    /* Gold corner accents */
    .calendar-section .calendar-container:before,
    .calendar-section .calendar-container:after {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        border: 4px solid var(--gold);
    }

    .calendar-section .calendar-container:before {
        top: -4px;
        left: -4px;
        border-right: none;
        border-bottom: none;
        border-radius: 20px 0 0 0;
    }

    .calendar-section .calendar-container:after {
        bottom: -4px;
        right: -4px;
        border-left: none;
        border-top: none;
        border-radius: 0 0 20px 0;
    }

    /* Grid Layout */
    .calendar-section .calendar-grid {
        display: grid;
        grid-template-columns: 250px 1fr;
        gap: 20px;
    }

    /* ===== Sidebar ===== */
    .calendar-section .calendar-sidebar {
        /*padding-right: 30px;*/
        /*border-right: 6px solid var(--gold);*/
    }

    .calendar-section .calendar-sidebar h3 {
        font-size: 16px;
        font-weight: 600;
        margin: 20px 0 10px;
        color: var(--text);
    }

    .calendar-section .divider {
        height: 1px;
        background: var(--soft-border);
        margin: 15px 0;
    }

    .calendar-section .month-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
    }

    .calendar-section .month {
        border: 1px solid var(--soft-border);
        border-radius: 8px;
        padding: 6px 10px;
        font-size: 13px;
        cursor: pointer;
    }
    
    /* FORCE show radio buttons */
    .calendar-section .month input[type="radio"] {
        display: inline-block !important;
        appearance: radio !important;
        -webkit-appearance: radio !important;
        -moz-appearance: radio !important;
        opacity: 1 !important;
        position: static !important;
        visibility: visible !important;
        width: 14px !important;
        height: 14px !important;
    }


    .calendar-section .month input {
        margin-right: 6px;
    }

    .calendar-section .search {
        width: 100%;
        padding: 10px;
        border: 1px solid var(--soft-border);
        border-radius: 8px;
        outline: none;
    }

    /* Status buttons */
    .calendar-section .status {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .calendar-section .btn {
        border: none;
        border-radius: 20px;
        padding: 8px 18px;
        font-weight: 600;
        cursor: pointer;
    }

    .calendar-section .btn.grey {
        background: #888;
        color: #fff;
    }

    .calendar-section .btn.gold {
        background: var(--gold);
        color: #fff;
    }

    /* ===== Table ===== */
    .calendar-section .calendar-table-wrapper {
        overflow-x: auto;
        overflow-y: auto;
    }

    .calendar-section table {
        width: 100%;
        border-collapse: collapse;
        min-width: 850px;
    }

    .calendar-section thead {
        background: #ff9800;
    }

    .calendar-section th {
        text-align: center;
        padding: 10px;
        font-size: 12px;
        color: #000;
        font-weight: 600;
        white-space: nowrap;
    }

    .calendar-section td {
        padding: 5px 8px;
        border-top: 1px solid #eee;
        font-size: 12px;
        color: #333;
        white-space: nowrap;
    }

    .calendar-section .trainer {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .calendar-section .trainer img {
        width: 38px;
        height: 38px;
        border-radius: 50%;
    }

    .calendar-section .status-dot {
        width: 9px;
        height: 9px;
        background: #2eb85c;
        border-radius: 50%;
        display: inline-block;
        margin-right: 10px;
    }

    .calendar-section .price {
        font-weight: 600;
    }

    /* Custom Scrollbar */
    /*.calendar-section .calendar-table-wrapper::-webkit-scrollbar {*/
    /*    height: 8px;*/
    /*    width: 8px;*/
    /*}*/

    /*.calendar-section .calendar-table-wrapper::-webkit-scrollbar-thumb {*/
    /*    background: var(--gold);*/
    /*    border-radius: 10px;*/
    /*}*/

    /*.calendar-section .calendar-table-wrapper::-webkit-scrollbar-track {*/
    /*    background: #f1f1f1;*/
    /*}*/
    /*.calendar-section .calendar-sidebar::-webkit-scrollbar {*/
    /*    height: 8px;*/
    /*    width: 8px;*/
    /*}*/

    /*.calendar-section .calendar-sidebar::-webkit-scrollbar-thumb {*/
    /*    background: var(--gold);*/
    /*    border-radius: 10px;*/
    /*}*/

    /*.calendar-section .calendar-sidebar::-webkit-scrollbar-track {*/
    /*    background: #f1f1f1;*/
    /*}*/

    .calendar-section .custom-badge {
        font-size: 10px;
        padding: 4px;
        border-radius: 50px;
    }
    
    @media (min-width: 992px) {

        .calendar-section .calendar-container {
            height: 120vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }
    
        .calendar-section .calendar-grid {
            display: flex;
            flex-direction: column;
            flex: 1;
            min-height: 0;
        }
    
        .calendar-section .calendar-sidebar {
            /*overflow-y: auto;*/
            min-height: auto;
            padding-right: 30px;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        
        .calendar-section .month-grid {
            grid-template-columns: repeat(5, 1fr);
        }
    
        .calendar-section .calendar-sidebar-item {
            flex-grow: 2;
        }
        .calendar-section .calendar-table-wrapper {
            overflow-y: auto;
            min-height: 0;
        }
    
    }

    /* ===== Responsive ===== */
    @media(max-width:900px) {
        .calendar-section .calendar-grid {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .calendar-section .calendar-sidebar {
            border-right: none;
            border-bottom: 6px solid var(--gold);
            padding-bottom: 20px;
        }
    }
</style>

    <section class="space-top space-extra-bottom section-header">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title text-center position-relative">
                        <h2>Open Enrollment <br>Schedule 2026</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="space-top calendar-section">
        <div class="calendar-wrapper">
            <!--<div class="calendar-header">-->
            <!--    <h1>-->
            <!--        Open Enrollment Schedule 2026-->
            <!--    </h1>-->
            <!--</div>-->
    
            <div class="calendar-container">
                
                <div style="display: flex; flex-direction: column; justify-content: space-between; margin-top: 30px;">
                    <h3 style="font-size: 20px;">Filter & Search Trainings</h3>
                    <a href="{{ route('calendar.download') }}" class="btn btn-warning btn-sm mb-2" style="width: fit-content; align-self: flex-end;">Click here to download</a>
                </div>
                
    
                <div class="calendar-grid">
    
                    <!-- Sidebar -->
                    <div class="calendar-sidebar">
                        
                        <div class="calendar-sidebar-item">
                            <h3>Program Title</h3>
                            <input type="text" id="programSearch" class="search" placeholder="Type program name">
                            
                            <h3>Duration</h3>
                            <select id="durationFilter">
                                <option value="all">All Durations</option>
                            </select>
                        </div>
    
                        
                        <!--<div class="divider"></div>-->
                        
                        <div class="calendar-sidebar-item">
                            <h3>Months</h3>
                            <div class="month-grid">
                                <label class="month"><input type="radio" name="m" value="all" checked> All</label>
                                <label class="month"><input type="radio" name="m" value="jan"> Jan</label>
                                <label class="month"><input type="radio" name="m" value="feb"> Feb</label>
                                <label class="month"><input type="radio" name="m" value="mar"> Mar</label>
                                <label class="month"><input type="radio" name="m" value="apr"> Apr</label>
                                <label class="month"><input type="radio" name="m" value="may"> May</label>
                                <label class="month"><input type="radio" name="m" value="jun"> Jun</label>
                                <label class="month"><input type="radio" name="m" value="jul"> Jul</label>
                                <label class="month"><input type="radio" name="m" value="aug"> Aug</label>
                                <label class="month"><input type="radio" name="m" value="sep"> Sep</label>
                                <label class="month"><input type="radio" name="m" value="oct"> Oct</label>
                                <label class="month"><input type="radio" name="m" value="nov"> Nov</label>
                                <label class="month"><input type="radio" name="m" value="dec"> Dec</label>
                            </div>
                        </div>
    
    
                    </div>
    
                    <!-- Table -->
                    <div class="calendar-table-wrapper">
    
                        <table>
                            <thead>
                                <tr>
                                    <th style="text-align: left;">Program</th>
                                    <th>Duration</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                    <th>Investment (PKR) </th>
                                    <th>Program View  </th>
                                    <th>Book Demo </th>
                                </tr>
                            </thead>
    
                            <tbody>
                                @foreach ($calendars as $month => $items)
                                    @foreach ($items as $index => $item)
                                        <tr>
                                            <td>{{ \Illuminate\Support\Str::limit($item->course_name, 100, '...') }}</td>

                                            <td>
                                                {{ $item->duration }} / {{ $item->course ? $item->course->duration : '-' }} Hours
                                            </td>
                                            <td>
                                                <span class="status-dot"></span>
                                                {{ \Carbon\Carbon::parse($item->class_date)->format('d-M-Y') }}
                                            </td>
                                            <td>
                                                @php
                                                    $isPast = \Carbon\Carbon::parse($item->class_date)->isPast();
                                                @endphp
                                            
                                                @if($isPast)
                                                    <span class="custom-badge badge-danger">Closed</span>
                                                @else
                                                    <span class="custom-badge badge-success">Open</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">{{ $item->course ? $item->course->lump_sum_fee : '-' }}</td>
                                            <td><a class="btn btn-link" href="{{ $item->d_btn }}" target="_blank"><small>View Details</small></a></td>
                                            <td><a class="btn btn-link" href="{{ route('demo.confirmation', $item->id) }}" target="_blank"><small>Book Demo</small></a></td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
    
                    </div>
    
                </div>
            </div>
    
        </div>
    </section>

        <div class="container pb-5">
    <div class="row mx-2 g-4 align-items-stretch">

        <!-- Box 1 -->
        <div class="col-md-12 col-xl-6 d-flex">
            <section class="w-100 pb-3 d-flex">
                <div class="cta-style2 w-100 d-flex flex-column justify-content-between text-center p-4"
                     style="border: 3px solid #fbce4d;">

                    <div>
                        <h2 class="text-white">Get Ready for an Exclusive Demo!</h2>
                        <p class="text-white">
                            Fill out the form below and take the first step towards an exciting journey.
                            Register now and experience the best we have to offer!
                        </p>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('demo.confirmation') }}" class="vs-btn style2">
                            <i class="far fa-angle-right"></i> Sign Up for Demo
                        </a>
                    </div>

                </div>
            </section>
        </div>

        <!-- Box 2 -->
        <div class="col-md-12 col-xl-6 d-flex">
            <section class="w-100 pb-3 d-flex">
                <div class="cta-style2 w-100 d-flex flex-column justify-content-between text-center p-4"
                     style="border: 3px solid #fbce4d;">

                    <div>
                        <h2 class="text-white">Want to enquire for a Corporate Training Solution?</h2>
                        <p class="text-white">
                            Please fill the simple enquiry form and our representative will get back to you within 24 hours.
                        </p>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('enquiry.corporate') }}" class="vs-btn style2">
                            <i class="far fa-angle-right"></i> Request a Corporate Training Proposal
                        </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const rows = document.querySelectorAll("tbody tr");
    const durationSelect = document.getElementById("durationFilter");
    const searchInput = document.getElementById("programSearch");
    const monthRadios = document.querySelectorAll("input[name='m']");

    let durations = new Set();

    // ===============================
    // 1. Populate Duration Dropdown
    // ===============================
    rows.forEach(row => {
        let durationText = row.cells[1].innerText.split('/')[0].trim();
        durations.add(durationText);
    });

    durations.forEach(duration => {
        let option = document.createElement("option");
        option.value = duration;
        option.textContent = duration;
        durationSelect.appendChild(option);
    });

    // ===============================
    // 2. Filtering Function
    // ===============================
    function filterTable() {

        let selectedMonth = document.querySelector("input[name='m']:checked").value;
        let selectedDuration = durationSelect.value;
        let searchValue = searchInput.value.toLowerCase();

        rows.forEach(row => {

            let programName = row.cells[0].innerText.toLowerCase();
            let durationText = row.cells[1].innerText.split('/')[0].trim();
            let dateText = row.cells[2].innerText.toLowerCase();

            // Month logic
            let monthMatch = true;
            if (selectedMonth !== "all") {
                monthMatch = dateText.includes(selectedMonth);
            }

            // Duration logic
            let durationMatch = (selectedDuration === "all" || durationText === selectedDuration);

            // Search logic
            let searchMatch = programName.includes(searchValue);

            if (monthMatch && durationMatch && searchMatch) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }

        });
    }

    // ===============================
    // 3. Event Listeners
    // ===============================
    durationSelect.addEventListener("change", filterTable);
    searchInput.addEventListener("keyup", filterTable);

    monthRadios.forEach(radio => {
        radio.addEventListener("change", filterTable);
    });

});
</script>


    @endsection
