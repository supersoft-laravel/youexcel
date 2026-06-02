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
                        <li class="breadcrumb-item active">View BBSHRRDB Table</li>
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
                        <h1 class="text-center">View BBSHRRDB Table</h1>
                        <form action="{{ route('bbshrrdb.form.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                            <table class="table table-striped table-hover" id="projectEnquiryForm">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th scope="col">S.NO</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Whatsapp</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Submitted At</th>
                                        <th scope="col">Trade Preference</th>
                                        <th scope="col">Last Education</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Preferred Timing</th>
                                        <th scope="col">Comments</th>
                                        @canany(['delete bbshrrdb enquiry form'])
                                            <th scope="col">Action</th>
                                        @endcan
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="ids[]" value="{{ $item['id'] }}" class="rowCheckbox">
                                        </td>
                                    <td>{{$item['id']}}</td>
                                    <td>{{$item['name']}}</td>
                                        <td>{{$item['city']}}</td>
                                    <td>{{$item['whatsapp_no']}}</td>
                                    <td>{{$item['email']}}</td>
                                    <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d M Y, h:i A') }}</td>
                                    <td>{{$item['trade_preference']}}</td>
                                    <td>{{$item['last_education'] ?? 'Null'}}</td>
                                   <td>{{$item['age'] ?? 'Null'}}</td>
                                    <td>
                                        @php
                                            $timings = json_decode($item->preferred_timing, true);
                                        @endphp
                                        @if ($timings)
                                            {{ implode(', ', $timings) }}
                                        @else
                                            No preference selected
                                        @endif
                                    </td>
                                    <td>{{$item['comments']}}</td>
                                    @canany(['delete bbshrrdb enquiry form'])
                                    <td>
                                        <a class="btn btn-danger delete-confirm" href="{{ route('bbshrrdb.form.delete', $item->id) }}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                    @endcan
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @canany(['delete bbshrrdb enquiry form'])
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
    $('#projectEnquiryForm').DataTable( {
        "pageLength": 10, // Show 10 records per page
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ], // dropdown to select how many entries to show
        "responsive": true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            {
          extend: 'csvHtml5',
          title: 'BBSHRRDB Form Data'
            }, 
            {
          extend: 'excelHtml5',
          title: 'BBSHRRDB Form Data'
            },  
            {
              extend: 'pdfHtml5',
   orientation: 'landscape',
   pageSize: 'TABLOID', // TABLOID OR LEGAL
   footer: true,
   title: 'BBSHRRDB Form Data'
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