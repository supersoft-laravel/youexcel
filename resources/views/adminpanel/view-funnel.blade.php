

@extends('adminpanel.app')

@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Funnel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Funnel</li>
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
                        <h1 class="text-center">View Funnel Table</h1>
                        <table class="table table-striped table-hover" id="careerform">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">CNIC No</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Form Type</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $funnelform)
                                <tr>
                                  <td>{{$funnelform['id']}}</td>
                                  <td>{{$funnelform['name']}}</td>
                                  <td>{{$funnelform['email']}}</td>
                                  <td>{{$funnelform['cnic']}}</td>
                                  <td>{{$funnelform['number']}}</td>
                                  <td>{{$funnelform['address']}}</td>
                                  <td>{{$funnelform['age']}}</td>
                                  <td>{{$funnelform['city']}}</td>
                                  <td>Funnel Form</td>
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="view-funnel/{{$funnelform['id']}}"><i class="fas fa-trash-alt"></i></a>
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
