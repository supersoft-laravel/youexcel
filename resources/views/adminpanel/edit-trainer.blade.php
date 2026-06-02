@extends('adminpanel.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
<div class="container-fluid">
<form method="post" action="{{url('edit-trainer').'/'.$Trainer['id']}}" enctype="multipart/form-data">
                <!-- {{csrf_field()}}    -->
                @csrf
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">image</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{$Trainer['image']}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$Trainer['name']}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Trainer Name</label>
                            <input type="text" class="form-control" id="trainerename" name="trainerename" value="{{$Trainer['trainername']}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Trainer Studies</label>
                            <input type="text" class="form-control" id="trainerstudies" name="trainerstudies" value="{{$Trainer['trainerstudies']}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Profession</label>
                            <input type="text" class="form-control" id="profession" name="profession" value="{{$Trainer['profession']}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Descriptions</label>
                            <textarea class="form-control" id="description" name="description" rows="3" value="">{{$Trainer['description']}}</textarea>
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