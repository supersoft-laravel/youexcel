@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Popup Resources</h1>
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
            @canany(['create popup'])
            <form method="POST" action="{{ route('resources.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="course_id">Course</label><span class="text-danger">*</span>
                        <select name="course_id" id="course_id" class="form-control @error('course_id') is-invalid @enderror" required>
                            <option value="" selected disabled>Select Course</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
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
                    <div class="form-group col-lg-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image<span style="color: red;">*</span></label>
                            <input type="file" accept="image/*" class="form-control" name="image" id="image" required>
                            @error('image') 
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                </div>

            </form>
            @endcan
            <!-- form End  -->
            
            <hr class="my-5">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Course</th>
                        <th scope="col">Image</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        @canany(['update popup', 'delete popup'])
                            <th scope="col">Action</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach($resources as $index => $resource)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $resource->title }}</td>
                        <td>
                            @if ($resource->image_path)
                                <img style="height: 20px;" src="{{ asset($resource->image_path) }}" alt="Image">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $resource->created_at->format('d M Y g:i A') }}</td>
                        <td>
                            @if($resource->status == '1')
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        @canany(['update popup', 'delete popup'])
                        <td class="d-flex justify-content-between">
                            @canany(['update popup'])
                            <a href="{{ route('resources.status.update', $resource->id) }}"
                                class="btn btn-danger btn-sm">
                                @if ($resource->status == '1')
                                    Deactivate
                                @else
                                    Activate
                                @endif
                            </a>
                            <a href="{{ route('resources.edit', $resource->id) }}"
                                class="btn btn-success btn-sm">
                                Edit
                            </a>
                            @endcan
                            @canany(['delete popup'])
                            <form action="{{ route('resources.destroy', $resource->id) }}" 
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this resource?');">
                                @method('DELETE')
                                @csrf
                            
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash fa-md"></i>
                                </button>
                            </form>
                            @endcan
                        </td>
                        @endcan

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>

@endsection
