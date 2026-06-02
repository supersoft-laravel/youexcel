@extends('adminpanel.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">View Free of Cost Application From</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">View Free of Cost Application From</li>
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
                        <h1 class="text-center">View Free of Cost Application From Table</h1>
                        <table class="table table-striped table-hover" id="feedbackform">
                            <thead>
                            <tr>
                                <th scope="col">S.NO</th>
                                 <th scope="col">Name</th>
                                <th scope="col">course(First preference)</th>
                                <th scope="col">course(Second preference)</th>
                                <th scope="col">Class timing</th>
                                <th scope="col">Applicant CNIC</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Father CNIC</th>
                                <th scope="col">Father Designation</th>
                                <th scope="col">Father monthly Income</th>
                                <th scope="col">Job Experience</th>
                                <th scope="col">Country</th>
                                <th scope="col">Present City</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Domocile</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Age</th>
                                <th scope="col">Mobile No</th>
                                <th scope="col">Current Address</th>
                                <th scope="col">Permanent Address</th>
                                <th scope="col">Education</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$Feedbacks)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$Feedbacks['name']}}</td>
                                    <td>{{$Feedbacks['course_first']}}</td>
                                    <td>{{$Feedbacks['course_second']}}</td>
                                     <td>{{$Feedbacks['class_timing']}}</td>
                                    <td>{{$Feedbacks['cnic']}}</td>
                                    <td>{{$Feedbacks['fathername']}}</td>
                                    <td>{{$Feedbacks['fcnic']}}</td>
                                    <td>{{$Feedbacks['fdesignation']}}</td>
                                    <td>{{$Feedbacks['fmonthlyincome']}}</td>
                                    <td>{{$Feedbacks['jobexperience']}}</td>
                                    <td>{{$Feedbacks['country']}}</td>
                                    <td>{{$Feedbacks['city']}}</td>
                                    <td>{{$Feedbacks['gender']}}</td>
                                    <td>{{$Feedbacks['domocile']}}</td>
                                    <td>{{$Feedbacks['email']}}</td>
                                    <td>{{$Feedbacks['dob']}}</td>
                                    <td>{{$Feedbacks['age']}}</td>
                                    <td>{{$Feedbacks['mobileno']}}</td>
                                    <td>{{$Feedbacks['caddress']}}</td>
                                    <td>{{$Feedbacks['paddress']}}</td>
                                    <td>{{$Feedbacks['education']}}</td>
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
