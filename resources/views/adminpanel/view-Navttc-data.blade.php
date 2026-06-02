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
                            <li class="breadcrumb-item active">View Navttc Form Data</li>
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
                        <h1 class="text-center">View Navttc Form Data</h1>
                        <table class="table table-striped table-hover" id="leadform">
                            <thead>
                            <tr>
                                <th scope="col">S.NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Area</th>
                                <th scope="col">CNIC</th>
                                <th scope="col">Education</th>
                                <th scope="col">Phone no</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                 <th scope="col">Class Timing</th>
                                <th scope="col">Courses Interested(first preference)</th>
                                <th scope="col">Courses Interested(second preference)</th>
                                <th scope="col">Comments</th>
                                <th scope="col">DateTime</th>
                                @canany(['delete navttc registration form'])
                                    <th scope="col">Action</th>
                                @endcan

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $leadform)
                                <tr>
                                    <td>{{$leadform['id']}}</td>
                                    <td>{{$leadform['Name']}}</td>
                                    
                                    <td>{{$leadform['gender']}}</td>
                                    <td>{{$leadform['area']}}</td>
                                    
                                    <td>{{$leadform['cnic']}}</td>
                                    <td>{{$leadform['education']}}</td>
                                    <td>{{$leadform['Phone']}}</td>
                                    <td>{{$leadform['Email']}}</td>
                                    <td>{{$leadform['address']}}</td>
                                    <td>{{$leadform['city']}}</td>
                                     <td>{{$leadform['class_timing']}}</td>
                                    <td>{{$leadform['CoursesIntrested']}}</td>
                                    <td>{{$leadform['coursesintrestedsecond']}}</td>
                                    <td>{{$leadform['Comments']}}</td>
                                    <td>{{$leadform['DateTime']}}</td>
                                    @canany(['delete navttc registration form'])
                                    <td>
                                        <a class="btn btn-danger delete-confirm" href="view-Leadform/{{$leadform['id']}}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                    @endcan
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



@endsection
