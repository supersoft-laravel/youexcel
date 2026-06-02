@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View CFMA Recorded</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View CFMA Recorded</li>
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
                        <h1 class="text-center">View CFMA Recorded Table</h1>
                        <table class="table table-striped table-hover" id="cfmarecorded">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Choose Programe</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Father Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Employer Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Cell Number</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">CNIC/National ID </th>
                                    <th scope="col">Qualification</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">DateTime</th>
                                    <th scope="col">Form Type</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $Register)
                                <tr>
                                  <td>{{$Register['id']}}</td>
                                  <td>{{$Register['email']}}</td>
                                  <td>{{$Register['chooseprogramme']}}</td>
                                  <td>{{$Register['name']}}</td>
                                  <td>{{$Register['fathername']}}</td>
                                  <td>{{$Register['address']}}</td>
                                  <td>{{$Register['city']}}</td>
                                  <td>{{$Register['employeename']}}</td>
                                  <td>{{$Register['designation']}}</td>
                                  <td>{{$Register['cellnumber']}}</td>
                                  <td>{{$Register['dateofbirth']}}</td>
                                  <td>{{$Register['cnic']}}</td>
                                  <td>{{$Register['qualification']}}</td>
                                  <td>{{$Register['Image']}}</td>
                                  <td>{{$Register['DateTime']}}</td>
                                  <td>Financial Modeling and Analysis Recorded</td>
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="view-cfma-recorded/{{$Register['id']}}"><i class="fas fa-trash-alt"></i></a>
                                      <!-- <a href="{{url('edit').'/'.$Register['id']}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"><i class="fas fa-edit"></i></a> -->
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



@endsection    