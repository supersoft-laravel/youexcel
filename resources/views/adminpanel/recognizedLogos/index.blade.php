@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Recognized Logos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Recognized Logos</li>
                    </ol>
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
            @canany(['create recognized logo'])
            <form method="POST" action="{{ route('recognized-logos.store') }}" enctype="multipart/form-data">
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
                            <label for="image" class="form-label">Logo <small>(500 x 500)</small><span style="color: red;">*</span></label>
                            <input type="file" accept="image/*" class="form-control" name="image" id="image" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description<span style="color: red;">*</span></label>
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                    <div class="col-lg-3">
                    <a class="btn btn-warning mx-2" href="{{ route('recognized-logos.shuffle-show') }}">Shuffle Logos</a>
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
                        <th scope="col">Logo</th>
                        <th scope="col">Status</th>
                        @canany(['delete recognized logo', 'update recognized logo'])
                            <th scope="col">{{ __('Action') }}</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach($recognizedLogos as $index => $recognizedLogo)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $recognizedLogo->title }}</td>
                        <td>
                            @if ($recognizedLogo->image)
                                <img style="height: 40px;" src="{{ asset($recognizedLogo->image) }}" alt="Image">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($recognizedLogo->is_active == '1')
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        @canany(['delete recognized logo', 'update recognized logo'])
                        <td class="d-flex gap-2">
                            @canany(['update recognized logo'])
                            <a href="{{ route('recognized-logos.status.update', $recognizedLogo->id) }}"
                                class="btn btn-danger btn-sm mx-2">
                                @if ($recognizedLogo->is_active == '1')
                                    Deactivate
                                @else
                                    Activate
                                @endif
                            </a>
                            <a href="{{ route('recognized-logos.edit', $recognizedLogo->id) }}"
                                class="btn btn-success btn-sm mx-2">
                                Edit
                            </a>
                            @endcan
                            @canany(['delete recognized logo'])
                            <form action="{{ route('recognized-logos.destroy', $recognizedLogo->id) }}" 
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this recognized logo?');">
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
