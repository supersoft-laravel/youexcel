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
                        <li class="breadcrumb-item active">View Demo Forms Table</li>
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
                        <h1 class="text-center">View Demo Forms Table</h1>
                        <div class="mb-3">
                            <a href="{{ route('export.demo.csv') }}" class="btn btn-success">Download CSV</a>
                            <a href="{{ route('export.demo.excel') }}" class="btn btn-info">Download Excel</a>
                        </div>
                        <form action="{{ route('demo-form.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                            <table class="table table-striped table-hover" id="DemoConfirmTable">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th>S.NO</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Whatsapp No</th>
                                        <th>Demo</th>
                                        <th>Mode of Attend</th>
                                        <th>Submitted At</th>
                                        @canany(['delete demo confirmation form'])
                                            <th scope="col">Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                            </table>

                            @canany(['delete demo confirmation form'])
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
<script src="{{asset('admin-panel/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(function () {
    var table = $('#DemoConfirmTable').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 10,
        lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
        order: [[1, 'desc']], // order by S.NO
        ajax: "{{ route('view.demo.form') }}", // your ajax route
        columns: [
            { data: 'select', orderable:false, searchable:false },
            { data: 'DT_RowIndex', name: 'id' },
            { data: 'name', name:'name' },
            { data: 'email', name:'email' },
            { data: 'whatsapp', name:'whatsapp' },
            { data: 'demo', name:'demo' },
            { data: 'mode_of_attend', name:'mode_of_attend', defaultContent:'Null' },
            { data: 'created_at', name:'created_at', render: function(data){ return new Date(data).toLocaleDateString('en-GB', { day:'2-digit', month:'long', year:'numeric' }); } },
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