@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Webinars</h1>
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

            @canany(['create webinar'])
            <form method="POST" action="{{ route('webinars.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image<span style="color: red;">*</span></label>
                            <input type="file" accept="image/*" class="form-control" name="image" id="image" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="date" class="form-label">
                                Date & Time <span style="color: red;">*</span>
                            </label>
                    
                            <input type="datetime-local" class="form-control" name="date" id="date" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="reg_link" class="form-label">Registration Link<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="reg_link" id="reg_link" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description<span style="color: red;">*</span></label>
                            <textarea class="form-control" name="description" id="description" cols="20" rows="5"></textarea>
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
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        @canany(['delete webinar', 'update webinar'])
                            <th scope="col">{{ __('Action') }}</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach($webinars as $index => $webinar)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $webinar->title }}</td>
                        <td>
                            @if ($webinar->image)
                                <img style="height: 20px;" src="{{ asset($webinar->image) }}" alt="Image">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $webinar->date->format('d M Y g:i A') }}</td>
                        <td>
                            @if($webinar->is_active == 'active')
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        @canany(['delete webinar', 'update webinar'])
                        <td class="d-flex justify-content-between">
                            @canany(['update webinar'])
                            <a href="{{ route('webinars.status.update', $webinar->id) }}"
                                class="btn btn-danger btn-sm">
                                @if ($webinar->is_active == 'active')
                                    Deactivate
                                @else
                                    Activate
                                @endif
                            </a>
                            <a href="{{ route('webinars.edit', $webinar->id) }}"
                                class="btn btn-success btn-sm">
                                Edit
                            </a>
                            @endcan
                            @canany(['delete webinar'])
                            <form action="{{ route('webinars.destroy', $webinar->id) }}" 
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this webinar?');">
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
