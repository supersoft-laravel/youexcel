@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Resource Popup</h1>
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

            <form method="POST" action="{{ route('resources.update', $resource->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="course_id">Course</label><span class="text-danger">*</span>
                        <select name="course_id" id="course_id" class="form-control @error('course_id') is-invalid @enderror" required>
                            <option value="" selected disabled>Select Course</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}" {{ old('course_id', $resource->course_id) == $course->id ? 'selected' : '' }}>
                                    {{ $course->coursename }}
                                </option>
                            @endforeach
                        </select>
                        @error('course_id') 
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" accept="image/*" class="form-control" name="image" id="image">
                            @if($resource->image_path)
                                <img src="{{ asset($resource->image_path) }}" alt="main image" class="mt-2" width="120">
                            @endif
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
