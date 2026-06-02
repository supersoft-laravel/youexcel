

@extends('adminpanel.app')

@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Book-Appointment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Book-Appointment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="overflow-x: scroll;">
                        <h1 class="text-center">View Book-Appointment Table</h1>
                        <table class="table table-striped table-hover" id="appointmentform">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Form Type</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($data as $freedemo)
                                <tr>
                                  <td>{{$freedemo['id']}}</td>
                                  <td>{{$freedemo['Name']}}</td>
                                  <td>{{$freedemo['Email']}}</td>
                                  <td>{{$freedemo['Course']}}</td>
                                  <td>{{$freedemo['Date']}}</td>
                                  <td>{{$freedemo['Time']}}</td>
                                  <td>Book Appointment Form</td>
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="view-freedemo/{{$freedemo['id']}}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--------------- table end  --------------->         
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<body>
<script>
    $(document).ready(function() {
        $('a[href="view-careers"]').addClass("active");
    });
    </script>
</body>

@endsection    
