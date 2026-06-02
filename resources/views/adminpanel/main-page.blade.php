@extends('adminpanel.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if(auth()->user()->hasRole(['admin', 'super-admin']))
                    <!-- Small boxes (Stat box) - Only for admin/super-admin -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>
                                        <div class="number"><strong>{{ $countt }}</strong></div>
                                    </h3>

                                    <p>Lead Form Data</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="view-Leadform" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- Assest-->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box" style="background-color: #BD0DFF;">
                                <div class="inner">
                                    <h3>
                                        <div class="text-white"><strong>{{ $assetscount }}</strong></div>
                                    </h3>

                                    <p class="text-white">Assesment TNA 2025</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="View-assests-table" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $register }}<sup style="font-size: 20px"></sup></h3>

                                    <p>Registration Form Data</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="view-registered" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3 class="text-white">{{ $feedback }}</h3>

                                    <p class="text-white">Feedback Form Data</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="view-feedback" class="small-box-footer" style="color: white!important;">More info
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>{{ $career }}</h3>

                                    <p>Careers Form Data</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="view-careers" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-dark">
                                <div class="inner">
                                    <h3>{{ $contact }}</h3>

                                    <p>Contactus Form Data</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="view-Contactus" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box" style="background-color: #FF7F50;">
                                <div class="inner">
                                    <h3 class="text-white">{{ $kamyabjawan }}</h3>

                                    <p class="text-white">Kamyab jawan Form Data</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="View-kamyabjawan-form" class="small-box-footer text-white">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box" style="background-color: #F8A223;">
                                <div class="inner">
                                    <h3 class="text-white">{{ $funnelform }}</h3>

                                    <p class="text-white">Funnel Form Form Data</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="view-funnel" class="small-box-footer text-white">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box" style="background-color: #BD0DFF;">
                                <div class="inner">
                                    <h3 class="text-white">{{ $bookappointment }}</h3>

                                    <p class="text-white">Book Appointment Form Data</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="view-freedemo" class="small-box-footer text-white">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box" style="background-color: #5CCBC9;">
                                <div class="inner">
                                    <h3 class="text-white">{{ $cfmarecorded }}</h3>

                                    <p class="text-white">CFMA Recorded Form Data</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="view-cfma-recorded" class="small-box-footer text-white">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                @else
                    <!-- Welcome Note for non-admin users -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Welcome, {{ auth()->user()->name }}!</h3>
                                    <p class="lead">Thank you for logging into the dashboard.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- Main row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

