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
                        <h1 class="text-center">corporate Lead Table</h1>
                        <form action="{{ route('corporate.leadform.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                            <table class="table table-striped table-hover" id="registrationform">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th scope="col">S.NO</th>
                                        <th scope="col">Program Name</th>
                                        <th scope="col">Organization Name</th>
                                        <th scope="col">Approx Nominations</th>
                                        <th scope="col">Focal Contact Name</th>
                                        <th scope="col">Focal Contact Number</th>
                                        <th scope="col">Focal Contact Email</th>
                                        <th scope="col">Remarks</th>
                                        <th scope="col">Submit At</th>
                                        @canany(['delete corporate lead'])
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
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->training_program_name }}</td>
                                    <td>{{ $item->organization_name }}</td>
                                    <td>{{ $item->approx_nominations }}</td>
                                    <td>{{ $item->focal_contact_name }}</td>
                                    <td>{{ $item->focal_contact_number }}</td>
                                    <td>{{ $item->focal_contact_email }}</td>
                                    <td>{{ $item->remarks }}</td>
                                    <td>{{ $item->created_at->format('d M Y h:i A') }}</td>
                                    @canany(['delete corporate lead'])
                                    <td>
                                        <a class="btn btn-danger delete-confirm" href="delete-corporate-form/{{$item['id']}}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                    @endcan
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                             @canany(['delete corporate lead'])
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