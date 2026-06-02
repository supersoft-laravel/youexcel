@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Webinars</h1>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .table{
            overflow-x: auto;
        }
    </style>

    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('webinars.update', $webinar->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="title" id="title" required value="{{ $webinar->title }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" accept="image/*" class="form-control" name="image" id="image">
                            @if($webinar->image)
                                <img src="{{ asset($webinar->image) }}" alt="main image" class="mt-2" width="120">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="date" class="form-label">Date & Time<span style="color: red;">*</span></label>
                            <input type="datetime-local" class="form-control" name="date" id="date" required value="{{ $webinar->date }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="reg_link" class="form-label">Registration Link<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="reg_link" id="reg_link" required value="{{ $webinar->reg_link }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description<span style="color: red;">*</span></label>
                            <textarea class="form-control" name="description" id="description" cols="20" rows="5">{{ $webinar->description }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                </div>

            </form>
        </div>
    </section>
</div>

@endsection
