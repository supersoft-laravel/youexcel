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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"  style="overflow-x: scroll; ">
                        <h1 class="text-center">View Lead Table</h1>
                        <form action="{{ route('navttcform.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                        <table class="table table-striped table-hover" id="leadform">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectAll"></th>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Name</th>
                                     <th scope="col">city</th>
                                    
                                    <th scope="col">Contact no</th>
                                    <th scope="col">Email</th>
                                     <th scope="col">CNIC</th>
                                     <th scope="col">Address</th>
                                     <th scope="col">Education</th>
                                    <th scope="col">Courses Intrested</th>
                                     <th scope="col">Courses Intrested(Second)</th>
                                    <th scope="col">Courses Intrested(Third)</th>

                                    <th scope="col">Comments</th>
                                    <th scope="col">DateTime</th>
                                    <th scope="col">Form Type</th>
                                    @canany(['delete navttc registration form'])
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
                                       <td>{{$leadform['city']}}</td>
                                  <td>{{$leadform['phone']}}</td>
                                  <td>{{$leadform['email']}}</td>
                                   <td>{{$leadform['cnic']}}</td>
                                   <td>{{$leadform['address']}}</td>
                                   <td>{{$leadform['education']}}</td>
                                  <td>{{$leadform['CoursesIntrested']}}</td>
                                     <td>{{$leadform['CoursesIntrested']}}</td>
                                        <td>{{$leadform['CoursesIntrested']}}</td>
                                  <td>{{$leadform['class_timing']}}</td>
                                  <td>{{$leadform['date_time']}}</td>
                                  <td>Lead Form</td>
                                  @canany(['delete navttc registration form'])
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="view-Leadform/{{$leadform['id']}}"><i class="fas fa-trash-alt"></i></a>
                                  </td>
                                  @endcan
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @canany(['delete navttc registration form'])
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