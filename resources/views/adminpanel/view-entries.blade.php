@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Entries for Title: {{ $title }}</h1>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .table{
            overflow-x: auto;
        }
    </style>

    <section class="content">
        <div class="container-fluid">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Demo Date</th>
                        <th scope="col">Demo Timing</th>
                        <th scope="col">Class Date</th>
                        <th scope="col">Class Timing</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Monthly Fees</th>
                        <th scope="col">Fees</th>
                        <th scope="col">Training Program Details</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($entries as $index => $entry)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $entry->course_name }}</td>
                        <td>{{ $entry->d_date }}</td>
                        <td>{{ $entry->d_timing }}</td>
                        <td>{{ $entry->class_date }}</td>
                        <td>{{ $entry->class_timing }}</td>
                        <td>{{ $entry->duration }}</td>
                        <td>{{ $entry->monthly_fee ?? '-' }}</td>
                        <td>{{ $entry->fees ?? '-' }}</td>
                        <td>{{ $entry->d_btn }}</td>
                        <td>
                            @if($entry->is_active == '1')
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>
                            @if($entry->is_active == '1')
                                <a href="{{ route('calendar.toggle', $entry->id) }}" class="btn btn-danger btn-sm">Deactivate</a>
                            @else
                                <a href="{{ route('calendar.toggle', $entry->id) }}" class="btn btn-success btn-sm">Activate</a>
                            @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>

@endsection
