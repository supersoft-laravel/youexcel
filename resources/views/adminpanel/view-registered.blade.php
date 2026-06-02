@extends('adminpanel.app')

@section('content')


    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">View Registered</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">View Registered</li>
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
                        <h1 class="text-center">View Registration Table</h1>
                        <div class="mb-3">
                            <a href="{{ route('export.registers.csv') }}" class="btn btn-success">Download CSV</a>
                            <a href="{{ route('export.registers.excel') }}" class="btn btn-info">Download Excel</a>
                        </div>

                        <form action="{{ route('items.multiDelete') }}" method="POST">
                        @csrf
                            <table class="table table-striped table-hover" id="registrationform333">
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>S.NO</th>
                                        <th>Email</th>
                                        <th>Reg. Type</th>
                                        <th>Choose Programe</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Employer Name</th>
                                        <th>Designation</th>
                                        <th>Cell Number</th>
                                        <th>Date of Birth</th>
                                        <th>CNIC/National ID</th>
                                        <th>Qualification</th>
                                        <th>Image</th>
                                        <th>CNIC Front</th>
                                        <th>CNIC Back</th>
                                        <th>DateTime</th>
                                        <th>Form Type</th>
                                        @canany(['delete registration form'])
                                            <th scope="col">Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                            </table>
                            @canany(['delete registration form'])
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
    <script src="{{asset('admin-panel/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(function () {
    $('#registrationform333').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 10, // default rows
        lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]], // rows options dropdown
        order: [[1, 'desc']], // order by id, not DT_RowIndex
        ajax: "{{ route('view.registered') }}",
        columns: [
            { data: 'select', orderable:false, searchable:false },
            { data: 'id', name: 'id' }, // S.NO now showing ID
            { data: 'email', name:'email' },
            { data: 'registration_type', name:'registration_type' },
            { data: 'chooseprogramme', name:'chooseprogramme' },
            { data: 'name', name:'name' },
            { data: 'fathername', name:'fathername' },
            { data: 'address', name:'address' },
            { data: 'city', name:'city' },
            { data: 'employeename', name:'employeename' },
            { data: 'designation', name:'designation' },
            { data: 'cellnumber', name:'cellnumber' },
            { data: 'dateofbirth', name:'dateofbirth' },
            { data: 'cnic', name:'cnic' },
            { data: 'qualification', name:'qualification' },
            { data: 'image', orderable:false, searchable:false },
            { data: 'cnic_front', orderable:false, searchable:false },
            { data: 'cnic_back', orderable:false, searchable:false },
            { data: 'DateTime', name:'DateTime' },
            { data: 'form_type', defaultContent:'Registration Form' },
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
});
</script>

@endsection


