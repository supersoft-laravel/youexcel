@extends('adminpanel.app')

@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Calendar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Calendar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif
            @canany(['create calendar'])
            <form method="POST" action="{{ route('store.calendar') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                    </div>
                </div>

                <div id="entry-fields"> <!-- This is the new container for dynamic entries -->
                    <div class="row entry">

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="course_ids" class="form-label">Training Program</label>
                                <select class="form-control" name="course_ids[]" required>
                                    <option value="" disabled selected>Select a training program</option>
                                    @if(isset($courses) && count($courses) > 0 )
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">
                                                {{ $course->coursename }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="d_date" class="form-label">Demo Date</label>
                                <input type="date" class="form-control" name="d_date[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="d_timing" class="form-label">Demo Timing</label>
                                <input type="text" class="form-control" name="d_timing[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="class_date" class="form-label">Class Date</label>
                                <input type="date" class="form-control" name="class_date[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="class_timing" class="form-label">Class Timing</label>
                                <input type="text" class="form-control" name="class_timing[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control" name="duration[]" required>
                            </div>
                        </div>
                        

                        <div class="col-lg-2">
                            <button type="button" class="btn btn-danger remove-entry">Remove</button>
                        </div>
                    </div>
                </div>

                <button type="button" id="add-entry" class="btn btn-secondary">Add New Entry</button>

                <div class="row mt-5">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                </div>

            </form>
            @endcan
            <!-- form End  -->
            
            <hr class="my-5">

            <!--<h4>Upload Calendar File</h4>-->
            
            <!--<form method="POST" action="{{ route('upload.calendar.file') }}" enctype="multipart/form-data">-->
            <!--    @csrf-->
            
            <!--    <div class="row align-items-center">-->
            <!--        <div class="col-md-6">-->
            <!--            <div class="mb-3">-->
            <!--                <label for="calendar_file" class="form-label">Choose Calendar File (PDF, DOCX, etc.)</label>-->
            <!--                <input type="file" class="form-control" name="calendar_file" id="calendar_file" accept=".pdf,.doc,.docx,.xls,.xlsx">-->
            <!--            </div>-->
            <!--        </div>-->
            
            <!--        <div class="col-md-3">-->
            <!--            @if(isset($calendarFile))-->
            <!--                <a href="{{ asset($calendarFile) }}" class="btn btn-info mt-4" target="_blank">-->
            <!--                    View Current File-->
            <!--                </a>-->
            <!--            @endif-->
            <!--        </div>-->
            
            <!--        <div class="col-md-3">-->
            <!--            <button type="submit" class="btn btn-primary mt-4">Upload / Replace</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</form>-->



            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">View Table</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Title</th>
                                    @canany(['delete calendar', 'update calendar'])
                                        <th scope="col">{{ __('Action') }}</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($entries as $index => $entry)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $entry->title }}</td>
                                     @canany(['delete calendar', 'update calendar'])
                                    <td>
                                        <!-- View Button -->
                                        <a href="{{ route('view.entries', $entry->title) }}" class="btn btn-primary">
                                            View
                                        </a>
                                        
                                      
                                      @canany(['update calendar'])
                                     <a href="{{ route('edit.entries', $entry->title) }}" class="btn btn-success">
                                            Edit
                                        </a>
                                        @endcan
                                      @canany(['delete calendar'])
                                        <form action="{{ route('delete.entries', $entry->title) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all entries with this title?')">Delete</button>
                                        </form>
                                        @endcan
                                    </td>
                                    @endcan
                                </tr>
                                @endforeach
                            </tbody>
                            
                            
                        </table>
                    </div>
                </div>
            </div>
            



            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Include jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#add-entry').click(function() {
                        $('#entry-fields').append(`
                            <div class="row entry">

                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="course_ids" class="form-label">Training Program</label>
                                        <select class="form-control" name="course_ids[]" required>
                                            <option value="" disabled selected>Select a training program</option>
                                            @if(isset($courses) && count($courses) > 0 )
                                                @foreach($courses as $course)
                                                    <option value="{{ $course->id }}">
                                                        {{ $course->coursename }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="d_date" class="form-label">Demo Date</label>
                                        <input type="date" class="form-control" name="d_date[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="d_timing" class="form-label">Demo Timing</label>
                                        <input type="text" class="form-control" name="d_timing[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="class_date" class="form-label">Class Date</label>
                                        <input type="date" class="form-control" name="class_date[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="class_timing" class="form-label">Class Timing</label>
                                        <input type="text" class="form-control" name="class_timing[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="duration" class="form-label">Duration</label>
                                        <input type="text" class="form-control" name="duration[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <button type="button" class="btn btn-danger remove-entry">Remove</button>
                                </div>
                            </div>
                        `);
                    });
            
                    // Event delegation to handle dynamically added elements
                    $('#entry-fields').on('click', '.remove-entry', function() {
                        $(this).closest('.entry').remove();
                    });
                });
            </script>
            
        </div>
    </section>

</div>

@endsection
