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
                        <li class="breadcrumb-item active">View Support</li>
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
                    <h1 class="text-center">View Support</h1>
                    <form action="{{ route('suppot-form.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                    <table class="table table-striped table-hover" id="supportForm">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="selectAll"></th>
                                <th scope="col">S.NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone no</th>
                                <th scope="col">Course</th>
                                <th scope="col">Batch no</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Attachments</th>
                                <th scope="col">DateTime</th>
                                <th scope="col">Form Type</th>
                                @canany(['delete support form'])
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
                                <td>{{$leadform['name']}}</td>
                                <td>{{$leadform['email']}}</td>
                                <td>{{$leadform['contact']}}</td>
                                <td>{{$leadform['course']}}</td>
                                <td>{{$leadform['batchno']}}</td>
                                <td>{{$leadform['comments']}}</td>
                                <td>
                                    @if($leadform['attachments'])
                                    @php
                                    $attachmentCount = count(json_decode($leadform['attachments'], true));
                                    @endphp
                                    <a href="#" data-toggle="modal" data-target="#attachmentsModal{{$leadform['id']}}">
                                        <i class="fas fa-file fa-lg text-primary"></i> {{ $attachmentCount }} attachment{{ $attachmentCount > 1 ? 's' : '' }}
                                    </a>
                                    @else
                                    <i class="fas fa-times text-danger"></i> no attachment
                                    @endif
                                </td>


                                <td>{{$leadform['DateTime']}}</td>
                                <td>Support Form</td>
                                @canany(['delete support form'])
                                <td>
                                    <a class="btn btn-danger delete-confirm" href="view-Suppotform/{{$leadform['id']}}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @canany(['delete support form'])
                    <button type="submit" class="btn btn-danger mt-2" id="bulkDeleteBtn">Delete Selected</button>
                    @endcan
                    </form>
                    @foreach($data as $leadform)
                        @if($leadform['attachments'])
                            <!-- Modal -->
                            <div class="modal fade" id="attachmentsModal{{$leadform['id']}}" tabindex="-1" role="dialog" aria-labelledby="attachmentsModalLabel{{$leadform['id']}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="attachmentsModalLabel{{$leadform['id']}}">Attachments for {{ $leadform['name'] }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-group">
                                                @foreach(json_decode($leadform['attachments'], true) as $file)
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    {{ basename($file) }}
                                                    <a href="{{ $file }}" class="btn btn-sm btn-primary" download>
                                                        <i class="fas fa-download"></i> Download
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
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
        $('#supportForm').DataTable({
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
                    title: 'Support Form Data'
                },
                {
                    extend: 'excelHtml5',
                    title: 'Support Form Data'
                },
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'TABLOID', // TABLOID OR LEGAL
                    footer: true,
                    title: 'Support Form Data'
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