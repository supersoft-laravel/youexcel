@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Assesment TNA 2025</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <h1 class="text-center">View Assesment TNA 2025 Table</h1>
                        <table class="table table-striped table-hover" id="assesment">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact No</th>
                                    <th scope="col">Are you a</th>
                                    <th scope="col">Preferred Training Topics</th>
                                    <th scope="col">Preferred Learning Format</th>
                                    <th scope="col">Duration Preference for Training</th>
                                    <th scope="col">Remarks</th>
                                  
                                    <!--<th scope="col">Action</th>-->
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $Register)
                                <tr>
                                  <td>{{$Register['id']}}</td>
                                  <td>{{$Register['name']}}</td>
                                  <td>{{$Register['contact']}}</td>
                                  <td>{{$Register['member']}}</td>
                                  <td>{{$Register['topic']}}</td>
                                  <td>{{$Register['format']}}</td>
                                  <td>{{$Register['duration']}}</td>
                                  <td>{{$Register['remark']}}</td>
                              

                                  <!--<td>Kamyab-jawan Form</td>-->
                                  <!--<td>-->
                                  <!--    <a class="btn btn-danger delete-confirm" href="View-kamyabjawan-form/{{$Register['id']}}"><i class="fas fa-trash-alt"></i></a>-->
                                      <!-- <a href="{{url('edit').'/'.$Register['id']}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"><i class="fas fa-edit"></i></a> -->
                                  <!--  </td>-->
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