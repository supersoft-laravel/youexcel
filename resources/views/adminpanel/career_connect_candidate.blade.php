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
                        <li class="breadcrumb-item active">Career Connect Candidate</li>
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
                    <h1 class="text-center">Career Connect Candidates</h1>
                    <form action="{{ route('admin.career-connect-candidates.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                    <table class="table table-striped table-hover" id="certificateRequestForm">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="selectAll"></th>
                                <th scope="col">Ref. No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Experience</th>
                                <th scope="col">Expertise</th>
                                <th scope="col">Status</th>
                                @canany(['update career connect', 'delete career connect'])
                                    <th scope="col">Action</th>
                                @endcan

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($candidates as $candidate)
                            <tr>
                                <td>
                                    <input type="checkbox" name="ids[]" value="{{ $candidate['id'] }}" class="rowCheckbox">
                                </td>
                                <td>{{ $candidate['ref_no'] }}</td>
                                <td>{{ $candidate['name'] ?? 'N/A' }}</td>
                                <td>{{ $candidate['phone'] ?? 'N/A' }}</td>
                                <td>{{ $candidate['email'] ?? 'N/A' }}</td>
                                <td>{{ $candidate['gender'] ?? 'N/A' }}</td>
                                <td>{{ $candidate['experience'] ?? 'N/A' }}</td>
                                <td>
                                    @php
                                        $expertiseArray = json_decode($candidate->expertise, true);
                                    @endphp
                                    {{ !empty($expertiseArray) ? implode(', ', $expertiseArray) : 'N/A' }}
                                </td>
                                <td>
                                    @if($candidate->status == 'pending')
                                        <span class="badge rounded-pill badge-warning">Pending</span>
                                    @elseif($candidate->status == 'approved')
                                        <span class="badge rounded-pill badge-success">Approved</span>
                                    @elseif($candidate->status == 'disapproved')
                                        <span class="badge rounded-pill badge-danger">Disapproved</span>
                                    @endif
                                </td>
                                @canany(['update career connect', 'delete career connect'])
                                <td class="d-inline-flex gap-1">
                                    @canany(['update career connect'])
                                    @if($candidate->status == 'pending')
                                        <a href="{{ route('admin.career-connect-candidate.approve', $candidate->id) }}" 
                                           class="btn btn-success btn-sm mx-2" style="white-space: nowrap;">
                                            <i class="fas fa-check"></i> Approve
                                        </a>
                                        <a href="{{ route('admin.career-connect-candidate.disapprove', $candidate->id) }}" 
                                           class="btn btn-warning btn-sm text-white mx-2" style="white-space: nowrap;">
                                            <i class="fas fa-times"></i> Disapprove
                                        </a>
                                    @endif
                    
                                    @if($candidate->status == 'approved')
                                        <a href="{{ route('admin.career-connect-candidate.disapprove', $candidate->id) }}" 
                                           class="btn btn-warning btn-sm text-white mx-2" style="white-space: nowrap;">
                                            <i class="fas fa-times"></i> Disapprove
                                        </a>
                                    @endif
                    
                                    @if($candidate->status == 'disapproved')
                                        <a href="{{ route('admin.career-connect-candidate.approve', $candidate->id) }}" 
                                           class="btn btn-success btn-sm mx-2" style="white-space: nowrap;">
                                            <i class="fas fa-check"></i> Approve
                                        </a>
                                    @endif
                                    <a href="{{ route('admin.career-connect-candidate.edit', $candidate->id) }}" class="btn btn-primary btn-sm mx-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    @endcan
                                
                                    @canany(['delete career connect'])
                                    <a href="{{ route('admin.career-connect-candidate.delete', $candidate->id) }}" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    @endcan
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @canany(['delete career connect'])
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
                    title: 'Career Connect Candidate Data'
                },
                {
                    extend: 'excelHtml5',
                    title: 'Career Connect Candidate Data'
                },
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'TABLOID', // TABLOID OR LEGAL
                    footer: true,
                    title: 'Career Connect Candidate Data'
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