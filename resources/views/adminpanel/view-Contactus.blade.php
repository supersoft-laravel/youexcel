@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Contact us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Contact us</li>
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
                    <div class="col-lg-12" style="overflow-x: scroll;">
                        <h1 class="text-center">View Contact us Table</h1>
                        <form action="{{ route('contact-us.bulkDelete') }}" method="POST" id="bulkDeleteForm">
                            @csrf
                            @method('DELETE')
                        <table class="table table-striped table-hover" id="contactform">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectAll"></th>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone no</th>
                                    <th scope="col">Availability</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">DateTime</th>
                                    <th scope="col">Form Type</th>
                                    @canany(['delete get in touch form'])
                                        <th scope="col">Action</th>
                                    @endcan
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $contactus)
                                <tr>
                                    <td>
                                    <input type="checkbox" name="ids[]" value="{{ $contactus['id'] }}" class="rowCheckbox">
                                </td>
                                  <td>{{$contactus['id']}}</td>
                                  <td>{{$contactus['Fullname']}}</td>
                                  <td>{{$contactus['Email']}}</td>
                                  <td>{{$contactus['Phoneno']}}</td>
                                  <td>{{$contactus['DateTimeform']}}</td>
                                  <td>{{$contactus['Subject']}}</td>
                                  <td>{{$contactus['Message']}}</td>
                                  <td>{{$contactus['DateTime']}}</td>
                                  <td>Contactus Form</td>
                                  @canany(['delete get in touch form'])
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="view-Contactus/{{$contactus['id']}}"><i class="fas fa-trash-alt"></i></a>
                                  </td>
                                  @endcan
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @canany(['delete get in touch form'])
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