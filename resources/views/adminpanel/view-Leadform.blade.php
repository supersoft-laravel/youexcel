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
                        <li class="breadcrumb-item active">View Lead Table</li>
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
                        <h1 class="text-center">View Lead Table</h1>
                        <div class="mb-3">
                            <a href="{{ route('export.leadForm.csv') }}" class="btn btn-success">Download CSV</a>
                            <a href="{{ route('export.leadForm.excel') }}" class="btn btn-info">Download Excel</a>
                        </div>
                        <form action="{{ route('lead.multiDelete') }}" method="POST">
                        @csrf
                            <table class="table table-striped table-hover" id="LeadFormTable">
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>S.NO</th>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Whatsapp No</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>CNIC</th>
                                        <th>Courses Intrested</th>
                                        <th>Comments</th>
                                        <th>DateTime</th>
                                        <th>Form Type</th>
                                        @canany(['delete lead form'])
                                            <th scope="col">Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                            </table>
                            @canany(['delete lead form'])
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
$(function () {
    $('#LeadFormTable').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 10,
        lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
        order: [[1, 'desc']], // order by id (S.NO)
        ajax: "{{ route('view.Leadform') }}", // your ajax route
        columns: [
            { data: 'select', orderable:false, searchable:false },
            { data: 'id', name: 'id' },
            { data: 'Name', name:'Name' },
            { data: 'city', name:'city' },
            { data: 'whatsapp', name:'whatsapp' },
            { data: 'Phone', name:'Phone' },
            { data: 'Email', name:'Email' },
            { data: 'cnic', name:'cnic' },
            { data: 'CoursesIntrested', name:'CoursesIntrested' },
            { data: 'Comments', name:'Comments' },
            { data: 'DateTime', name:'DateTime' },
            { data: 'form_type', defaultContent:'Lead Form' },
            { data: 'action', orderable:false, searchable:false }
        ],
        dom: 'Bflrtip', // buttons, filter, length, table, info, pagination
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
    });
});
</script>



@endsection    