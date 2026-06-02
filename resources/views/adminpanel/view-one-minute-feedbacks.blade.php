@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0">View Registered</h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View One Minute Feedbacks</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    {{-- error message fire --}}
    @if(session('success'))
    <div class="alert alert-success justify-content-center" style="width: 50%">
        {{ session('success') }}
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="overflow-x: scroll;">
                    <h1 class="text-center">View One Minute Feedbacks</h1>
                    <form action="{{ route('oneMinute.multiDelete') }}" method="POST">
                        @csrf
                        <table class="table table-striped table-hover" id="scholarshipRequestForm">
                            <thead>
                                <tr>
                                    <th scope="col">Select</th>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Training Name</th>
                                    <th scope="col">Batch No</th>
                                    <th scope="col">Date of Session</th>
                                    <th scope="col">Session on Time</th>
                                    <th scope="col">Topics Relevant Sequence</th>
                                    <th scope="col">Clarity Of Content</th>
                                    <th scope="col">Facilities Provided</th>
                                    <th scope="col">Training Successful</th>
                                    <th scope="col">DateTime</th>
                                    <th scope="col">Remarks</th>
                                    <th scope="col">Status</th>
                                    @canany(['delete one minute feedback form'])
                                        <th scope="col">Action</th>
                                    @endcan
    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $leadform)
                                <tr>
                                    <td><input type="checkbox" name="items[]" value="{{ $leadform['id'] }}"></td>
                                    <td>{{$leadform['id']}}</td>
                                    <td>{{$leadform['name']}}</td>
                                    <td>{{$leadform['email']}}</td>
                                    <td>{{$leadform['course']}}</td>
                                    <td>{{$leadform['batch_no']}}</td>
                                    <td>{{$leadform['session_date'] ?? 'N/A'}}</td>
                                    <td>{{$leadform['session_time'] ?? 'N/A'}}</td>
                                    <td>{{$leadform['topics_relevance'] ?? 'N/A'}}</td>
                                    <td>{{$leadform['content_clarity'] ?? 'N/A'}}</td>
                                    <td>{{$leadform['facilities_provided'] ?? 'N/A'}}</td>
                                    <td>{{$leadform['training_success'] ?? 'N/A'}}</td>
                                    <td>{{$leadform['created_at'] ?? 'N/A'}}</td>
                                    <td>{{$leadform['remarks'] ?? 'N/A'}}</td>
                                    <td>
                                        <select class="form-select form-select-sm status-dropdown
                                                       @if($leadform['status'] == 'resolved') bg-success text-white
                                                       @elseif($leadform['status'] == 'pending') bg-warning text-dark
                                                       @elseif($leadform['status'] == 'no_action') bg-secondary text-white
                                                       @endif"
                                                data-id="{{ $leadform['id'] }}">
                                            <option value="pending" class="bg-warning text-dark" {{ $leadform['status'] == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="resolved" class="bg-success text-white" {{ $leadform['status'] == 'resolved' ? 'selected' : '' }}>Resolved</option>
                                            <option value="no_action" class="bg-secondary text-white" {{ $leadform['status'] == 'no_action' ? 'selected' : '' }}>No Action Required</option>
                                        </select>
                                    </td>

                                    @canany(['delete one minute feedback form'])
                                    <td>
                                        <a class="btn btn-danger delete-confirm" href="delete-1-Minute-Feedback/{{$leadform['id']}}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                    @endcan
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @canany(['delete one minute feedback form'])
                        <button type="submit" class="btn btn-danger">Delete Selected</button>
                        @endcan
                    </form>
                </div>
            </div>
        </div>
        <!--------------- table end  --------------->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->


<!-- jQuery -->
<script src="{{asset('admin-panel/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // $('#scholarshipRequestForm').DataTable({
        //     "pageLength": 10, // Show 10 records per page
        //     "lengthMenu": [
        //         [10, 25, 50, 100, -1],
        //         [10, 25, 50, 100, "All"]
        //     ], // dropdown to select how many entries to show
        //     "responsive": true,
        //     dom: 'Bfrtip',
        //     buttons: [
        //         'copy',
        //         {
        //             extend: 'csvHtml5',
        //             title: 'One Minute Feedbacks Form Data'
        //         },
        //         {
        //             extend: 'excelHtml5',
        //             title: 'One Minute Feedbacks Form Data'
        //         },
        //         {
        //             extend: 'pdfHtml5',
        //             orientation: 'landscape',
        //             pageSize: 'TABLOID', // TABLOID OR LEGAL
        //             footer: true,
        //             title: 'One Minute Feedbacks Form Data'
        //         },
        //         'print'
        //     ]
        // });
        $('#scholarshipRequestForm').DataTable({
        "pageLength": 10, // Show 10 records per page
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ], // dropdown to select how many entries to show
        "responsive": true,
        dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'csvHtml5',
                title: 'One Minute Feedbacks Form Data',
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14], // Exclude Select (0) and Action (15)
                    format: {
                        body: function(data, row, column, node) {
                            // For the Status column (index 14 in the table, 13 in export due to skipped columns)
                            if (column === 13) {
                                return $(data).find('option:selected').text();
                            }
                            return data;
                        }
                    }
                }
            },
            {
                extend: 'excelHtml5',
                title: 'One Minute Feedbacks Form Data',
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14], // Exclude Select (0) and Action (15)
                    format: {
                        body: function(data, row, column, node) {
                            // For the Status column (index 14 in the table, 13 in export)
                            if (column === 13) {
                                return $(data).find('option:selected').text();
                            }
                            return data;
                        }
                    }
                }
            },
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'TABLOID',
                footer: true,
                title: 'One Minute Feedbacks Form Data',
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14], // Exclude Select (0) and Action (15)
                    format: {
                        body: function(data, row, column, node) {
                            // For the Status column (index 14 in the table, 13 in export)
                            if (column === 13) {
                                return $(data).find('option:selected').text();
                            }
                            return data;
                        }
                    }
                }
            },
            'print'
        ]
    });

        
        $(".status-dropdown").change(function () {
            var id = $(this).data("id");
            var status = $(this).val();
    
            $.ajax({
                url: "/oneMinute/updateStatus/" + id,
                type: "PUT",
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status
                },
                success: function (response) {
                    if (response.success) {
                        toastr.success("Status updated successfully!");
                    } else {
                        toastr.error("Failed to update status.");
                    }
                },
                error: function (xhr) {
                    toastr.error("Something went wrong. Please try again.");
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
@endsection