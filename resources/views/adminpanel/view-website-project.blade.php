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
                        <li class="breadcrumb-item active">View Project Table</li>
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
                        <h1 class="text-center">NAVTTC Enquiry Form</h1>
                        <div class="mb-3">
                            <a href="{{ route('export.project.csv') }}" class="btn btn-success">Download CSV</a>
                            <a href="{{ route('export.project.excel') }}" class="btn btn-info">Download Excel</a>
                        </div>
                        <form action="{{ route('careers.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                            <table class="table table-striped table-hover" id="WebsiteProjectTable">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th>S.NO</th>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Whatsapp No</th>
                                        <th>Email</th>
                                        <th>Submitted At</th>
                                        <th>Trait Preference</th>
                                        <th>Last Education</th>
                                        <th>Age</th>
                                        <th>Preferred Timing</th>
                                        <th>Comments</th>
                                        <th>Form Type</th>
                                        @canany(['delete navttc enquiry form'])
                                            <th scope="col">Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                            </table>
                            @canany(['delete navttc enquiry form'])
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
$(function () {
    var table = $('#WebsiteProjectTable').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 10,
        lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
        order: [[1, 'desc']], // order by S.NO
        ajax: "{{ route('view.project.form') }}", // your ajax route
        columns: [
            { data: 'select', orderable:false, searchable:false },
            { data: 'DT_RowIndex', name: 'id' },
            { data: 'name', name:'name' },
            { data: 'city', name:'city' },
            { data: 'whatsapp', name:'whatsapp' },
            { data: 'email', name:'email' },
            { data: 'submitted_at', name:'created_at' },
            { data: 'project_name', name:'project_name' },
            { data: 'project_name_2', name:'project_name_2', defaultContent:'Null' },
            { data: 'age', name:'age', defaultContent:'Null' },
            { data: 'preferred_timing', name:'preferred_timing' },
            { data: 'comments', name:'comments' },
            { data: 'form_type', name:'form_type' },
            { data: 'action', orderable:false, searchable:false }
        ],
        dom: 'Bflrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
    });

    // Select/Deselect all checkboxes
    $('#selectAll').on('click', function(){
        $('.rowCheckbox').prop('checked', this.checked);
    });
});
</script>
    <script>
  $(document).ready(function() {
    $('#projectEnquiryForm').DataTable( {
        "pageLength": 10, // Show 10 records per page
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ], // dropdown to select how many entries to show
        "responsive": true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Project Inquiry Leads'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Project Inquiry Leads'
            },  
            {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'TABLOID', // TABLOID OR LEGAL
   footer: true,
   title: 'Project Inquiry Leads'
        }, 
        'print'
        ]
    } );
} );
</script>

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