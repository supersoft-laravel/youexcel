@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Feedback</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Feedback</li>
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
                        <h1 class="text-center">View Feedback Table</h1>
                        <table class="table table-striped table-hover" id="feedbackform">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Your Course</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Question1</th>
                                    <th scope="col">Question2</th>
                                    <th scope="col">Question3</th>
                                    <th scope="col">Question4</th>
                                    <th scope="col">Question5</th>
                                    <th scope="col">Question6</th>
                                    <th scope="col">Question7 </th>
                                    <th scope="col">Question8</th>
                                    <th scope="col">Question9</th>
                                    <th scope="col">Question10</th>
                                    <th scope="col">Social Media</th>
                                    <th scope="col">Future Courses</th>
                                    <th scope="col">Feedback about facilitator</th>
                                    <th scope="col">DateTime</th>
                                    <th scope="col">Form Type</th>
                                    @canany(['delete feedback form'])
                                        <th scope="col">Action</th>
                                    @endcan
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $Feedbacks)
                                <tr>
                                  <td>{{$Feedbacks['id']}}</td>
                                  <td>{{$Feedbacks['Email']}}</td>
                                  <td>{{$Feedbacks['YourCourse']}}</td>
                                  <td>{{$Feedbacks['Fullname']}}</td>
                                  <td>{{$Feedbacks['Question1']}}</td>
                                  <td>{{$Feedbacks['Question2']}}</td>
                                  <td>{{$Feedbacks['Question3']}}</td>
                                  <td>{{$Feedbacks['Question4']}}</td>
                                  <td>{{$Feedbacks['Question5']}}</td>
                                  <td>{{$Feedbacks['Question6']}}</td>
                                  <td>{{$Feedbacks['Question7']}}</td>
                                  <td>{{$Feedbacks['Question8']}}</td>
                                  <td>{{$Feedbacks['Question9']}}</td>
                                  <td>{{$Feedbacks['Question10']}}</td>
                                  <td>{{$Feedbacks['SocialmediaAnswer']}}</td>
                                  <td>{{$Feedbacks['PersonallivesAnswer']}}</td>
                                  <td>{{$Feedbacks['PowerBIAnswer']}}</td>
                                  <td>{{$Feedbacks['DateTime']}}</td>
                                  <td>Feedback Form</td>
                                  @canany(['delete feedback form'])
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="view-feedback/{{$Feedbacks['id']}}"><i class="fas fa-trash-alt"></i></a>               
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