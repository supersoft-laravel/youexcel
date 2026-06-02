@extends('adminpanel.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
<div class="container-fluid">
<form method="POST" action="{{url('edit').'/'.$Course['id']}}" enctype="multipart/form-data">
                <!-- {{csrf_field()}}    -->
                @csrf


                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Course Name</label>
                            <input type="text" class="form-control" id="coursename" name="coursename" value="{{$Course['coursename']}}">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Course id CRM</label>
                            <input type="text" class="form-control" id="duration" name="duration">
                        </div>
                    </div>


                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Position</label>
                            <input type="text" class="form-control"  value="{{$Course['position']}}" id="position" name="position">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i
                                class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                </div>
            </form>
             <!-- Edit Form End  -->
</div>
</div>
</div>
             @endsection  