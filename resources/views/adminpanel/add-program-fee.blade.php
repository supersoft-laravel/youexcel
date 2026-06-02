@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">

    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Program Fee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Program Fee</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- ================= ADD FORM ================= -->
            <form method="POST" action="{{ route('store.program-fee') }}">
                @csrf

                <div id="entry-fields">
                    <div class="row entry">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label>Course</label>
                                <select class="form-control" name="course_id[]" required>
                                    <option value="" disabled selected>Select course</option>
                                    @foreach($entries as $course)
                                        <option value="{{ $course->id }}">{{ $course->coursename }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label>Monthly Installment</label>
                                <input type="text" class="form-control" name="program_fee[]" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label>Lump Sum</label>
                                <input type="text" class="form-control" name="lump_sum_fee[]" required>
                            </div>
                        </div>

                        <div class="col-lg-2 mt-4">
                            <button type="button" class="btn btn-danger remove-entry">Remove</button>
                        </div>
                    </div>
                </div>

                <button type="button" id="add-entry" class="btn btn-secondary mb-3">Add New Entry</button>

                <br>
                <button type="submit" class="btn btn-primary">
                    Submit <i class="fas fa-arrow-right"></i>
                </button>
            </form>

            <!-- ================= TABLE ================= -->
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="card-title">Program Fee List</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course</th>
                                <th>Monthly Installment</th>
                                <th>Lump Sum</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($entries as $index => $entry)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $entry->coursename }}</td>
                                <td>{{ $entry->program_fee }}</td>
                                <td>{{ $entry->lump_sum_fee }}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary editBtn"
                                        data-id="{{ $entry->id }}"
                                        data-program="{{ $entry->program_fee }}"
                                        data-lump="{{ $entry->lump_sum_fee }}">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- ================= EDIT MODAL ================= -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Program Fee</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <input type="hidden" id="edit_id">

                <div class="mb-3">
                    <label>Monthly Installment</label>
                    <input type="text" id="edit_program_fee" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Lump Sum</label>
                    <input type="text" id="edit_lump_sum_fee" class="form-control">
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-success" id="updateFee">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- ================= HIDDEN TEMPLATE ================= -->
<div id="entry-template" class="d-none">
    <div class="row entry">
        <div class="col-lg-4">
            <div class="mb-3">
                <label>Course</label>
                <select class="form-control" name="course_id[]" required>
                    <option value="" disabled selected>Select course</option>
                    @foreach($entries as $course)
                        <option value="{{ $course->id }}">{{ $course->coursename }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="mb-3">
                <label>Monthly Installment</label>
                <input type="text" class="form-control" name="program_fee[]" required>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="mb-3">
                <label>Lump Sum</label>
                <input type="text" class="form-control" name="lump_sum_fee[]" required>
            </div>
        </div>

        <div class="col-lg-2 mt-4">
            <button type="button" class="btn btn-danger remove-entry">Remove</button>
        </div>
    </div>
</div>

<!-- ================= SCRIPTS ================= -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {

    // Add new row
    $('#add-entry').click(function () {
        $('#entry-fields').append($('#entry-template').html());
    });

    // Remove row
    $(document).on('click', '.remove-entry', function () {
        $(this).closest('.entry').remove();
    });

    // Open edit modal
    $('.editBtn').click(function () {
        $('#edit_id').val($(this).data('id'));
        $('#edit_program_fee').val($(this).data('program'));
        $('#edit_lump_sum_fee').val($(this).data('lump'));
        $('#editModal').modal('show');
    });

    // Update fee
    $('#updateFee').click(function () {
        $.ajax({
            url: "{{ route('update.program-fee') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                course_id: $('#edit_id').val(),
                program_fee: $('#edit_program_fee').val(),
                lump_sum_fee: $('#edit_lump_sum_fee').val(),
            },
            success: function () {
                location.reload();
            }
        });
    });

});
</script>

@endsection
