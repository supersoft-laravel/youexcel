@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Entries for "{{ $title }}"</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Entries</li>
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

            <form action="{{ route('update.entries', $title) }}" method="POST">
                @csrf
                @method('PUT')

                <div id="entry-fields"> <!-- This is the container for dynamic entries -->
                    @foreach ($entries as $index => $entry)
                        <div class="row entry mb-3">
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="course_ids" class="form-label">Training Program</label>
                                    <select class="form-control" name="course_ids[]" required>
                                        <option value="" disabled selected>Select a training program</option>
                                        @if(isset($courses) && count($courses) > 0 )
                                            @foreach($courses as $course)
                                                <option value="{{ $course->id }}" {{ $course->id == $entry->course_id ? 'selected' : '' }}>
                                                    {{ $course->coursename }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="d_date_{{ $index }}" class="form-label">Date</label>
                                    <input type="date" name="d_date[]" class="form-control" id="d_date_{{ $index }}" value="{{ $entry->d_date }}" required>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="d_timing_{{ $index }}" class="form-label">Timing</label>
                                    <input type="text" name="d_timing[]" class="form-control" id="d_timing_{{ $index }}" value="{{ $entry->d_timing }}" required>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="class_date_{{ $index }}" class="form-label">Class Date</label>
                                    <input type="date" name="class_date[]" class="form-control" id="class_date_{{ $index }}" value="{{ $entry->class_date }}" required>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="class_timing_{{ $index }}" class="form-label">Class Timing</label>
                                    <input type="text" name="class_timing[]" class="form-control" id="class_timing_{{ $index }}" value="{{ $entry->class_timing }}" required>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="duration_{{ $index }}" class="form-label">Duration</label>
                                    <input type="text" name="duration[]" class="form-control" id="duration_{{ $index }}" value="{{ $entry->duration }}" required>
                                </div>
                            </div>
             
                        </div>
                        <hr style="color: red;">
                    @endforeach
                </div>

               
                <div class="row mt-5">
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary">Update Entries</button>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" id="add-entry" class="btn btn-secondary">
                            Add New Entry
                        </button>
                    </div>
                </div>
            </form>

            <!-- Include jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        </div>
    </section>

</div>

<script>
$(document).ready(function () {

    $('#add-entry').click(function () {
        $('#entry-fields').append(`
            <div class="row entry mb-3">
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
                        <label class="form-label">Date</label>
                        <input type="date" name="d_date[]" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="mb-3">
                        <label class="form-label">Timing</label>
                        <input type="text" name="d_timing[]" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="mb-3">
                        <label class="form-label">Class Date</label>
                        <input type="date" name="class_date[]" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="mb-3">
                        <label class="form-label">Class Timing</label>
                        <input type="text" name="class_timing[]" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="mb-3">
                        <label class="form-label">Duration</label>
                        <input type="text" name="duration[]" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-2 mt-4">
                    <button type="button" class="btn btn-danger remove-entry">Remove</button>
                </div>
            </div>
        `);
    });

    $('#entry-fields').on('click', '.remove-entry', function () {
        $(this).closest('.entry').remove();
    });

});
</script>


@endsection
