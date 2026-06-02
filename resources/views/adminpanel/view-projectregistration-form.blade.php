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
                        <li class="breadcrumb-item active">View Project Registration Table</li>
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
                        <h1 class="text-center">View Project Registration Table</h1>
                        <form action="{{ route('projectreg.form.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                            <table class="table table-striped table-hover" id="ProjectRegistrationTable">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th>S.NO</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        <th>CNIC</th>
                                        <th>Gender</th>
                                        <th>Present Address</th>
                                        <th>Domicile</th>
                                        <th>Contact No</th>
                                        <th>Whatsapp No</th>
                                        <th>Email</th>
                                        <th>Age</th>
                                        <th>Present District</th>
                                        <th>City</th>
                                        <th>Trade Preference 1</th>
                                        <th>Trade Preference 2</th>
                                        <th>Trade Preference 3</th>
                                        <th>Last Education</th>
                                        <th>Status</th>
                                        <th>Preferred Timing</th>
                                        <th>Comments</th>
                                        <th>Submitted At</th>
                                        @canany(['delete bbshrrdb registration form'])
                                            <th scope="col">Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                            </table>

                            @canany(['delete bbshrrdb registration form'])
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
    var table = $('#ProjectRegistrationTable').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 10,
        lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
        order: [[1, 'desc']],
        ajax: "{{ route('view.projectreg.form') }}", // your ajax route
        columns: [
            { data: 'select', orderable:false, searchable:false },
            { data: 'DT_RowIndex', name: 'id' },
            { data: 'name', name:'name' },
            { data: 'father_name', name:'father_name', defaultContent:'N/A' },
            { data: 'cnic', name:'cnic', defaultContent:'N/A' },
            { data: 'gender', name:'gender', defaultContent:'N/A' },
            { data: 'present_address', name:'present_address', defaultContent:'N/A' },
            { data: 'domicile', name:'domicile', defaultContent:'N/A' },
            { data: 'contact_no', name:'contact_no', defaultContent:'N/A' },
            { data: 'whatsapp_no', name:'whatsapp_no', defaultContent:'N/A' },
            { data: 'email', name:'email', defaultContent:'N/A' },
            { data: 'age', name:'age', defaultContent:'N/A' },
            { data: 'present_district', name:'present_district', defaultContent:'N/A' },
            { data: 'city', name:'city', defaultContent:'N/A' },
            { data: 'trade_pref_1', name:'trade_pref_1' },
            { data: 'trade_pref_2', name:'trade_pref_2' },
            { data: 'trade_pref_3', name:'trade_pref_3' },
            { data: 'last_education', name:'last_education', defaultContent:'N/A' },
            { data: 'status_badge', name:'status', orderable:false, searchable:false },
            { data: 'preferred_timing', name:'preferred_timing' },
            { data: 'comments', name:'comments', defaultContent:'N/A' },
            { data: 'submitted_at', name:'created_at' },
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
    $('#projectRegistrationForm').DataTable( {
        "pageLength": 10, // Show 10 records per page
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ], // dropdown to select how many entries to show
        "responsive": true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'Project Registration Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'Project Registration Form Data'
            },  
            {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'TABLOID', // TABLOID OR LEGAL
   footer: true,
   title: 'Project Registration Form Data'
        }, 
        'print'
        ]
    } );
} );
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