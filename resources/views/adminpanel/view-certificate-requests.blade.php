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
                        <li class="breadcrumb-item active">View Certificate Requests</li>
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
                    <h1 class="text-center">View Certificate Requests</h1>
                    <form action="{{ route('certificate-requests.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                    <table class="table table-striped table-hover" id="certificateRequestForm">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="selectAll"></th>
                                <th scope="col">S.NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Course</th>
                                <th scope="col">Batch no</th>
                                <th scope="col">Delivery Mode</th>
                                <th scope="col">Delivery Option</th>
                                <th scope="col">Payment Screenshot</th>
                                @canany(['delete certificate request form'])
                                    <th scope="col">Action</th>
                                @endcan

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $leadform)
                            <tr>
                                <td>
                                    <input type="checkbox" name="ids[]" value="{{ $leadform['id'] }}" class="rowCheckbox">
                                </td>
                                <td>{{$leadform['id']}}</td>
                                <td>{{$leadform['full_name']}}</td>
                                <td>{{$leadform['email']}}</td>
                                <td>{{$leadform['phone'] ?? 'N/A'}}</td>
                                <td>{{$leadform['course_name']}}</td>
                                <td>{{$leadform['batch_number']}}</td>
                                <td>{{$leadform['delivery_mode']}}</td>
                                <td>{{$leadform['delivery_option']}}</td>
                                <td>
                                    @if($leadform['payment_screenshot'])
                                        <a href="{{ asset($leadform['payment_screenshot']) }}">
                                            <i class="fas fa-file fa-lg text-primary"></i> Payment Screenshot
                                        </a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                @canany(['delete certificate request form'])
                                <td>
                                    <a class="btn btn-danger delete-confirm" href="delete-certificate-request/{{$leadform['id']}}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @canany(['delete certificate request form'])
                    <button type="submit" class="btn btn-danger mt-2" id="bulkDeleteBtn">Delete Selected</button>
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
        $('#certificateRequestForm').DataTable({
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
                    title: 'Certificate Request Form Data'
                },
                {
                    extend: 'excelHtml5',
                    title: 'Certificate Request Form Data'
                },
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'TABLOID', // TABLOID OR LEGAL
                    footer: true,
                    title: 'Certificate Request Form Data'
                },
                'print'
            ]
        });
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const selectAll = document.getElementById("selectAll");
    const checkboxes = document.querySelectorAll(".rowCheckbox");

    // Select/Deselect All
    selectAll.addEventListener("change", function () {
        checkboxes.forEach(checkbox => {
            checkbox.checked = selectAll.checked;
        });
    });

    // Uncheck "Select All" if any checkbox is unchecked
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            if (!this.checked) {
                selectAll.checked = false;
            } else if (document.querySelectorAll(".rowCheckbox:checked").length === checkboxes.length) {
                selectAll.checked = true;
            }
        });
    });
});
</script>
@endsection